<?php
// Controller pour le front-office

ini_set('display_errors', '1');

session_start();

require_once('./classes/Database.php');

require_once('./classes/Templating.php');
$templating = (object) new Templating('front-office/');
$smarty = (object) $templating->getSmarty();

$smarty->assign('page', $_SERVER['QUERY_STRING']);
$smarty->assign('produits', Database::query('SELECT `id` FROM `produits`', array()));

if (isset($_GET['id_produit']) and !empty($_GET['id_produit'])) {

    $id_produit = (int) $_GET['id_produit'];
    $dataProduit = Database::query('SELECT `id`, `prix` FROM `produits` WHERE `id` = (:id_produit)', array(':id_produit' => $id_produit));

    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = array(
            $dataProduit[0]
        );
    } else {
        array_push($_SESSION['panier'], $dataProduit[0]);
    }

}

$smarty->assign('panier', $_SESSION['panier']);

$smarty->display('index.master.tpl');

?>