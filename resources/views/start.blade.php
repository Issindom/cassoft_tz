<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action = "/registration/new_user">
        @csrf
        <input type="text" name="email" required> Почта/логин
        <input type="text" name="password" required> Пароль <br>
        <input type="checkbox" name="mailing" required> < Подписаться на рассылку
        <button type="submit">Зарегистрироваться</button>
    </form>
</body>
</html>