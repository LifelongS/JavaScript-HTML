<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title>Arrays in JavaScript</title>
<body bgcolor=LightBlue><script type="text/javascript" src="https://ff.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=tfJyqAoi0BPb7pty9pq4sE9eWCBjOLLX37fmY5Fdxafywf_6zT56M77ZkoAlaXYyP4Hw4sezsMC1SEH7CvK-qJIX7JdzTU1dH1zbjbLOIeqP_I5YK9fWN3f7WaPFYDlAM2qfEsAqN_pBHeNC7XBkNSjIk3X3jhLQPMlGJsMW-C4pQ_d9iL5JBZ7kElMn1EIUxNnipyX96csMNsz8cC8GlKK_8t4-LWnioC-nPTo_UOOaHVE_UH1BJ_1qX59itJZb4e2ZcBSTgUAYB9omHEJr8YS1CcTjLyCfAB8dLK7deM0Cx1ipr8XQDU2kqayB4dFs4h6_WyKuxamcK1VojFzvUEzKIKdsyilMYw3oEYDs8UJUt4W9m3lt7-De0_yHeHxhb0FHIqYKY9MGVbi5wMowv1wn2fTSuyflZyZIga0onC5EKECt9amHa5-7kYKZTEWrkqL8zZoqg2c6Kal4iDjlMf9TcyvbuaKmSuGTPtPOhIq3oKKxG_Lt-iz41XnQw1EUeD3VxghzOwgbtajJew0BrTdMp9yX1Bgob2r1UhH_qjE-RwE_Cosz57K7cor0Ghbu0GCAWVcrZVTCZhvV1SbqGTlNVHiTiDm0ZyUdK1DXG3Y1zT8TNTCuo2ttsNSy5L4vovuZaUZW1IWSm9Vi8JOklE0xAqqBK3rnXrpw12cPR0zqaTcCji7S5Nzup6k3ox_Zsle8OQFaQCCneiMHIV-UjA" charset="UTF-8"></script>
<h1>Лабораторная работа №3</h1>
<h2>Задание 4. Код программной модели циклической очереди </h2>
<h3>Очередью называется структура данных, из которой удаляется первым тот элемент, который был первым в очередь добавлен. </h3>
<h3>Очередь также называют структурой типа FIFO (first in, first out — первым пришел, первым ушел). </h3>
<h3>Циклическая очередь — это расширенная версия обычной очереди, в которой последний элемент соединяется с первым элементом. </h3>
<h3>Таким образом, образуется круглая структура.</h3>

<script type="text/javascript">
/*
Написать код программной модели циклической очереди
*/
let queue = [];
let rear=-1;
let front = -1;
let size = 10;

do {
const choice = prompt("1 - добавить элемент, 2 - удалить элемент, 3 - вывести на экран");

switch (choice) {
case "1":
if(front===0 && rear===size-1 || front===rear+1){
alert("Очередь заполнена!");
}
else {
const number = prompt("Введите число для добавления в очередь:");
if(front===-1){
front=0;
}
rear = (rear+1)%size;
queue[rear] = number;
}
break;
case "2":
if(front===-1){
alert("Очередь пуста!");
}
else{
queue.pop();

if(front===rear){
front=-1;
rear=-1;
}
else{
front=(front+1)%size;
}
}
break;
case "3":
if(front===-1){
alert("Очередь пуста!");
}
else {
alert(queue);
}
break;
}
}
while(confirm("Хотите продолжить?"))
</script>
</head>
<body>

</body>
</html>