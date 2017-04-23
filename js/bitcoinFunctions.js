var btcDisplay1 = 0;
var btcDisplay2 = 0;
var btcDisplay3 = 0;

var x = setInterval(function() {

    $.post( "requestToAPIs.php", function( data ) {
    btcDisplay1 = data.btc1;
    btcDisplay2 = data.btc2;
    btcDisplay3 = data.btc3;

    $("#bitcoinParagraph").html("USD " + btcDisplay1 + " (Bitpay)</br>USD " + btcDisplay3 +" (Coindesk)</br>MXN "+ btcDisplay2 + " (Bitso)</br>");
    console.log(btcDisplay1+", "+btcDisplay2+", "+btcDisplay3);


    }, "json");

}, 1000);

function btcConvert (input) {
    if (isNaN (input.value)) {
        input.value = 0;
    }
    
    var price = btcDisplay2;
    var output = input.value * price
    var co = document.getElementById ('mxn');
    mxn.value = output.toFixed(2);
}

function mxnConvert (input) {
    if (isNaN (input.value)) {
        input.value = 0;
    }
    
    var price2 = btcDisplay2;
    var output2 = input.value / price2
    var co2 = document.getElementById ('bit');
    bit.value = output2.toFixed(8);
}    

function tar (input) {
    if (isNaN (input.value)) {
        input.value = 0;
    }
    var tarifa = 0;
    var output3 = tarifa
    var ta = document.getElementById ('tarifa');
    tarifa.value = ta.toFixed(2);    
}  