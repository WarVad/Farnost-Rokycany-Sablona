<?php get_header();?>

<h2 style="color:#DC6C4A; text-align:center; padding-top:125px;">Error 404 - Ale to je nepříjemné, stránka, kterou hledáte, nebyla nenalezena!</h2>    <!-- Výpis hlášky -->
<h2 style="color:#C1AD7E; text-align:center;">


<?php 
  header( "refresh:10;url=https://farnost-rokycany.cz/" );         //V případě, že se někdo dostane na tuto stránku, bude přesměrován na stránku úvodní za 10 sekund/
  echo 'Budete automaticky přeměrováni na úvodní stránku, vyčkejte 10 sekund nebo klikněte <a href="https://farnost-rokycany.cz/">zde</a>.';       //Výpis hlášky a možnost přesměrovat se sám/
?>
</h2>