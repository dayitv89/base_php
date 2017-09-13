<?php
  if ($_GET['_error_']) {
    include_this(__ERROR__.$_GET['_error_']);
    exit();
  }
?>
