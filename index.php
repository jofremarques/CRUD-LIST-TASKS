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
</head>

<body>
    <?= $config['view'] ?>
</body>
</html>