<?php /* Smarty version Smarty-3.0.6, created on 2015-07-08 16:46:46
         compiled from "/media/WWW/public/PrimerTalent/modules/profile/edit_media.html" */ ?>
<?php /*%%SmartyHeaderCode:24566857559d29c60a87c9-38326470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e958e394cb8e5ed528be0ca0471666f7a8bd58c7' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/modules/profile/edit_media.html',
      1 => 1435909095,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24566857559d29c60a87c9-38326470',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("templates/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<div id="Content">
    <div class="profile pf-edit">
        <?php $_template = new Smarty_Internal_Template("/modules/profile/profile_head.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    </div>  

    <div class="wrapper"> 

        <div id="media-filter" class="filters-2">
            <a href="javascript:void(0);" id="fVideo" data-type="1" class="filters-2-select">Videos</a>
            <a href="javascript:void(0);" id="fPictures" data-type="2">Pictures</a>
        </div>
        
        <div id="media-video">
            <div class="media-cont">
                <ul id="video-list" class="media-list">
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('media')->value[1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <li data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                        <a href="javascript:void(0);" class="delete-el" onclick="deleteMedia(this, 1);">X</a>
                        <a href="javascript:void(0);">
                            <span class="elements"></span>
                            <img alt="" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['thumb'];?>
">
                        </a>
                    </li>
                    <?php }} ?>
                    <div class="clear"></div>
                </ul>
            </div>

            <div class="add-videos" id="add-videos">
                <div class="head-section align-left">Add Videos</div>
                <form id="addVideos" method="POST" onsubmit="addVideo(this); return false;">
                    <div class="add-videos-cont">
                        <div class="media-el">
                            <input type="text" value="" name="mediaLink" class="media-field reg-field" placeholder="Paste YouTube or Vimeo Video URL here"/>
                            <a href="javascript:void(0);" class="add-media btn-submit-style" onclick="manageMedia(this,true);">Add</a>
                            <a href="javascript:void(0);" class="remove-media btn-submit-style dNone" onclick="manageMedia(this,false);">Remove</a>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="form-submit">
                        <input type="submit" value="Save" class="btn-submit btn-submit-style"/>
                    </div>
                </form>
            </div>
        </div>
        <div id="media-pictures" class="dNone">
            <div class="media-cont">
                <ul id="picture-list" class="media-list">
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('media')->value[2]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <li data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                        <a href="javascript:void(0);" class="delete-el" onclick="deleteMedia(this, 2);">X</a>
                        <a href="javascript:void(0);">
                            <img src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
uploads/thumb/<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" alt=""/>
                        </a>
                    </li>
					<?php }} ?>
                    <div class="clear"></div>
                </ul>
            </div>
            
            <div class="add-pictures" id="add-pictures">
                <div class="head-section align-left">Add Photos</div>
                <form id="addVideos" method="POST">
                    <div class="form-submit">
					
						<span id="button_pic_1" class="btn-submit btn-submit-style fileinput-button">
							<i class="icon-plus icon-white"></i>
							<span>Upload Image</span>
							<input id="fileupload_1" type="file" name="files" multiple>
						</span>
						
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // two paramaters this = clicked element ; media = video or picture
	
    function addVideo(holder){
		var args = {};
		
		args['media'] = [];
		$( ".media-el" ).each(function( i ) {
			var res = $(this).find('input').val();
			if(res)	args['media'][i] = res;
		});
	
		$.ajax({
			type: 'POST',
			url: prPath+'profile/add_video.json',
			dataType: 'json',
			data: args,
			headers: {ajax:1},
			success: function(r)
			{
				if(r.success){
					updateVideo();
				}
			}
		});
		
		return false;
	}
	
	function updateVideo(){
		$.ajax({
			type: 'POST',
			url: prPath+'profile/media.json',
			dataType: 'json',
			headers: {ajax:1},
			success: function(r)
			{
				if(r[1])
				{
					var tmp = '';
					$.each(r[1], function(k,v) {
						tmp += '<li data-id="'+v.id+'">\
								<a href="javascript:void(0);" class="delete-el" onclick="deleteMedia(this, 1);">X</a>\
								<a href="javascript:void(0);">\
									<div class="media-play-btn sprite"></div>\
									<img src="'+v.thumb+'" alt="Video Title"/>\
								</a>\
							</li>\
						</ul>';
					});
						
					tmp += '<div class="clear"></div>';
					$('#video-list').empty().html(tmp);
					
					$('#add-videos').empty().html('<h2 class="section-title">Add Videos</h2>\
                        <div class="line"></div>\
						<form id="addVideos" method="POST" onsubmit="addVideo(this); return false;">\
							<div class="add-videos-cont">\
								<div class="media-el">\
									<input type="text" value="" name="mediaLink" class="media-field reg-field" placeholder="Paste YouTube Video URL here"/>\
									<a href="javascript:void(0);" class="add-media btn-submit-style" onclick="manageMedia(this,true);">Add</a>\
									<a href="javascript:void(0);" class="remove-media btn-submit-style dNone" onclick="manageMedia(this,false);">Remove</a>\
									<div class="clear"></div>\
								</div>\
							</div>\
							<div class="form-submit">\
								<input type="submit" value="Submit" class="btn-submit btn-submit-style"/>\
							</div>\
						</form>\
					');

				}
			}
		});
	}
	
	function updateImg(){
		$.ajax({
			type: 'POST',
			url: prPath+'profile/media.json',
			dataType: 'json',
			headers: {ajax:1},
			success: function(r)
			{
				if(r[2])
				{
					var tmp = '';
					$.each(r[2], function(k,v) {
						tmp += '<li data-id="'+v.id+'">\
							<a href="javascript:void(0);" class="delete-el" onclick="deleteMedia(this, 2);">X</a>\
							<a href="javascript:void(0);">\
								<img src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
uploads/thumb/'+v.name+'" alt=""/>\
							</a>\
						</li>';
					});
						
					tmp += '<div class="clear"></div>';
					$('#picture-list').empty().html(tmp);
				}
			}
		});
	}
	
    function deleteMedia(el, media){
        var container = $(el).parent('li');
        var id = container.attr('data-id');
		container.hide('slow', function(){ container.remove(); });
		$.ajax({
			type: 'POST',
			url: prPath+'profile/delete_media.json',
			dataType: 'json',
			data: {id:id},
			headers: {ajax:1},
			success: function(r)
			{
				if(r.success){
					container.hide('slow', function(){ 
						container.remove(); 
					});
				}
			}
		});
    }
	
    function sort_media(ulElm,type)
	{
		var sort = {};
		ulElm.find('li').each(function(i, items_list){
			var dataId = $(items_list).attr('data-id');
			sort[dataId] = i;
		});
		
		$.ajax({
			type: 'POST',
			url: prPath+'profile/sort_media.json',
			dataType: 'json',
			data: {sort: sort,type:type},
			headers: {ajax:1},
			success: function(r){}
		});	
	}
	
    function videoSortable()
	{
		var ulElm = $("ul#video-list");
		ulElm.sortable({
			update: function( event, ui ){
				sort_media(ulElm,1);
			}
		});
	}
    function imgSortable()
	{
		var ulElm = $("ul#picture-list");
		ulElm.sortable({
			update: function( event, ui ){
				sort_media(ulElm,2);
			}
		});
	}
	
    $(document).ready(function($){
		videoSortable();
		imgSortable();
    });
	
	$('#fileupload_1').fileupload({
		url: prPath+'upload.php?galery=1&thumb=1&w=300&h=180',
		dataType: 'json',
        start: function(e,data){},
		done: function (e, data){
			if(data.result.status){
				updateImg();
			}
		}
	}).prop('disabled', !$.support.fileInput).parent().addClass($.support.fileInput ? undefined : 'disabled');
	
</script>

<?php $_template = new Smarty_Internal_Template("templates/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>	