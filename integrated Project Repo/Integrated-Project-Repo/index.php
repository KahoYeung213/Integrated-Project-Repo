<!DOCTYPE html>

<?php
require_once "./etc/config.php";


try {
    $mediumPanels = Story::findByCategory(1,3);
    $largePanel  = Story::findByCategory(3,1);
    $bottomMediumPanels = Story::findByCategory(6,3);
    $mediumBigPanels1 = Story::findByCategory(4,1);
    $mediumBigPanels2 = Story::findByCategory(5,1);


    $opinions1 = Opinion::findBetween(1,3);
    $opinions2 = Opinion::findBetween(4,6);
    $opinions3 = Opinion::findBetween(7,9);
    $opinions4 = Opinion::findBetween(10,12);


    // echo "<pre>";
    // print_r($mediumPanels);
    // print_r($opinions);
    // echo "</pre>";
} catch (Exception $e) {
    echo $e;
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

    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/grid.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/header.css" />


    <title>Kay's Papers</title>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header width-12">
                <h2>Kay's Papers</h2>
            </div>
        </div>
    </header>




    <div class="topLargePanel">
        <div class="container">
        <?php foreach ($largePanel as $s) { ?>
            <div class="largePanelImage width-6">
                 <img src="<?= $s->image_source ?>"width="710px" height="399.38px">
                <div class="largeCountryImage">
                <img src="<?= $s->country_image ?>" width="30px" height="20px">
                    <h2>
                        <?= $s->country ?>
                    </h2>
                </div>
            </div>
            <div class="panelContents width-6">
                <h1>
                <a href="article.php?id=<?= $s->id ?>"><?= $s->heading ?> </a>
                </h1>
                <hr />
                 <p>
                    <?= $s->summary ?>
                    </p>
                <div class="dateTime">
                    <p>
                        <i class="fa-regular fa-clock"></i> <?= $s->pub_date?>
                    </p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <div class="middleMediumPanel">
        <div class="container">
            <?php foreach ($mediumPanels as $s) { ?>
                <div class="mediumPanels width-4">
                    <div class="mediumPanel">
                        <div class="mediumPanel1">
                        <img src="<?= $s->image_source ?>"width="466.66px" height="262.19px">
                            <div class="mediumCountryImage">
                            <img src="<?= $s->country_image ?>" width="30px" height="20px">
                                <h2>
                                <?= $s->country ?>
                                </h2>
                            </div>
                            <div class="mediumPanelContents">
                                <h2>
                                <a href="article.php?id=<?= $s->id ?>"><?= $s->heading ?> </a>
                                </h2>
                                <hr />
                                <p>
                                    <?= $s->summary ?>
                                    </p>
                                <div class="dateTime">
                                    <p>
                                        <i class="fa-regular fa-clock"></i> <?= $s->pub_date?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <div class="containerRelative">
        <div class="lineBreak width-8">
            <hr />
        </div>
        <div class="opinionLineBreak width-4">
            <hr />
            <h2>OPINION<i class="fa-duotone fa-greater-than"></i></h2>
            <hr />
        </div>
    </div>

    <div class="mediumBigPanels">
        <div class="container">
        <?php foreach ($mediumBigPanels1 as $s) { ?>
            <div class="imageBackground width-5">
                <img src="<?= $s->image_source ?>"width="588.324px" height="420px">
                    <div class="mediumCountryImage">
                    <img src="<?= $s->country_image ?>" width="30px" height="20px">
                        <h2>
                        <?= $s->country ?>
                        </h2>
                    </div>
            </div>
                <div class="mediumBigPanelsContents width-3">
                    <h2>
                    <a href="article.php?id=<?= $s->id ?>"><?= $s->heading ?> </a>
                    </h2>
                    <hr />
                    <p>
                    <?= $s->summary ?>
                    </p>
                    <div class="dateTime">
                        <p>
                        <i class="fa-regular fa-clock"></i> <?= $s->pub_date?>
                        </p>
                    </div>
                </div>
                <?php } ?>


                <div class="opinionPanels width-2">
                <?php foreach ($opinions1 as $s) { ?>
                    <div class="panel">
                        <h2>
                        <?= $s->opinionHeader ?>
                        </h2>
                        <img src="<?= $s->opinionImage ?>" width="64px" height="64px">
                    </div>
                    <p>
                    <?= $s->opinionAuthor ?>
                    </p>
                    <hr />
                    <?php } ?>
                </div>

            
                <div class="opinionPanels width-2">
                <?php foreach ($opinions2 as $s) { ?>
                    <div class="panel">
                        <h2>
                        <?= $s->opinionHeader ?>
                        </h2>
                        <img src="<?= $s->opinionImage ?>" width="64px" height="64px">
                    </div>
                    <p>
                    <?= $s->opinionAuthor ?>
                    </p>
                    <hr />
                    <?php } ?>
                </div>

                <?php foreach ($mediumBigPanels2 as $s) { ?>
                <div class="mediumBigPanelsContents2 width-3">
                <h2>
                <a href="article.php?id=<?= $s->id ?>"><?= $s->heading ?> </a>
                    </h2>
                    <hr />
                    <p>
                    <?= $s->summary ?>
                    </p>
                    <div class="dateTime">
                        <p>
                        <i class="fa-regular fa-clock"></i> <?= $s->pub_date?>
                        </p>
                    </div>
                </div>
                <div class="imageBackground2 width-5">
                <img src="<?= $s->image_source ?>"width="588.324px" height="420px">
                    <div class="mediumCountryImage">
                    <img src="<?= $s->country_image ?>" width="30px" height="20px">
                        <h2>
                        <?= $s->country ?>
                        </h2>
                    </div>
                </div>
                <?php } ?>


                <div class="opinionPanels width-2">
                <hr />
                <?php foreach ($opinions3 as $s) { ?>
                    <div class="panel">
                        <h2>
                        <?= $s->opinionHeader ?>
                        </h2>
                        <img src="<?= $s->opinionImage ?>" width="64px" height="64px">
                    </div>
                    <p>
                    <?= $s->opinionAuthor ?>
                    </p>
                    <hr />
                    <?php } ?>
                </div>

                
                <div class="opinionPanels width-2">
                <hr />
                <?php foreach ($opinions4 as $s) { ?>
                    <div class="panel">
                        <h2>
                        <?= $s->opinionHeader ?>
                        </h2>
                        <img src="<?= $s->opinionImage ?>" width="64px" height="64px">
                    </div>
                    <p>
                    <?= $s->opinionAuthor ?>
                    </p>
                    <hr />
                    <?php } ?>
                </div>
            </div>  
        </div>
    <div class="container">
        <div class="lineSeparator width-12">
            <hr>
        </div>
    </div>


    <div class="bottomMediumPanel">
        <div class="container">
            <?php foreach ($bottomMediumPanels as $s) { ?>
                <div class="bottomMediumPanels width-4">
                    <div class="mediumPanel">
                        <div class="mediumPanel1">
                        <img src="<?= $s->image_source ?>"width="466.66px" height="262.19px">
                            <div class="mediumCountryImage">
                            <img src="<?= $s->country_image ?>" width="30px" height="20px">
                                <h2>
                                <?= $s->country ?>
                                </h2>
                            </div>
                            <div class="mediumPanelContents">
                                <h2>
                                <a href="article.php?id=<?= $s->id ?>"><?= $s->heading ?> </a>
                                </h2>
                                <hr />
                                <p>
                                    <?= $s->summary ?>
                                    </p>
                                    
                                <div class="dateTime">
                                    <p>
                                        <i class="fa-regular fa-clock"></i> <?= $s->pub_date?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="footerText width-12">
                <ul>
                    <li>
                        <a href=""><img src="images/dartlinggunner.png" width="38"
                                height="40"> </a>
                    </li>
                    <li><a href="">PRESS</a> </li>

                    <li><a href="">SECURITY</a> </li>

                    <li><a href="">LEGAL</a></li>

                    <li><a href="">LEADERSHIP</a></li>

                    <li><a href="">CANDIDATE PRIVACY</a></li>

                    <li><a href="">TERMS OF SERVICE</a></li>

                    <li><a href="">PRIVACY NOTICE</a></li>

                    <li><a href="">ACCESSIBILITY</a></li>
                    <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-linkedin-in"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                    </li>
                </ul>
                <hr>
            </div>
            <div class="footerBottom width-12">
                <p>Cookie Preferences | <i class="fa-regular fa-copyright"></i> Kay's Papers, Inc. All Rights
                    Reserved.</p>
                <a href="">To The Surface<i class="fa-solid fa-caret-up"></i></a>
            </div>
        </div>
    </footer>

</body>

</html>