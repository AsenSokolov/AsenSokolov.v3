<?php /* Smarty version Smarty-3.0.6, created on 2014-09-10 09:06:32
         compiled from "/media/WWW/public/PrimerTalent/modules/admin/category.html" */ ?>
<?php /*%%SmartyHeaderCode:161865464654104cd8390438-56307250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0502f42e8d3ea0c9759b682466dc476b0f9fdeef' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/modules/admin/category.html',
      1 => 1410353203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161865464654104cd8390438-56307250',
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
		
        <!-- Static table -->
        <div class="widget first">
        	<div class="head">
				<h5 class="iFrames">Statistics</h5>
				<div class="num"><a class="blueNum" href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
admin/add_category.html">+Add new category</a></div>
			</div>
            <table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
            	<thead>
                	<tr>
                        <td width="5%">Id</td>
                        <td>Type</td>
                        <td>Name</td>
                        <td width="5%">Function</td>
                    </tr>
                </thead>
                <tbody>
                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['cnt'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['cnt']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
						<td><?php if ($_smarty_tpl->tpl_vars['row']->value['type']==1){?>talent<?php }else{ ?>company<?php }?></td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
						<td><a class="button redBtn" href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
admin/category?dell=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
<?php if ($_smarty_tpl->getVariable('current_page')->value!=1){?>&page=<?php echo $_smarty_tpl->getVariable('current_page')->value;?>
<?php }?>">DELETE</a></td>
					</tr>
				<?php }} else { ?>
					<tr>
						<td colspan="4" align="center">No entry</td>
					</tr>
				<?php } ?>
                </tbody>
				<tfoot>
					<tr>
						<td class="paginator begin" colspan="4" align="center" height="85">						
						<?php if ($_smarty_tpl->getVariable('pager')->value!=''){?>
						<div class="pagination">
							<ul class="pages">
								<?php if ($_smarty_tpl->getVariable('pager')->value['prev']){?><li class="prev"><a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
admin/category.html?page=<?php echo $_smarty_tpl->getVariable('pager')->value['prev'];?>
">&lt;</a></li><?php }?>
								
								<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['cnt'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pager')->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['cnt']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
								<li><a <?php if ($_smarty_tpl->tpl_vars['row']->value==$_smarty_tpl->getVariable('current_page')->value){?>class="active collapse-close"<?php }?> href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
admin/category.html?page=<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value;?>
</a></li>
								<?php }} ?>
								
								<?php if ($_smarty_tpl->getVariable('pager')->value['next']){?><li class="next"><a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
admin/category.html?page=<?php echo $_smarty_tpl->getVariable('pager')->value['next'];?>
">&gt;</a></li><?php }?>
							</ul>
						</div>
						<div class="fix"></div>
						<?php }?>
						</td>
					</tr>
				</tfoot>
            </table>
        </div>
	</div>
<?php $_template = new Smarty_Internal_Template("modules/admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>