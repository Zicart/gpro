<!DOCTYPE html>

<html>
<head>
    <title>Page Title</title>
</head>

<body>
    <?php
    $var=8;
    echo "Value is now " . $var . "<br>";
    echo "Add 2. Value is now " . ($var+=2) . "<br>";
    echo "Subtract 4. Value is now " . ($var-=4) . "<br>";
    echo "Multiply by 5. Value is now " . ($var*=5) . "<br>";
    echo "Divide by 3. Value is now " . ($var/=3) . "<br>";
    $var++;
    echo "Increment value by one. Value is now " . $var . "<br>";
    $var--;
    echo "Decrement value by one. Value is now " . $var . "<br>";
    ?>
</body>
</html>