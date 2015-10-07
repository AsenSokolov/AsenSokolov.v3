<?php /* Smarty version Smarty-3.0.6, created on 2015-07-09 11:26:17
         compiled from "/media/WWW/public/PrimerTalent/templates/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:1790884948559e30298af564-81455751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b89f6e0450c04711349f5a40eb7b7a341effc17b' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/templates/footer.html',
      1 => 1436429520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1790884948559e30298af564-81455751',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!$_smarty_tpl->getVariable('AJAX')->value){?>

		<div id="Footer">
		<div class="wrapper">
			<div class="footer-menu fm-1">
				<h4>Discover</h4>
				<ul>
					<li>
						<a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
list_talent.html">Talents</a>
					</li>
					<li>
						<a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
list_company.html">Companies and Managers</a>
					</li>
				</ul>
			</div>
			<div class="footer-menu fm-2">
				<h4>Support</h4>
				<ul>
					<li>
						<a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
support/faq.html">FAQ</a>
					</li>
                    <li>
						<a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
support/privacy.html">Privacy Policy</a>
					</li>
					<li>
						<a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
support/terms.html">Terms and Conditions</a>
					</li>
				</ul>
			</div>
			<div class="footer-menu fm-3">
				<h4>About</h4>
				<ul>
                    <li>
						<a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
about/who_are_we.html">Who we are</a>
					</li>
					<li>
						<a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
about/what_is_premiere_talent.html">What is Premiere Talent</a>
					</li>
				</ul>
			</div>
            <div class="footer-menu fm-4">
				<h4>Find Us</h4>
				<ul>
					<li>
						<a href="https://www.facebook.com/premieretalent5" target="_blank" class="btn-fb elements"></a>
					</li>
					<li>
						<a href="https://twitter.com/premieretalent5" target="_blank" class="btn-tw elements"></a>
					</li>
                    <li>
						<a href="#" target="_blank" class="btn-gp elements"></a>
					</li>
				</ul>
			</div>
            <div class="clear"></div>
            <p class="copy-rights">© 2015 Premiere Talent, Inc.</p>
		</div>
	</div>
	</body>
</html>
<?php }?>
