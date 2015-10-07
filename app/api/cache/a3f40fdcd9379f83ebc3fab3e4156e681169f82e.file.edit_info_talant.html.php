<?php /* Smarty version Smarty-3.0.6, created on 2015-07-10 15:24:03
         compiled from "/media/WWW/public/PrimerTalent//modules/profile/edit_info_talant.html" */ ?>
<?php /*%%SmartyHeaderCode:1359068070559fb96344d792-23705814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3f40fdcd9379f83ebc3fab3e4156e681169f82e' => 
    array (
      0 => '/media/WWW/public/PrimerTalent//modules/profile/edit_info_talant.html',
      1 => 1436531040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1359068070559fb96344d792-23705814',
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
                <form id="formReg" method="POST" class="form-edit" onsubmit="editInfo(this); return false;">

                    <!-- TALENT FORM -->

                    <div id="formTalent">
                        <div class="reg-section reg-about">
                            <div class="head-section align-left">About you</div>
                            <div id="row-1" class="row">
                                <input type="text" value="<?php echo $_smarty_tpl->getVariable('user')->value['name'];?>
" name="name" id="fName" class="reg-field" placeholder="First Name"/>

                                <select class="gender sl-box" name="gender" id="gender">
                                    <option value="">Gender</option>
                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('gender')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['id']==$_smarty_tpl->getVariable('user')->value['gender_id']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
									<?php }} ?>
                                </select>
                            </div>
                            <div id="row-2" class="row">
								
								<select class="location sl-box" name="location_id" id="location">
                                    <option value="">Location/Residency</option>
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
								
								<select class="nationality sl-box" name="nationality_id" id="nationality">
                                    <option value="">Nationality</option>
									<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('nationality')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['id']==$_smarty_tpl->getVariable('user')->value['nationality_id']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['nationality'];?>
</option>
									<?php }} ?>
                                </select>
								
								
								<input type="text" value="<?php echo $_smarty_tpl->getVariable('user')->value['age'];?>
" name="age" id="age" class="reg-field" placeholder="Age"/>
                            </div>
                            <div id="row-2-about" class="row">
                                <textarea placeholder="A few words about you..." class="reg-field" name="about" id="about"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->getVariable('user')->value['about']);?>
</textarea>
                            </div>
                        </div>

                        <div class="reg-section reg-talent">

                            <div class="head-section align-left">Your Talent</div>

                            <div id="row-3" class="row">
                                <select class="genre sl-box" multiple name="genre" id="genre_p_a" onchange="getPerformanceAct(this.value);">
                                    <option value="">Genre</option>
                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('genre')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->getVariable('user')->value['genre'][$_smarty_tpl->tpl_vars['v']->value['id']]==true){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
									<?php }} ?>
                                </select>
                                <select class="performance sl-box sl-box1" multiple name="performance_act" id="performance_act">
									<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('user')->value['performance_act']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
										<?php  $_smarty_tpl->tpl_vars['v2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v2']->key => $_smarty_tpl->tpl_vars['v2']->value){
 $_smarty_tpl->tpl_vars['k2']->value = $_smarty_tpl->tpl_vars['v2']->key;
?>
										<optgroup label="<?php echo $_smarty_tpl->tpl_vars['v2']->value['name'];?>
">
										<?php  $_smarty_tpl->tpl_vars['v3'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k3'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v2']->value['act']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v3']->key => $_smarty_tpl->tpl_vars['v3']->value){
 $_smarty_tpl->tpl_vars['k3']->value = $_smarty_tpl->tpl_vars['v3']->key;
?>
											<option value='<?php echo $_smarty_tpl->tpl_vars['v3']->value['id'];?>
' <?php if ($_smarty_tpl->getVariable('user')->value['act'][$_smarty_tpl->tpl_vars['v3']->value['id']]==true){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v3']->value['name'];?>
</option>
										<?php }} ?>
										</optgroup>
										<?php }} ?>
									<?php }} else { ?>
									<option value="">Performance type</option>
									<?php } ?>
                                </select>
                            </div>

                            <div id="row-4" class="row">
								<input type="text" value="<?php echo $_smarty_tpl->getVariable('user')->value['nameOfAct'];?>
" name="nameOfAct" id="nameOfAct" class="reg-field" placeholder="Act Name"/>

                                <select class="group sl-box" name="group_type" id="group_type">
                                    <option value="">group type</option>
                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('group_type')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['id']==$_smarty_tpl->getVariable('user')->value['group_type_id']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
									<?php }} ?>
                                </select>

                            </div>

                            <div id="row-6" class="people row">
                                <input type="text" value="<?php echo $_smarty_tpl->getVariable('user')->value['price'];?>
" name="price" id="pBooking" class="reg-field" placeholder="Price for Booking"/>

                                <select class="chargeType sl-box" name="charge_type" id="charge_type">
                                    <option value="">Charge Type</option>
                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('charge_type')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['id']==$_smarty_tpl->getVariable('user')->value['charge_type_id']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
									<?php }} ?>
                                </select>

                                <select class="currencyType sl-box" name="currency" id="currency">
                                    <option value="">Currency</option>
                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('currency')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['id']==$_smarty_tpl->getVariable('user')->value['currency_id']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
									<?php }} ?>
                                </select>
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

                    <!-- TALENT FORM END -->
                        
                    <input type="hidden" id="type" name="type" value="1"/>

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
		
		args['talent_group'] = [];
		$( ".member-el" ).each(function( i ) {
			var res = $(this).find('input').val();
			if(res)	args['talent_group'][i] = res;
		});
		
		var genre = [];
		args['genre'] = '';
		$("#genre_p_a :selected").each(function(){
			genre.push($(this).val()); 
		});
		args['genre'] = genre;
		
		var performance_act = [];
		args['performance_act'] = '';
		$("#performance_act :selected").each(function(){
			performance_act.push($(this).val()); 
		});
		args['performance_act'] = performance_act;
		
		$.ajax({
			type: 'POST',
			url: prPath+'profile/save_infot.json',
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
    });
</script>