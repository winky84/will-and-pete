<!doctype html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="/css/style.css" />
  <script src="/js/main.js"></script>
  <title>Balls</title>
</head>
<body>
  oi oi

  <?php

    // Variables
    $name = "hello";
    $will = "Will";
    echo $name . ' ' . $will;

    // functions
    function say_hello($name) {
      echo "Hello " . $name;
    }
    say_hello($will);

    // Loops
    $array = [1,2,3,4];
    foreach($array as $num) {
      echo $num;
    }

    for($i=0; $i<5; $i++) {
      echo $i;
    }

    // If Statements
    if($name == "Will") {
      echo "Hello " . $name;
    } else {
      echo "Hello Pete!";
    }

  ?>
</body>
</html>
