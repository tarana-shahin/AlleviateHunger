<?php
session_start();
session_destroy();
session_unset();
// session_reset();
header('location:index.php');