<?php /* Smarty version Smarty-3.1.19, created on 2014-09-22 11:16:00
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8571541c09156e4527-81796719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9517ba21275b5cc9c47ea59da531628b05fa41ef' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1411384559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8571541c09156e4527-81796719',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_541c091571d682_82153415',
  'variables' => 
  array (
    'imie' => 0,
    'nazwisko' => 0,
    'pracownicy' => 0,
    'pracownicy2' => 0,
    'pracownik' => 0,
    'pokaz' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541c091571d682_82153415')) {function content_541c091571d682_82153415($_smarty_tpl) {?><html>
	<head>
		<meta charset="utf-8"/>	
	</head>
	<body>
		<table>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['imie']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['nazwisko']->value;?>
</td>
			</tr>
		</table>
		<table border="1"> 
			<tr>
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['name'] = 'pracownicy';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pracownicy']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['total']);
?>
					<td><?php echo $_smarty_tpl->tpl_vars['pracownicy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pracownicy']['index']];?>
</td>
				<?php endfor; endif; ?>
			</tr>
		</table><br/>
		<table border="1">
			<tr>
				<td>Imię</td>
				<td>Stanowisko</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['pracownik'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pracownik']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pracownicy2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pracownik']->key => $_smarty_tpl->tpl_vars['pracownik']->value) {
$_smarty_tpl->tpl_vars['pracownik']->_loop = true;
?>	
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['pracownik']->value['imie'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['pracownik']->value['stanowisko'];?>
</td>
				</tr>
			<?php } ?>
		</table>
		<?php if ($_smarty_tpl->tpl_vars['pokaz']->value=="tak") {?>
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['name'] = 'pracownicy';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pracownicy']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pracownicy']['total']);
?>
				<?php echo $_smarty_tpl->tpl_vars['pracownicy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pracownicy']['index']];?>

				<?php if (!($_smarty_tpl->getVariable('smarty')->value['section']['pracownicy']['index'] % 2)) {?>
					<br/>
				<?php }?>
			<?php endfor; endif; ?>
		<?php }?>
	</body>
</html><?php }} ?>
