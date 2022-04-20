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

<html>

<head>
    <title>墾丁三日遊</title>
    <link rel="icon" href=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2wI5VQBs26xZ8N0pqvpd_7Yjfp86Stj-PUQ&usqp=CAU" type="image/x-icon" />
</head>

<body>
    <?php
        echo "<body bgcolor='#20EDE2'>";
    ?>
    <font face="標楷體">
        <center><h1>墾丁三日遊</h1></center>
    </font>
    <font size='4'face="標楷體">
        <h3>第一天</h3>
        時段&nbsp&nbsp&nbsp&nbsp行程<br/>
        <font color="red">早上</font>&nbsp&nbsp&nbsp&nbsp由高雄火車站或小港機場到墾丁。→午餐。(請參考高雄往墾丁的客運)<br/>
        <font color="red">中午</font>&nbsp&nbsp&nbsp&nbsp小灣戲水→青年活動中心→情人灘拾貝、觀落日→晚餐至恆春覓食。<br/>
        <font color="red">晚上</font>&nbsp&nbsp&nbsp&nbsp墾丁大街踩街→找店預約第二天水上活動→小灣觀星→回民宿裡睡覺。<br/>
        <h3>第二天</h3>
        時段&nbsp&nbsp&nbsp&nbsp行程<br/>
        <font color="red">早上</font>&nbsp&nbsp&nbsp&nbsp早餐→水上活動(浮潛、乘坐香蕉船、水上摩托車…等)→午餐。<br/>
        <font color="red">中午</font>&nbsp&nbsp&nbsp&nbsp找店承租一天的摩托車(至明天中午)<br/>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp往西半島出發→南灣→瓊麻館→後壁湖碼頭→貓鼻頭→白砂→關山飛來石→關山日落→晚餐至恆春覓食。<br/>
        <font color="red">晚上</font>&nbsp&nbsp&nbsp&nbsp恆春→出火→回墾丁大街補踩街→鵝鑾鼻燈塔夜遊→龍磐觀星→回民宿做好夢…<br/>
        <h3>第三天</h3>
        時段&nbsp&nbsp&nbsp&nbsp行程<br/>
        <font color="red">早上</font>&nbsp&nbsp&nbsp&nbsp早餐→東半島之旅→船帆石→貝殼砂展示館→路過燈塔→聯勤→龍磐草原→風吹砂→港口吊橋→路過出火→恆春→墾丁<br/>
        <font color="red">中午</font>&nbsp&nbsp&nbsp&nbsp歸還摩托車→午餐吃過飯，打包行李趕路回家。<br/>
    </font>
    <br/>
    <br/>
    <center>
    <a href="http://uukt.com.tw/attraction/4"  target='new'> <img src="https://img.uukt.com.tw/view/4/1080/201611092225213f7pB.jpg" border='2'width="40%"></a>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <a href="http://uukt.com.tw/attraction/41"  target='new'> <img src="https://img.uukt.com.tw/view/41/1080/20191017115753dar4w.jpg" border='2' width="40%"></a>
</center>
    <br/>
    <br/>
    <center>
    <form action="Kenting.php" method="post" style="width:80%;" enctype="multipart/form-data">
        <font  face="Times New Roman" size='5'>
            姓名:&nbsp&nbsp<input type="text" name="uname" placeholder="name name name" required><br/>
            電子信箱:&nbsp&nbsp<input type="email" name="email" required><br/>
            連絡電話:&nbsp&nbsp<input type="tel" name="phone" required><br/>
            性別:&nbsp&nbsp<input type="radio" name="sex" value="1">男<input type="radio" name="sex" value="2">女<br/>
            飲食偏好:&nbsp&nbsp<input type="checkbox" name="food[]" value='肉'>肉<input type="checkbox" name="food[]" value='蔬菜'>蔬菜<input type="checkbox" name="food[]" value='魚'>魚<input type="checkbox" name="food[]" value='米飯'>米飯<input type="checkbox" name="food[]" value='麵食'>麵食<input type="checkbox" name="food[]" value='海鮮'>海鮮<br/>
            T-shirt尺寸:&nbsp&nbsp
            <select name="size">
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
            </select>
            <br/>
            T-shirt顏色:&nbsp&nbsp<input type="color" name="color"><br/>
            生日:&nbsp&nbsp<input type="date" name="birthday"><br/>
            票數:&nbsp&nbsp<input type="number" name="ticket"><br/>
            建議:<textarea cols='40%' rows='10' name='comment'></textarea><br/>
            上傳檔案:&nbsp&nbsp<input type='file' name='uphoto'><br/>
        </font>
        <input type="submit" name='usub'>
    </form></center>
    <center><h2>T-shirt size對照表</h2></center>
    <center><table border='1'width="70%">
        <tr>&nbsp&nbsp<th></th><th>S</th><th>M</th><th>L</th><th>XL</th></tr>
        <tr><td><center>肩寬</center></td><td><center>52</center></td><td><center>54.5</center></td><td><center>57</center></td><td><center>59</center></td></tr>
        <tr><td><center>胸寬</center></td><td><center>51</center></td><td><center>53.5</center></td><td><center>56.5</center></td><td><center>59.5</center></td></tr>
        <tr><td><center>袖長</center></td><td><center>19.5</center></td><td><center>20.5</center></td><td><center>21.5</center></td><td><center>22</center></td></tr>
        <tr><td><center>衣長</center></td><td><center>68.5</center></td><td><center>71</center></td><td><center>73.5</center></td><td><center>76</center></td></tr>
    </table></center>
    <br/>
    <br/>
</body>

</html>

<?php
    $usube=$_POST["usub"];
    if(isset($_POST["usub"])){
            echo "<script type='text/javascript'>";
            echo "alert('購買成功');";
            echo "</script>";
            echo "<meta http-equiv='Refresh' content='0;>";
    }
?>