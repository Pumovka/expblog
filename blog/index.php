<?php
$title = 'Главная страница | Блог';
include 'includes/header.php';

$sql = "SELECT * FROM posts";
$posts = $pdo->query($sql)->fetchAll();
var_dump($posts);
?>

    <section>
        <h2>Заголовок поста</h2>
        <time>23.07.2021</time>
        <p>Анотация поста</p>
        <a href="post.php">Читать далее...</a>
        <hr>
    </section>
    <section>
        <h2>Заголовок поста</h2>
        <time>23.07.2021</time>
        <p>Анотация поста</p>
        <a href="post.php">Читать далее...</a>
        <hr>
    </section>
    <section>
        <h2>Заголовок поста</h2>
        <time>23.07.2021</time>
        <p>Анотация поста</p>
        <a href="post.php">Читать далее...</a>
        <hr>
    </section>

<?php
include 'includes/footer.php';