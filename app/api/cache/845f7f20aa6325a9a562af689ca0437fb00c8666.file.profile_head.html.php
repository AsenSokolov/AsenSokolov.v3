<?php /* Smarty version Smarty-3.0.6, created on 2015-07-24 15:26:35
         compiled from "/media/WWW/public/PrimerTalent//modules/profile/profile_head.html" */ ?>
<?php /*%%SmartyHeaderCode:123387088355b22efbb87787-38273515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '845f7f20aa6325a9a562af689ca0437fb00c8666' => 
    array (
      0 => '/media/WWW/public/PrimerTalent//modules/profile/profile_head.html',
      1 => 1437740786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123387088355b22efbb87787-38273515',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="header-image" class="pf-header">
    <div class="header-image-wrapper">
        <div class="pf-image-cont">
            <div class="pf-img">
                <div id="changeImage">
                    <span class="fileinput-button">
                        <span>Change<br/>image</span>
                        <input id="fileupload_2" type="file" name="files">
                    </span>
                </div>
                <img src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
<?php if ($_smarty_tpl->getVariable('head_title')->value['pic']){?>uploads/thumb/<?php echo $_smarty_tpl->getVariable('head_title')->value['pic'];?>
<?php }elseif($_smarty_tpl->getVariable('SESSION_USER')->value['type']==2){?>img/company-default.png<?php }else{ ?>img/user-default.png<?php }?>" alt="" id="profilePic"/>
            </div>
        </div>
        <div class="pf-nav">
            <h1><?php echo $_smarty_tpl->getVariable('head_title')->value['name'];?>
</h1>
			<?php if ($_smarty_tpl->getVariable('SESSION_USER')->value['type']==1){?>
			<h3><?php echo $_smarty_tpl->getVariable('head_title')->value['category'];?>
</h3>
			<?php }else{ ?>
            <h3><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('head_title')->value['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['v']->iteration=0;
if ($_smarty_tpl->tpl_vars['v']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
 $_smarty_tpl->tpl_vars['v']->last = $_smarty_tpl->tpl_vars['v']->iteration === $_smarty_tpl->tpl_vars['v']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['btv']['last'] = $_smarty_tpl->tpl_vars['v']->last;
?><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['btv']['last']){?>, <?php }?><?php }} ?></h3>
			<?php }?>
            <h4><?php echo $_smarty_tpl->getVariable('head_title')->value['location'];?>
</h4>
			<?php if ($_smarty_tpl->getVariable('SESSION_USER')->value['type']==1){?>
            <div class="rates-template-small" data-score="<?php echo $_smarty_tpl->getVariable('head_title')->value['raiting'];?>
">
                <div class="score-value"><?php echo $_smarty_tpl->getVariable('head_title')->value['raiting'];?>
</div>
            </div>
			<?php }?>
        </div>
    </div>
</div>

<div class="pf-filter filters-1">
    <a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
profile.html" <?php if ($_smarty_tpl->getVariable('profilButon')->value==1){?>class="filters-1-select"<?php }?>>Info</a>
    <a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
profile/media.html" <?php if ($_smarty_tpl->getVariable('profilButon')->value==2){?>class="filters-1-select"<?php }?>>Media</a>
    <a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
profile/calendar.html" <?php if ($_smarty_tpl->getVariable('profilButon')->value==3){?>class="filters-1-select"<?php }?>>Calendar</a>
    <a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
profile/booking.html" <?php if ($_smarty_tpl->getVariable('profilButon')->value==4){?>class="filters-1-select"<?php }?>>Bookings</a>
</div>

<script>
    $(document).ready(function() {
        $('.rates-template-small').raty({ 
            path: prPath + 'img/rating/small',
            readOnly: true,
            score: function() {
                return $(this).attr('data-score');
            }
        });
    });
	$('#fileupload_2').fileupload({
		url: prPath+'upload.php?profile=1&icon=1&thumb=1&w=193&h=193',
		dataType: 'json',
        start: function(e,data){},
		done: function (e, data){
			if(data.result.status){
				$('#profilePic').attr('src',prPath+'uploads/thumb/'+data.result.name);
			}
		}
	}).prop('disabled', !$.support.fileInput).parent().addClass($.support.fileInput ? undefined : 'disabled');
</script>