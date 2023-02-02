<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
function multiply_two_lists($x, $y)
{
    $liste_1 = explode(' ', trim($x));
    $liste_2 = explode(' ', trim($y));
    foreach ($liste_1 as $key=>$value) {
        $output[$key] = $liste_1[$key]*$liste_2[$key];
    }
    return implode(' ', $output);
}
echo multiply_two_lists(("10 12 3"), ("1 3 3"))."\n";
    ?>
</body>

</html>