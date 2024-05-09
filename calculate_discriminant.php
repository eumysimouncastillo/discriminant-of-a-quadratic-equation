<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quadratic Equation Discriminant Result</title>
</head>
<body>
    <h1>Quadratic Equation Discriminant Result</h1>
    <?php
    if(isset($_POST['submit'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        $discriminant = $b*$b - 4*$a*$c;

        echo "<h2>Result: $discriminant </h2>";
        
    }
    ?>
</body>
</html>
