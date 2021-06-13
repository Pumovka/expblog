<?php
include 'includes/header.php';
$post = $pdo->query("SELECT * FROM posts WHERE id = $_GET[id]") -> fetch();
?>

<article>
    <h1><?=$post['title']?></h1>
    <?=getUser($post['user_id'])['name']?>
    <time><?=$post['date']?></time>
    <p><?=$post['content']?></p>
</article>

<?php
include 'includes/footer.php';
