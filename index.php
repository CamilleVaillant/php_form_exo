<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

   <!-- exercice 1 -->
    <h2>exercice1</h2>
    <a href="http://localhost/php_exo/?city=Londre&travel=train"></a>
    <p>
        <?php
         if(isset($_GET['city']) && isset($_GET['travel'])){
            $city=$_GET['city'];
            $travel=$_GET['travel'];   
            echo "la ville choisie est " . $city .  " et le voyage se fera en " . $travel .  " !";
        }

        ?>

    </p>

    <!-- exercice 2 -->
     <h2>exercice 2</h2>
    <form action="index.php" method="POST">
        <label for="animal">votre animal</label>
            <input id="animal" type="text" name="animal">
        <button>envoyer</button>
    </form>

    <?php
        if(isset($_POST['animal'])){
            $animal=$_POST['animal'];
            echo "Votre animal choisi est " . $animal . ".";
        }
    ?>

    <!-- exercice 3 -->
        <h2>exercice3</h2>
    <form action="index.php" method="POST">
        <select name="SelectColor" id="SelectColor">
            <option value="blue">bleu</option>
            <option value="green">vert</option>
            <option value="red">rouge</option>
            <option value="purple">violet</option>
        </select>
        <label for="pseudo">votre pseudo</label>
            <input id="pseudo" type="text" name="pseudo">
        <button>envoyer</button>
    </form>
    <p>
        <?php
            if(isset($_POST['pseudo']) && isset($_POST['SelectColor'])){
                
                echo "<div><p>" . $_POST['pseudo'] . "</p></div>";
                echo "<style> div{background-color:" . $_POST['SelectColor'] . ";}</style>";
            }
        ?>
    </p>
    
    <!-- exercice 4 -->
     <h2>exercice 4</h2>

     <form action="index.php" method="POST">
        <label for="dice">entrer un multiple de 6</label>
            <input id="dice" type="number" name="dice">
        <button>lancer</button>
     </form>

     <p>
        <?php
        if(isset($_POST['dice'])){
                $dice=$_POST['dice'];
                
        
       
            if($dice % 6 == 0){
                echo rand(1,$dice);
            }else{
                header('location:index.php?error=mauvaise entrée');
                
            }  
        }
       if(isset($_GET['error'])){
        $error=$_GET['error'];
        echo "mauvaise entrée, entrer un multiple de 6";
       }
        ?>
     </p>
     
     <!-- exercice 5 -->

     <h2>exercice 5</h2>

     <form action="index.php" method="POST">
        <label for="admin">votre pseudo</label>
            <input id="admin" type="text" name="admin">
        <label for="pass">mot de passe</label>
            <input type="password" id="pass" name="pass">
        <button>envoyé</button>
     </form>

    <?php
        if(isset($_POST['admin']) && isset($_POST['pass'])){
            $admin = $_POST['admin'];
            $pass = $_POST['pass'];
            if($admin == "admin" && $pass == 1234){
               header('location:exo5.php');
            }else{
                echo '<p>ta fait une connerie</p>';
            }
        }
     /*   $passSha1=sha1($pass . "fhoiqincj£+/hyxf§§");

        echo $passSha1;*/ 
    ?>
    <!-- methode Bcript -->

    <!-- $passwordBcrypt =password_hash($password,PASSWORD_BCRYPT); -->


<!-- exercice 6 -->

    <h2>exercice 6</h2>

    <form action="index.php" method="POST">
        <label for="firstNumber">1er</label>
            <input id="firstNumber" type="number" name="firstNumber">
        <label for="secondNumber">2eme</label>
            <input id="secondNumber" type="number" name="secondNumber">
        <select name="selectOperation" id="selectOperation">
            <option value="addition">+</option>
            <option value="multiplication">×</option>
            <option value="soustraction">-</option>
            <option value="division">÷</option>
        </select>
        <button>calculer</button>
    </form>
    
    <?php
        if(!empty($_POST['firstNumber']) && !empty($_POST['secondNumber']) && !empty($_POST['selectOperation'])){
        if(isset($_POST['firstNumber']) && isset($_POST['secondNumber']) && isset($_POST['selectOperation'])){
            $firstNumber = $_POST['firstNumber'];
            $secondNumber = $_POST['secondNumber'];
            $selectOperation = $_POST['selectOperation'];
            switch($selectOperation){
                case $selectOperation == "addition":
                    echo  $firstNumber . "+" . $secondNumber . "=" . ($firstNumber+$secondNumber);
                    break;
                case $selectOperation == "multiplication";
                    echo $firstNumber . "x" . $secondNumber . "=" . ($firstNumber*$secondNumber);
                    break;
                case $selectOperation == "soustraction":
                    echo  $firstNumber . "-" . $secondNumber . "=" . ($firstNumber-$secondNumber);
                    break;
                case $selectOperation == "division":
                    if($secondNumber == 0){
                        echo "erreur on ne peut pas divisé part zero";
                    }else{
                        echo $firstNumber . "÷" . $secondNumber . "=" . ($firstNumber/$secondNumber);
                    }
                    break;
            }
        }
        }
    ?>
    <!-- exercice 10 -->

    <h2>exercice 10</h2>

        <form method="POST" action="index.php" enctype="multipart/form-data">
            <input type="file" name="userfile">
            <button>uploader</button>
        </form>
        
        <?php
        $fileTmpName = $_FILES['userfile']['tmp_name'];
        $fileName = $_FILES['userfile']['name'];
        // var_dump($_FILES['userfile']);
        // echo $_FILES['userfile']['name'];


        move_uploaded_file($fileTmpName,'image/'.$fileName);
        
          
        ?>



</body>
</html>