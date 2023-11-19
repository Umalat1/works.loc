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
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="../20%20tasks/css/vendors.bundle.css">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="../20%20tasks/css/app.bundle.css">
    <link id="myskin" rel="stylesheet" media="screen, print" href="../20%20tasks/css/skins/skin-master.css">
    <link rel="stylesheet" media="screen, print" href="../20%20tasks/css/statistics/chartist/chartist.css">
    <link rel="stylesheet" media="screen, print" href="../20%20tasks/css/miscellaneous/lightgallery/lightgallery.bundle.css">
    <link rel="stylesheet" media="screen, print" href="../20%20tasks/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="../20%20tasks/css/fa-brands.css">
    <link rel="stylesheet" media="screen, print" href="../20%20tasks/css/fa-regular.css">
</head>
<body class="mod-bg-1 mod-nav-link ">
<main id="js-page-content" role="main" class="page-content">
    <div class="col-md-6">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
                    Задание
                </h2>
                <div class="panel-toolbar">
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                </div>
            </div>
            <?php
            $elements = [
                [
                    "title" => "Мои задачи",
                    "value" => "7 / 10",
                    "bg" => "bg-fusion-400",
                    "progressbar" => "65"
                ],
                [
                    "title" => "Емкость диска",
                    "value" => "440 TB",
                    "bg" => "bg-fusion-500",
                    "progressbar" => "34"
                ],
                [
                    "title" => "Пройдено уроков",
                    "value" => "77%",
                    "bg" => "bg-fusion-400",
                    "progressbar" => "77"
                ],
                [
                    "title" => "Осталось дней",
                    "value" => "2 дня",
                    "bg" => "bg-fusion-300",
                    "progressbar" => "84"
                ],
            ]



            ?>
            <div class="panel-container show">
                <div class="panel-content">
                    <?php foreach ($elements as  $element):?>
                        <div class="d-flex">
                            <?php echo $element["title"]?>
                            <span class="d-inline-block ml-auto"><?php echo $element["value"]?></span>
                        </div>

                        <div class="progress progress-sm mb-3">
                            <div class="progress-bar <?php echo $element["bg"]?>" role="progressbar" style="width: <?php echo $element["progressbar"]?>%;" aria-valuenow="<?php echo $element["progressbar"]?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</main>


<script src="../20%20tasks/js/vendors.bundle.js"></script>
<script src="../20%20tasks/js/app.bundle.js"></script>
<script>
    // default list filter
    initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
    // custom response message
    initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
</script>
</body>
</html>

