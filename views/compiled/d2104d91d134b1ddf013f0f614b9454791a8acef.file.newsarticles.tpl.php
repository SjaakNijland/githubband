<?php /* Smarty version Smarty-3.1.18, created on 2016-11-02 16:09:46
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1959857f4f6a3801aa5-49307393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1478099383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1959857f4f6a3801aa5-49307393',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57f4f6a3846811_91729616',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
    'nr_pages' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f4f6a3846811_91729616')) {function content_57f4f6a3846811_91729616($_smarty_tpl) {?><h1 class="h1">Home</h1>
<section>
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
        <div id="kop">
        <h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h1>
        <div id="kop2"><content><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</content></div>
        <br>
        <img src=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
>
        <h4><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['date_created'];?>
</h4>
            </div>
    <?php } ?>
</section>
<div id="ul1">
    <ul id="li">
        <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['nr_pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nr_pages']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
            <li class="li"><a href="?action=home&page_nr=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
        <?php }} ?>

    </ul>
</div>












    
    
    
    


<?php }} ?>
