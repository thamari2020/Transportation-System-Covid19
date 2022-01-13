
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '20'
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        window.alert('Thank you for your Booking!');
        document.getElementById("pay-only").disabled = false;
      });
    }
  }).render('#paypal-button-container');
  //This function displays Smart Payment Buttons on your web page.

