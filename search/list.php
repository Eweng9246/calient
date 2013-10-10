<?php include '../view/header.php'; ?>

<div id="main">

<?php include '../view/sidebar.php'; ?>
    
<h2>MEMS in inventory</h2>   
    <div id="content">
        <!-- display a table of products -->
        <form action="." method="post">
        <table border ="1">
            <tr id="middle">
                <th>&nbsp;</th>
                <th>Wafer</th>
                <th>Die</th>
                <th>Yield</th>
                <th>Q</th>
                <th>Ship Date</th>
                <th>Comment</th>
            </tr>
            <?php foreach ($list as $shippings) : ?>
            <tr id="middle">
                <td>
                    <input type="hidden" name="action" value="change_value" />
                    <input type="checkbox" name="change[]" value="<?php echo $shippings['MEMS_ID']; ?>"/>
                </td>                
                <td><?php echo $shippings['Wafer']; ?></td>
                <td><?php echo $shippings['RC']; ?></td>
                <td><?php echo $shippings['Yield']; ?></td>
                <td><?php echo $shippings['Q']; ?></td>
                <td><?php echo $shippings['shipdate']; ?></td>
                <td><?php echo $shippings['Comment']; ?></td>
            </tr>
            <?php endforeach; ?>
         </table>
         <input type="submit" value="Alter values" />
         </form>
        
        <form action="." method="post">
            <input type="submit" value="Search by another criteria" />
        </form>
    </div>

</div>

<?php include '../view/footer.php'; ?>