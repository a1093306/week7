<?php
    //如果出現header already sent
    //ob_start;
    session_start();

    if(isset($_SESSION['login'])){
        if($_SESSION['login']=="Yes"){
            echo "<a href='logout.php'>登出系統</a>";
        }else{
            header('Location:loginFailed.php');
            echo "非法進入系統</br>";
            echo "<a href='login.php'>回登入首頁</a>";
            exit();
        }
    }else{
        echo "非法進入系統</br>";
        echo "<a href='login.php'>回登入首頁</a>";
        exit();
    }

?>



<?php
require("DBconnected.php");

$SQL="SELECT * FROM user";

echo "<h1>使用者列表</h1>";
if ($result=mysqli_query($link, $SQL)){
    echo "<table border='1'>";
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["uName"]."</td><td>".$row["uPwd"]."</td><td>".$row["uRole"]."</td><td><a href='delete.php?uNo=".$row["uNo"]."'>刪除</a></td><td><a href='update.php?uNo=".$row["uNo"]."'>修改</a></td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>