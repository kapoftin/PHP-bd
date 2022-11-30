<?php

echo '<div class="containers"></div>'
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
       
    <title>Document</title>
</head>
<body>
    <div class="containers">
        <a href="./index.php" class="btn">Просто массив</a>
        <a href="./index.php?sort=price-asc" class="btn">Сортировка по цене по возрастанию</a>
        <a href="./index.php?sort=price-desc" class="btn">Сортировка по цене по убыванию</a>
        <a href="./index.php?sort=name-asc" class="btn">Сортировка по названию по возрастанию</a>
        <a href="./index.php?sort=name-desc" class="btn">Сортировка по названию по убыванию</a>
    </div>
      
      <div class="container">
    <?php
    if (empty($_GET['sort'])) {
        $sort = 'simple';
    }
    else {
        $sort = $_GET['sort'];
    }
    require('data.php');

    if ($sort == 'price-asc') {
    function compare($x, $y){
    if ( $x["price"] == $y["price"])
    return 0;
    elseif ( $x["price"] < $y["price"] ) return -1;
    else return 1;
    }
    usort($cards, "compare");
    }

    if ($sort == 'price-desc') {
        function compare($x, $y){
            if ( $x["price"] == $y["price"])
            return 0;
            elseif ( $x["price"] > $y["price"] ) return -1;
            else return 1;
            
        }
        
        usort($cards, "compare");
        }

        if ($sort == 'name-asc') {
            function reverseCompare($x, $y)
            {
                if ($x["title"] == $y["title"]) return 0;
                else if ($x["title"] < $y["title"]) return -1;
                else return 1;
            }
            usort($cards, "reverseCompare");
            }
            if ($sort == 'name-desc') {
                function reverseCompare($x, $y)
                {
                    if ($x["title"] == $y["title"]) return 0;
                    else if ($x["title"] > $y["title"]) return -1;
                    else return 1;
                }
                usort($cards, "reverseCompare");
                }
            
    ?>
</div>
<div class="container">
<?php
foreach ($cards as ['title' => $t, 'price' => $p, 'path-img' => $path, 'id' => $id]) {
    echo  "<div class='card_item'>
                    <img class='card_img' src='$path' alt=''>
                    <p class='card_title'>$t</p>
                    <p class='card_price'><a href='product.php?id=$id'>$p <br><br>[title]</a></p>
                    <p class='card_title'></p>
                </div>";
}
?>
</div>

    <style>        
        .containers{
            font-weight: 900;
            display: flex;
            justify-content: center;
            gap: 40px;            
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;                            
            margin-top: 40px;
            color: black;
        }
        *{
            text-decoration: none;
            color: black;

        }
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