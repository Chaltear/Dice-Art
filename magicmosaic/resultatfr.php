

<?php
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$ville = $_POST["ville"];
$hauteur = $_POST["hauteur"];
$largeur = $_POST["largeur"];
$precision=$_POST["precision"];

$id= mysqli_connect("127.0.0.1","root","","diceart");
$req= "INSERT INTO info values (NULL,'$nom','$prenom','$email','$tel','$ville','$hauteur','$largeur','$precision')";
mysqli_query($id,$req);

switch ($precision){
    case "tres basse":
        $a=0;
        break;
    case "basse":
        $a=10;
        break;
    case "moyenne":
        $a=20;
        break;
    case "haute":
        $a=25;
        break;
    case "tres haute":
        $a=30;
        break;
}

extract($_FILES);
move_uploaded_file($_FILES["image"]["tmp_name"],"convert/input.png"); 
exec("C:\Users\alexi\AppData\Local\Programs\Python\Python310\python.exe convert/main.py $a");







?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dice art</title>
</head>
<body>
    <div class="header">
        <div class="headertext">
            <h1>PopartDice</h1>
        </div>
    </div>
    <div class="banner"></div>
    <div class="text">
        félicitation! <br>
        vous avez convertis votre image avec succès <br>
        voici un apercus de votre resultat <br>
    </div>
    <img src="convert/output.png" width="100%" >
    <div class="text">
        vous pouvez recupérer votre photo en cliquant
        <a href="convert/output.png">  ici </a>
    </div>
    <div class="text">
        vous pouvez partager votre image en cliquant sur ces liens &nbsp;&nbsp;
        <a href="https://www.instagram.com/"><img src="logo/insta.png"  style="width:40px;height:40px;"></a>&nbsp;&nbsp;
        <a href="//www.pinterest.com/pin/create/button/"><img src="logo/pinterest.png"  style="width:40px;" ></a>&nbsp;&nbsp; 
        <a href="https://www.facebook.com/"><img src="logo/facebook.png" style="width:40px;"></a>
    </div>
    
</body>
</html>