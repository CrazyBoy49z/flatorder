<!doctype html>
<html lang="en">
<head>
    <title>Order Form Base for MODX</title>
    <base href="[[!++site_url]]" />
    <meta charset="[[++modx_charset]]" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="stylesheet" href="assets/components/flatorder/css/cart.css">

</head>
<body>

[[$fo-product-grid]]

[[$fo-product-card]]


<script>
var koProducts = [ [[FlatOrderProductsJson? id=`[[++flatorder.catalog_id]]`]] ];

</script>
<script type="text/html" id="cart-row">
    <tr>
        <td data-label="Product" data-bind="text: name"></td>
        <td data-label="Price">$<span data-bind="text: price"></span></td>
        <td data-label="Quantity" data-bind="text: quantity">1</td>
        <td data-label="Subtotal">$<span data-bind="text: subtotal"></span></td>
        <td><button class="btn-remove" data-bind="click: $parent.removeFromCart">REMOVE</button></td>
    </tr>
</script>

<script>
function resetCart(){
    localStorage.removeItem('cartStorage');
    var cartId = localStorage.getItem('lastCartId');
    localStorage.removeItem('lastCartId');
    localStorage.removeItem('checkoutUrl');
    localStorage.removeItem('carts.'+cartId);
    document.location.reload(true);
}

</script>

<script src="//ajax.aspnetcdn.com/ajax/knockout/knockout-3.4.2.js"></script>
<script type="text/javascript" src="assets/components/flatorder/js/fo-checkout.js"></script>

</body>
</html>
