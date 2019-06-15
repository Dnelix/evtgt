<?php
$page = isset($_GET['stage']) ? $_GET['stage'] : '';
if (strcasecmp($page, 'logout') === 0) {
    echo '<script type="text/javascript">window.location.href="includes/parse/logout.php";</script>';
    exit();
}
?>

<?php include_once("inc/head.php"); ?>

    <?php
		if (file_exists('pages/' .$page . '.php')) {
			include('pages/' .$page . '.php');
		} else {
			include('pages/dashboard.php');
		}
    ?>

<?php include_once('inc/foot.php'); ?>