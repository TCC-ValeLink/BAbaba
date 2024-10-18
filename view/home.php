<?php Include("blades/top.php")?>
<?php Include("blades/src.php")?>
    <div class="body-home">

    <?php Include("../controller/visual-post.php")?>
   <?php 
   echo $_SESSION['idUsuario'];
   ?> 
    </div>

<?php Include("blades/followemp.php")?>
<?php Include("blades/menu.php")?>
<?php Include("blades/footercomp.php")?>