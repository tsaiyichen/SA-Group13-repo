<?php
session_start();
if($_SESSION['level'] == 'user'){
?>
<div class="classynav">
    <ul>
    <li><a href="home.php">首頁</a></li>
    <li><a href="count1.php">計算碳排</a></li>
    <li><a href="history.php">歷史紀錄</a></li>
    <li><a href="personal.php">個人資料管理</a></li>
    <li><a href="logout.php"><font style="color:#70c745;">Hi&nbsp&nbsp <?php echo $_SESSION['name']."  登出"?></font></a></li>
    </ul>
    </div>
<?php
}elseif($_SESSION['level'] == null){?>
    <div class="classynav">
                                      <ul>
                                           <li></li>
                                           <li></li>
                                           <li></li>
                                           <li></li>
                                           <li><a href="login.php"><font style="color:#70c745;">登入|註冊</font></a></li>
                                      </ul>
                                </div>
                                <?php
}
?>