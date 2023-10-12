<?php include('functions.php');?>

<form action="index.php" method="post">
        <p><input type="text" placeholder= "nom" name="nom" required ></p>
        <p><input type="text" placeholder= "prenom" name = "prenom" ></p>
        <p><button type= "submit">Valider</button></p>
</form>

<?php   
    if(isset($_POST['nom'])&& isset($_POST['prenom'])){
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
         echo getFullName($nom ,$prenom) ;  
    }
?>