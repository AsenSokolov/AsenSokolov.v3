<?php /* Smarty version Smarty-3.0.6, created on 2014-09-10 03:23:09
         compiled from "/media/WWW/public/PrimerTalent/modules/admin/add_category.html" */ ?>
<?php /*%%SmartyHeaderCode:1222640529540ffc5dcc5c18-46669549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03b9060df143266ed70b54fcf9ecdeb6720eaf6d' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/modules/admin/add_category.html',
      1 => 1410266881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1222640529540ffc5dcc5c18-46669549',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("modules/admin/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

	<!-- Content -->
    <div class="content">
    	<div class="title"><h5>Category Information</h5></div>
        
		<?php if ($_smarty_tpl->getVariable('error')->value){?><br style="clear:both;" /><div class="nNote nFailure hideit"><p><strong>FAILURE: </strong><?php echo $_smarty_tpl->getVariable('error')->value;?>
</p></div><?php }?>
		<?php if ($_smarty_tpl->getVariable('message')->value){?><br style="clear:both;" /><div class="nNote nSuccess hideit"><p><strong>SUCCESS: </strong><?php echo $_smarty_tpl->getVariable('message')->value;?>
</p></div><?php }?>
		
        <!-- Form begins -->
        <form action="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
admin/add_category.html" method="post" class="mainForm">
        
        	<!-- Input text fields -->
            <fieldset>
                <div class="widget first">
                    <div class="head">
						<h5 class="iList">Add New Category</h5>
						<div class="num"><a class="blueNum" href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
admin/category.html">Back</a></div>
					</div>
                        					
						<div class="rowElem">
							<label>Select type:</label>
							<div class="formRight">
							<select name="type" >
								<option value="1">Talent</option>
								<option value="2">Company</option>
							</select>
							</div>
							<div class="fix"></div>
						</div>
					
						<div class="rowElem">
							<label>Category Name:</label>
							<div class="formRight">
								<input type="text" value="" class="validate[required,custom[onlyLetterSp]]" name="name" id="name"/>
							</div>
							<div class="fix"></div>
						</div>
					
                        <input type="submit" value="Save" class="greyishBtn submitForm" />
                        <div class="fix"></div>

                </div>
            </fieldset>
		</form>
		
	</div>

<?php $_template = new Smarty_Internal_Template("modules/admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
