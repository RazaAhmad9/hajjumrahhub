<?php
/**
 * Display page title
 *
 * @param [type] $title
 * @return void
 */
function display_page_title_in_head($title) {
    echo "<title>" . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . "</title>";
}

?>
