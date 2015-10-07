<?php
final class contact
{

	public function __construct()
	{
		global $api;
	}

	public function init()
	{

	}

	// GET DATA

	public function getData()
	{
		global $api;

		$str = file_get_contents($api["local"]."modules/contact/json/contact.json");
		$json = json_decode($str, true);

		echo Common::json($json);
		return;
	}

	// SEND INQUIRY FUNCTIONS

	public function sendInquiry()
	{
		$postdata = file_get_contents("php://input");
		$request = json_decode($postdata);

		$inquiryInfo 					= array();
		$inquiryInfo['name']            = $request->name;
		$inquiryInfo['email']           = $request->email;
		$inquiryInfo['company']         = $request->company;
		$inquiryInfo['phone']           = $request->phone;
		$inquiryInfo['projectType']     = implode(",", $request->selectedStepOne);
		$inquiryInfo['serviceType']     = implode(",", $request->selectedStepTwo);
		$inquiryInfo['deadline']        = $request->date;
		$inquiryInfo['budget']          = $request->budget;
		$inquiryInfo['competitors']     = $request->competitors;
		$inquiryInfo['additionalInfo']  = $request->additionalInfo;
		$inquiryInfo['howDidYouFindMe'] = $request->howYouFindUs;

		if(strlen($inquiryInfo['projectType']) == 0){
			$response['error'][]   = 'Please select your Project Type!';
		}

		if(strlen($inquiryInfo['serviceType']) == 0){
			$response['error'][]   = 'Please select Service Type you need!';
		}

		if($inquiryInfo['deadline'] == ""){
			$response['error'][]   = 'Please select a Deadline of your project!';
		}

		if($inquiryInfo['budget'] == ""){
			$response['error'][]   = 'Please select your Budget!';
		}

		if(strlen($inquiryInfo['name']) <= 2){
			$response['error'][]   = 'Please fill your Name!';
		}

		if(!preg_match("/^([a-z0-9+_-]+)(.[a-z0-9+_-]+)*@([a-z0-9-]+.)+[a-z]{2,}$/i", $inquiryInfo['email'])){
			$response['error'][]   = 'Please write a valid E-mail!';
		}

		if($inquiryInfo['howDidYouFindMe'] == ""){
			$response['error'][]   = 'Please select how did you find us!';
		}

		if( count($response['error']) != 0 ){
			// VALIDATION FAILED
			$response['success'] = 'false';

			echo Common::json($response);
			return;
		}else{
			// VALIDATION SUCCESS
			$response['success'] = 'true';

			$this->recordInquiry($inquiryInfo, $response);
		}
	}

	public function recordInquiry($inquiryInfo, $response)
	{
		global $db, $api;

		$deadline = strtotime($inquiryInfo['deadline']);
		if($deadline != false){
			$deadline = date('Y-m-d', $deadline);
		}

		$insertQuery = "INSERT INTO `inquiries` SET
                `name`            = '".mres($inquiryInfo['name'])."',
                `email`           = '".mres($inquiryInfo['email'])."',
                `company`         = '".mres($inquiryInfo['company'])."',
                `phone`           = '".mres($inquiryInfo['phone'])."',
                `project_type`    = '".mres($inquiryInfo['projectType'])."',
                `service_type`    = '".mres($inquiryInfo['serviceType'])."',
                `deadline`        = '".mres($deadline)."',
                `budget`          = '".mres($inquiryInfo['budget'])."',
                `competitors`     = '".mres($inquiryInfo['competitors'])."',
                `additional_info` = '".mres($inquiryInfo['additionalInfo'])."',
                `how_you_find_me` = '".mres($inquiryInfo['howDidYouFindMe'])."',
                `date`            = NOW() ";

		$res = $db->exec($insertQuery);

		$this->submitInquiry($inquiryInfo, $response);
	}

