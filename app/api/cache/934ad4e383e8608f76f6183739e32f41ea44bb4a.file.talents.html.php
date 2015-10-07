<?php /* Smarty version Smarty-3.0.6, created on 2015-07-15 16:01:21
         compiled from "/media/WWW/public/PrimerTalent/modules/admin/talents.html" */ ?>
<?php /*%%SmartyHeaderCode:76868673955a659a1762b67-90390105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '934ad4e383e8608f76f6183739e32f41ea44bb4a' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/modules/admin/talents.html',
      1 => 1436429515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76868673955a659a1762b67-90390105',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("modules/admin/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

	<!-- Content -->
    <div class="content">
    	<div class="title"><h5>Talents Information</h5></div>
		
		<!-- Statistics -->
        <div class="stats">
        	<ul>
            	<li class="last" style="float:right;"><a href="#" class="count red" title=""><?php echo $_smarty_tpl->getVariable('count_pennding')->value;?>
</a><span>New pending<br />for approve</span></li>
                <li style="float:right;"><a href="#" class="count green" title=""><?php echo $_smarty_tpl->getVariable('count_talents')->value;?>
</a><span>Count of<br />talents</span></li>
				<li style="float:right;"><a href="#" class="count grey" title=""><?php echo $_smarty_tpl->getVariable('booking_all_time')->value;?>
</a><span>Bookings<br />to date</span></li>                
				
            </ul>
            <div class="fix"></div>
        </div>
        
		<?php if ($_smarty_tpl->getVariable('error')->value){?><br style="clear:both;" /><div class="nNote nFailure hideit"><p><strong>FAILURE: </strong><?php echo $_smarty_tpl->getVariable('error')->value;?>
</p></div><?php }?>
		<?php if ($_smarty_tpl->getVariable('message')->value){?><br style="clear:both;" /><div class="nNote nSuccess hideit"><p><strong>SUCCESS: </strong><?php echo $_smarty_tpl->getVariable('message')->value;?>
</p></div><?php }?>
		
		<div class="search-box">
			<form action="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
admin/talents.html" method="get" >
				<input type="text" value="<?php echo $_smarty_tpl->getVariable('search')->value;?>
" name="search" placeholder="Search by name here..."/>
				<input type="submit" value="Submit" class="greyishBtn"/>
				<a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
admin/talents.html" class="basicBtn" id="resetBtn">Reset</a>
			</form>
		</div>
		
        <!-- Static table -->
        <div class="widget first">
        	<div class="head"><h5 class="iFrames">Talents</h5></div>
            <table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
            	<thead>
                	<tr>
                        <td width="10%">Id</td>
                        <td width="10%">Profile pic</td>
                        <td width="25%">Name/Surname</td>
                        <td width="25%">Category</td>
                        <td width="10%">Registration<br />Date</td>
                        <td width="15%">payment<br />status</td>
                        <td width="15%"><a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
admin/talents.html?order=approved&order_by=<?php if ($_smarty_tpl->getVariable('order_by')->value=='DESC'){?>ASC<?php }else{ ?>DESC<?php }?><?php if ($_smarty_tpl->getVariable('search')->value){?>&search=<?php echo $_smarty_tpl->getVariable('search')->value;?>
<?php }?>"><?php if ($_smarty_tpl->getVariable('order_by')->value=='DESC'){?>&uarr;<?php }else{ ?>&darr;<?php }?>Approved</a></td>
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
						<td class="al-center"><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
						<td>
							<a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
<?php if ($_smarty_tpl->tpl_vars['row']->value['pic']){?>uploads/<?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
<?php }else{ ?>img/default-user-thumb.png<?php }?>" rel="prettyPhoto">
								<img width="60" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
<?php if ($_smarty_tpl->tpl_vars['row']->value['pic']){?>uploads/icon/<?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
<?php }else{ ?>img/default-user-thumb.png<?php }?>" />
							</a>
						</td>
						<td><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</a></td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['category'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['date'];?>
</td>
						<td class="al-center">
							<?php if ($_smarty_tpl->tpl_vars['row']->value['payment_enddate']){?>
								<?php echo $_smarty_tpl->tpl_vars['row']->value['payment_enddate'];?>
<br />
								<?php echo $_smarty_tpl->tpl_vars['row']->value['payment_status'];?>

							<?php }?>
							
							<?php if (time()>strtotime($_smarty_tpl->tpl_vars['row']->value['payment_enddate'])||!$_smarty_tpl->tpl_vars['row']->value['payment_enddate']){?>
								<a class="button greenBtn" href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
admin/talents.html?id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
&trial=1<?php if ($_smarty_tpl->getVariable('current_page')->value!=1){?>&page=<?php echo $_smarty_tpl->getVariable('current_page')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('order')->value){?>&order=<?php echo $_smarty_tpl->getVariable('order')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('order_by')->value){?>&order_by=<?php echo $_smarty_tpl->getVariable('order_by')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value){?>&search=<?php echo $_smarty_tpl->getVariable('search')->value;?>
<?php }?>">
								Add trial	
								</a>
							<?php }?>
							
						</td>
						<td class="al-center">
							<a class="button <?php if ($_smarty_tpl->tpl_vars['row']->value['approved']==0){?>greenBtn<?php }else{ ?>redBtn<?php }?>" href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
admin/talents.html?id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
&approve=<?php if ($_smarty_tpl->tpl_vars['row']->value['approved']==0){?>1<?php }else{ ?>0<?php }?><?php if ($_smarty_tpl->getVariable('current_page')->value!=1){?>&page=<?php echo $_smarty_tpl->getVariable('current_page')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('order')->value){?>&order=<?php echo $_smarty_tpl->getVariable('order')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('order_by')->value){?>&order_by=<?php echo $_smarty_tpl->getVariable('order_by')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value){?>&search=<?php echo $_smarty_tpl->getVariable('search')->value;?>
<?php }?>">
								<?php if ($_smarty_tpl->tpl_vars['row']->value['approved']==0){?>approve<?php }else{ ?>unapprove<?php }?>
							</a>
						</td>
					</tr>
					
				<?php }} else { ?>
					<tr>
						<td colspan="7" align="center">No entry</td>
					</tr>
				<?php } ?>
                </tbody>
				<tfoot>
					<tr>
						<td class="paginator begin" colspan="7" align="center" height="85">
						
						<?php if (count($_smarty_tpl->getVariable('pager')->value['pages'])>1){?>
						<div class="pagination">
							<ul class="pages">
								<?php if ($_smarty_tpl->getVariable('pager')->value['prev']){?><li class="prev"><a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
admin/talents.html?page=<?php echo $_smarty_tpl->getVariable('pager')->value['prev'];?>
<?php if ($_smarty_tpl->getVariable('order')->value){?>&order=<?php echo $_smarty_tpl->getVariable('order')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('order_by')->value){?>&order_by=<?php echo $_smarty_tpl->getVariable('order_by')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value){?>&search=<?php echo $_smarty_tpl->getVariable('search')->value;?>
<?php }?>">&lt;</a></li><?php }?>
								
								<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['cnt'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pager')->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['cnt']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
								<li><a <?php if ($_smarty_tpl->tpl_vars['row']->value==$_smarty_tpl->getVariable('current_page')->value){?>class="active collapse-close"<?php }?> href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
admin/talents.html?page=<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
<?php if ($_smarty_tpl->getVariable('order')->value){?>&order=<?php echo $_smarty_tpl->getVariable('order')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('order_by')->value){?>&order_by=<?php echo $_smarty_tpl->getVariable('order_by')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value){?>&search=<?php echo $_smarty_tpl->getVariable('search')->value;?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['row']->value;?>
</a></li>
								<?php }} ?>
								
								<?php if ($_smarty_tpl->getVariable('pager')->value['next']){?><li class="next"><a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
admin/talents.html?page=<?php echo $_smarty_tpl->getVariable('pager')->value['next'];?>
<?php if ($_smarty_tpl->getVariable('order')->value){?>&order=<?php echo $_smarty_tpl->getVariable('order')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('order_by')->value){?>&order_by=<?php echo $_smarty_tpl->getVariable('order_by')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value){?>&search=<?php echo $_smarty_tpl->getVariable('search')->value;?>
<?php }?>">&gt;</a></li><?php }?>
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
