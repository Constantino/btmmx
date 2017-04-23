<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BitcoinMTY Virtual ATM</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">-->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">-->
    <link rel="icon" type="image/png" href="img/favicon.png">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
    

<div align="center">
    <a href="https://www.bitcoinmty.com/">
        <img alt="Logo" src="https://www.bitcoinmty.com/images/bitcoinMty-logoc.png" >
    </a>
    <h3 align="center">Virtual Bitcoin ATM</h3>
    <h4 align="center" style="color: gray">By BitcoinMTY</h4>    

</div>
    
    <div class="col-md-5" align="center">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Cotizacion de Bitcoin</h3>
            </div>
            <div class="panel-body">
                <p id="bitcoinParagraph"></p>
            </div>
            <div class="panel-footer">
                Informaci&oacute;n en tiempo real
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-5" align="center" >
        <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title"> Cotizacion del Peso ante el dolar</h3>
        </div>
        <div class="panel-body">
            <iframe frameborder="0" scrolling="no" height="68" width="273" allowtransparency="true" marginwidth="0" marginheight="0" src="https://sslfxrates.forexprostools.com/index.php?force_lang=49&pairs_ids=39;&header-text-color=%23FFFFFF&curr-name-color=%230059b0&inner-text-color=%23000000&green-text-color=%232A8215&green-background=%23B7F4C2&red-text-color=%23DC0001&red-background=%23FFE2E2&inner-border-color=%23CBCBCB&border-color=%23cbcbcb&bg1=%23F6F6F6&bg2=%23ffffff&bid=show&ask=show&last=hide&open=hide&high=hide&low=hide&change=hide&last_update=hide"></iframe>
            </div>
        <div class="panel-footer">
            Informaci&oacute;n en tiempo real
        </div>
        </div>
    </div>


    <div align="center">
    <h3>Calculadora MXN-Bitcoin</h3>
    <form class="form-inline" action="makeqr.php" method="post" target="qr">
        <div class="form-group">
           <i class="fa fa-btc"></i> 
           <input type="text" name="bitcoin" class="form-control" id="bit" onchange="btcConvert(this);" onkeyup="btcConvert(this);"   />
           BTC  = <i class="fa fa-usd"></i>
           <input type="text" class="form-control" name="mxn" id="mxn" onchange="mxnConvert(this);" onkeyup="mxnConvert(this);"  /> MXN 
        </div>
        <div style="background-color: #F7D358;">
            <label class="text-primary">
                Enviar un pago (ATM)</br>
                Escribe la direccion a donde deseas enviar tu pago, 
                el valor sera tomado de la calculadora en bitcoins.
            </label>
            <br/>
            <label class="text-primary">Direccion:</label>
            <input type="text" name="address" class="form-control" id="address" size="41" /> 
            
            <a href="https://atm.bitcoinmty.com/qr/index.html" target="popup" onclick="window.open('https://atm.bitcoinmty.com/qr/index.html','popup','width=400,height=400'); return false;">
                <img src="1441121020_qr_code.png" width="32" height="32" title="QR" alt="QR">
            </a>  
            
            <label class="text-primary">Tarifa (%):</label>
            <input type="number" name="tarifa" class="form-control" id="tarifa" size="5" value="0" onchange="tar(this);" onkeyup="tar(this);" />
            <br/>
            <input type="radio" name="tipo" value="compra"><label class="text-primary">Compra</label> 
            <input type="radio" name="tipo" value="venta"><label class="text-primary">Venta</label>
            <br/>
            <label class="text-primary">Etiqueta:</label>
            <input type="text" class="form-control" name="label" id="label" value="BitcoinMTY" size="10" readonly="true" disabled/>
            
            <label class="text-primary">Mensaje:</label>
            <input type="text" name="message" class="form-control" id="message" value="VirtualATM" size="10" readonly="true" disabled/>
            <br/>
            <button class="btn btn-default" type="submit">Enviar</button>
        </div> 
    </form>
    </div>

    <div>
        <iframe name="qr" frameborder="0" width="100%" Height="350px" src="makeqr.php">
        </iframe>
    </div>


    <script src="js/bitcoinFunctions.js"></script>

</body>
</html>