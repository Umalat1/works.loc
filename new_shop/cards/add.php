<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet"  href="../css/style.css">
</head>
<body>
<div class="add layout__content">
    <div>
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
    </div>
    <div class="add_menu">
        <div><a class="link" href="add.php">Добавить</a> </div>
        <div><a class="link" href="delete.php">Удалить</a></div>
        <div><a class="link" href="../index.php">Вернуться к сайту</a></div>
    </div>

</div>

</body>