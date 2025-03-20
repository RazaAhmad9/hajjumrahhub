<?php include "../includes/header.php"; ?>
<?php include "../includes/nav.php"; ?>

<?php
$page = isset($_GET['p']) ? $_GET['p'] : 'home';

// Sanitize the page name to prevent security issues
$safe_page = preg_replace('/[^a-zA-Z0-9_-]/', '', $page);
?>

<main id="as-<?= $safe_page ?>">
    <?php
    switch ($page) {
        case '3-star-10-nights-umrah-package':
            include "./3-star-10-nights-umrah-package.php";
            break;

        default:
            include "./home.php";
            break;
    }
    ?>
</main>

<?php include "../includes/footer.php"; ?>