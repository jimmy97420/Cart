<header>
    <a href="./">Accueil</a>
    <a href="./?panier">Votre panier</a>
</header>

<main style="margin-top: 10vh;">

{if $page === ""}

    {foreach from=$produits item=produit}
        {*
            Pour la solution JavaScript :
            <button id="ajout" value="{$produit.id}">Ajouter au panier : {$produit.id}</button>
            
            Puis : 
            querySelectorAll #ajout
            foreach
            onclick
            this.value
            localStorage 
        *}

        <a href="./?id_produit={$produit.id}" style="display: block">Ajouter au panier : {$produit.id}</a>
    {/foreach}

{elseif $page === "panier"}

    {include file="./panier.tpl"}

{/if}

</main>