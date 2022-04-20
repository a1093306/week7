<?php

require("DBconnected.php");
$uNo=$_GET["uNo"];
echo $uNo;
$SQL="DELETE FROM user WHERE uNo='$uNo'";
mysqli_query($link, $SQL);

if(mysqli_query($link, $SQL)){
    echo "<script type='text/javascript'>";
    echo "alert('刪除成功');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=list.php'>";
}else{
    echo "<script type='text/javascript'>";
    echo "alert('刪除失敗');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=list.php'>";
}

?>