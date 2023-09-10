<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chào các bạn</title>
</head>
<body>
<?php
$a = filter_input(INPUT_POST, 'a');
$b = filter_input(INPUT_POST, 'b');
$x = 0;
if ($a != 0) {
        $x = -$b / $a;
    }
    else
    $x = 'Khong phai phuong trinh bac nhat';
if(is_numeric($x))
{
$result = number_format($x, 2);
}
?>
<form action="vidu.php" method="post" >
<table width="744" border="1">
<tr>
<td colspan="3" bgcolor="#336699"><strong>Giải phương trình bậc 1 </strong></td>
</tr>
<tr>
<td width="120">Phương trình </td>
<td width="250">
<input name="a" type="text" />
X + </td>
<td width="352"><label for="textfield"></label>
<input name="b" type="text" id="textfield" />
= 0</td>
</tr>
<tr>
<td colspan="3">
Nghiệm
<label for="textfield2"></label>
<span><?php if(is_numeric($x)) echo htmlspecialchars($result); else echo $x ?></span></tr>
<tr>
<td colspan="3" align="center" valign="middle"><input type="submit" name="chao"
id="chao" value="Xuất" /></td>
</tr>
</table>
</form>
</body>
</html>