<?php
$title = 'Создание поста';
$forUser = true;
include 'includes/header.php';
$error = false;
$success = false;

if(isset($_POST['submit'])){
    if(!$_POST['title'] || !$_POST['content'] || !$_POST['description']){
        $error = 'Заполните все поля';
    }


    if(!$error){
        $sql = "INSERT INTO posts (`user_id`,`title`,`content`, `description`, `date`) VALUES ('$user[id]','$_POST[title]','$_POST[content]','$_POST[description]', NOW() )";
     /*  var_dump($sql);*/
        $pdo ->query($sql);
        $success = true;

    }
}

?>

<h1>Создание поста</h1>
<?php if ($error): ?>
    <p><?=$error?></p>
<?php endif;?>
<?php if ($success):?>
    <p>Пост добавлен <a href="/">На главную</a></p>
<?php endif;?>
<form action="post-create.php" method="post">
    <label>
        Заголовок <input type="text" name="title">
    </label>
    <br>
    <label>
        Описание<br>
        <textarea cols="30" rows="10" name="description"></textarea>
    </label>
    <br>
    <label>
        Содержание<br>
        <textarea cols="30" rows="10" name="content"></textarea>
    </label>
    <br>
    <input type="submit" value="Создать пост" name="submit">
</form>

<?php
include 'includes/footer.php';
