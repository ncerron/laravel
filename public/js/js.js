 $( document ).ready(function() {
      var valor =  $("#valor").val()
     
      $('#cantidad').on("blur", function(){
        var subtotal = this.value * valor;
        subtotal1 = new Intl.NumberFormat("de-DE").format(subtotal);
        var comision = (this.value * valor)*0.012;
        comision1 = new Intl.NumberFormat("de-DE").format(comision);
        var impuestos = 200;
        $("#subtotal").val(subtotal1);
        $("#comision").val(comision1);
        $("#impuestos").val(200);
        var total = parseFloat(subtotal)  + parseFloat(comision)+ parseFloat(impuestos);
        total1 = new Intl.NumberFormat("de-DE").format(total);

        $("#total").val(total1);
        $("#submensaje").text(total1);
    });
 });