<!DOCTYPE HTML>
<html>
<?php
    session_start();
    if(!isset($_SESSION['loggedin']))
    {
        header("Location:../index.html");
        exit();
    }
    if(isset($_GET['login']))
    {
        $name = $_SESSION['login_admin'];
        $message = "Welcome, " . $name . "!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
?>
<body>
<form action="dash.php#" method="POST">
        <select name="Tables" id="ddTables">
            <?php
                include_once("../config.php");
                $sql = "SHOW TABLES";
                $tableResult = mysqli_query($db,$sql);
                $tables = mysqli_fetch_all($tableResult);
                if($tables)
                {
                    foreach($tables as $table)
                    {
                        $name = $table[0];
                        echo '<option value="'.$name.'">'.$name.'</option>';;
                    }
                }
                else
                {
                    echo '<option value="0">No Data</option>';
                }
            ?>
        </select>
        <input type="submit" id="tableSubmit" value="Submit"/>
    </form>
    <br><br><br>
    <!--<button type = "button" onclick="addatt.php#"> Add Attraction </button> -->
<?php 
    if (isset($_POST['Tables']))
    {
        include_once("../config.php");
        $selection = $_POST['Tables'];
        $sql = "SELECT * FROM $selection";
        $results = mysqli_query($db,$sql);
        $resultset = NUll;
        
        //https://stackoverflow.com/questions/29264574/how-to-echo-sql-table-data-in-auto-created-html-php-table
        if($results)
        {
            while ($row = mysqli_fetch_assoc($results)) {
                if (empty($columns)) {
                    $columns = array_keys($row);
                }
                $resultset[] = $row;
            }
        
            if( count($resultset) > 0) {
                ?>
                            <table class="table table-bordered" >
                                <thead>
                                    <tr class='info';>
                                        <?php foreach ($columns as $k => $column_name ) : ?>
                                            <th> <?php echo $column_name;?> </th>
                                        <?php endforeach; ?>
                                    </tr>
                                </thead>
                                <tbody>
                
                                    <?php
                
                                        // output data of each row
                                        foreach($resultset as $index => $row) {
                                        $column_counter =0;
                                    ?>
                                        <tr class='success';>
                                            <?php for ($i=0; $i < count($columns); $i++):?>
                                                <td> <?php echo $row[$columns[$column_counter++]]; ?>   </td>
                                            <?php endfor;?>
                                        </tr>
                                    <?php } ?>
                
                                </tbody>
                            </table>
                
                    <?php }else{ ?>
                        <h4> Information Not Available </h4>
                    <?php } 
        }
    } ?>
    <br>
    <a href = "addatt.php"> Add Attraction </a>
    <br>
    <a href = "rematt.php"> Remove Attraction </a>
</body>
</html>