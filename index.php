<?php

include('./app/Configs/app.php');

$app = new \App\Configs\App();
$config = $app->init();

?>

<!DOCTYPE html>
<html lang="<?= HEADER_LANGUAGE ?>">

<head>
    <meta charset="<?= HEADER_CHARSET ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= HEADER_TITLE ?></title>
    <?php foreach (HEADER_METATAGS as $metatag) : ?>
        <meta name="<?= $metatag['label'] ?>" content="<?= $metatag['value'] ?>">
    <?php endforeach; ?>
    <link rel="stylesheet" href="public/css/style.css">
    <script src="public/js/jquery-3.7.0.min.js"></script>
    <link rel="shortcut icon" href="public/img/fav-icon.ico" type="image/x-icon">
</head>

<body>
    <?= $config['view'] ?? $config['response'] ?>
    <script type="module" src="public/js/script.js"></script>
</body>

</html>