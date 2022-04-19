<!DOCTYPE html> 
<head> 
<title>Калькулятор</title>
<body bgcolor=Beige>
<h1>Лабораторная работа №11</h1> 
<h2>PHP-калькулятор</h2>
</head> 
<body>
<p>Калькулятор вычисляет процент от числа, квадратный корень, синус, косинус, тангенс и котангенс.</p>

<?php
if($_POST['submit'])
{ 
$a = (int)$_POST['first']; 
$b = (int) $_POST['second']; 
$p = $_POST['operation'];
$c; 
if($p=='+')
$c = $a + $b;
else if($p=='-') 
$c = $a - $b;
else if($p=='*')
$c = $a * $b;
else if($p=='/')
{
if ($b==0)
echo "Делить на ноль нельзя";
else $c = $a / $b;
}
else if($p=='^')
$c = pow($a, $b);
else if($p=='%')
$c = $a * $b/100;
else if($p=='Квадратный корень')
$c = sqrt($a);
else if($p=='sin')
$c = sin(deg2rad($a)); 
else if($p=='cos')
$c = cos(deg2rad($a));
else if($p=='tan')
$c = tan(deg2rad($a)); 
else if($p=='ctg')
//$ctg = $cos / $sin;
$c = cos(deg2rad($a)) / sin(deg2rad($a));
}
?>

<form method="POST" action="">
<table border="1" cellspacing="2" cellpadding="2">
<body bgcolor=Beige>
<tr>
<td>Первое число: </td><td><input size="14" type="text" name="first"  required></td>
</tr>
<tr>
<td>Второе число: </td><td><input size="14" type="text" name="second"  required></td>
</tr>
<tr><td>
<select size="1" name="operation" required>
 <option value="+">Сложить</option>
 <option value="-">Вычесть</option>
 <option value="*">Умножить</option>
 <option value="/">Разделить</option>
 <option value="^">Возвести в степень</option>
 <option value="%">Проценты</option>
 <option value="Квадратный корень">Квадратный корень</option>
 <option value="sin">Синус</option>
 <option value="cos">Косинус</option>
 <option value="tan">Тангенс</option>
 <option value="ctg">Котангенс</option>
 </select></td>
 <td><input type="submit"  name="submit" value="Выполнить">
</td></tr>


<tr><td>Результат:</td>
<td>
<div align="center">
<?php
if($c)
echo "$c"; 
?>

</div>
</td></tr>
</table>
</form>

</body> 
</html>