<?php
	// Determina o tipo do conteúdo e o charset
	header("Content-type: text/css; charset: UTF-8");
?>
/*
 * Pimp My MRM
 * @version: 20140523
 */
 
<?php if (isset($_GET['RemoverBarrinhas'])): ?>
.pm-body > .pm-sender > .row:nth-child(3), .post-content > .poster > .row:nth-child(3) {
	display: none !important;
}
<?php endif; ?>

<?php if (isset($_GET['FixarHeader'])): ?>
#header {
	position: fixed;
	z-index: 1;
	top: 0;
	left: 205px;
	right: 0px;
}

#body-area {
	margin: 0 80px;
	padding-top: 50px;
}
<?php endif; ?>

<?php if (isset($_GET['SidebarVerdana'])): ?>
#sidebar {
	font-family: "Verdana",sans-serif;
}
<?php endif; ?>

<?php if (isset($_GET['ImagemDeFundo'])): ?>
#main {
	font-family: "Open Sans",Arial,Helvetica,sans-serif;
	background-color: #e9eaed;
	background-image: url(http://i.imgur.com/087A3X1.png);
	background-repeat: repeat;
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

<?php if (isset($_GET['TemaVerde'])): ?>
#header #logo {
	background-color:#64bc50 !important;
}

#sidebar .side-menu>ul li.current {
	background-color:#64bc50 !important;
}

#sidebar .menu-pages {
    color:#64bc50;
}

a, #sidebar a {
    color:#64bc50;
}

.panel-category a:hover {
	color:#386c2c;
}

#info-center .panel-body>.row h5 a {
	color:#64bc50;
}

#info-center .panel-body>.row h5 a:hover {
	color:#386c2c;
}

#info-center .panel-body>.row h5 {
	color:#64bc50;
}

.panel-default>.panel-heading {
    background-color: #f5f5f5 !important;
}

.panel-heading {
	background-color:#64bc50 !important;
}

.panel.panel-category {
	border-color:#64bc50;
}

#info-center .panel-heading {
	background-color:#55a044 !important;
	border-color:#55a044;
}

#info-center .panel-primary {
	border-color:#55a044;
}

<?php endif; ?>

<?php if (isset($_GET['RemoverConquistas'])): ?>
.pm-body .pm-sender .conquistas, .post-content .poster .conquistas {
	display: none !important;
}
<?php endif; ?>

<?php if (isset($_GET['SlimPosterArea'])): ?>
@media (min-width: 995px) {
	.pm-body .pm-sender > .row > .col-md-12:not(.blurb), .poster .row > .col-md-12:not(.blurb) {
		padding-left: 0;
		padding-right: 0;
	}

	.pm-body .pm-sender, .post-content .poster {
		width: 141px !important;
	}

	.pm-body .pm-content, .post-content .postarea {
		padding-left: 141px !important;
	}
	
	.pm-body .pm-sender .awards fieldset, .pm-body .pm-sender .conquistas fieldset, .post-content .poster .awards fieldset, .post-content .poster .conquistas fieldset {
		border-bottom: none;
		border-left: none;
		border-right: none;
	}
}
<?php endif; ?>


 <?php if (isset($_GET['RemoverPremios'])): ?>
.pm-body .pm-sender .awards, .post-content .poster .awards {
	display: none !important;
}
<?php endif; ?>

<?php if (isset($_GET['RemoverFrasePessoal'])): ?>
.pm-body .pm-sender .blurb, .post-content .poster .blurb {
	display: none !important;
}
<?php endif; ?>

<?php if (isset($_GET['FixarNotificacoes'])): ?>
.toggle-notification-feed {
	position:fixed;
	border-bottom-left-radius:5px;
	z-index:99;
	border-bottom-right-radius:5px;
	top:0;
	padding:15px;
	margin-left:2.5%;
	background-color:#00acee;
}

#header #logo {
	padding-bottom: 13px;
}

#jGrowl {
	margin-right:4px;
	top:50px;
	position:fixed;
	z-index:99;
	right: 11px;
}

.notify-count span {
	position:fixed;
	margin-left:-30px;
	top:18px;
	z-index:101;
	right: -23px;
}
<?php endif; ?>

<?php if (isset($_GET['TemaAntigo'])): ?>
.panel.panel-category>.panel-heading {
	background-image: url(http://i.imgur.com/R3Sxw3k.gif);
}
.panel-primary>.panel-heading {
	background-image: url(http://i.imgur.com/FUFHWiX.jpg);
}
.panel-default>.panel-heading {
	background-image: url(http://i.imgur.com/FUFHWiX.jpg);
}
.panel-default>.panel-heading a {
	color: #fff;
}
footer {
	background: url(http://i.imgur.com/FUFHWiX.jpg);
	color: #000;
}
footer a {
	color: #fff;
}
#header #logo {
	background: rgba(44, 132, 202, 0.7);
	border-bottom: 1px solid #4a76cd;
}
<?php endif; ?>

<?php if (isset($_GET['TemaVermelho'])): ?>
#header #logo {
        background-color:#bc3e3f !important;
}
 
#sidebar .side-menu>ul li.current {
        background-color:#bc3e3f !important;
}
 
#sidebar .menu-pages {
    color:#bc3e3f;
}
 
a, #sidebar a {
    color:#bc3e3f;
}
 
a:hover, #sidebar a:hover {
        color:#712626;
}
 
.panel-category a:hover {
        color:#712626;
}
 
#info-center .panel-body>.row h5 a {
        color:#bc3e3f;
}
 
#info-center .panel-body>.row h5 a:hover {
        color:#712626;
}
 
#info-center .panel-body>.row h5 {
        color:#bc3e3f;
}
 
.panel-default>.panel-heading {
    background-color: #f5f5f5 !important;
}
 
.panel-heading {
        background-color:#bc3e3f !important;
}
 
.panel.panel-category {
        border-color:#bc3e3f;
}
 
#info-center .panel-heading {
        background-color:#8b302f !important;
        border-color:#8b302f;
}
 
#info-center .panel-primary {
        border-color:#8b302f;
}
<?php endif; ?>
 
<?php if (isset($_GET['TemaLaranja'])): ?>
#header #logo {
        background-color:#cf742d !important;
}
 
#sidebar .side-menu>ul li.current {
        background-color:#cf742d !important;
}
 
#sidebar .menu-pages {
    color:#cf742d;
}
 
a, #sidebar a {
    color:#cf742d;
}
 
a:hover, #sidebar a:hover {
        color:#7a451a;
}
 
.panel-category a:hover {
        color:#7a451a;
}
 
#info-center .panel-body>.row h5 a {
        color:#cf742d;
}
 
#info-center .panel-body>.row h5 a:hover {
        color:#7a451a;
}
 
#info-center .panel-body>.row h5 {
        color:#cf742d;
}
 
.panel-default>.panel-heading {
    background-color: #f5f5f5 !important;
}
 
.panel-heading {
        background-color:#cf742d !important;
}
 
.panel.panel-category {
        border-color:#cf742d;
}
 
#info-center .panel-heading {
        background-color:#995621 !important;
        border-color:#995621;
}
 
#info-center .panel-primary {
        border-color:#995621;
}
<?php endif; ?>

<?php if (isset($_GET['DesabilitarYou'])): ?>
abbr.bbc_you span {
	display: none;
}

abbr.bbc_you:after {
	content: "[you]";
}
<?php endif; ?>