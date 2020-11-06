<!DOCTYPE html>
<html>

<head>
    <link href="my.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="menu">
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/menu.php'; ?>
    </div>
    <?php
    include $content;
    ?>
</body>

</html>