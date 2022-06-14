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

    // include Cart item if it is not empty
    count($product->getData('cart')) ? include('partial-files/_shopping-cart.php') : include('partial-files/notFound/_cart_notFound.php');

    // include Cart item if it is not empty

    // include shopping-cart section
    count($product->getData('wishlist')) ? include('partial-files/_wishlist.php') : include('partial-files/notFound/_wishlist_notFound.php');
    // include shopping-cart section

    // include new-phones section
    include('partial-files/_new-phones.php');
    // include new-phones section

?>


<?php
    //include footer.php file
    include('footer.php')
?>