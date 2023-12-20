<?php
 if(isset($_POST['search'])){
    $valueToSearch = $_POST['vts'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `employe` WHERE CONCAT(`Id`, `LastName`, `FirstName`, `Birth`, `Department`, `Salary`, `Fun_ction`, `Photo`)LIKE'%".$valueToSearch."%'";
    $search_result = filterTable($query);
 }else{
    $query = "SELECT * FROM `employe`";
    $search_result = filterTable($query);
 }

 // function to connect and execute the query
function filterTable($query){
    include 'connexion.php';
    $filter_Result = mysqli_query($con, $query);
    return $filter_Result;
}

?>

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

        <form action="" method="POST">
            <div class="input-group m-3 w-25">
                <input type="text" name="vts" class="form-control" placeholder="Chercher un employe" aria-label="Recipient's username"     aria-describedby="button-addon2">
                <button class="btn btn-outline-primary" type="submit" name="search" id="button-addon2">Chercher</button>
            </div>
        </form>

        <table class="table w-75 mt-5 mx-auto">
            <thead class="table-light table-responsive-sm">
                <th>Matricule</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de naissance</th>
                <th>Département</th>
                <th>Salaire</th>
                <th>Fonction</th>
                <th>Photo</th>
            </thead>
            <tbody>
                <?php
                include 'connexion.php';
                $sql = "SELECT * FROM `employe`";
                $result=mysqli_query($con, $sql);
                ?>

                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <th scope="row"><?php echo $row['Id'];?></th>
                    <td><?php echo $row['LastName'];?></td>
                    <td><?php echo $row['FirstName'];?></td>
                    <td><?php echo $row['Birth'];?></td>
                    <td><?php echo $row['Department'];?></td>
                    <td><?php echo $row['Salary'];?></td>
                    <td><?php echo $row['Fun_ction'];?></td>
                    <td><?php echo $row['Photo'];?></td>
                </tr>
                <?php endwhile;?>
            </tbody>
          </table>
    </main>
</body>
</html>


