
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title><?=!empty($page_title) ? $page_title : 'Home' ?> - CL</title>
	<meta content="<?=!empty($page_title) ? $page_title : 'Home' ?>" name="description">
	<meta content="<?=!empty($page_title) ? $page_title : 'Home' ?>" name="keywords">
	<!-- Favicons -->
	<link href="<?=RESOURCES_URL?>/img/favicon.png" rel="icon">
	<link href="<?=RESOURCES_URL?>/img/apple-touch-icon.png" rel="apple-touch-icon">
	<!-- Google Fonts -->
	<link href="https://fonts.gstatic.com" rel="preconnect">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!-- Vendor CSS Files -->
	<link href="<?=RESOURCES_URL?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=RESOURCES_URL?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?=RESOURCES_URL?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?=RESOURCES_URL?>/vendor/quill/quill.snow.css" rel="stylesheet">
	<link href="<?=RESOURCES_URL?>/vendor/quill/quill.bubble.css" rel="stylesheet">
	<link href="<?=RESOURCES_URL?>/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="<?=RESOURCES_URL?>/vendor/simple-datatables/style.css" rel="stylesheet">
	<!-- Template Main CSS File -->
	<link href="<?=RESOURCES_URL?>/css/style.css" rel="stylesheet">
</head>
<body>
	<?php include_once(ROOT_DIR.'/layouts/header/index.php'); ?>
	<?php include_once(ROOT_DIR.'/layouts/sidebar/index.php'); ?>
    <?php include_once($main_layout); ?>
	<?php include_once(ROOT_DIR.'/layouts/footer/index.php'); ?>
	<?php include_once(ROOT_DIR.'/layouts/footer/index.php'); ?>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
	<!-- Vendor JS Files -->
	<script src="<?=RESOURCES_URL?>/vendor/apexcharts/apexcharts.min.js"></script>
	<script src="<?=RESOURCES_URL?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?=RESOURCES_URL?>/vendor/chart.js/chart.umd.js"></script>
	<script src="<?=RESOURCES_URL?>/vendor/echarts/echarts.min.js"></script>
	<script src="<?=RESOURCES_URL?>/vendor/quill/quill.js"></script>
	<script src="<?=RESOURCES_URL?>/vendor/simple-datatables/simple-datatables.js"></script>
	<script src="<?=RESOURCES_URL?>/vendor/tinymce/tinymce.min.js"></script>
	<script src="<?=RESOURCES_URL?>/vendor/php-email-form/validate.js"></script>
	<!-- Template Main JS File -->
	<script src="<?=RESOURCES_URL?>/js/main.js"></script>
</body>
</html>