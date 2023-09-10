<?php
$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];
$x1 = 0;
$x2 = 0;
$kq = 0;
if($a == '0')
{
    $kq = 'Khong phai pt bac 2';
}
else
{
    if($b*$b -4*$a*$c < 0)
    {
        $kq = 'Vo nghiem';
    }
    elseif($b*$b -4*$a*$c == 0)
    {
        $x1 = -$b/(2*$a);
        $x2 = $x1;
    }
    else{
        $x1 = (-$b + sqrt($b*$b -4*$a*$c))/(2*$a);
        $x2 = (-$b - sqrt($b*$b -4*$a*$c))/(2*$a);
    }
    $x1 = number_format($x1, 2);
    $x2 = number_format($x2, 2);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phuong trinh bac 2</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h1>Giải phương trình bậc 2 Online</h1>
    <form action="process.php" method="post">
    <table>
        <tr>
            <td class="no-border">Phương trình: </td>
            <td><input type="text" required name="a" value="" ></td>
            <td class="no-border">X^2+ </td>
            <td><input type="text" required name="b" value=""></td>
            <td class="no-border">X+ </td>
            <td><input type="text" required name="c" value=""></td>
            <td class="no-border"> = 0 </td>
            <td colspan="4" align="center" valign="middle"><input type="submit" name="chao"
id="chao" value="Xuất" /></td>
        </tr>
        <tr>
            <td class="no-border">Nghiệm: </td>
            <td class="no-border">X1 = </td>
            <td class="width-200"><input type="text" value="<?php if(is_numeric($kq)) echo $x1;?>"></td>
            <td class="no-border">X2 = </td>
            <td class="width-200"><input type="text" value="<?php if(is_numeric($kq)) echo $x2;?>"></td>
            <td class="width-200"><input type="text" value="<?php if(is_numeric($kq)){} else echo $kq;?>"></td>
        </tr>
    </table>
    </form>
</body>
</html>