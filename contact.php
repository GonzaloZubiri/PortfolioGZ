<?php

$destino = "gonzalozubiri24@gmail.com";
$name = $_POST["name"];
$email = $_POST["email"];
$asunto = $_POST["asunto"];
$message = $_POST["message"];
$content = "Name: " . $name . "\nEmail: " . $email . "\nAsunto: " . $asunto . "\nMessage: " . $message; 
mail($destino,"Asunto", $content);
// header("Location:gracias.html");


// $email->send();
//         $alert = '<div class="alert-success">
//                     <span>Mensaje enviado! Gracias por contactarse.</span>
//                  </div>';
//     } catch (Exception $e){
//         $alert = '<div class="alert-success">
//                     <span>Algo salio mal! Por favor intente nuevamente.</span>
//                  </div>';
//     }


?>