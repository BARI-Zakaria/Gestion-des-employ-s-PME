        <!-- DELETE METHOD  -->
<?php
include 'connexion.php';
if(isset($_GET['deletematricule'])){
    $row['Matricule']=$_GET['deletematricule'];

    $sql="DELETE from `employe` where Matricule= '$row[Matricule]'";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "SAFI TMESS7AAATE !";
        header('location:index.php');
    }else{
        die(mysqli_error($con));
    }
}

?>