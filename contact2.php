<?php 

/*********** Config ***************/
$companyName = "Cafe Jinotegano Las Praderas";
$companyEmail = "industrias.laspraderas@gmail.com"; //1,2,3... correos
$emailForThanks = "industrias.laspraderas@gmail.com"; // 1 correo nada mas
session_start();

if($_POST){
    if (!isset($_SESSION['token']) || $_SESSION['token'] != $_POST['token']) {  

        //inmediatamente redireccionamos a la URL donde se encuentra el contact form
        echo '<script language="javascript"> alert("Token Issues!!"); </script>';
        echo '<script language="javascript"> window.setTimeout( window.location.href="thank-you.php",2000); </script>';
    } else {

        //destruimos la sesion
        session_destroy();
        if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"]){
            
            //declaramos las variables publicas en una clase
            class emailVariables{
                public $email;
                public $name;
                public $phone;
                public $subject;
                public $message;
            }

            //asignando valores del formulario a las variables
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $name = strip_tags($_POST['name']);                 
            $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);                 
            $subject = strip_tags($_POST['subject']);
            $message = strip_tags($_POST['message']);

            //validando datos
            function validarDatos($email,$name,$phone,$subject,$message){
                $out = new emailVariables();

                if (!empty($email)) {
                    //con preg_match solo permitimos email con letras, numeros, -, _ y .
                    if (!preg_match('/^[A-Za-z0-9-_.]+@[A-Za-z0-9-.]+.[A-Za-z]{2,4}$/', $email)) { 
                        //si el email no es valido, destruimos la variable
                        unset($email);
                        die('<script language="javascript"> window.parent.alert("Invalid email!."); </script> <script language="javascript"> window.setTimeout( window.location.href="index.php",2000); </script>');
                    }else{ // si el campo email es valido
                        $out->email = $email;
                    }
                }else{ // si el campo email esta vacio
                    die('<script language="javascript"> window.parent.alert("Empty email field!"); </script> <script language="javascript"> window.setTimeout( window.location.href="index.php",2000); </script>');
                }

                if (!empty($name)) { //comprobando si esta vacio
                    if (preg_match("/^\p{L}([- ']\p{L}|\p{L})*$/u", $name)) {//comprobando caracteres no validos
                        if (strlen($name) <= 60) {//comprobando longitud de caracters
                            $out->name = $name;
                        }else{
                            die('<script language="javascript"> window.parent.alert("The name field contains more than 60 characters!"); </script> <script language="javascript"> window.setTimeout( window.location.href="index.php",2000); </script>');
                        }
                    }else{
                        die('<script language="javascript"> window.parent.alert("The name field only letters!"); </script> <script language="javascript"> window.setTimeout( window.location.href="index.php",2000); </script>');
                    }       
                }else{
                    die('<script language="javascript"> window.parent.alert("Empty name field!"); </script> <script language="javascript"> window.setTimeout( window.location.href="index.php",2000); </script>');
                }

                if (!empty($phone)) {
                    $out->phone = $phone;
                }else{
                    die('<script language="javascript"> window.parent.alert("Empty phone field!"); </script> <script language="javascript"> window.setTimeout( window.location.href="index.php",2000); </script>');
                }

                if (!empty($subject)) {     
                    if (strlen($subject) <= 100) {//comprobando longitud de caracters
                        $out->subject = $subject;
                    }else{
                        die('<script language="javascript"> window.parent.alert("The subject field contains more than 100 characters!"); </script> <script language="javascript"> window.setTimeout( window.location.href="index.php",2000); </script>');
                    }
                }else{
                    die("<script language='javascript'> window.parent.alert('Empty subject field!'); </script> <script language='javascript'> window.setTimeout( window.location.href='index.php',2000); </script>");
                }

                if (!empty($message)) {
                    $out->message = $message;
                }else{
                    die("<script language='javascript'> window.parent.alert('Empty subject field!'); window.setTimeout( window.location.href='index.php',2000); </script>");
                }
                
                return $out;
            }

            //se manda a limpiar los datos mediante la funcion validar datos
            $variablesLimpias = validarDatos($email,$name,$phone,$subject,$message);

            $email = $variablesLimpias->email;
            $name = $variablesLimpias->name;
            $phone = $variablesLimpias->phone;
            $subject = $variablesLimpias->subject;
            $message = $variablesLimpias->message;

            $mymail = $companyEmail;
            $cc = "New Message ['$companyName']"; //asunto por defecto
            $cabeceras = "From: " . $email . "\r\n";
            $cabeceras .= "Reply-To: ". $email . "\r\n";
            $cabeceras .= "MIME-Version: 1.0\r\n";
            $cabeceras .= "Content-Type: text/html; charset=UTF-8\r\n";
            $FrOm .= 'X-MAILER: PHP'.phpversion();
            $BoDy .= '
                    <html>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
                        <head>
                            <title>Message sent from your website </title>
                            <style type="text/css">
                                th, td{
                                   width: 25%;
                                   text-align: left;
                                   vertical-align: top;
                                   border-collapse: collapse;
                                   padding: 0.3em;
                                   caption-side: bottom;
                               }
                               th{
                                  background: #eee;
                               }
                               caption {
                                   padding: 0.3em;
                                   color: #fff;
                                   background: #000;
                                }
                           </style>
                        </head>

                        <body>
                            <header>
                              <h2>-This e-mail was sent from a contact on ('.$companyName.')</h2>
                            </header>
                            <div class="container">
                                <table rules="all" style="border: 1px solid #000;" cellpadding="8">
                                    <caption>Customer information</caption>
                                    <tr>
                                        <th><strong>Date:</strong></th>
                                        <td>'.date(DATE_RFC2822).'</td>
                                    </tr>';
                                        $BoDy .= '
                                    <tr>
                                        <th><strong>Email Address:</strong></th>
                                        <td>' . $email . '</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Name:</strong></th>
                                        <td>' . $name . '</td>
                                    </tr> 
                                    <tr>
                                        <th><strong>Phone:</strong></th>
                                        <td>' . $phone . '</td>
                                    </tr> 
                                    <tr>
                                        <th><strong>Subject:</strong></th>
                                        <td>' . $subject . '</td>
                                    </tr> 
                                    <tr>
                                        <th><strong>Message:</strong></th>
                                        <td>' . $message . '</td>
                                    </tr>
                                </table>
                            </div>
                        </body>
                    </html>';
            $send = mail("$mymail", "$cc", "$BoDy", "$cabeceras");

            if($send){
                $to = $email;
                $subjectResp = "Gracias por confiar en nosotros: ". $companyName;
                $txt = "Tu mensaje ha sido recibido. Estaremos en contacto contigo en unos momentos. Gracias!";
                $headers = "From:". $emailForThanks;
                mail($to,$subjectResp,$txt,$headers);
                echo '<script language="javascript"> alert("Mensaje enviado exitosamente!!"); </script>';
                echo '<script language="javascript"> window.setTimeout( window.location.href="thank-you.php",1000); </script>';
            }else{
                echo '<script language="javascript"> window.parent.alert("revision del envio"); </script>';
            }

        }else{
            die('<script language="javascript"> window.parent.alert("Captcha code not valid"); </script> <script language="javascript"> window.setTimeout( window.location.href="index.php",2000); </script>');
        }
    }
} else {
    echo "no se han enviado variables";
}