<?php 
    //dolares
    setlocale(LC_MONETARY, 'en_US.UTF-8');

    function getPriceusd($url) {
        $decode = file_get_contents ($url);
        return json_decode ($decode, true);
    }

    //pesos
    function getPricemxn($url2) {
        $decode2 = file_get_contents ($url2);
        return json_decode ($decode2, true);
    }
    
    //coindesk
    function getPriceusd2($url3) {
        $decode3 = file_get_contents ($url3);
        return json_decode ($decode3);
    }

    $btcUSD = getPriceusd('https://bitpay.com/api/rates/usd');
    $btcPriceusd = $btcUSD ["rate"];
    

    $btcMXN = getPricemxn('https://api.bitso.com/v2/ticker');
    $btcPricemxn = $btcMXN ["last"];


    $btcUSD2 = getPriceusd2('https://api.coindesk.com/v1/bpi/currentprice.json');
    $btcPriceusd2 = $btcUSD2->bpi->USD->rate;


    $btcDisplay1 = round($btcPriceusd, 2);
    $btcDisplay2 = round($btcPricemxn, 2);
    $btcDisplay3 = round($btcPriceusd2, 2);

    $a = array("btc1" => $btcDisplay1,"btc2" => $btcDisplay2,"btc3" => $btcDisplay3);

    header('Content-type: application/json');
    echo json_encode($a);
    
?>