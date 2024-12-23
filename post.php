<?php 
    $title = 'Post';
    require 'include/header.php';
    require 'database.php';
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM posts WHERE id = ?");
    $stmt->execute([$id]);
    $post = $stmt->fetch();
?>
    <main class="container mt-5">
    <h4><?= $post['id'] ?></h4>
    <h1><?= $post['title'] ?></h1>
    <p class="fs-5 col-md-8"><?= $post['body'] ?></p>
    <p><?= $post['created_at'] ?></p>
  </main>
<?php require 'include/footer.php'; ?>