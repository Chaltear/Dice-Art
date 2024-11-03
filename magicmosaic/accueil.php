<?php
session_start();
header('Cache-control: private'); // IE 6 FIX

if(isSet($_GET['lang']))
{
$lang = $_GET['lang'];

// register the session and set the cookie
$_SESSION['lang'] = $lang;

setcookie('lang', $lang, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['lang']))
{
$lang = $_SESSION['lang'];
}
else if(isSet($_COOKIE['lang']))
{
$lang = $_COOKIE['lang'];
}
else
{
$lang = 'fr';
}

switch ($lang) {
  case 'en':
  $lang_file = 'en.php';
  break;

  case 'fr':
  $lang_file = 'fr.php';
  break;

  case 'ge':
  $lang_file = 'ge.php';
  break;

  case 'sp':
  $lang_file = 'sp.php';
  break;

  case 'it':
  $lang_file = 'it.php';
  break;

  default:
  $lang_file = 'fr.php';

}

include_once 'lang/'.$lang_file;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?=$lang['titre1'];?> </title>
</head>
<body>
        
    <div class="header">
        <div class="langSelect">
            <a href="accueil.php?lang=en"><img src="flags/eng.png" width="5%" alt="<?=$lang['lang-eng'];?>" title="<?=$lang['lang-eng'];?>" /></a>
            <a href="accueil.php?lang=fr"><img src="flags/fra.png" width="5%" alt="<?=$lang['lang-fre'];?>" title="<?=$lang['lang-fre'];?>" /></a>
            <a href="accueil.php?lang=ge"><img src="flags/ger.png" width="5%" alt="<?=$lang['lang-ger'];?>" title="<?=$lang['lang-ger'];?>" /></a>
            <a href="accueil.php?lang=sp"><img src="flags/spa.png" width="5%" alt="<?=$lang['lang-spa'];?>" title="<?=$lang['lang-spa'];?>" /></a>
            <a href="accueil.php?lang=it"><img src="flags/ita.png" width="5%" alt="<?=$lang['lang-ita'];?>" title="<?=$lang['lang-ita'];?>" /></a>
        </div>
        <div class="headertext">
            <h1>PopartDice</h1>
        </div>
    </div>
    <div class="text">
        <?=$lang['text1'];?>
    </div>
    <div class="text">
        <?=$lang['text2'];?>
    </div>
    <div class="container">
        <form action="resultat<?=$lang['init'];?>.php" method="post" enctype="multipart/form-data">
            <label for="nom"><?=$lang['nom'];?></label>
            <input type="text" name="nom" required placeholder="<?=$lang['votre'];?> <?=$lang['nom'];?>...">

            <label for="prenom"><?=$lang['prenom'];?></label>
            <input type="text" name="prenom" required placeholder="<?=$lang['votre'];?> <?=$lang['prenom'];?>...">

            <label for="email"><?=$lang['email'];?> <p style="font-size: smaller; display: inline; color:red;"><?=$lang['obligatoire'];?></p> </label>
            <input type="email" name="email" required placeholder="<?=$lang['votre'];?> <?=$lang['email'];?>...">

            <label for="tel"><?=$lang['tel'];?></label>
            <input type="tel"  name="tel" required placeholder="<?=$lang['votre'];?> <?=$lang['tel'];?>...">

            <label for="ville"><?=$lang['ville'];?></label>
            <input type="text" name="ville" required placeholder="<?=$lang['votre'];?> <?=$lang['ville'];?>...">

            <label for="largeur"><?=$lang['largeur'];?></label>
            <input type="number" name="largeur" required min=1> <br><br>

            <label for="hauteur"><?=$lang['hauteur'];?></label>
            <input type="number" name="hauteur" required min=1> <br><br>

            <label for="precision"><?=$lang['precision'];?></label>
            <select name="precision" required >
                <option value="" disabled>--<?=$lang['option'];?>--</option>
                <option value="tres basse"><?=$lang['tres basse'];?></option>
                <option value="basse"><?=$lang['basse'];?></option>
                <option value="moyenne"><?=$lang['moyenne'];?></option>
                <option value="haute"><?=$lang['haute'];?></option>
                <option value="tres haute"><?=$lang['tres haute'];?></option>
                
            </select>
            <label for="image">Image</label>
            <input type="file" name="image" required>

            <input type="submit" value="<?=$lang['convertir'];?>" >
        </form>
    </div>

</body>
</html>