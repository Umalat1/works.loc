<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="handler.php" method="post">
    <div>
        <label for="simpleinput">Картинка</label>
        <input name="image" id="simpleinput" type="file">
    </div>

    <div>
        <label for="simpleinput">Название</label>
        <input name="title" id="simpleinput" type="text">
    </div>

    <div>
        <label for="simpleinput">Цена</label>
        <input name="price" id="simpleinput" type="number">
    </div>

    <button class="btn btn-success" type="submit">Добавить</button>
</form>
</body>
</html>
