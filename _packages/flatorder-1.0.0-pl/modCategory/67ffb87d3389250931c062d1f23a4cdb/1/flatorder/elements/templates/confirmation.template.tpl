<!doctype html>
<html lang="en">
<head>
    <title>Confirm Order</title>
    <base href="[[!++site_url]]" />
    <meta charset="[[++modx_charset]]" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<link rel="stylesheet" href="assets/components/flatorder/css/cart.css">

</head>
<body>

<div class="flatorder">

  <div class="container" tabindex="0">
      <table cellspacing="0" cellpadding="0">
          <thead><tr><th>Product</th><th>Price</th><th>Quantity</th><th>Subtotal</th></tr></thead>
          <tbody data-bind="template:{ name: 'cart-row', foreach: cart}"></tbody>
          <tfoot>
              <tr>
                  <td colspan="3"></td>
                  <td>
                      <strong>TOTAL:</strong>
                      $<span data-bind='text: grandTotal()'></span>
                  </td>
              </tr>
          </tfoot>
      </table>
    <br><br>

    <button class="btn" id="fo_sendOrder">COMPLETE ORDER</button>

    <br>

    <div id="fo_response"></div>
  </div>

</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="//ajax.aspnetcdn.com/ajax/knockout/knockout-3.4.2.js"></script>
<script type="text/html" id="cart-row">
    <tr>
        <td data-label="Product" data-bind="text: name"></td>
        <td data-label="Price">$<span data-bind="text: price"></span></td>
        <td data-label="Quantity" data-bind="text: quantity">1</td>
        <td data-label="Subtotal">$<span data-bind="text: subtotal"></span></td>
    </tr>
</script>
<script type="text/javascript">
    koCart = [];
    orderHtml = "";

    function cartModel() {
    var self = this;

    //assign cart array
    var ls = localStorage.getItem('cartStorage');
    if(ls){
        koCart = JSON.parse(localStorage.getItem('cartStorage'));

        //make email html
        for(var i=0;i<koCart.length; i++){
            orderHtml += "ID: "+koCart[i]['id']+" Name: "+koCart[i]['name']+"";
        }
    }
    self.cart = ko.observableArray(koCart);

    //make grandtotal
    self.grandTotal = function() {
        var total = 0;
        for(var i=0; i<self.cart().length; i++) {
    		total += parseInt(self.cart()[i]["price"]*self.cart()[i]["quantity"]);
    	}
        return total;
    };

}

ko.applyBindings(new cartModel());

$('#fo_sendOrder').on('click', function(){
    $.ajax({
    	type: "POST",
    	url: "[[~[[++flatorder.sending_id]]]]",
    	data: {order: orderHtml}
    })
  	.done(function( msg ) {
  		$("#fo_response").html(msg);
  	});
});
</script>

</body>
</html>
