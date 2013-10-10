<?php
require('../model/database.php');
require('../model/shipping_db.php');
require('../model/criteria_db.php');
require('../view/paginator.php');


if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'shipping_list';
}

if($action=='shipping_list'){ 
    $numrows=inquire_row();
    $pages= new Paginator('20', 'p');
    $pages->set_total($numrows);
    $shipping=shipping_list();
    include('shipping_list.php');
}

else if($action=='ship_out'){
    $ship = $_POST['result'];
    $array="'" . implode("','", $ship) . "'";
    $shipping_out=ship_update($array);
    include("shipping_out.php");
}

if($action=='ship_value_change'){
    
    if ($_POST["decision"]=="Yes") {
            $now=date('m/d/Y');
            $ship_confirm = $_POST['result'];
            $array="'" . implode("','", $ship_confirm) . "'";
            ship_out($array, $now);
            header("Location: index.php");
    }
    
    if ($_POST["decision"]=="Go Back To Shipping List") {
          header("Location: index.php");  
    }
}
?>