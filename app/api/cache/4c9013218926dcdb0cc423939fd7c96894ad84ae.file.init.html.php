<?php /* Smarty version Smarty-3.0.6, created on 2015-07-24 11:41:03
         compiled from "/media/WWW/public/PrimerTalent/modules/index/init.html" */ ?>
<?php /*%%SmartyHeaderCode:111221255955b1fa1fa760c0-58318957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c9013218926dcdb0cc423939fd7c96894ad84ae' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/modules/index/init.html',
      1 => 1437726592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111221255955b1fa1fa760c0-58318957',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("templates/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	<div id="Content">
		<div id="home-slider">		
			<ul class="bxslider">
				<li style="background-image:url(<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
img/home-cover/pt1.jpg);">
					<div class="slide-info">
						<h4 class="slide-header">Discover Talents</h4>
						<p class="slide-body">
                            Explore a variety of great artists for your venues<br />
							Browse various categories & book your favourites
                        </p>
					</div>
				</li>
				<li style="background-image:url(<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
img/home-cover/pt2.jpg);">
					<div class="slide-info">
						<h4 class="slide-header">Discover Clients</h4>
						<p class="slide-body">Explore a variety of Clients from Venues, to Directors, to Agencies </p>
					</div>
				</li>
				<li style="background-image:url(<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
img/home-cover/pt3.jpg);">
					<div class="slide-info">
						<h4 class="slide-header">Discover Talents</h4>
						<p class="slide-body">Explore Talent in a specific area or region</p>
					</div>
				</li>
				<li style="background-image:url(<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
img/home-cover/pt4.jpg);">
					<div class="slide-info">
						<h4 class="slide-header">Discover Talents</h4>
						<p class="slide-body">Explore a variety of great directors, choreographers, costumes designers, technical directors & more</p>
					</div>
				</li>
			</ul>
		</div>
		<div class="wrapper">
			<div id="home-talents">
				<div class="filters-1">
					<a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
list_talent.html" class="filters-1-select" onclick="getHomeT(1); return false;" id="Discover_Talents">Discover Talents</a>
					<a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
list_company.html" onclick="getHomeC(1); return false;" id="Event_Managers">Event Managers</a>
				</div>
				<div class="filters-2">
					<a href="#" onclick="getHomeT(1); return false;" id="talentLatest"  class="filters-2-select">Popular</a>
					<a href="#" onclick="getHomeT(2); return false;" id="talentFeatured" >Featured</a>
				</div>
				<div class="talent-results">
				
					<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['cnt'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['cnt']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
					
					<a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
<?php if ($_smarty_tpl->getVariable('SESSION_USER')->value['id']==$_smarty_tpl->tpl_vars['row']->value['id']){?>profile<?php }else{ ?>talent/profile/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
.html<?php }?>" class="artist-preview">
						<img src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
<?php if ($_smarty_tpl->tpl_vars['row']->value['pic']){?>uploads/thumb/<?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
<?php }else{ ?>img/artist.png<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" width="150" height="150"/>
                        <div class="item-info">
                            <h6><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</h6>
                            <p><?php echo $_smarty_tpl->tpl_vars['row']->value['category'];?>
</p>
                        </div>
					</a>
					<?php }} ?>
                    
					<div class="clear"></div>
				</div>
					
				<div class="clear"></div>
				<div class="load-more" id="load-more">
					<a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
list_talent.html" class="btn-style">Browse All</a>
				</div>
				
			</div>
		</div>
	</div>
	

	<script>
		$(document).ready(function($) {
			$('.bxslider').bxSlider({
				pager:false,
				auto: true,
				mode:"fade"
			});
		});
		var profileId = <?php if ($_smarty_tpl->getVariable('SESSION_USER')->value['id']){?><?php echo $_smarty_tpl->getVariable('SESSION_USER')->value['id'];?>
<?php }else{ ?>0<?php }?>;
		
		function getHomeT(type)
		{
			$('#Discover_Talents').addClass('filters-1-select');
			$('#Event_Managers').removeClass('filters-1-select');
			
			var selF = '';
			var selL = '';	
			if(type == 1) selL = 'class="filters-2-select"';
			if(type == 2) selF = 'class="filters-2-select"';
			
			var html = '\
					<a href="#" onclick="getHomeT(1); return false;" '+selL+' id="talentLatest"  >Popular</a>\
					<a href="#" onclick="getHomeT(2); return false;" '+selF+' id="talentFeatured" >Featured</a>\
			';
			$('.filters-2').empty().html(html);
			$('.load-more a').attr('href',prPath+'list_talent.html');
			$.ajax({
				type: 'POST',
				url: prPath+'index/getTalent.json',
				dataType: 'json',
				data: {'type':type},
				headers: {ajax:1},
				success: function(r)
				{
					var res = '';
					if(r.users)
					{
						$.each(r.users, function( k, v ) {
							var name = '';
							var category ='';
							var img ='img/artist.png';
							if(v['name']) name = v['name'];
							if(v['category']) category = v['category'];
							if(v['pic']) img = 'uploads/thumb/'+v['pic'];
							if(profileId == v['id'])
							 profiLink = prPath+'profile';
							else
							 profiLink = prPath+'talent/profile/'+v['id']+'.html';
							 
							res += '<a href="'+profiLink+'" class="artist-preview">\
							<img src="'+prPath+img+'" alt="'+name+'" width="150" height="150"/>\
							<div class="item-info">\
							<h6>'+name+'</h6>\
							<p>'+category+'</p>\
							</div>\
							</a>';
						});
					}
					$('.talent-results').empty().html(res);
				}
			});
		}
		
		function getHomeC(type)
		{
			$('#Discover_Talents').removeClass('filters-1-select');
			$('#Event_Managers').addClass('filters-1-select');
			
			var selF = '';
			var selL = '';	
			if(type == 1) selL = 'class="filters-2-select"';
			if(type == 2) selF = 'class="filters-2-select"';
			var html = '\
					<a href="#" onclick="getHomeC(1); return false;" '+selL+' id="talentLatest"  >Popular</a>\
					<a href="#" onclick="getHomeC(2); return false;" '+selF+' id="talentFeatured" >Featured</a>\
			';
			$('.filters-2').empty().html(html);
			$('.load-more a').attr('href',prPath+'list_company.html');
			$.ajax({
				type: 'POST',
				url: prPath+'index/getCompany.json',
				dataType: 'json',
				data: {'type':type},
				headers: {ajax:1},
				success: function(r)
				{
					var res = '';
					if(r.users)
					{
						$.each(r.users, function( k, v ) {
							var name = '';
							var category ='';
							var img ='img/company-default.png';
							if(v['name']) name = v['name'];
							if(v['category']) category = v['category'];
							if(v['pic']) img = 'uploads/thumb/'+v['pic'];
							if(profileId == v['id'])
							 profiLink = prPath+'profile';
							else
							 profiLink = prPath+'company/profile/'+v['id']+'.html';
							 	
							res += '<a href="'+profiLink+'" class="artist-preview">\
							<img src="'+prPath+img+'" alt="'+name+'" width="150" height="150"/>\
							<div class="item-info">\
							<h6>'+name+'</h6>\
							<p>'+category+'</p>\
							</div>\
							</a>';
						});
					}
					$('.talent-results').empty().html(res);
				}
			});
		}
		
	</script>
<?php $_template = new Smarty_Internal_Template("templates/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>	