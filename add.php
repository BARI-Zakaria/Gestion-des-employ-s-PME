        <!-- DECLARER ET AJOUTER DANS LES BD  -->
<?php
    include 'connexion.php';
    if(isset($_POST['submit'])){
        $mtric=$_POST['matricule'];
        $lname=$_POST['nom'];
        $fname=$_POST['prenom'];
        $date=$_POST['naissance'];
        $depart=$_POST['departement'];
        $salary=$_POST['salaire'];
        $funtion=$_POST['fonction'];
        $photo=$_POST['photo'];
        
        // INSERTION DANS LES BD 
        $sql = "INSERT INTO `employe`(`Id`, `LastName`, `FirstName`, `Birth`, `Department`, `Salary`, `Fun_ction`, `Photo`) 
        values ('$mtric', '$lname', '$fname',  '$date', '$depart', '$salary', '$funtion', '$photo')";
        $result = mysqli_query($con, $sql);
        if($result){
            header('location:index.php');
            // echo "HADCHI MAKHEDAMCH !";
        }
    }

?>
                <!-- ------------------- -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> <!-- link CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> <!-- Link Bootstrap -->
    <title>Gestion des employés PME</title>
</head>
<body>
    <header>

        <div class="art">
            <h2><a href="index.php">Liste des employés</a></h2>
            <div class="line"></div>
            <h2><a href="add.php">Ajouter un employés</a></h2>
            <div class="line"></div>
            <h2><a href="search.php">Rechercher un employés</a></h2>
        </div>

    </header>
    <main>
        <div class="container">
                    <form action="add.php" method="POST">

            <!-- <label for="basic-url" class="form-label lead">Matricule</label> -->
                <div class="input-group mb-3 w-25">
                    <input type="hidden" name="matricule" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>

            <label for="basic-url" class="form-label lead">Nom</label>
                <div class="input-group mb-3 w-50">
                    <input type="text" name="nom" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>
            
            <label for="basic-url" class="form-label lead">Prénom</label>
                <div class="input-group mb-3 w-50">
                    <input type="text" name="prenom" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>

            <label for="basic-url" class="form-label lead">Date de naissance</label>
                <div class="input-group mb-3 w-50">
                    <input type="date" name="naissance" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>

            <label for="basic-url" class="form-label lead">Département</label>
                <div class="input-group mb-3 w-50">
                    <input type="text" name="departement" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>

            <label for="basic-url" class="form-label lead">Salaire</label>
                <div class="input-group mb-3 w-50">
                    <input type="text" name="salaire" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>

            <label for="basic-url" class="form-label lead">Fonction</label>
                <div class="input-group mb-3 w-50">
                    <input type="text" name="fonction" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>

            <label for="basic-url" class="form-label lead">Photo</label>
                <div class="input-group mb-3 w-50">
                    <input type="file" name="photo" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>

            <div class="input-group mb-3">
                <button class="btn btn-outline-primary" type="submit" id="button-addon1" name="submit">Ajouter</button>
            </div>
        </form>
        </div>
    </main>
</body>
</html>