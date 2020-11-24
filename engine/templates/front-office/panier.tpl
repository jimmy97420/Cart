<h2>Votre Panier</h2>

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
    {foreach from=$panier item=produit}
        <tr>
            <td>{$produit.id}</td>
            <td id="prix">{$produit.prix}</td>
        </tr>
    {/foreach}
    </tbody>
    <tfoot>
        <tr>
            <th>TOTAL</th>
            <td id="total"></td>
        </tr>
    </tfoot>
</table>

<script type="text/javascript">
    var total = 0;
    var prices = document.querySelectorAll('#prix');
    prices.forEach(function(element) {
        let price = parseFloat(element.innerText);
        total += price;
    })
    document.querySelector('#total').innerText = total;
</script>

{*
Pour la solution JavaScript du total :
querySelectorAll sur ID prix
foreach
parseInt and innerText
querySelector
*}

{*
Pour la solution JavaScript :
forEach du localStorage
fetch pour la recuperation des informations
JSON foreach
querySelector
createElement
innerText
appendChild
*}