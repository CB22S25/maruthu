<?php
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];

    if ($n1 > $n2) {
        $result = "n1 should be less than n2";
    } else {
        $result = "Prime Numbers between $n1 and $n2 are:<br>";

        for ($i = $n1; $i <= $n2; $i++) {
            if ($i > 1) {
                $isPrime = true;

                for ($j = 2; $j <= sqrt($i); $j++) {
                    if ($i % $j == 0) {
                        $isPrime = false;
                        break;
                    }
                }

                if ($isPrime)
                    $result .= $i . " ";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Prime Numbers</title>
    <style>
        body { font-family: Arial; background:#f2f2f2; }
        .box {
            width:350px;
            margin:50px auto;
            padding:20px;
            background:white;
            box-shadow:0 0 10px gray;
        }
        input { width:100%; padding:8px; margin:8px 0; }
        button { width:100%; padding:8px; background:green; color:white; border:none; }
    </style>
</head>
<body>

<div class="box">
    <h3>Prime Number Finder</h3>

    <form method="post">
        Enter n1:
        <input type="number" name="n1" required>

        Enter n2:
        <input type="number" name="n2" required>

        <button type="submit">Find Prime Numbers</button>
    </form>

    <p><?php echo $result; ?></p>
</div>

</body>
</html>