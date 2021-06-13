<?php
$title = 'Авторизация';
include 'includes/header.php';
$error = false;
$success = false;
if(isset($_POST['submit'])){
   if(!$_POST['login'] || !$_POST['password']){
       $error ='Заполните все поля';
   }
   if(!$error){
       if($user = $pdo ->query("SELECT * FROM users  WHERE login = '$_POST[login]' AND password = '$_POST[password]'") ->fetch()){
           $_SESSION['user_id'] = $user['id'];
           $success = true;
       } else{
           $error = 'Невереная пара логин и пароль';
       }

   }
}
?>

<h1>Авторизация</h1>
<?php if ($error): ?>
    <p><?=$error?></p>
<?php endif;?>
<?php if ($success):?>
    <p>Вы успешно авторизировались! <a href="http://blog/">Перейти на главную</a></p>
<?php endif;?>
<form action="auth.php" method="post">
    <label>
        Логин <input type="text" name="login">
    </label>
    <br>
    <label>
        Пароль <input type="password" name="password">
    </label>
    <br>
    <input type="submit" name="submit" value="Авторизоваться">
</form>

<?php
include 'includes/footer.php';
