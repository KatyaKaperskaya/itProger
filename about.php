<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Контактная форма</title>
</head>
<body>
    <?php require "blocks/header.php" ?>
    <h3>Контактная форма</h3>
    <form action="check.php" method="post">
        <input type="email" name="email" placeholder="Ввведите Email"
        class="form-control">
        <textarea name="message" class="form-control"
        placeholder="Введите ваше сообщение"></textarea>
        <button type="submit" name="send">Отправить</button>
    </form>
    <?php require "blocks/footer.php" ?>
</body>
</html>