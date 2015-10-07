<?php /* Smarty version Smarty-3.0.6, created on 2015-07-24 15:22:26
         compiled from "/media/WWW/public/PrimerTalent//modules/talent/profile_head.html" */ ?>
<?php /*%%SmartyHeaderCode:41049862155b22e026cdbd2-03575408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bca2cd551fea822af3044b0904fa403fb35674f2' => 
    array (
      0 => '/media/WWW/public/PrimerTalent//modules/talent/profile_head.html',
      1 => 1437740542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41049862155b22e026cdbd2-03575408',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="header-image" class="pf-header">
    <div class="header-image-wrapper">
        <div class="pf-image-cont">
            <div class="pf-img">
                <img src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
<?php if ($_smarty_tpl->getVariable('head_title')->value['pic']){?>uploads/thumb/<?php echo $_smarty_tpl->getVariable('head_title')->value['pic'];?>
<?php }else{ ?>/mg/user-default.png<?php }?>" alt="" id="profilePic"/>
            </div>
        </div>
        <div class="pf-nav">
            <h1><?php echo $_smarty_tpl->getVariable('head_title')->value['name'];?>
</h1>
            <h3><?php echo $_smarty_tpl->getVariable('head_title')->value['category'];?>
</h3>
            <h4><?php echo $_smarty_tpl->getVariable('head_title')->value['location'];?>
</h4>
            <div class="rates-template-small" data-score="<?php echo $_smarty_tpl->getVariable('head_title')->value['raiting'];?>
">
                <div class="score-value"><?php echo $_smarty_tpl->getVariable('head_title')->value['raiting'];?>
</div>
            </div>
        </div>
		<?php if ($_smarty_tpl->getVariable('SESSION_USER')->value['type']==2){?>
		<a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
pdf/download/<?php echo $_smarty_tpl->getVariable('user_id')->value;?>
.html" target="_blank" title="Export PDF" class="btn-export-pdf">
			<i class="elements"></i>
            Export PDF
        </a>
		<?php }?>
    </div>
</div>

<div class="pf-filter filters-1">
    <a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
talent/profile/<?php echo $_smarty_tpl->getVariable('user_id')->value;?>
.html" <?php if ($_smarty_tpl->getVariable('profilButon')->value==1){?>class="filters-1-select"<?php }?>>Info</a>
    <a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
talent/media/<?php echo $_smarty_tpl->getVariable('user_id')->value;?>
.html" <?php if ($_smarty_tpl->getVariable('profilButon')->value==2){?>class="filters-1-select"<?php }?>>Media</a>
    <?php if ($_smarty_tpl->getVariable('SESSION_USER')->value['type']==2){?><a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
talent/calendar/<?php echo $_smarty_tpl->getVariable('user_id')->value;?>
.html" <?php if ($_smarty_tpl->getVariable('profilButon')->value==3){?>class="filters-1-select"<?php }?>>Calendar</a><?php }?>
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
</script>