<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pockit</title>
    <link rel="stylesheet" href="public/css/style.css">
    <script src="public/js/navbar.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <?php if (($_GET['page'] ?? '') === 'home') : ?>
        <script src="public/js/home.js" defer></script>
    <?php endif ?>
</head>
<body>