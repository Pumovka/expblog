<?php
$title = 'Создание поста';
include 'includes/header.php';
?>

<h1>Создание поста</h1>
<form>
    <label>
        Заголовок <input type="text">
    </label>
    <br>
    <label>
        Описание<br>
        <textarea cols="30" rows="10"></textarea>
    </label>
    <br>
    <label>
        Содержание<br>
        <textarea cols="30" rows="10"></textarea>
    </label>
    <br>
    <input type="submit" value="Создать пост">
</form>

<?php
include 'includes/footer.php';
