<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= URL ?>/users/update" method="post">
        <div>
            <label for="email">Email</label>
            <input type="text" id="email" name="email" value="<?=$data['user']['email']?>">
        </div>

        <div>
            <label for="username">usuario</label>
            <input type="text" id="username" name="username" value="<?=$data['user']['username']?>">
        </div>

        <div>
            <label for="password">contraseña</label>
            <input type="password" id="password" name="password">
        </div>

        <div>
            <button type="submit">Actualizar</button>
        </div>

    </form>
</body>
</html>