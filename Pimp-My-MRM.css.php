<?php
	// Determina o tipo do conteúdo e o charset
	header("Content-type: text/css; charset: UTF-8");
?>
/*
 * Pimp My MRM
 * @version: 20140523
 */
 
<?php if (isset($_GET['RemoverBarrinhas'])): ?>
.post-content > .poster > .row:nth-child(3) {
	display: none;
}
<?php endif; ?>

<?php if (isset($_GET['FixarHeader'])): ?>
#header {
	position: fixed;
	width: 100%;
	z-index: 1;
	top: 0;
}

#body-area {
	margin: 0 80px;
	padding-top: 50px;
}
<?php endif; ?>

<?php if (isset($_GET['Sidebar'])): ?>
#sidebar {
	font-family: "Verdana",sans-serif;
	opacity: 0,5;
}
<?php endif; ?>

<?php if (isset($_GET['FullWidth'])): ?>
#body-area {
	margin-left: 0;
	margin-right: 0;
}

#body-area > .col-md-12 {
	padding-left: 0;
	padding-right: 0;
}
<?php endif; ?>
