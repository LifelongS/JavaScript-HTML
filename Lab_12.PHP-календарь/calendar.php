<html>
<head>
<title>Календарь</title>
</head>
<body> 
<h1>Лабораторная работа №12</h1> 
<h2>Календарь на месяц</h2>

<?php
//код сценария
//функция date()
$year=date("y");//год
$daysinmonth=date("t"); //число дней в месяце
$weeks=$daysinmonth/7; //число недель в месяце
$weeks=round($weeks,0); //округляем полученный результат
$dayofweek=date("w"); //день недели: 0 — воскресение, 6 — суббота
$dayofmonth=date("j"); //день месяца без нуля
$dayofmonthlz=date("d"); //день месяца с ведущим нулем
$monthlz=date("n"); //номер месяца без нуля
$monthdays=date("t"); //количество дней в месяце

$daysarray=array("","Пн","Вт","Ср","Чт","Пт","Сб","Вс"); //массив дней недели

$month = array(
"1"=>"Январь", 
"2"=>"Февраль", 
"3"=>"Март", 
"4"=>"Апрель", 
"5"=>"Май", 
"6"=>"Июнь", 
"7"=>"Июль", 
"8"=>"Август", 
"9"=>"Сентябрь", 
"10"=>"Октябрь", 
"11"=>"Ноябрь", 
"12"=>"Декабрь"); //массив месяцев

$numberfirstday = date("w",mktime(0,0,0,date("m"),1,date("Y"))); /*Вычисляем, каким днем недели будет первый день месяца*/

echo "<font color=red><b>".$month[$monthlz]." (".$year.")</b></font>";  /*Выводим название месяца и год*/
//начинаем строить таблицу
echo "<table width=\"200\" border=\"0\" cellspacing=\"0\" cellpadding=\"5\">\n\t<tr>\n";
//для начала выводим дни недели
for ($i = 1; $i <= 7; $i++) {
if($i>5){
echo "\t\t<td><font color=\"#E4723A\">".$daysarray[$i]."</font></td>\n";
}else{
echo "\t\t<td>".$daysarray[$i]."</td>\n";
}
}
echo "\t</tr>\n\t<tr>\n";
//выводим пустые дни предыдущего месяца.
$j = 1;
while ($j < $numberfirstday) {
echo "\t\t<td>&nbsp;</td>\n";
$j++;
}
//теперь выводим ВСЕ дни месяца.
for ($i = 1; $i <= $monthdays; $i++) {
if($i==$dayofmonth){
echo "\t\t<td bgcolor=\"#FF8040\" align=\"center\"><b>".$i."</b></td>\n"; //подсвечиваем сегодняшний день
}else{
echo "\t\t<td align=\"center\">".$i."</td>\n";
}
//новая неделя
if (round($j/7)-$j/7==0){
echo "\t</tr>\n\t<tr>\n";
}
$j++;
}
echo "\t</tr>\n</table>\n";

?>
</body>
</html>
