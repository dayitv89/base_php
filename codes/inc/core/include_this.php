<?php
    function include_this($fileName) {
        if (file_exists($fileName)) {
          require_once($fileName);
        } else {
          echo 'Oops server internal error. Includes not exist: ' . $fileName;
        }
    }
?>
