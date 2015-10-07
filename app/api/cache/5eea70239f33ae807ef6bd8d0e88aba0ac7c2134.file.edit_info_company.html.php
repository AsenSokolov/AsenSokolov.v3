<?php /* Smarty version Smarty-3.0.6, created on 2015-07-09 13:17:15
         compiled from "/media/WWW/public/PrimerTalent//modules/profile/edit_info_company.html" */ ?>
<?php /*%%SmartyHeaderCode:950814389559e4a2b6b21c7-61844371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5eea70239f33ae807ef6bd8d0e88aba0ac7c2134' => 
    array (
      0 => '/media/WWW/public/PrimerTalent//modules/profile/edit_info_company.html',
      1 => 1436437034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '950814389559e4a2b6b21c7-61844371',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="Content">
    <div class="profile pf-edit">
        <?php $_template = new Smarty_Internal_Template("/modules/profile/profile_head.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    </div>
    <div class="wrapper">
		<div id="register">
            <div id="regForm">
                <form id="formReg" method="POST" class="form-edit" enctype="multipart/form-data" onsubmit="editInfo(this); return false;">

                    <!-- COMPANY FORM -->

                    <div id="formCompany">
                        <div class="reg-section reg-about">
                            <div class="head-section align-left">Details</div>
                            <div id="row-1-c" class="row">
                                <input type="text" value="<?php echo $_smarty_tpl->getVariable('user')->value['name'];?>
" name="name" id="companyName" class="reg-field" placeholder="Company Name / Event Manager Name"/>
                            </div>
                            <div id="row-2-c" class="row">
                                <select class="business-type sl-box" name="location_id" id="location_id">
                                    <option value="">Location</option>
									<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('location')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['id']==$_smarty_tpl->getVariable('user')->value['location_id']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['country'];?>
</option>
									<?php }} ?>
                                </select>
								
                            </div>
                          
							<div id="row-3-c-3" class="row">
								<label>Business Type</label>
								<select class="business-type sl-box" name="business_type[]" id="business_type" multiple data-selected-text-format="count">
									<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('business_type')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->getVariable('user')->value['business_type'][$_smarty_tpl->tpl_vars['v']->value['id']]==true){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
									<?php }} ?>
                                </select>
								<div id="business-list" class="drop-down-selected-list">
									<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('user')->value['business_type_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
									<div class="selected-list-item"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</div>
									<?php }} ?>
                                </div>
                            </div>
							
                            <div id="row-3-c-1" class="row">
								<label>Business Regions</label>
                                <select class="business-type sl-box" name="business_regions[]" id="business_regions" multiple data-selected-text-format="count">
									<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('business_regions')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->getVariable('user')->value['business_regions'][$_smarty_tpl->tpl_vars['v']->value['id']]==true){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
									<?php }} ?>
                                </select>
                                <div id="regions-list" class="drop-down-selected-list">
									<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('user')->value['business_regions_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
									<div class="selected-list-item"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</div>
									<?php }} ?>
                                </div>
                            </div>
                            <div id="row-3-c-2" class="row">
								<label>Booking Types</label>
                                <select class="book-type sl-box" name="booking_type[]" id="booking_type" multiple data-selected-text-format="count">
                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('booking_type')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->getVariable('user')->value['booking_type'][$_smarty_tpl->tpl_vars['v']->value['id']]==true){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
									<?php }} ?>
                                </select>
                                <div id="booking-types-list" class="drop-down-selected-list">
                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('user')->value['booking_type_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>                                   
									<div class="selected-list-item"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</div>
									<?php }} ?>
                                </div>
                            </div>
                            <div id="row-4-c-about" class="row">
                                <textarea placeholder="A few words about your company…" class="reg-field" name="about" id="about"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->getVariable('user')->value['about']);?>
</textarea>
                            </div>
                        </div>
                        <div class="reg-section reg-contact">
                            <div class="head-section align-left">Contacts</div>
                            
                            <input type="text" value="<?php echo $_smarty_tpl->getVariable('user')->value['website'];?>
" name="website" id="comapnyWebsite" class="reg-field" placeholder="Website"/>
                            <input type="email" value="<?php echo $_smarty_tpl->getVariable('user')->value['email'];?>
" name="email" id="comapnyEmail" class="reg-field" placeholder="Email" readonly />
                            <input type="text" value="<?php echo $_smarty_tpl->getVariable('user')->value['phone'];?>
" name="phone" id="comapnyNumber" class="reg-field" placeholder="Phone Number" />
                            <div class="clear"></div>
                        </div>

                    </div>
                    
                    <!-- COMPANY FORM END -->
                    <div class="form-submit">
                        <input type="submit" value="Save" class="btn-submit btn-submit-style"/>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<script>

	function editInfo(holder){
		var args = {};
		
		$(holder).find('textarea,input,select').each(function(){
			args[this.name] = this.value;
			$(this).removeClass('field-error');
		});
		args['about'] = nl2br_js(args['about']);
		
		var business_type = [];
		args['business_type'] = '';
		$("#business_type :selected").each(function(){
			business_type.push($(this).val()); 
		});
		args['business_type'] = business_type;
		
		var business_regions = [];
		args['business_regions'] = '';
		$("#business_regions :selected").each(function(){
			business_regions.push($(this).val()); 
		});
		args['business_regions'] = business_regions;
		
		var booking_type = [];    
		args['booking_type'] = '';
		$("#booking_type :selected").each(function(){
	    	booking_type.push($(this).val()); 
		});
		args['booking_type'] = booking_type;
		
		$.ajax({
			type: 'POST',
			url: prPath+'profile/save_infoc.json',
			dataType: 'json',
			data: args,
			headers: {ajax:1},
			success: function(r)
			{
				if(r.error){
					$.each( r.error, function( k, v ) {						
						$('#'+v).addClass('field-error');
					});
					
				}
				
				if(r.success){
					document.location.href=prPath+'profile.html';
				}
			}
		});
		
		return false;
	}

    $(document).ready(function($) {
        $('.bxslider').bxSlider({
            pager:false,
            mode:"fade"
        });
        
        $('#business_type').on('change', function(){
            $('#business-list').html('');
            $('#business_type > option:selected').each(function(){
                $('#business-list').append('<div class="selected-list-item">' + $(this).text() + '</div>');
            });
        });
		
        $('#business_regions').on('change', function(){
            $('#regions-list').html('');
            $('#business_regions > option:selected').each(function(){
                $('#regions-list').append('<div class="selected-list-item">' + $(this).text() + '</div>');
            });
        });
        
        $('#booking_type').on('change', function(){
            $('#booking-types-list').html('');
            $('#booking_type > option:selected').each(function(){
                $('#booking-types-list').append('<div class="selected-list-item">' + $(this).text() + '</div>');
            });
        });
        
    });
	
	
</script>