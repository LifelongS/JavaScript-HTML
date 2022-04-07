//вывод пробного круга на холстe
$(document).ready(function() 
    {    
    paper.install(window);
    paper.setup("myCanvas");
    var canvas_width = $("#myCanvas").width();
    var canvas_height = $("#myCanvas").height();
    var r = 20;
    var x = Math.floor(Math.random()*(canvas_width-r))+r;
    var y = Math.floor(Math.random()*(canvas_height-r))+r;
    var myCircle = new paper.Path.Circle(new Point(x, y), r);
    myCircle.strokeColor = "black";
    myCircle.strokeWidth = 1;
    view.draw();    

//обработчик нажатия на кнопку «Нарисовать круг»    
$("#draw").click(function() {
    var x = parseInt($("#x").val());
    var y = parseInt($("#y").val());
    var r = parseInt($("#r").val());
    var A = parseInt($("#A").val());
    var G = parseInt($("#G").val());
    var B = parseInt($("#B").val());
    var w = parseInt($("#w").val());
var colorPurple = "#cb3594";
var colorGreen = "#659b41";
var colorYellow = "#ffcf33";
var colorBrown = "#986928";

    if (x>=(0+r) && x<= (canvas_width-r) && y >=(0+r) && y<=(canvas_height-r) && r >0 )
    {
    var myCircle = new paper.Path.Circle(new Point(x, y), r);
    // Придадим обводке цвет
    // myCircle.strokeColor = "rgb(0,0,255)"; //"rgb(0, 255, 255)"
    // myCircle.strokeColor = colorPurple;
    myCircle.strokeColor = Color.random();

    // Толщина обводки
    myCircle.strokeWidth = w;
    // Цветовая заливка круга
    myCircle.fillColor = Color.random();
    //  myCircle.fillColor = "rgb("+G+","+B+","+A+")";
    //  myCircle.fillColor = "rgb(0,255,255)";

    view.draw();    
    }
});


//обработчик нажатия на кнопку «Очистить холст»     
$("#clean").click(function() 
{
    paper.project.clear();
    view.draw();
});


//обработчик нажатия на кнопку «Сгенерировать»     
$("#generator").click(function() {
    paper.project.clear();
    for(var i=0; i<10; i++)
    {
    var x = Math.floor(Math.random()*(canvas_width-r))+r;
    var y = Math.floor(Math.random()*(canvas_height-r))+r;
    var myCircle = new paper.Path.Circle(new Point(x, y), r);
    myCircle.strokeColor = "black";
    myCircle.strokeWidth = 1;
    myCircle.fillColor = Color.random();
    }
    view.draw();
    });  
});

