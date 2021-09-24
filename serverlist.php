
<!-- Made by Marek_p for everyone :) -->
 
<?php

include ("serverlistCONFIG.php"); // Import souboru s nastavením

?>

<html> 

<head>
  <meta charset="UTF-8">
  <title><?php echo($cardname) ?></title> <!-- Jméno karty v prohlížeči podle nastavení -->
  <link rel="stylesheet" href="serverlist.css"> <!-- Import CSS souboru se stylem stránky -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'> <!-- Import Ikon -->
</head>

<body>

<section class="home-section">
<div class="home-content">
<h1><i class='bx bxs-notepad'></i> <?php echo($name) ?> <i class='bx bxs-notepad'></i></h1> <!-- Jméno stránky podle nastavení -->
<div class="overview-boxes">

<!-- Servery -->
<!-- Server 1 určen v nastavení -->

<div class="box">
  <div class="right-side"> 
    <i class='bx bxs-heart-circle status<?php
    if ($status1->online == 1) {
      echo "1"; // Pokud je server online, určí CSS class na zelenou
    }  
      else {
        echo "0"; // Pokud je server offline, určí CSS class na červenou
    } 
    ?>'></i><div class="name"> <?php echo($jmeno1) ?></div> <!-- Jméno serveru z nastavení -->
    <div class="box-topic"><i class='bx bxs-user'></i> Hráčů: <?php
    if ($status1->online == 1) {
      echo $status1->players->online; // Pokud je server online, napíše počet hráčů
    }  
      else {
        echo "?"; // Pokud je server offline, napíše otazník
    } 
    ?>/<?php
    if ($status1->online == 1) {
      echo $status1->players->max; // Pokud je server online, napíše počet slotů
    }  
      else {
        echo "?"; // Pokud je server offline, napíše otazník
    } 
    ?></div>
    <div class="box-topic"><i class='bx bxs-cube'></i> Verze: <?php
    if ($status1->online == 1) {
      echo $status1->version; // Pokud je server online, napíše verzi serveru
    }  
      else {
        echo "?"; // Pokud je server offline, napíše otazník
    } ?></div>
    <div class="box-topic"><i class='bx bxs-bookmark'></i> Adresa: <?php echo($ip1) ?></div> <!-- IP serveru z nastavení -->
  </div>
</div>

<!-- Server 2 určen v nastavení -->
<!-- Tentokrát bez poznámek :) -->

<div class="box">
  <div class="right-side"> 
    <i class='bx bxs-heart-circle status<?php
    if ($status2->online == 1) {
      echo "1";
    }  
      else {
        echo "0";
    } 
    ?>'></i><div class="name"> <?php echo($jmeno2) ?></div>
    <div class="box-topic"><i class='bx bxs-user'></i> Hráčů: <?php
    if ($status2->online == 1) {
      echo $status2->players->online;
    }  
      else {
        echo "?";
    } 
    ?>/<?php
    if ($status2->online == 1) {
      echo $status2->players->max;
    }  
      else {
        echo "?";
    } 
    ?></div>
    <div class="box-topic"><i class='bx bxs-cube'></i> Verze: <?php
    if ($status2->online == 1) {
      echo $status2->version;
    }  
      else {
        echo "?";
    } ?></div>
    <div class="box-topic"><i class='bx bxs-bookmark'></i> Adresa: <?php echo($ip2) ?></div>
  </div>
</div>

</div>
</body>

<style>
.home-section{ /* Pozadí určeno v nastavení */
  position: relative;
  background: <?php echo($color) ?>;
  min-height: 100vh;
  width: 100%;
}
</style>