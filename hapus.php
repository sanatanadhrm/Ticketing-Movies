<?php

require 'fungsi.php';

$id = $_GET["id"];

hapusakun($id);

header("Location: admin.php");
?>