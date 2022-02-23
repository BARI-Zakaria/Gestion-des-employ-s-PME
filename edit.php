<!-- MODIFICATIONS DANS LES BD  -->
<?php
    include 'connexion.php';
    $row['Matricule']=$_GET['updatematricule'];
    $sql="SELECT * FROM `employe` where Matricule=$row[Matricule]";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $mtric=$row['Matricule'];
    $lname=$row['Nom'];
    $fname=$row['Prénom'];
    $date=$row['Naissance'];
    $depart=$row['Département'];
    $salary=$row['Salaire'];
    $funtion=$row['Fonction'];
    $photo=$row['Photo'];


    if(isset($_POST['submit'])){
        
        $lname=$_POST['nom'];
        $fname=$_POST['prenom'];
        $date=$_POST['naissance'];
        $depart=$_POST['departement'];
        $salary=$_POST['salaire'];
        $funtion=$_POST['fonction'];
        $photo=$_POST['photo'];
        
        // modifier DANS LES BD 
        $sql="UPDATE FROM `employe` set Matricule=$row[Matricule],Nom=$row[Nom],Prénom=$row[Prénom],Naissace=$row[Naissance],Département=$row[Département],Salaire=$row[Salaire],Fonction=$row[Fonction],Photo=$row[Photo] where Matricule=$row[Matricule]";
        $result=mysqli_query($con, $sql);
        if($result){
            header('location:index.php');
            // echo "HADCHI MAKHEDAMCH !";
        }
    }

?>


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

    <main>
        <div class="container">
                    <form action="add.php" method="POST">

            <label for="basic-url" class="form-label lead">Matricule</label>
                <div class="input-group mb-3 w-25">
                    <input type="text" name="matricule" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                     value=<?php echo "$row[Matricule]" ?>>
                </div>

            <label for="basic-url" class="form-label lead">Nom</label>
                <div class="input-group mb-3 w-50">
                    <input type="text" name="nom" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                     value=<?php echo "$row[Nom]"; ?>>
                </div>
            
            <label for="basic-url" class="form-label lead">Prénom</label>
                <div class="input-group mb-3 w-50">
                    <input type="text" name="prenom" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                     value=<?php echo "$row[Prénom]"; ?>>
                </div>

            <label for="basic-url" class="form-label lead">Date de naissance</label>
                <div class="input-group mb-3 w-50">
                    <input type="date" name="naissance" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                     value=<?php echo "$row[Naissance]"; ?>>
                </div>

            <label for="basic-url" class="form-label lead">Département</label>
                <div class="input-group mb-3 w-50">
                    <input type="text" name="departement" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                     value=<?php echo "$row[Département]"; ?>>
                </div>

            <label for="basic-url" class="form-label lead">Salaire</label>
                <div class="input-group mb-3 w-50">
                    <input type="text" name="salaire" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                     value=<?php echo "$row[Salaire]"; ?>>
                </div>

            <label for="basic-url" class="form-label lead">Fonction</label>
                <div class="input-group mb-3 w-50">
                    <input type="text" name="fonction" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                     value=<?php echo "$row[Fonction]"; ?>>
                </div>

            <label for="basic-url" class="form-label lead">Photo</label>
                <div class="input-group mb-3 w-50">
                    <input type="file" name="photo" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                     value=<?php echo "$row[Photo]"; ?>>
                </div>

            <div class="input-group mb-3">
                <button class="btn btn-outline-primary" type="submit" id="button-addon1" name="submit">Modifier</button>
            </div>
        </form>
        </div>
    </main>
    <script>

    </script>
</body>
</html>