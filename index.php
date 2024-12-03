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
        echo $_GET['error'];
        ?>
     </p>
     
     
</body>
</html>