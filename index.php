<!-- CONNEXION AU SERVEUR -->

<?php
    include 'connexion.php';
?>

<!-- ----------------------  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> <!--link CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> <!--Link Bootstrap-->
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
        <table class="table w-100 mt-5 mx-auto">
            <thead class="table-light table-responsive-sm">
                <th>Matricule</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de naissance</th>
                <th>Département</th>
                <th>Salaire</th>
                <th>Fonction</th>
                <th>Photo</th>
                <th>Options</th>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `employe`";
                $result=mysqli_query($con, $sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        echo '<tr>
                        <th scope=row>'.$row['Id'].'</th>
                        <td>'.$row['LastName'].'</td>
                        <td>'.$row['FirstName'].'</td>
                        <td>'.$row['Birth'].'</td>
                        <td>'.$row['Department'].'</td>
                        <td>'.$row['Salary'].'</td>
                        <td>'.$row['Fun_ction'].'</td>
                        <td>'.$row['Photo'].'</td>
                        <td>
                        <div class="order d-flex">
                            <button type="button" class="btn btn-primary mx-5"><a href="edit.php?updatematricule='.$row['Id'].'">
                            Modifier</a></button>
                            <button type="button" class="btn btn-danger"><a href="delete.php?deletematricule='.$row['Id'].'">Supprimer</a></button>
                        </div>
                        </td>
                      </tr>';
                    }
                }
                ?>
  

            </tbody>
          </table>
    </main>
</body>
</html>