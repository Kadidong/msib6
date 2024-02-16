<!-- main.php -->
<div class="col-md-9">
    <!-- panggil: index.php?hal=home -->
    <?php
    //tangkap request hal di URL (index.php?hal=...)
        $hal=$_GET['hal'];
        if (!empty($hal)){
            include_once $hal.'.php'; //file yang di tuju
        }  
        else {
            include "home.php"; //default ke home
        }
    ?>
    </div>     	
</div>
