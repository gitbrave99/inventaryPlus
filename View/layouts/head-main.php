<?php
// include language configuration file based on selected language
$lng = "en";
if (isset($_GET['lang'])) {
   $lng = $_GET['lang'];
    $_SESSION['lang'] = $lng;
}
if( isset( $_SESSION['lang'] ) ) {
    $lng = $_SESSION['lang'];
}else {
    $lng = "en";
}
require_once ("./assets/lang/" . $lng . ".php");
?>
<!DOCTYPE html>
<html lang="<?=$lng?>"  data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg">