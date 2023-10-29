<?php 
session_start();
if (!isset($_SESSION["user"])){
  header("location: /index.php");
}

?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/src/output.css" rel="stylesheet">
</head>
<body>
  <h1 class="text-3xl font-bold underline">
    Hello maestro!
  </h1>
  <a href="/logout">logout</a>
</body>
</html>