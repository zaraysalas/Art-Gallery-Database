<?php
if(isset($_POST['search'])){
    include("conect_sql.php");
    $query_search1 = mysqli_query($conexion,"SELECT * FROM customer_table");
    while ($query_search2 = mysqli_fetch_array($query_search1))
    {
        echo $query_search2['USERNAME'];
    }
    include("close_sql.php");  
}
?>