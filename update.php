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
$uNo=$_GET["uNo"];
$SQL="SELECT * FROM user WHERE uNo='$uNo'";
if ($result=mysqli_query($link, $SQL)){
    while($row=mysqli_fetch_assoc($result)){
        $uName=$row['uName'];
        $uPwd=$row['uPwd'];
        $uRole=$row['uRole'];
    }
}
?>

<h1>使用者更新</h1>
<form action="updateconfirm.php" method="post">
使用者編號:<?php echo $uNo;?></br>
<input type="hidden" name="uNo" value='<?php echo $uNo;?>'>
請輸入帳號:<input type="text" name="uName" value='<?php echo $uName;?>'></br>
請輸入密碼:<input type="text" name="uPwd" value='<?php echo $uPwd;?>'></br>

<?php
if($uRole=='user'){
    echo "請選擇使用者:User<input type='radio' name='uRole' value='user' checked>
                    Admin<input type='radio' name='uRole' value='admin'></br>";
}else{
    echo "請選擇使用者:User<input type='radio' name='uRole' value='user'>
                    Admin<input type='radio' name='uRole' value='admin' checked></br>";
}
?>


<input type="submit" value="更新"></br>
</from>