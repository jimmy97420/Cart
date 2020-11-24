<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-19 16:19:40
  from '/var/www/html/panier/engine/templates/front-office/panier.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb68d0c7141b9_36250746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37e4c82a08a2701ffd3b79fc8524e7b2b80de5f0' => 
    array (
      0 => '/var/www/html/panier/engine/templates/front-office/panier.tpl',
      1 => 1605799137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb68d0c7141b9_36250746 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Votre Panier</h2>

<style>
table, th, td {
    border: 2px solid black;
    text-align: center;
    padding: 1em;
}

thead, tfoot {
    background-color: #1D1D1D;
    color: white;
}

tbody {
    background-color: grey;
}
</style>

<table id="panier">
    <thead>
        <tr>
            <th>ID</th>
            <th>PRIX</th>
        </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['panier']->value, 'produit');
$_smarty_tpl->tpl_vars['produit']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['produit']->value) {
$_smarty_tpl->tpl_vars['produit']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['produit']->value['id'];?>
</td>
            <td id="prix"><?php echo $_smarty_tpl->tpl_vars['produit']->value['prix'];?>
</td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
    <tfoot>
        <tr>
            <th>TOTAL</th>
            <td id="total"></td>
        </tr>
    </tfoot>
</table>

<?php echo '<script'; ?>
 type="text/javascript">
    var total = 0;
    var prices = document.querySelectorAll('#prix');
    prices.forEach(function(element) {
        let price = parseFloat(element.innerText);
        total += price;
    })
    document.querySelector('#total').innerText = total;
<?php echo '</script'; ?>
>


<?php }
}
