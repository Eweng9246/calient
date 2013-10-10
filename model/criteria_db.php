<?php
    function list_all(){
        global $MEMS;
        $query = "SELECT * FROM Inventory";
        $shipping = $MEMS -> query($query);
        return $shipping;
    }
    
    function delete_shipping($wafer, $rc){
        global $MEMS;
        $query="UPDATE Inventory
            SET shipdate = NULL
            WHERE wafer='$wafer' AND rc='$rc'";
        $MEMS -> exec($query);
    }
    
    function search_Q($Q_value){
        global $MEMS;
        $query="SELECT * FROM Inventory
            WHERE Q = '$Q_value'
            ORDER BY wafer";
        $shipping = $MEMS -> query($query);
        return $shipping;
    }
        
    function search_date($start, $end){
        global $MEMS;
        $query="SELECT * FROM Inventory
            WHERE shipdate BETWEEN '$start' AND '$end'
            ORDER BY shipdate";
        $shipping = $MEMS -> query($query);
        return $shipping;
    }
    
    function search_wafer($wafer){
        global $MEMS;
        $query="SELECT * FROM Inventory
            WHERE Wafer='$wafer'
            ORDER BY Wafer";
        $shipping = $MEMS -> query($query);
        return $shipping;
    }
    
    function get_list_update($array){
        global $MEMS;
        $query="SELECT*FROM Inventory
            WHERE MEMS_ID IN ($array)";
        $shipping = $MEMS -> query($query);
        return $shipping;
    }
    
    function update_shipping($ID, $yield, $Q, $date){
        global $MEMS;
        $query="UPDATE Inventory
            SET Yield='$yield', Q='$Q', shipdate='$date'
            WHERE MEMS_ID='$ID'";
        $MEMS -> exec($query);
    }
?>

