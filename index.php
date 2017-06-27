<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Лендинг</h1>
<h4>Форма в конце лендинга</h4>
<?php if($_COOKIE['messagesent'] != 1) : ?>
<form action="/form-handler.php" method="post" enctype="multipart/form-data">
    <label for="">name: <input type="text" name="name"></label><br><br>
    <label for="">email: <input type="email" name="email"></label><br><br>
    <label for="">File: <input type="file" name="photo"></label> <br><br>
    <input type="submit">
</form>
<?php else : ?>
<h6>Сообщение уже было направлено вами</h6>
<?php endif; ?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="main.js"></script>
</body>
</html>