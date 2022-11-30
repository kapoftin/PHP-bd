<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
            $cards = [
                ["title" => "Видеокарта 1", "price" =>
                55010, "path-img" => "./img/r1.jpg", "id" => "РЕФЕРЕНСНАЯ"],
                ["title" => "Видеокарта 2", "price" =>
                55500, "path-img" => "./img/r2.jpg", "id" => "НЕ РЕФЕРЕНСНАЯ"],
                ["title" => "Видеокарта 3", "price" =>
                55010, "path-img" => "./img/r3.jpg", "id" => "ТРИ ВЕНТЕЛЯТОРА"],
                ["title" => "Видеокарта 4", "price" =>
                53500, "path-img" => "./img/r4.png", "id" => "ОДИН ЧИП"],
                ["title" => "Видеокарта 5", "price" =>
                95500, "path-img" => "./img/r5.jpg", "id" => "АНДЕРВОЛЬТОВАЯ"],
                ["title" => "Видеокарта 6", "price" =>
                85500, "path-img" => "./img/r6.jpg", "id" => "2МГЦ НА 1 ЯДРО"],
                ["title" => "Видеокарта 7", "price" =>
                45500, "path-img" => "./img/r7.jpg", "id" => "3МГЦ"],
                ["title" => "Видеокарта 8", "price" =>
                15500, "path-img" => "./img/r8.jpg", "id" => "4МГЦ"],
                ["title" => "Видеокарта 9", "price" =>
                57500, "path-img" => "./img/r9.jpg", "id" => "7МГЦ"],
                ["title" => "Попыт", "price" =>
                500, "path-img" => "./img/r10.jpg", "id" => "ПОПЫТ"]
            ];
            
            
           


        ?>
        </div>
        <style>
            .container{                
                font-size: 18px;
                font-weight: 900;
                display: flex;
                justify-content: center;
                gap: 50px;
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;                            
                margin-top: 40px;
                color: black;           
                flex-wrap: wrap; 
                margin-right: 100px;
                margin-left: 100px;

            }
            .card_img{
                width: 200px;
                height: 200px;                
            }
            .card_item{
                border-style: solid;
                 border-width: 2px;
              border-radius: 4px;
                background-color: rgba(0, 0, 0, 0.247);
            }
        </style>
</body>
</html>