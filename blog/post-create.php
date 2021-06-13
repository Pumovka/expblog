<?php
$title = 'Создание поста';
include 'includes/header.php';
?>
<h1>Создание поста</h1>
<form action="">
    <label for="">
        Заголовок <input type="text">
    </label>
    <br>
    <label for="">
        Описание <br> <textarea name="" id="" cols="30" rows="10"></textarea>
    </label>
    <br>
    <label for="">
        Содержание <br> <textarea name="" id="" cols="30" rows="10"></textarea>
    </label>
    <br>

     <input type="submit" value="Создать пост">

</form>
<?php
include 'includes/footer.php';
?>
