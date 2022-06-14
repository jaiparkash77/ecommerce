<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
    {
        header("location: login.php");
    }
    //include header.php file
    include('header.php');
?>

<?php

    // include products section
    include('partial-files/_products.php');
    // include products section

    // include top-sale section
    include('partial-files/_top-sale.php');
    // include top-sale section

?>


<?php
    //include footer.php file
    include('footer.php')
?>