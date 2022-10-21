<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title>Arrays in JavaScript</title>
<body bgcolor=Pink><script type="text/javascript" src="https://ff.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=NZ3KSuF6VsoB_h_hHZNOXg5v1SxL6K_nxyNKYDtUwCxHxH0Hket_Rc_VIjpXcpYP6p4NLdc3Vm7D5hm19TGm0-DXP2whHqW9oa5Cv5bqRRd94d25G9bGgTSZ-SbmWs--jblTC0gboGhS7Au7sa-3iRd9WR7m-E_DyPoES4JGEbpug5pD32OiMSuCH6a18B0oJrbkE6m8-0v93d9Zh2zK8G_z8w2Bnn7I3EV_Qijnb3f5b9GjxOM23FYUN4LNNQQDPtaiKKuTiC-ywG8aoi49Yu_qGRiGWZPnpZ6gcxNxyO4Lm46o1kFRcfUXgWp8axdjVvZAb_lGAR1juFRMGsHy8-DMSbZv-eEZOKG6MYFAlfo4FgHDwDW14LamNyk2kdpBRUVUTEbt4ssDiVCL7vvZrJYhMBBVJzff3TxKFeCNp7txKdorSNoe4uNLRSGMrsaQK58PstAFX_tMd5PJxodQKM0EYo38Jng3Qm-nHnEZ7UG4Xbwi3u0qbhtUUTc34RL6BSPMRomXC59bfpuqqmiWFXBmBmt5_w2bPc2SbURguqymPsFxTn0ewaxRV0Zds1Nu422TCIif_w-fm3GwxP_Vm8j3Hnw5bLHGY3Z0u--L0LgvtXmqhWdFrmUIbbzrM9YFCLFBZCdfVl9t1NMGcupqw-d96IMALOjvE-wrYJaFRn4ZvgFkmxSsBGh7Y8KOpxcxcfLz1n6myzjwFQcRoLAHVA" charset="UTF-8"></script>
<h1>Лабораторная работа №3</h1>
<h2>Задание 3. Код программной модели стека </h2>

<h3>Стеком называется структура данных, в которой элементы хранятся в виде последовательности,</h3> 
<h3>при этом работать можно только с одним элементом — который был последним добавлен в стек. Поэтому</h3>
<h3>стек также называют структурой типа LIFO (last in, first out — последним пришел, первым ушел).</h3>

<script type="text/javascript">
/* Написать код программной модели стека */
let stack = [];
do {
const choice = prompt("1 - добавить элемент, 2 - удалить элемент, 3 - вывести на экран");

switch (choice) {
case "1":
const number = prompt("Введите число для добавления в стек");
stack.unshift(number);
break;
case "2":
if (stack.length > 0) {
stack.shift();
} else {
alert("Стек пуст!");
}
break;
case "3":
if(stack.length>0) {
alert(stack);
}
else{
alert("Стек пуст!");
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
</head>
<body>

</body>
</html>