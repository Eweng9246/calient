<?php include '../view/header.php'; ?>

<div id="main">

<?php include '../view/sidebar.php'; ?>
    
    <h4>Confirm again what you want to ship out</h4>
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
                <th>Comment</th>
            </tr>
            <?php foreach ($shipping_out as $shippings) : ?>
            <tr id="middle">  
                <td>
                    <input type="hidden" name="action" value="ship_value_change" />
                    <input type="checkbox" name="result[]" value="<?php echo $shippings['MEMS_ID']; ?>"/>
                </td>     
                <td><?php echo $shippings['Wafer']; ?></td>
                <td><?php echo $shippings['RC']; ?></td>
                <td><?php echo $shippings['Yield']; ?></td>
                <td><?php echo $shippings['Q']; ?></td>
                <td><?php echo $shippings['Comment']; ?></td>
            </tr>
            <?php endforeach; ?>
         </table>
            
         <input type="submit" name="decision" value="Yes" />
         <input type="submit" name="decision" value="Go Back To Shipping List" />
         </form>
    </div>

</div>

<?php include '../view/footer.php'; ?>