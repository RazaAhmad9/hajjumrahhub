<?php include "includes/header.php"; ?>
<?php include "includes/nav.php"; ?>

<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Sanitize the page name to prevent security issues
$safe_page = preg_replace('/[^a-zA-Z0-9_-]/', '', $page);
?>

<main id="as-<?= $safe_page ?>">
    <?php
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
</main>




<?php include "includes/footer.php";?>