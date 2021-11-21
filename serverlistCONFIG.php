
<!-- Made by Marek_p for everyone :) -->

<?php

//    Nastavení ServerListu

// Obecné Nastavení
$name = "ServerList"; // Jméno stránky
$cardname = "ServerList"; // Jméno karty v prohlížeči
$color = "#0e1538"; // HEX Barva pozadí

// Seznam Serverů 
$ip1 = 'hypixel.net'; // IP serveru 1
$jmeno1 = 'Hypixel'; // Jméno serveru 1

$ip2 = 'mc.server.xd'; // IP serveru 2
$jmeno2 = 'KidLand'; // Jméno serveru 2

// Seznam API Requestů
$status1 = json_decode(file_get_contents('https://api.mcsrvstat.us/2/' .$ip1)); // API Request Server 1
$status2 = json_decode(file_get_contents('https://api.mcsrvstat.us/2/' .$ip2)); // API Request Server 2

?>
