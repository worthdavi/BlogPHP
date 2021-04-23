<!-- Importando variáveis -->
<?php
	include_once("config/config.php")
?>

<?php include_once("head.php") ?>
<!-- Main -->
<div id="main">
		<div class="inner">

		<!-- Header -->
		<?php include_once("layout/main/header.php") ?>

		<!-- Banner -->
		<?php include_once("layout/main/banner.php") ?>

		<!-- Section -->
		<?php include_once("layout/main/feature_section.php") ?>

		<!-- Section -->
		<?php include_once("layout/main/thumb_section.php") ?>

	</div>
</div>

<!-- Sidebar -->
<div id="sidebar">
	<div class="inner">

		<!-- Search -->
		<?php include_once("layout/sidebar/search.php") ?>

		<!-- Menu -->
		<?php include_once("layout/sidebar/menu.php") ?>


		<!-- Section -->
		<?php include_once("layout/sidebar/thumb_section.php") ?>

		<!-- Section -->
		<?php include_once("layout/sidebar/contact_section.php") ?>

		<!-- Footer -->
		<?php include_once("layout/sidebar/footer.php") ?>

	</div>
</div>

<?php include_once("foot.php") ?>