<?php include '../view/header.php'; ?>

<div id="main">
    
<?php include '../view/sidebar.php'; ?>

<h2>MEMS available for shipping</h2>   
    <div id="content">
        <p>You have <?php echo $numrows?> dies available to ship</p>
        <!-- display a table of products -->
        <form action="." method="post">
        <table border ="1">
            <tr id="middle">
                <th>&nbsp;</th>
                <th style="width: 70px">Wafer</th>
                <th>Die</th>
                <th>Yield</th>
                <th>Q</th>
                <th>Comments</th>
            </tr>
            <?php foreach ($shipping as $shippings) : ?>
            <tr id="middle">
                <td>
                    <input type="hidden" name="action" value="ship_out" />
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
          
         <input type="submit" value="Ship Out" />
         </form>
        <?php echo $pages->page_links();?>
    </div>

</div>

<?php include '../view/footer.php'; ?>