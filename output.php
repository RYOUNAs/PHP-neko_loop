<?php

$num1 = $_GET['num']; //入力された数
// $num2 = $_GET['num2']; //入力された数
$d=0;
?>

<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <table>
        <?php for($f=0 ; $f < $num1 ; $f++){ ?>
        <tr>
            <?php for($n=0 ; $n < $num1 ; $n++){?>
                <?php if($d % 2 == 0){ ?>
                    <?php $color = "color1"; ?>
                    <?php }else{ ?>
                    <?php $color = "color2" ?>
                    <?php } ?>
            <td class="<?php echo $color; ?>">ねこ</td>
            <?php $d++; ?>
            <?php } ?>
            <?php $d++; ?>
        </tr>
        <?php } ?>
    </table>
</body>
</html>