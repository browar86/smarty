<?php /* Smarty version Smarty-3.1.19, created on 2014-09-19 10:44:37
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8571541c09156e4527-81796719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9517ba21275b5cc9c47ea59da531628b05fa41ef' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1411123475,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8571541c09156e4527-81796719',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'imie' => 0,
    'nazwisko' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_541c091571d682_82153415',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541c091571d682_82153415')) {function content_541c091571d682_82153415($_smarty_tpl) {?><html>
	<body>
		<table>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['imie']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['nazwisko']->value;?>
</td>
			</tr>
		</table>
	</body>
</html><?php }} ?>
