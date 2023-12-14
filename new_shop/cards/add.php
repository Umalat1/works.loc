<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet"  href="../../shop1/style.css">
</head>
<body>

<form action="add_handler.php" enctype="multipart/form-data" method="post">
    <div>
        <label for="simpleinput">Картинка</label>
        <div>
            <input type="file" name="image">
        </div>
    </div>

    <div>
        <label for="simpleinput">название</label>
        <div>
            <input type="text" name="title">
        </div>
    </div>

    <div>
        <label for="simpleinput">цена</label>
        <div>
            <input type="number" name="price">
        </div>
    </div>

    <div>
        <select name="type">
            <option selected value="matrix">matrix</option>
            <option value="sublimation">sublimation</option>
            <option value="jet">jet</option>
            <option value="laser">laser</option>
        </select>
    </div>

    <div>
        <button class="btn btn-success" type="submit">Добавить</button>
    </div>
</form>
</body>