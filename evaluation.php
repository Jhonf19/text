<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

$word = "acción";
$porciones = explode(" ", $_POST['__text']);
echo "<pre>";
print_r($porciones);
echo "</pre>";
// if ($_POST['__text'] === $word) {
//     echo "Ésta es una ortografía correcta";
// } else {
//     echo "Lo siento, ortografía errónea";
// }
// header("location:test_result.html");
 ?>
 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php echo $porciones[0] ?>
     <p>
       <?php for ($i=0; $i < count($porciones); $i++) {
         echo $porciones[$i]." ";
       } ?>
     </p>
   </body>
 </html>
