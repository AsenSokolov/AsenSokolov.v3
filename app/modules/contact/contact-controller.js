(function () {
    'use strict';

    var app = angular.module('app');

    app.controller('ContactController',['$scope','coverParams','$window','$animate','$http', 'contactData',
        function ($scope, coverParams, $window, $animate, $http, contactData) {
            $scope.title = "Rates Page";

            var params = [];
            params.coverTitle = contactData.coverTitle;
            params.coverDescription = contactData.coverDescription;
            params.coverImage = contactData.coverImage;

            coverParams.sendData(params);



            // FORM VARIABLES
                // INQUIRY FORM

            $scope.userData = [];
            $scope.stepOneItems = ['WEBSITE','E-COMMERCE','MOBILE APPLICATION','SEO','CORP ID','SOCIAL MEDIA','NEWSLETTERS','OTHERS'];
            $scope.stepTwoItems = ['CONSULTING','STRATEGY','DESIGN','DEVELOPMENT','HTML INTEGRATION','HTML5 ANIMATIONS','CMS / BACK-END','OTHERS'];
            $scope.userData.today = new Date();
            $scope.stepSixItems = ['Google','Facebook','Facebook Ad','Twitter','LinkedIn','Behance','Pinterest','Friend Recommendation','Others'];
            $scope.ddOpen = false;

                // CONTACT FORM
            $scope.shortFormData = [];

            $scope.resetVariables = function () {
                $scope.formType = 0;
                $scope.currentStep = 1;
                $scope.formProcessing = false;
                $scope.formSubmitted = false;
                // STEP 1
                $scope.userData.selectedStepOne = [];
                // STEP 2
                $scope.userData.selectedStepTwo = [];
                // STEP 3
                $scope.userData.date = '';
                // STEP 4
                $scope.userData.budget = '';
                // STEP 5
                $scope.userData.competitors = '';
                $scope.userData.additionalInfo = '';
                // STEP 6
                $scope.userData.name = '';
                $scope.userData.email = '';
                $scope.userData.company = '';
                $scope.userData.phone = '';
                $scope.userData.selectedHowToFindUs = "---";
                $scope.userData.subject = "";

                // SHORT FORM

                $scope.shortFormData.selectedHowToFindUs = "---";
                $scope.shortFormData.name = "";
                $scope.shortFormData.email = "";
                $scope.shortFormData.subject = "";
                $scope.shortFormData.subjectMessage = "";
                $scope.shortFormData.phone = "";
                $scope.shortFormData.message = "";
            };

            $scope.resetVariables();

            // SHOW FORMS

            $scope.showForms = function(formType){
                $scope.formType = formType;
                $scope.currentStep = 1;

                if($scope.formSubmitted){
                    $scope.resetVariables();
                }
            };

            // DROP DOWNS

            $scope.openDropDown = function($event){
                $scope.ddOpen = !($scope.ddOpen);
                $event.stopPropagation();
            };

            window.onclick = function() {
                if ($scope.ddOpen) {
                    $scope.ddOpen = false;
                    $scope.$apply();
                }
            };

            $scope.selectHowToFindUs = function(item){
                $scope.userData.selectedHowToFindUs = item;
            };

            $scope.selectHowToFindUsShortForm = function(item){
                $scope.shortFormData.selectedHowToFindUs = item;
            };

            // CHECKBOXES

            $scope.toggle = function (item, list) {
                var idx = list.indexOf(item);
                if (idx > -1) list.splice(idx, 1);
                else list.push(item);
            };
            $scope.exists = function (item, list) {
                return list.indexOf(item) > -1;
            };

            // CHECK STEPS

            $scope.checkSteps = function(step, type){
                if(type === 1){
                    return step === $scope.currentStep ? true : false;
                }
                if(type === 2){
                    return step <= $scope.currentStep ? true : false;
                }
                if(type === 3){
                    return $scope.currentStep < step  ? true : false;
                }
            };

            $scope.nextStep = function(){
                if($scope.currentStep >= 6){
                    $scope.submitForm();
                }else{
                    $scope.currentStep++;
                }
            };

            // VALIDATION AND DISABLE BUTTON

            $scope.disableBtn = function() {
                if($scope.currentStep == 1 && $scope.userData.selectedStepOne.length > 0){
                    return false;
                }else if($scope.currentStep == 2 && $scope.userData.selectedStepTwo.length > 0){
                    return false;
                }else if($scope.currentStep == 3 && $scope.userData.date != ""){
                    return false;
                }else if($scope.currentStep == 4 && $scope.userData.budget != ""){
                    return false;
                }else if($scope.currentStep == 5){
                    return false;
                }else if($scope.currentStep == 6 && $scope.formProject.$valid == true && $scope.userData.selectedHowToFindUs != "---" && $scope.formProcessing == false){
                    return false;
                }else{
                    return true;
                }
            };

            // SUBMIT INQUIRY FORM

            $scope.submitForm = function(){

                if($scope.userData.subject == "" && $scope.currentStep >= 6){
                    $scope.formProcessing = true;

                    $http({
                        method  : 'POST',
                        url     : 'app/api/contact/sendInquiry/',
                        headers : { 'Content-Type': 'application/x-www-form-urlencoded' },  // set the headers so angular passing info as form data (not request payload)
                        data    :   {
                                        'name'              : $scope.userData.name,
                                        'email'             : $scope.userData.email,
                                        'howYouFindUs'      : $scope.userData.selectedHowToFindUs,
                                        'company'           : $scope.userData.company,
                                        'phone'             : $scope.userData.phone,
                                        'competitors'       : $scope.userData.competitors,
                                        'additionalInfo'    : $scope.userData.additionalInfo,
                                        'selectedStepOne'   : $scope.userData.selectedStepOne,
                                        'selectedStepTwo'   : $scope.userData.selectedStepTwo,
                                        'budget'            : $scope.userData.budget,
                                        'date'              : $scope.userData.date
                                    }
                    })
                    .success(function(data) {
                        $scope.formProcessing = false;

                        if (data.success) {
                            $scope.formSubmitted = true;
                        }
                    });
                }

            };

            // SUBMIT INQUIRY FORM END
            // VALIDATION AND DISABLE BUTTON

            $scope.disableShortFormBtn = function() {
                if($scope.formSayHi.$valid == true && $scope.shortFormData.selectedHowToFindUs != "---" ){
                    return false;
                }else {
                    return true;
                }
            };

            // SUBMIT SHORT FORM

            $scope.submitMessage = function(){
                console.log($scope.shortFormData.message);
                if($scope.shortFormData.subject == ""){
                    $scope.formProcessing = true;

                    $http({
                        method  : 'POST',
                        url     : 'app/api/contact/sendMessage/',
                        headers : { 'Content-Type': 'application/x-www-form-urlencoded' },  // set the headers so angular passing info as form data (not request payload)
                        data    :   {
                            'name'              : $scope.shortFormData.name,
                            'email'             : $scope.shortFormData.email,
                            'subject'           : $scope.shortFormData.subjectMessage,
                            'phone'             : $scope.shortFormData.phone,
                            'howYouFindUs'      : $scope.shortFormData.selectedHowToFindUs,
                            'message'           : $scope.shortFormData.message
                        }
                    })
                        .success(function(data) {
                            $scope.formProcessing = false;

                            if (data.success) {
                                $scope.formSubmitted = true;
                            }
                        });
                }

            };

            // SUBMIT SHORT FORM END

        }
    ]);

})();