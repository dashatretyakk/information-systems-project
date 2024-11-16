<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Tabs</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>

<header>
    <h2>Державна автомобільна інспекція</h2>
</header>

<nav class="navbar">
    <a href="tabs/patrol_district.php" class="tab-link active">Патрульні райони міста</a>
    <a href="tabs/patrol_car.php" class="tab-link">Патрульні автомобілі</a>
    <a href="tabs/policeman.php" class="tab-link">Інспектори ДАІ</a>
    <a href="tabs/report.php" class="tab-link">Рапорти інспекторів ДАІ</a>
    <a href="tabs/offender.php" class="tab-link">Порушники</a>
    <a href="tabs/violation.php" class="tab-link">Порушення</a>
</nav>

<div id="content">
    <div id="tab-content" class="tab-content">
        <!-- Fetched content will be loaded here -->
    </div>
</div>

<script src="js/index.js"></script>
<?php include 'changer.php'; ?>

</body>
</html>
