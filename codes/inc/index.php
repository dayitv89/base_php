<?php
  require_once('inc/config/config.php');
  require_once('inc/core/include_this.php');
  require_once('inc/core/route_logic.php');
  require_once('routes/routes.php');
  require_once('error/index.php');

  /// Handle routes to go
  $path = $_GET['_path_'] ?? '';
  route($path);
?>
