<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma page web</title>
    </head>
    <body>
        <h1>Ma page web php avec visual studio code 
    
        </h1>
        <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>
        <?php
$grade = 5;

if ($grade === 0) {
    echo "Il faudra revoir tout le cours !";
}

elseif ($grade === 5) {
    echo "Tu dois réviser plusieurs chapitres";
}

elseif ($grade === 7) {
    echo "Il te manque quelques révisions pour atteindre la moyenne";
}

elseif ($grade === 10) {
    echo "Tu as pile poil la moyenne, c'est un peu juste…";
}

elseif ($grade === 12) {
    echo "Tu es assez bon";
}

elseif ($grade === 16) {
    echo "Tu te débrouilles très bien !";
}

elseif ($grade === 20) {
    echo "Excellent travail, c'est parfait !";
}

else {
    echo "Désolé, je n'ai pas de message à afficher pour cette note";
}
?>
  <?php
//$grade = 10;

 //switch ($grade) // on indique sur quelle variable on travaille
//{ 
    //case 0: // dans le cas où $grade vaut 0
        //echo "Il faudra revoir tout le cours !";
    //break;
    
    //case 5: // dans le cas où $grade vaut 5
        //echo "Tu dois réviser plusieurs modules";
    //break;
    
    //case 7: // dans le cas où $grade vaut 7
       // echo "Il te manque quelques révisions pour atteindre la moyenne ";
    //break;
    
    //case 10: // etc. etc.
       // echo "Tu as pile poil la moyenne, c'est un peu juste…";
    //break;
    
    //case 12:
       // echo "Tu es assez bon";
    //break;
    
    //case 16:
        //echo "Tu te débrouilles très bien !";
    //break;
    
    //case 20:
       // echo "Excellent travail, c'est parfait !";
    //break;
    
    //default:
       // echo "Désolé, je n'ai pas de message à afficher pour cette note";
//}
//?>
<?php 
$isEnabled = true;

if ($isEnabled === true){
    echo "Vous etes autorisé à acceder au site";
}
?>


<?php
$note = 5;

switch ($note)
{
    case 0:
        echo "il faudra plus travailler<br/>";
break;

    case 5:
        echo"il faut revoir tes cours<br/>";
break;
    
    default:
        echo"je n ai pas de message a afficher <br/>";
    
    
}
?>
<?php
$ligne = 1;

while  ($ligne <= 100){

    echo "je ne dois pas regarder les mouches volee <br/>";
    $ligne ++;
}
?>
</body>
</html>