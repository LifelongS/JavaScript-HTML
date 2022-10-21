<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Functions in JavaScript</title>
<body bgcolor=Thistle><script type="text/javascript" src="https://ff.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=aYpazoYqgSL-uFF5wPHeIRZsg46b_F8FLuVcQNcxraofNuKPOdvD94qcjDu30mIjmdW3OFeVPmeOCdSKyslGDs_-jbFzOn-pZJB2GH5gvEAySBCQHVSSMmcLa2mIItU-cueA1AakBn4_cqOyL9nkg_C-s_wQimWKh3CGXRbGAr5JdSe35v8FFh_hgzxXE0NT7YIIbGhUETCCnLU1_0Ay_ssZtktKaXwAR52ft87POzE1dzajZyzu5a4wA9WprzI2oCmudxupv9lrrPKzLP_lCd3srQ4v6moAuLj7SaLPrGcyMHQR5pngjslzP6nsRacCNyCJHh27XneG_8axo0hMba09h1mXoXrQB4DKi-qskc_A0PxXhg7EIB6YR_ctkCiWSkx9SBDh4E1t5tRWwHWTOOav4JRAimPbPgnrLtTdhHJwDeydz2JvU5ezOX88_EMIMQ_CnDGdk0iIdZ1C4eT9IBFyeHym-kE3H0nh1LOYdE62U2ccAZfRQWPYOON4wSt3FN2U382RRG0X4og5jpAPmx2i4_bYPy_0F-GPOOAl4A-Vh3I_pGxChe1RG74KR4JewC12k96ouOIndAwDALy9IdCS1vfVtEiFnepN1k6d_ViByhAzBsXSp7KoEOpl3K2jSFk7Zp5oSmDFBUktzmnK22YaOWLlq54VvEl3JjDHrmxUOvBKMxjeHQ6M1zCuZ9iWinA9wkP_88LNmqztRrnG5w" charset="UTF-8"></script>
<h1>Лабораторная работа №4</h1>
<h2>Задание 3. Для задач программного моделирования стека </h2>
<h2> и циклической очереди оформить в виде функций: </h2>
<h3>
– добавление элемента в стек;</h3>
<h3>– извлечение элемента из стека;</h3>
<h3>– добавление элемента в очередь;</h3>
<h3>– извлечение элемента из очереди.</h3>
    
    <script type="text/javascript">

        let stack = [];

        function stackPush() {
            const number = prompt("Введите число для добавления в стек");
            stack.unshift(number);
        }

        function stackPop() {
            if (stack.length > 0) {
                stack.shift();
            } else {
                alert("Стек пуст!");
            }
        }

        function showStack() {
            if (stack.length > 0) {
                alert(stack);
            } else {
                alert("Стек пуст!");
            }
        }

        let queue = [];
        let rear = -1;
        let front = -1;
        let size;



        function queuePush(size) {
            if (front === 0 && rear === size - 1 || front === rear + 1) {
                alert("Очередь заполнена!");
            } else {
                const number = prompt("Введите число для добавления в очередь:");
                if (front === -1) {
                    front = 0;
                }
                rear = (rear + 1) % size;
                queue[rear] = number;
            }
        }

        function queuePop(size) {
            if (front === -1) {
                alert("Очередь пуста!");
            } else {

                queue.pop();

                if (front === rear) {
                    front = -1;
                    rear = -1;
                } else {
                    front = (front + 1) % size;
                }
            }
        }

        function showQueue(){
            if(front===-1){
                alert("Очередь пуста!");
            }
            else {
                alert(queue);
            }
        }

        let choice = parseInt(prompt("Выбор: стек - 0, очередь - 1"));

        if(!choice){
            do {
                const choice = prompt("1 - добавить элемент, 2 - удалить элемент, 3 - вывести на экран");

                switch (choice) {
                    case "1":
                        stackPush();
                        break;
                    case "2":
                        stackPop();
                        break;
                    case "3":
                        showStack();
                        break;
                }
            } while(confirm("Хотите продолжить?"))
        }
        else{
            size = parseInt(prompt("Введите размер очереди"));
            do {
                const choice = prompt("1 - добавить элемент, 2 - удалить элемент, 3 - вывести на экран");

                switch (choice) {
                    case "1":
                        queuePush(size);
                        break;
                    case "2":
                        queuePop(size);
                        break;
                    case "3":
                        showQueue();
                        break;
                }
            } while(confirm("Хотите продолжить?"))
        }
    </script>
</head>
<body>

</body>
</html>