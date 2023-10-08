<?php
session_start();

// Menghapus sesi untuk logout
session_destroy();

header("Location: login.php");
exit;
?>
