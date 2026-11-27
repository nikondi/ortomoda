<?php
/**
 * @var string $title
 * @var string $content
 */
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?= $title ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>
<body class="no-js">
<?php include VIEW_PATH . 'partials/header.php'; ?>

<?= $content ?>

<?php include VIEW_PATH . 'partials/footer.php'; ?>


<?php if (!defined('BUILD')): ?>
    <?= vite(['resources/js/app.ts', 'resources/css/app.scss']) ?>
    <!-- vite scripts for develop -->
<?php endif; ?>
</body>
</html>