	public function submitInquiry($inquiryInfo, $response)
	{
		global $api;

		$data = array(
			'api_local'			=> $api['local'],
			'name'				=> $inquiryInfo['name'],
			'email'				=> $inquiryInfo['email'],
			'company'			=> $inquiryInfo['company'],
			'phone'				=> $inquiryInfo['phone'],
			'projectType'		=> $inquiryInfo['projectType'],
			'serviceType'		=> $inquiryInfo['serviceType'],
			'deadline'			=> $inquiryInfo['deadline'],
			'budget'			=> $inquiryInfo['budget'],
			'competitors'		=> $inquiryInfo['competitors'],
			'additionalInfo'	=> $inquiryInfo['additionalInfo'],
			'howDidYouFindMe'	=> $inquiryInfo['howDidYouFindMe'],
			'currentYear'		=> date("Y"),
		);

		$to_email = 'contact@asensokolov.com';
		$from_email = $inquiryInfo['email'];
		$subject = "AsenSokolov.com: Inquiry from " . $inquiryInfo['name'];
		$nameTemplate = 'sendInquiry';

		Common::sendMail($to_email, $from_email, $subject, $nameTemplate, $data);

		echo Common::json($response);
		return;
	}

	// SEND MESSAGE FUNCTIONS

	public function sendMessage()
	{

		$postdata = file_get_contents("php://input");
		$request = json_decode($postdata);

		$formInfo 					 = array();
		$formInfo['name']            = $request->name;
		$formInfo['email']           = $request->email;
		$formInfo['phone']           = $request->phone;
		$formInfo['subject']         = $request->subject;
		$formInfo['howDidYouFindMe'] = $request->howYouFindUs;
		$formInfo['message']         = $request->message;


		if(strlen($formInfo['name']) <= 2){
			$response['error'][]   = 'Please fill your Name!';
		}

		if(!preg_match("/^([a-z0-9+_-]+)(.[a-z0-9+_-]+)*@([a-z0-9-]+.)+[a-z]{2,}$/i", $formInfo['email'])){
			$response['error'][]   = 'Please write a valid E-mail!';
		}

		if(strlen($formInfo['subject']) <= 2){
			$response['error'][]   = 'Please fill your Subject of your message!';
		}

		if($formInfo['howDidYouFindMe'] == ""){
			$response['error'][]   = 'Please select how did you find us!';
		}

		if( count($response['error']) != 0 ){
			// VALIDATION FAILED
			$response['success'] = 'false';

			echo Common::json($response);
			return;
		}else{
			// VALIDATION SUCCESS
			$response['success'] = 'true';

			$this->recordMessage($formInfo, $response);
		}
	}

	public function recordMessage($formInfo, $response)
	{
		global $db, $api;

		$insertQuery = "INSERT INTO `messages` SET
                `name`            	= '".mres($formInfo['name'])."',
                `email`           	= '".mres($formInfo['email'])."',
                `phone`           	= '".mres($formInfo['phone'])."',
                `subject`           = '".mres($formInfo['subject'])."',
                `how_you_find_me` 	= '".mres($formInfo['howDidYouFindMe'])."',
                `message` 			= '".mres($formInfo['message'])."',
                `date`            	= NOW() ";

		$res = $db->exec($insertQuery);

		$this->submitMessage($formInfo, $response);
	}

	public function submitMessage($formInfo, $response)
	{
		global $api;

		$data = array(
			'api_local'			=> $api['local'],
			'name'				=> $formInfo['name'],
			'email'				=> $formInfo['email'],
			'phone'				=> $formInfo['phone'],
			'subject'			=> $formInfo['phone'],
			'howDidYouFindMe'	=> $formInfo['howDidYouFindMe'],
			'message'			=> $formInfo['message'],
			'currentYear'		=> date("Y"),
		);

		$to_email = 'contact@asensokolov.com';
		$from_email = $formInfo['email'];
		$subject = "AsenSokolov.com: Message from " . $formInfo['name'];
		$nameTemplate = 'sendMessage';

		Common::sendMail($to_email, $from_email, $subject, $nameTemplate, $data);

		echo Common::json($response);
		return;
	}
}
?>