<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homework HTML, CSS</title>
    <style>
      p {
        color: rgb(11, 26, 26);
        background-color: rgb(141, 145, 144);
        margin: 40px;
        font-size: 24px;
      }
    </style>
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <p>one</p>
    <p id="title">two</p>
    <p class="aquamarine">three</p>
  </body>

  <?php

  function sum(int $arg_1, int $arg_2) : string
  {
      $val = $arg_1 + $arg_2;
      return $val . ' ';
  }

  function difference(int $arg_1, int $arg_2) : string
  {
      $val = $arg_1 - $arg_2;
      return $val. ' ';
  }

  function product(int $arg_1, int $arg_2) : string
  {
      $val = $arg_1 * $arg_2;
      return $val. ' ';
  }

  function division(int $arg_1, int $arg_2) : string
  {
      $val = $arg_1 / $arg_2;
      return $val. ' ';
  }

  function mathOperation(int $arg1, int $arg2, string $operation) : string
  {
      switch ($operation) {
          case 'сложение':
              return sum($arg1, $arg2);
          case 'вычитание':
              return difference($arg1, $arg2);
          case 'произведение':
              return product($arg1, $arg2);
          case 'разность':
              return division($arg1, $arg2);
      }
  }

  echo sum(1,2);
  echo difference(1,2);
  echo product(1,2);
  echo division(1,2);
  echo mathOperation(11, 1, 'сложение');

  var_dump(date('Y-m-d'));

  ?>

</html>