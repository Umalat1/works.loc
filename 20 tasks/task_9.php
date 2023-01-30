<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <?php 
            $mass = [
                [
                    "panel" => "panel-collapse",
                    "title" => "Collapse",
                ],
                [
                    "panel" => "panel-fullscreen",
                    "title" => "Fullscreen",
                ]
            ];
            $thead = [
                [
                    "th" => "#",
                ],
                [
                    "th" => "First Name",
                ],
                [
                    "th" => "Last Name",
                ],
                [
                    "th" => "Username",
                ],
                [
                    "th" => "Actions",
                ],
            ];
            $tr = [
                [
                    "th" => "1",
                    "name" => "Mark",
                    "lastName" => "Otto",
                    "username" => "@mdo",
                ],
                [
                    "th" => "2",
                    "name" => "Jacob",
                    "lastName" => "Thornton",
                    "username" => "@fat",
                ],
                [
                    "th" => "3",
                    "name" => "Larry",
                    "lastName" => "the Bird",
                    "username" => "@twitter",
                ],
                [
                    "th" => "4",
                    "name" => "Larry the Bird",
                    "lastName" => "Bird",
                    "username" => "@twitter",
                ],
            ];
            
         ?>
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <?php foreach ($mass as $key => $value); {?>
                                
                            <button class="btn btn-panel waves-effect waves-themed" data-action=<?php echo  $value["panel"] ?> data-toggle="tooltip" data-offset="0,10" data-original-title=
                            <?php echo  $value["title"] ?>>
                            </button>
                        <?php }?>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <h5 class="frame-heading">
                                Обычная таблица
                            </h5>
                            <div class="frame-wrap">
                                <table class="table m-0">


                                    <thead>
                                        <tr>
                                            <?php foreach ($thead as $key => $value) {?>
                                                <th><?php echo $value["th"] ?></th>
                                            <?php }?>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php foreach ($tr as $key => $value) {?>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><?php echo $value["name"]; ?></td>
                                            <td><?php echo $value["lastName"]; ?></td>
                                            <td><?php echo $value["username"]; ?></td>

                                            <td>
                                                <a href="show.php?id=" class="btn btn-info">Редактировать</a>
                                                <a href="edit.php?id=" class="btn btn-warning">Изменить</a>
                                                <a href="delete.php?id=" class="btn btn-danger">Удалить</a>
                                            </td>
                                        </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
