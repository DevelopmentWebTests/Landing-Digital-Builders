<form id="content_form" method="POST" action="" class="form_landing bb">    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">         
            <div class="item_form">
            	<label for="nombre" class="form-label">Nombre <span>*</span></label>
                <input class="form-control" type="text" name="nombre">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="item_form">
            	<label for="email" class="form-label">Email <span>*</span></label>
                <input class="form-control" type="text" name="email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="item_form">
            	<label for="telefono" class="form-label">Teléfono <span>*</span></label>
                <input class="form-control" type="text" name="telefono">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="item_form">
            	<label for="empresa" class="form-label">Empresa <span>*</span></label>            	
                <input class="form-control" type="text" name="empresa">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="item_form">
            	<label for="asunto" class="form-label">Asunto</label>         	
                <input class="form-control" type="text" name="asunto">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="item_form">
            	<label for="mensaje" class="form-label">¿En qué podemos ayudarle?</label>         	
                <textarea class="form-control" name="mensaje"></textarea>
            </div>
        </div>  
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="item_form">
                <div class="form-check">
                    <label for="acepto" class="form-label">Acepto la política de Privacidad</label>
                    <input class="form-check-input rounded-0" type="checkbox" value="Si" name="acepto">
                </div>
            </div>
        </div> 
        <div class="clear"></div>
        <button id="btn_form_landing" class="btn_landing w-auto" type="submit" value="Enviar"><span>Enviar</span></button>      
    </div>
    <div class="msg_contacto" id="succes">
        <p>¡Gracias por contactar con nosotros! Nos pondremos en contacto contigo muy pronto.</p>
    </div>
    <div class="msg_contacto" id="error">
        <p>Se ha producido un error durante el envío de datos...</p>
    </div>
</form>
<?php send_form();?>

<?php
	function send_form(){
    if( isset($_POST["nombre"])    && ($_POST["nombre"]   != "") &&
        isset($_POST["email"])     && ($_POST["email"]    != "") &&
        isset($_POST["telefono"])  && ($_POST["telefono"] != "") &&
        isset($_POST["empresa"])   && ($_POST["empresa"]  != "") &&
        isset($_POST["asunto"])    && ($_POST["asunto"]   != "") &&
        isset($_POST["mensaje"])   && ($_POST["mensaje"]  != "") &&
        isset($_POST["acepto"])    && ($_POST["mensaje"]  != "")){

        $envio      = "developmentwebtests@gmail.com";
        $name_sitio = "Landing";
        $nombre     = $_POST["nombre"];
        $email      = $_POST["email"];
        $telefono   = $_POST["telefono"];
        $empresa    = $_POST["empresa"];
        $asunto     = $_POST["asunto"];
        $mensaje    = $_POST["mensaje"];
        $acepto     = $_POST["acepto"];

        $body = "
        <html>
        <head>
            <title>Local</title>
        </head>
        <body style='background:rgba(204, 204, 204, 0.3);'>
        <table align='center' cellpadding='0' cellspacing='0' width='600' bgcolor='#eee' style='padding:30px;background:#fff;'>
            <style>
                .ii a[href]{color: #000;}
            </style>
            <tr>
                <td align='center'>
                    <h2 style='color:#000;'>".$name_sitio."</h2> 
                </td>
            </tr>
            <tr>
                <td><p style='color:#000;font-size: 16px;'><span style='color:#111213;font-weight: bold;'>Nombre:</span>  ".$nombre."</p></td>
            </tr>
            <tr>
                <td><p style='color:#000;font-size: 16px;'><span style='color:#111213;font-weight: bold;'>Email:</span>  ".$email."</p></td>
            </tr>
            <tr>
                <td><p style='color:#000;font-size: 16px;'><span style='color:#111213;font-weight: bold;'>Teléfono:</span>  ".$telefono."</p></td>
            </tr>
            <tr>
                <td><p style='color:#000;font-size: 16px;'><span style='color:#111213;font-weight: bold;'>Empresa:</span>  ".$empresa."</p></td>
            </tr>
            <tr>
                <td><p style='color:#000;font-size: 16px;'><span style='color:#111213;font-weight: bold;'>Asunto:</span>  ".$asunto."</p></td>
            </tr>
            <tr>
                <td><p style='color:#000;font-size: 16px;'><span style='color:#111213;font-weight: bold;'>Mensaje:<br></span> ".$mensaje."</p>
                </td>
            </tr>
            <tr>
                <td><p style='color:#000;font-size: 16px;'><span style='color:#111213;font-weight: bold;'>Acepto la política de Privacidad:<br></span> ".$acepto."</p>
                </td>
            </tr>
        </table>";

        $body .= "</body></html>";

        $headers  = "From: ".$envio."\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $headers .= "Content-Transfer-Encoding: 8bit\r\n";
        mail($envio, $name_sitio, $body, $headers);
    	}
	}
?>
