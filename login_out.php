<?php
session_destroy();
unset($_SESSION);
echo "<script>location.href='index.php';</script>";
?>