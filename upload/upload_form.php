<?php include '../view/header.php'; ?>

<div id="main">


    <div id="sidebar">
        <!-- display a list of categories -->
        <h2>Index</h2>
        <ul class="nav">
            <li>
            <a href="?action=shipping_list">
                Shipping List
            </a>
            </li>
            
            <li>
            <a href="?action=upload">
                Upload
            </a>
            </li>
            
            <li>
            <a href="?action=ship_out">
                List of MEMS Shipped Out
            </a>
            </li>
        </ul>
    </div>
    
    <h4>Upload CSV File</h4>
    <div id="content">
        <form action="." method="post" enctype="multipart/form-data">
            <input type="file" name="datafile"><br />
            <input type="hidden" name="action" value="writedata">
            <input type="submit" value="Upload">
        </form>
    </div>

</div>

<?php include '../view/footer.php'; ?>