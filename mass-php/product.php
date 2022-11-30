<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php
        require('data.php');
            $id = $_GET['id'];

        require('search.php');
        $str = search_by_id($cards, $id);
        if ($str != -1) {
            $t = $str["path-img"];
            echo  "<div class='card_item'> 
                                <img class='card_img' src='$t' alt=''>
                                <p class='card_price'>Видеокарта $id</p>                                
                                <p class='card_title'></p>
                            </div>";
        } else {
            echo  "<div class='card_item'>НЕ НАЙДЕНО</div>";
        }
        echo  "<div class='card_item'>
                    <p class='card_price'><a href='index.php?'>НАЗАД</a></p>
                </div>";
        ?>
        <style>
            * {
                align-items: center;
            }

            a {
                text-decoration: none;
            }
        </style>
</body>

</html>