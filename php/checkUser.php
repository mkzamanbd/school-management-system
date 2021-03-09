<?php

if($_SESSION['rainbow_role'] == 'user')
    echo '<script type="text/javascript">window.location="login.php"; </script>';

?>