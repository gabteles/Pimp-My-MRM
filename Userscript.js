// ==UserScript==
// @name         Pimp My MRM
// @namespace    http://www.mundorpgmaker.com.br/forum/
// @version      0.3
// @description  Userscript para utilizar o Pimp My MRM
// @match        http://www.mundorpgmaker.com.br/forum/*
// @copyright    2014+, Gabriel Teles
// ==/UserScript==

PMMRMOptions = [
// == CONFIGURAÇÕES
	'RemoverBarrinhas',
// == FIM DA CONFIGURAÇÃO
];

var css = document.createElement("link");
css.rel="stylesheet";
css.type="text/css"
css.href="http://www.mundorpgmaker.com.br/forum/util/Pimp-My-MRM.css.php?" + PMMRMOptions.join('&')
document.head.appendChild(css);
