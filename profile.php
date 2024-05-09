<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel=”stylesheet”
    href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css”
    />
    <link rel="stylesheet" href="css/index.css" />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-3">
          <img src="logo.svg" alt="" style="width: 120px" />
        </div>
        <div class="col-9"><div class="nav-text">Nav text smth</div></div>
      </div>
      <div class="row">
        <div class="col-9">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi qui ullam quo dolorum dignissimos soluta maiores, accusamus nisi nesciunt modi, reprehenderit veritatis maxime totam et odit ut corrupti quaerat, magni est obcaecati molestiae possimus. Repellat, quia numquam, praesentium saepe officiis provident doloribus optio facilis asperiores necessitatibus incidunt fuga voluptatum vel.</div>
        <div class="col-3"><div class="img-content"></div></div>
      </div>
      <div id="create-btn" class="btn btn-success">qwer</div>
      <p id="demo"></p>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12"><h1 class="hello">
          Привет, <?= $_COOKIE['User']; ?>
        </h1></div>
      </div>
      <div class="col-12">
        <form method="POST" action="profile.php">
          <input type="text" class="form" name="title" placeholder="Заголовок вашего поста">
          <textarea name="text" cols="30" rows="10" placeholder="Введите текст вашего поста ..."></textarea>
          <button type="submit" class="btn_red" name="submit">Сохранить пост!</button>
        </form>
      </div>
    </div>
    <script src="js/index.js"></script>
  </body>
</html>

<?php
require_once('db.php');
#if (isset($_COOKIE['User'])){
#  header("Location: login.php");
#}
$link = mysqli_connect('127.0.0.1', 'root', 'kali', 'first');
if (isset($_POST['submit'])) {
  $title = $_POST['title'];
  $main_text = $_POST['text'];
  if (!$title || !$main_text) die ("Заполните все поля");
  $sql = "INSERT INTO posts (title, main_text) VALUES ('$title', '$main_text')";
  if (!mysqli_query($link, $sql)) die ("Не удалось добавить пост");
}
?>