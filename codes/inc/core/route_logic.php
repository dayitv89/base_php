<?php
  $routes = array();

  function setRoute($src, $dest, $includeSrc = true) {
    array_push($GLOBALS['routes'], array('route' => $src, 'redirect' => $dest, 'includeSrc' => $includeSrc));
  }

  function redirect($to, $includeSrc = true) {
    $redirectTo = $includeSrc ? __SRC__ . $to : $to;
    include_this($redirectTo);
    exit();
  }

  function redirectError($to) {
    redirect(__ERROR__.NOT_FOUND, false);
  }

  function route($r) {
    $paths = explode('/', $r);
    if (count($paths) === 0 || in_array($paths[0], ROOTPAGE_ROUTES)) {
      redirect(ROOTPAGE);
    } else {
      foreach ($GLOBALS['routes'] as $value) {
        if (preg_match("#^$paths[0]#", $value['route']) === 1) {
          $params = explode('/', $value['route']);
          for ($i = 1; $i < count($params); $i++) {
            $_GET[ltrim($params[$i], ':')] = $paths[$i];
          }
          redirect($value['redirect'] . '.php', $value['includeSrc']);
        }
      }
    }
    redirectError(NOT_FOUND);
  }
?>
