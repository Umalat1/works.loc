<?php

//var_dump($_FILES['images']);
//exit();

for ($i=0; $i < count($_FILES['images']); $i++) {
    upload_file($_FILES['images'][$i], $_FILES['images'][$i]);
}

function upload_file($filename, $tmp_name) {
    $result = pathinfo($filename);

    $filename =  uniqid() . "." .$result['extension'];

    move_uploaded_file($tmp_name, 'uploads/' . $filename);

}
header('location: index.php');

//    var_dump($result);
//    exit;

//$filename =  uniqid() . "." .$result['extension'];

//   var_dump($filename . "." . $result['extension']);
//   var_dump('uploads/' . $filename);

//var_dump(move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . $filename));

//   uniqid() . "." . "png" - сформировывает уникальное название картинки с расширением png
//   $_FILES['image']['name'] - путь к файлу
//   ['image'] - название ключа в инпуте
//   ['name'] - название картинки
//   $result['extension'] - расширение
//   pathinfo - массив
//   $filename = uniqid() . "." .$result['extension'] - уникальное название с расширением картинки
//   move_uploaded_file - функция которая проверяет загруженли фаил на сервер если загружен то фаил будет перемещен на указанную папку
//   $_FILES['image']['name'] . "." . extension - имя картинки картинки с раширением
//   tmp_name - временное хранилище файла


