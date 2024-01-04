<?php
    include_once "../display/header.php";
    include_once "../display/slider.php";
    include_once "lsp.php";
    
    $lsp = new lsp;
    if(!isset($_GET['lsp_id']) || $_GET['lsp_id'] == null)
        echo "<script window.location.href = 'lsp_list.php'></script>";
    else
        $lsp_id = $_GET['lsp_id'];   
    $delete_lsp = $lsp -> delete_lsp($lsp_id);
?>