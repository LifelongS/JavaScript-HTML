<?php
function show()
{
?>
<form method="post" action="calculator.php">
<table border="1" cellspacing="2" cellpadding="2">
<tr>
<td>Первое число: </td><td><input size="14" 
type="text" name="first"></td>
</tr>
<tr>
<td>Второе число: </td><td><input size="14" 
type="text" name="second"></td>
</tr>
<tr><td>
<select size="1" name="action">
 <option value="sum">Сложить</option>
 <option value="min">Вычесть</option>
 <option value="umn">Умножить</option>
 <option value="del">Разделить</option>
 <option value="stepen">Возвести в
степень</option>
 </select></td>
 <td><input type="submit" value="Выполнить">
</td></tr>
<?php
}
function calc()
{
global $action, $result, $first, $second;
switch($action)
{
 case "sum":
 $result = $first+$second;
 break;
 case "min":
 $result = $first-$second;
 break;
 case "umn":
 $result = $first*$second;
 break;
 case "del":
 if (!$second)
 {
 exit("Второе число не введено или равно нулю 
<br> <a href=calculator.php>Назад</a>");
 }
 $result=$first/$second;
 break;

}
}
show();
calc();
?>
<tr><td>Результат:
</td>
<td>
<div align="center">
<?php
echo "$result"; 
?>
</div>
</td></tr>
</table>
</form>

