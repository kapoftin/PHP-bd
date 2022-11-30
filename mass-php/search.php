
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
       
    <title>Document</title>
</head>
<body>
<?php
    require('data.php');
    function search_by_id($cards,$id){
        foreach ($cards as $val) {
            if($val['id'] == $id)
                return $val;
        }
        return -1;
    }   
?>

    <style>        
        /* .container{            
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
            } */
        
    </style>
</body>
</html>