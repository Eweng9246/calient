<?php include '../view/header.php'; ?>

<div id="main">

<?php include '../view/sidebar.php'; ?>
    
    <h4>What would you like to change?</h4>
    <div id="content">
        <!-- display a table of products -->
        <form action="." method="post">
        <table border ="1">
            <tr id="middle">
                <th>Wafer</th>
                <th>Die</th>
                <th>Yield</th>
                <th>Q</th>
                <th>Ship Date</th>
                <th>Comment</th>                
            </tr>
            <?php foreach ($change as $shippings) : ?>
            <tr id="middle">
                <td><?php echo $shippings['Wafer']; ?></td>
                <td><?php echo $shippings['RC']; ?></td>
                <td>
                    <input type="hidden" name="result[]" value="<?php echo $shippings['MEMS_ID']; ?>" />
                    <span><input type="text" name="new_yield[]" value="<?php echo $shippings['Yield']; ?>" /></span>
                </td>
                <td><span><input type="text" name="new_Q[]" value="<?php echo $shippings['Q']; ?>" /></span></td>
                <td><span><input type="text" name="new_shipdate[]" value="<?php echo $shippings['shipdate']; ?>" /></span></td>
                <td><?php echo $shippings['Comment']; ?></td>
            </tr>
            <?php endforeach; ?>
         </table>
         <input type="hidden" name="action" value="confirm_change" />
         <input type="submit" name="decision" value="Submit change" />
         <input type="submit" name="decision" value="Go back to list" />
         </form>
    </div>

</div>

<?php include '../view/footer.php'; ?>