<?php
  require __DIR__ . '/vendor/autoload.php';
  $string = file_get_contents("./data.json");
  $json_a = json_decode($string, true);

  $loader = new \Twig\Loader\FilesystemLoader('./');
  $twig = new \Twig\Environment($loader);

  echo $twig->render('index.html', $json_a);
?>