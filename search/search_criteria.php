<?php include '../view/header.php'; ?>

<div id="main">

<?php include '../view/sidebar.php'; ?>
    
    <h2>What criteria do you want to search by?</h2>
    
    <div id="content">
        <!-- display a table of products -->
        <table>
            <tr>
                <th>Criteria</th>
                <th>&nbsp;</th>
            </tr>

            <tr>
                <td>List All</td>
                <td class="right"><form action="." method="post">
                    <input type="hidden" name="action"
                           value="search_criteria" />
                    <input type="hidden" name="criteria"
                           value="all" />
                    <input type="submit" value="List All" />
                </form></td>
            </tr>
            
            <tr>
                <td>Wafer</td>
                <td class="right"><form action="." method="post">
                    <input type="hidden" name="action"
                           value="search_criteria" />
                    <input type="hidden" name="criteria"
                           value="wafer" />
                    Wafer:
                    <input type="text" name="wafer"/>
                    <br/>
                    <input type="submit" value="Submit" />
                </form></td>
            </tr>
            
            <tr>
                <td>Q</td>
                <td class="right"><form action="." method="post">
                    <input type="hidden" name="action"
                           value="search_criteria" />
                    <input type="hidden" name="criteria"
                           value="Q" />
                    <input type="submit" name="Q_value" value="Pass" />
                    <input type="submit" name="Q_value" value="Fail" />
                </form></td>
            </tr>
            
           <tr>
                <td>
                Ship Date Range <br/>
                Format: YYYY-MM-DD
                </td>
                <td class="right"><form action="." method="post">
                    <input type="hidden" name="action"
                           value="search_criteria" />
                    <input type="hidden" name="criteria"
                           value="shipdate" />
                    Start date:
                    <input type="text" name="start_date"/>
                    <br/>
                    End date:
                    <input type="text" name="end_date"/>
                    <br/>
                    <input type="submit" value="Submit" />
                </form></td>
            </tr>
        </table>
    </div>

</div>

<?php include '../view/footer.php'; ?>