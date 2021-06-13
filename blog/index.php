<?php
$title = 'Главная страница | Блог';
include 'includes/header.php';

$sql = "SELECT * FROM posts";
$posts = $pdo->query($sql)->fetchAll();

?>
<?php foreach ( $posts as $post): ?>
    <section>
        <h2><?=$post['title']?></h2>
        <?=getUser($post['user_id'])['name']?>
        <time><?=$post['date']?></time>
        <p><?=$post['description']?></p>
        <a href="post.php?id=<?=$post['id']?>">Читать далее...</a>
        <hr>
    </section>
    <?php endforeach; ?>


<?php
include 'includes/footer.php';