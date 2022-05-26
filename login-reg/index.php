<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Форма регестрации</title>
</head>
<body>
    <main>
        <div class="container">
            <h1>Форма регистрации</h1>
        </div>
        <div class="container">
            <form action="main.php" method="post">
                <label for="email">Login</label>
                <input type="email" id="email" name="login" placeholder="Введите мейл">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Введите пароль">
                <button type="submit" name="registration">Зарегистрироваться</button>
            </form>
        </div>
    </main>
</body>
</html>