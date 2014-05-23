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
