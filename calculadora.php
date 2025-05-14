<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculadora.php" method="post">
        <label>x:</label>
        <input type="text" name="x">
        <label>y:</label>
        <input type="text" name="y">
        <input type="submit" value="total">
        <select name="operacao">
            <option value="+">adicao</option>
            <option value="-">subtracao</option>
    </form>
    <?php
    $x = $_POST['x'];
    $y = $_POST['y'];
    $total = null;

    class calculadora{
        function subtracao($x,$y){
            $total = $x - $y;
        }
        function adicao($x,$y){
        }
        function divisao($x,$y){

        }
        function multiplicao($x,$y){

        }
    }

    echo "$x"
?>
</body>
</html>

