<?php

// $acc='admin';
// $pw='1234';
// if(!empty($_POST)){
//     if($_POST['acc']==$acc && $_POST['pw']==$pw){
//         echo "帳密正確，登入成功";
//     }else{
//         echo "帳密錯誤，登入失敗";
//     }
// }

?>
<h1>登入頁面</h1>

<?php
if(isset($_GET['err'])){
    echo "<span style='color:red'>";
    echo $_GET['err'];
    echo "</span>";
}
?>

<!-- <form action="?" method="post"> -->
<form action="check.php" method="POST">
    <div>
        <label for="acc">帳號:</label>
        <input type="text" name="acc" id="acc">
    </div>
    <div>
        <label for="pw">密碼:</label>
        <input type="password" name="pw" id="pw">
    </div>
    <div>
        <input type="submit" value="登入">
    </div>
</form>