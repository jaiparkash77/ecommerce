<?php
    ob_start();
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
    {
        header("location: login.php");
    }
    //include header.php file
    include('header.php');
?>

<?php

    // include banner area
    include('partial-files/_banner-area.php');
    // include banner area

    // include top-sale section
    include('partial-files/_top-sale.php');
    // include top-sale section

    // include special-price section
    include('partial-files/_special-price.php');
    // include special-price section

    // include banner_adds section
    include('partial-files/_banner_adds.php');
    // include banner_adds section

    // include new-phones section
    include('partial-files/_new-phones.php');
    // include new-phones section

    // include blogs area
    include('partial-files/_blogs.php');
    // include blogs area
?>


<?php
    //include footer.php file
    include('footer.php')
?>