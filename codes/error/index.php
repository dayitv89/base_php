<?php
  if (isset($_GET['_error_']) && $_GET['_error_']) {
    include_this(__ERROR__.$_GET['_error_']);
    exit();
  }
?>
