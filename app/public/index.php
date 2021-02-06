<?php use App\Test;

require '../vendor/autoload.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Hello word</h1>

<?php (new Test())->hello(); ?>
</body>
</html>