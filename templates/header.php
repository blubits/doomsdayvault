<!DOCTYPE html>
<html>
<head>

  <!-- Meta -->
  <?php if (isset($title)): ?>
    <title><?= htmlspecialchars($title) ?></title>
  <?php else: ?>
    <title>[[DOOMSDAY VAULT]]</title>
  <?php endif ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#191919">

  <!-- Fonts -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,500,700">

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="css/global.css">
  <?php foreach ($css as $filename): ?>
    <link rel="stylesheet" type="text/css" href="css/<?= $filename ?>.css">
  <?php endforeach ?>

</head>
