<?php include "includes/header.php"; ?>
<?php include "includes/nav.php"; ?>

<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'umrah-package':
    case 'umrahpackage':
        include "./umrah-packages.php";
        break;
    
    case 'about':
        include "./about.php";
        break;

    case 'contact':
        include "./contact.php";
        break;

    default:
        include "./home.php";
        break;
}
?>


<?php include "includes/footer.php";?>