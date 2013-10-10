<?php
    function shipping_list(){
        global $MEMS;
        global $pages;
            $query = "SELECT * FROM Inventory 
            WHERE Yield >=320 AND (Q = 'Pass' OR Q='No Q') AND shipdate = ' '
            ORDER BY Wafer ASC, RC ASC " .$pages->get_limit();
            echo $query;
        $shipping = $MEMS -> query($query);
        return $shipping;
    }
    
    function inquire_row(){
        global $MEMS;
        global $pages;
        $x=0;
        $query = $MEMS->prepare("SELECT COUNT(*) FROM Inventory
            WHERE Yield >=320 AND (Q = 'Pass' OR Q='No Q') AND shipdate = ' '");
        $query -> execute();
        if($query->fetchColumn()>0){
            $query = "SELECT * FROM Inventory
            WHERE Yield >=320 AND (Q = 'Pass' OR Q='No Q') AND shipdate = ' '";
            foreach($MEMS->query($query) as $row){
                $x++;
            }
        }
        return $x;
    }
    
    function ship_out($ID, $time){
        global $MEMS;
        $query="UPDATE Inventory
            SET shipdate= '$time'
            WHERE MEMS_ID IN ($ID)";
        $MEMS -> exec($query);
    }
    
    function ship_update($array){
        global $MEMS;
        $query="SELECT * FROM Inventory
            WHERE MEMS_ID IN ($array)";
        $shipping = $MEMS -> query($query);
        return $shipping;
    }
    
    function ship_list(){
        global $MEMS;
        $query="SELECT * FROM Inventory
            WHERE shipdate IS NOT NULL
            ORDER BY Wafer ASC";
        $shipping = $MEMS -> query($query);
        return $shipping;
    }
?>

