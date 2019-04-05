<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <h2>FIND CHARACTER IN STRING</h2>
    INPUT STRING
    <input type="text" name="string"/>
    INPUT CHARACTER
    <input type="text" name="character"/>
    <input type="submit" value="FIND"/>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $string = $_POST["string"];
        $character = $_POST["character"];
        function occurrencesNumber($string, $character)
        {
            $count = 0;
            for ($index = 0; $index < strlen($string); $index++) {
                if ($character == $string[$index]) {
                    $count++;
                }
            }
            return $count;
        }

        echo "<br>number of occurrences of ".$character." is : ".occurrencesNumber($string, $character);
    }
    ?>
</form>
</body>
</html>