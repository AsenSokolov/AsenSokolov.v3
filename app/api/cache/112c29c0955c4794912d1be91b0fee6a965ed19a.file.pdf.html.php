<?php /* Smarty version Smarty-3.0.6, created on 2015-06-04 09:31:27
         compiled from "/media/WWW/public/PrimerTalent/modules/talent/pdf.html" */ ?>
<?php /*%%SmartyHeaderCode:8936941585570532ff0b696-96864707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '112c29c0955c4794912d1be91b0fee6a965ed19a' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/modules/talent/pdf.html',
      1 => 1433424677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8936941585570532ff0b696-96864707',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<page backtop="0" backbottom="0" backleft="0" backright="0">
<div id="pdf-wrapper" style="font-family: helvetica;font-size: 14px;">

    <div id="pdf-header" style="width:100%;padding:20px 0 10px 0">
		<table border="0" cellspacing="0" cellpadding="0">
			<tr>	
				<td>
					<div style="float:left;width:400px;" >
						<img style="margin:0 0 0 20px;" src="<?php echo $_smarty_tpl->getVariable('api')->value['local'];?>
img/pdf/premiere-talent-logo.png" alt="Premiere Talent Logo" width="239" height="45"/>
					</div>
				</td>
				<td>
					<div style="float:left;width:365px;text-align: right;">
						<span style="color: #3C4651;font-size: 27px; margin:5px 0 ; font-style: normal;text-align: right;">Discover Great Talents</span><br />
						<span style="color:#9B9B9B; font-size: 13px; margin:5px 0 ; font-style: normal; text-align: right;">The One and Only Place for Talents and Artists</span>
					</div>
				</td>
			</tr>
		</table>
		<img style="margin-top:20px;" src="<?php echo $_smarty_tpl->getVariable('api')->value['local'];?>
img/pdf/pdf-line.png" alt="Header Line" width="793" height="5"/>
    </div>
    

	<div style="margin-top:10px;">
        <table cellpadding="0" cellspacing="0" style="margin-left:30px; padding-bottom:20px; border-bottom:1px solid #E7E8EA;">
            <tr>
                <td valign="top" align="left">
					<div style="width:380px;">
						
						<table cellpadding="0" cellspacing="0">
							<tr>
								<td>
                                    <img src="<?php echo $_smarty_tpl->getVariable('api')->value['local'];?>
<?php if ($_smarty_tpl->getVariable('talent')->value['pic']){?>uploads/thumb/<?php echo $_smarty_tpl->getVariable('talent')->value['pic'];?>
<?php }else{ ?>/img/user-default.png<?php }?>" alt="Talent Name" width="116" height="116" border="0"/>
                                </td>
								<td>
									<div style="width:215px; padding:15px; 0 0 15px;">
										<?php if ($_smarty_tpl->getVariable('talent')->value['name']){?><span style="font-size: 20px; color: #F1961C; line-height: 26px"><?php echo $_smarty_tpl->getVariable('talent')->value['name'];?>
</span><br/><?php }?>
										<?php if ($_smarty_tpl->getVariable('talent')->value['genre']){?><span style="font-size: 16px; color: #727F8A; line-height: 24px"><?php echo $_smarty_tpl->getVariable('talent')->value['act'];?>
 / <?php echo $_smarty_tpl->getVariable('talent')->value['genre'];?>
</span><br/><?php }?>
										<?php if ($_smarty_tpl->getVariable('talent')->value['phone']){?><span style="font-size: 12px; color: #4D5864" line-height: 20px><span style="color: #F1961C">Phone Number: </span><?php echo $_smarty_tpl->getVariable('talent')->value['phone'];?>
</span><br/><?php }?>
										<?php if ($_smarty_tpl->getVariable('talent')->value['email']){?><span style="font-size: 12px; color: #4D5864" line-height: 20px><span style="color: #F1961C">Email: </span> <?php echo $_smarty_tpl->getVariable('talent')->value['email'];?>
</span><?php }?>
									</div>
								</td>
							</tr>
						</table>
						
						
					</div>
				</td>
                <td valign="top" align="left">
				
					<div style="width:350px;">
						
						<table cellpadding="0" cellspacing="0">
							<tr>
								<td>
									<div style="width:215px;padding:15px 15px 0 0; text-align:right;">
										<?php if ($_smarty_tpl->getVariable('company')->value['name']){?><span style="font-size: 20px; color: #F1961C; line-height: 26px"><?php echo $_smarty_tpl->getVariable('company')->value['name'];?>
</span><br/><?php }?>
										<?php if ($_smarty_tpl->getVariable('company')->value['business_type']){?><span style="font-size: 16px; color: #727F8A; line-height: 24px"><?php echo $_smarty_tpl->getVariable('company')->value['business_type'];?>
</span><br/><?php }?>
                                        <?php if ($_smarty_tpl->getVariable('company')->value['phone']){?><span style="font-size: 12px; color: #4D5864" line-height: 20px><span style="color: #F1961C">Phone Number: </span><?php echo $_smarty_tpl->getVariable('company')->value['phone'];?>
</span><br/><?php }?>
										<?php if ($_smarty_tpl->getVariable('company')->value['email']){?><span style="font-size: 12px; color: #4D5864" line-height: 20px><span style="color: #F1961C">Email: </span> <?php echo $_smarty_tpl->getVariable('company')->value['email'];?>
</span><?php }?>
									</div>
								</td>
								<td>
                                    <img src="<?php echo $_smarty_tpl->getVariable('api')->value['local'];?>
<?php if ($_smarty_tpl->getVariable('company')->value['pic']){?>uploads/thumb/<?php echo $_smarty_tpl->getVariable('company')->value['pic'];?>
<?php }else{ ?>/img/company-default.png<?php }?>" alt="Talent Name" width="116" height="116" border="0"/>
                                </td>
							</tr>
						</table>  
                
					</div>
				</td>
            </tr>
        </table>
    </div>
    
    <div style="margin-top:15px;">
        <table cellpadding="0" cellspacing="0" style="margin-left:30px; padding-bottom:20px; border-bottom:1px solid #E7E8EA;">
            <tr>
                <td valign="top" align="left">
					<div style="width:380px;">
                        <span style="font-size: 14px; color: #4D5864; line-height: 20px">
                            <span style="color: #F1961C">Current Location: </span>
                            <?php echo $_smarty_tpl->getVariable('talent')->value['location'];?>

                        </span>
                        <br/>
                        <span style="font-size: 14px; color: #4D5864; line-height: 20px">
                            <span style="color: #F1961C">Nationality: </span>
                            <?php echo $_smarty_tpl->getVariable('talent')->value['nationality'];?>

                        </span>
                        <br/>
                        <span style="font-size: 14px; color: #4D5864; line-height: 20px">
                            <span style="color: #F1961C">Gender: </span>
                            <?php echo $_smarty_tpl->getVariable('talent')->value['gender'];?>

                        </span>
                        <br/>
                        <span style="font-size: 14px; color: #4D5864; line-height: 20px">
                            <span style="color: #F1961C">Age: </span>
                            <?php echo $_smarty_tpl->getVariable('talent')->value['age'];?>

                        </span>
                        
                        <br/>
                        <br/>
                        
                        <span style="font-size: 14px; color: #4D5864; line-height: 20px">
                            <span style="color: #F1961C">Genre: </span>
                            <?php echo $_smarty_tpl->getVariable('talent')->value['genre'];?>

                        </span>
                        <br/>
                        <span style="font-size: 14px; color: #4D5864; line-height: 20px">
                            <span style="color: #F1961C">Performance Type: </span>
                            <?php echo $_smarty_tpl->getVariable('talent')->value['performance_type'];?>

                        </span>
                        <br/>
                        <span style="font-size: 14px; color: #4D5864; line-height: 20px">
                            <span style="color: #F1961C">Act Name: </span>
                            <?php echo $_smarty_tpl->getVariable('talent')->value['act'];?>

                        </span>
                        <br/>
                        <span style="font-size: 14px; color: #4D5864; line-height: 20px">
                            <span style="color: #F1961C">Group: </span>
                            <?php echo $_smarty_tpl->getVariable('talent')->value['group_type'];?>

                        </span>
                        <br/>
					</div>
				</td>
                <td valign="top" align="left">
					<div style="width:350px;">
                        <div style="width:350px;font-size: 14px; color: #F1961C; line-height: 18px;">
                            About Me
                        </div>
                        <div style="width:350px; height:350px; overflow:hidden;  font-size: 12px; color: #4D5864; line-height: 20px; text-align:justify;">   
                            <?php echo $_smarty_tpl->getVariable('talent')->value['about'];?>

                        </div>
					</div>
				</td>
            </tr>
        </table>
    </div>
    
    <div style="margin-top:0px;">
        <table cellpadding="0" cellspacing="0" style="margin-left:30px; padding-bottom:30px; border-bottom:1px solid #E7E8EA;">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('media')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['v']->iteration=0;
 $_smarty_tpl->tpl_vars['v']->index=-1;
if ($_smarty_tpl->tpl_vars['v']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
 $_smarty_tpl->tpl_vars['v']->index++;
 $_smarty_tpl->tpl_vars['v']->first = $_smarty_tpl->tpl_vars['v']->index === 0;
 $_smarty_tpl->tpl_vars['v']->last = $_smarty_tpl->tpl_vars['v']->iteration === $_smarty_tpl->tpl_vars['v']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['media']['first'] = $_smarty_tpl->tpl_vars['v']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['media']['last'] = $_smarty_tpl->tpl_vars['v']->last;
?>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['media']['first']){?>
			<tr>		
			<?php }?>	
			
				<td valign="top" align="center">
					<div style="width:240px; padding: 3px 0;">
						<img src="<?php echo $_smarty_tpl->getVariable('api')->value['local'];?>
uploads/thumb/<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" width="236" height="142" border="0"/>
					</div>
				</td>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['media']['last']){?>
			</tr>		
			<?php }elseif(!($_smarty_tpl->tpl_vars['v']->iteration % 3)){?>
			</tr>
			<tr>
			<?php }?>	

			
		<?php }} ?>
        </table>
    </div>
    
    
    <div id="pdf-footer" style="width:100%;margin-top: 30px; padding:0px 0 10px 0">
        <img src="<?php echo $_smarty_tpl->getVariable('api')->value['local'];?>
img/pdf/pdf-line.png" alt="Header Line" width="793" height="5"/>
    </div>

    <div style="text-align:right; padding: 0 40px 10px;">
        <a href="http://www.premieretalent.eu" target="_blank" style="text-decoration:none;color:#3C4651; font-size: 12px;">www.premieretalent.eu</a>
    </div>
</div>
</page>