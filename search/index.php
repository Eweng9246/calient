<?php
require('../model/database.php');
require('../model/shipping_db.php');
require('../model/criteria_db.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'search_by';
}

if($action=='search_by'){
    include('search_criteria.php');
}

if($action=='search_criteria'){
    
    $criteria=$_POST['criteria'];
    
    if($criteria=='all'){
        $list=list_all();
        include('list.php');
    }
    
    else if($criteria=='wafer'){
        $search_wafer=$_POST["wafer"];
        $list=search_wafer($search_wafer);
        include('list.php');
    }
    
    else if($criteria=='Q'){
        $search_Q=$_POST["Q_value"];
        $list=search_Q($search_Q);
        include('list.php');
    }
    
    else if($criteria=='shipdate'){
        $search_start=$_POST["start_date"];
        $search_end=$_POST["end_date"];
        $start_date= strtotime("$search_start");
        $end_date= strtotime("$search_end");
        $list=search_date($search_start, $search_end);
        include('list.php');
    }
}

if($action=='change_value'){
    $changes = $_POST['change'];
    $array="'" . implode("','", $changes) . "'";
    $change=get_list_update($array);
    include("change_criteria.php");
}

if($action=='confirm_change'){
        if ($_POST["decision"]=="Submit change") {
            $ID=$_POST['result'];
            $new_yield = $_POST['new_yield'];
            $new_Q = $_POST['new_Q'];
            $new_shipdate = $_POST['new_shipdate'];
            $number=count($ID);
            for($x=0; $x<$number; $x++){
                update_shipping($ID[x], $new_yield[x], $new_Q[x], $new_shipdate[x]);
            }
            $action='search_by';
            header("Location: index.php");
        }
        
        else{
            $action='search_by';
            header("Location: index.php");            
        }
}

?>