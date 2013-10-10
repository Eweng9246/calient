<?php 
require('../model/database.php');
require('../model/shipping_db.php');
require('../model/criteria_db.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'upload';
}

if($action='upload'){
    include('upload_form.php');
}

if($action='writedata'){
    $file=$_FILES['file']['tmp_name'];
    $handle=fopen($file, 'rb');
    
    if($fileopen=fgetcsv($handle, 1000, ",") !== false){
        
    }
}

?>