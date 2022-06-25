<?php
    include("conect_sql.php");
    error_reporting( error_reporting() & ~E_NOTICE );
    mysqli_close($conexion);
?>