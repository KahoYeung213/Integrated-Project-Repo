<!DOCTYPE html>



<?php

require_once "./etc/config.php";

try {

   $stories = Story::findById($_GET["id"]);

}

catch (Exception $ex) {

die($ex->getMessage()); //if an exception happens, stop immedietly

}

?>




<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Prata&display=swap');
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <link rel="icon" href="images/dartlinggunner.png" />

    <link rel="stylesheet" href="css/reset.css"/>
    <link rel="stylesheet" href="css/all.min.css"/>
    <link rel="stylesheet" href="css/grid.css"/>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/header.css"/>


    <title>Kay's Papers</title>
</head>
<body>
    
<div class="container">

    <div class="article width-9">
        <div class="backButton">
        <a href="index.php?id"><i class="fa-solid fa-arrow-right fa-flip-horizontal"></i>   BACK</a>
    </div>
        <?php foreach ($stories as $s) { ?>
            <div class="articleHeader">
            <h2>
            <?= $s->heading ?>
            </h2>
            <p>
            <?= $s->sub_heading ?>
        </p>
        <p>
        <?= $s->author ?>
        </p>
        </div>
        
        <div class="largeCountry width-9">
            <div class="largeCountryImage">
                <img src="<?= $s->country_image ?>" width="30px" height="20px">
                  <h2>
                     <?= $s->country ?>
                 </h2>
                 </div>
                 <div class="dateTime">
                    <p>
                        <i class="fa-regular fa-clock"></i> <?= $s->pub_date?>
                    </p>
                </div>
                
          </div>
        <div class="largeImage">
        <img src="<?= $s->image_source ?>"width="1080px" height="720px">
        </div>
        
        
    <div class="articleContents">
    <p>
         <?= $s->article ?>
                    </p>
        </div>

    
    
    <?php } ?>
    </div>
</div>

</body>
</html>