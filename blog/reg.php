<?php
$title = 'Регистрация';
include 'includes/header.php';
$error = false;
$success = false;
if(isset($_POST['submit'])){
   if(!$_POST['name'] || !$_POST['login'] || !$_POST['password']){
       $error = 'Заполните все поля';
   }

   if($pdo->query("SELECT * FROM users WHERE login = '$_POST[login]'")->fetch()){
       $error ='Такое имя пользователя существует';

   }
    if(!$error){
       $sql = "INSERT INTO users (`name`,`login`, `password`) VALUES ('$_POST[name]','$_POST[login]' , '$_POST[password]')";
      $pdo ->query($sql);
       $success = true;
   }
}
?>

<h1>Регистрация</h1>
<?php if ($error): ?>
<p><?=$error?></p>
    <?php endif;?>
<?php if ($success):?>
    <p>Вы успешно зарегестрировались! <a href="auth.php">Авторизироваться</a></p>
    <?php endif;?>
<form action="reg.php" method="post">
    <label>
        Имя <input type="text" name="name">
    </label>
    <br>
    <label>
        Логин <input type="text" name="login">
    </label>
    <br>
    <label>
        Пароль <input type="password" name="password">
    </label>
    <br>
    <input type="submit" name="submit" value="Зарегистрироваться">
</form>

<?php
include 'includes/footer.php';
