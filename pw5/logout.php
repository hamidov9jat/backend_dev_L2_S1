<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
header("Location: https://nijat-hamidov.alwaysdata.net/back-end-development-l2s1/pw5/index.php");