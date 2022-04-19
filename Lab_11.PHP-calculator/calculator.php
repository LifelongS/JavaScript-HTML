<!DOCTYPE html> 
<head> 
<title>Калькулятор</title>
<body bgcolor=Beige>
<h1>Лабораторная работа №11</h1> 
<h2>PHP-калькулятор</h2>
</head> 
<body>
<p>Пользователь вводит числа, выбирает действие, нажимает на кнопку «Выполнить» и получает результат.</p>
<p>Предусмотрена возможность вычисления таких функций, как сложение, вычитание, умножение, деление и возведение в степень.</p>

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