<?php /* Smarty version Smarty-3.1.6, created on 2015-10-24 13:21:44
         compiled from "/var/www/clients/client1/web4/web/themes/bootstrap/sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:1352178498562b69c869a261-21291237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9eb655416524258cb33850bc6f0862473fa5db08' => 
    array (
      0 => '/var/www/clients/client1/web4/web/themes/bootstrap/sidebar.html',
      1 => 1445685278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1352178498562b69c869a261-21291237',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hooks' => 0,
    'i' => 0,
    'lang' => 0,
    'getConfigs' => 0,
    'getPastes' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_562b69c86d144',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562b69c86d144')) {function content_562b69c86d144($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sortby')) include '/var/www/clients/client1/web4/web/libs/plugins/modifier.sortby.php';
?>	    <div class="span2 offset1"> 	    
 	 <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = smarty_modifier_sortby($_smarty_tpl->tpl_vars['hooks']->value->addsideblock,"#prio"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
	 	<?php if ($_smarty_tpl->tpl_vars['i']->value['id']=='defaultSearchbox'){?>
         <div class="base-block">         
 		  <div class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['searchDynamic'];?>
</div>
               	  <form class="form-search" name="form1" method="get" action="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['baseurl'];?>
/search/">
					<div class="input-prepend">
					 
					<input type="text" name="searchPaste" class="span12">
					<input type="hidden" name="searchToken">
					</div>
               	  </form>    
         </div>         
		<?php }elseif($_smarty_tpl->tpl_vars['i']->value['id']=='defaultSidebar'){?>
         <div class="base-block">
 		  <div class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['recentPastes'];?>
</div>
 		  
				    <ul class="nav nav-list">
				      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['getPastes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>	
				      <li>
				      <a href="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['baseurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['uniqueid'];?>
"> <i class="icon-file"></i><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a> <small><?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
</small>
				      </li>
				      <?php } ?>
				    </ul>   
        </div><!--/base-block-->
	 	<?php }else{ ?>	 	
	         <div class="base-block">
	         	<div class="title"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</div>
	           	<?php echo $_smarty_tpl->tpl_vars['i']->value['content'];?>

	         </div> 
	 	<?php }?>
	 <?php } ?>        
       </div> 
<?php }} ?>