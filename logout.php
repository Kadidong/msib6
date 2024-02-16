<?php
session_start(); //mengawali sesi login
//session_destroy(); //mengakhiri sesi login dengan session_destroy (kekurangannya semua sesi di hapus/keluar, kalo banyak sesi, kalo satu sesi boleh)
unset($_SESSION['username']); //mengakhiri sesi login pada username dengan UNSET
header('location:index.php?hal=home'); //keluar sesi login di arahkan ke landing page home
?>