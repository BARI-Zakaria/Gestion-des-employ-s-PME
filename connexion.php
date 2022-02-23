<!-- CONNEXION AU SERVEUR -->
<?php
    $con = new mysqli ('localhost', 'root', '', 'pme');

    if(! $con){
        die(mysqli_error($con));    
    }
        
?>
<!-- ----------------------  -->