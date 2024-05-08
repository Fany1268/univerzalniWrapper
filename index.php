<?php

// Autoloader načte třídy
function nactiTridu($trida) : void
{
    require("tridy/$trida.php");
}
/*třída je vložena do složky tridy*/
spl_autoload_register("nactiTridu");


/*
 * Připojí se na konkrétní databázy
 */
Databaze::pripoj('localhost', 'root', '', 'db_???????????????');


/*
 * vytvoří třídu
 */
$spravceClanku = new SpravceClanku();

