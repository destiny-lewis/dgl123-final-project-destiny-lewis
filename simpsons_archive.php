<!DOCTYPE html>
<!------------------------------------------------- 
Author: Destiny Lewis
Course: DGL-123, Introduction to PHP
Section: DLU-1
Date: December 2nd 2021
Final Course Project

simpsons_archive.php 
------------------------------------------------->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simpsons Archives</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <header id="masthead" class="site-header layout-container">
        <a href="simpsons_archive.php">
            <img class="site-header__logo" src="images/logo.svg" alt="Logo"> <!-- Should refresh page on-click -->
        </a>
    </header>

    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <div id="main" class="site-main">
            
                <div class="form__container layout-container">
                    <div class="form__row layout-row">
                        <div class="form__itemsContainer">

                            <div class="form__imageContainer">
                                <img src="images/simpsons.jpg" alt="Simpsons" class="form__image">
                            </div>

                            <div class="form__card">

                                <h3 class="form__heading">
                                    Select characters to show
                                </h3>

                                <form method="get" action="">

                                    <ul class="form__items">
                                        <li class="form__item">
                                            <label for="homer">
                                                Homer Simpson
                                            </label>
                                            <input id="homer" type="checkbox" name='characters[]' value="homer">                                
                                        </li>

                                        <li class="form__item">
                                            <label for="marge">
                                                Marge Simpson                                                
                                            </label>
                                            <input id="marge" type="checkbox" name='characters[]' value="marge">                                
                                        </li>

                                        <li class="form__item">
                                            <label for="bart">
                                                Bart Simpson                                                
                                            </label>
                                            <input id="bart" type="checkbox" name='characters[]' value="bart">                                
                                        </li>

                                        <li class="form__item">
                                            <label for="lisa">
                                                Lisa Simpson                                                
                                            </label>
                                            <input id="lisa" type="checkbox" name='characters[]' value="lisa">        
                                        </li>

                                        <li class="form__item">
                                            <label for="maggie">
                                                Maggie Simpson                                                
                                            </label>
                                            <input id="maggie" type="checkbox" name='characters[]' value="maggie">                                
                                        </li>

                                        <li class="form__item">
                                            <label for="moe">
                                                Moe Szyslak                                                
                                            </label>
                                            <input id="moe" type="checkbox" name='characters[]' value="moe">                                
                                        </li>
                                    </ul>

                                    <input class="form__button" type="submit" name="submit" value="Show Characters">

                                </form>

                            </div>

                        </div>
                    </div>
                </div>
                <?php include "backend.php" ?>
                <div class="characters__container layout-container">
                    <div class="characters__row layout-row">
                        <ul class="characters__items">
                            <li class="characters__itemContainer">
                                <div class="characters__item">
                                    <img src="images/marge.png" alt="marge" class="characters__image">
                                    <div class="characters__info">

                                        <h3 class="characters__name">
                                            Marge Simpson
                                        </h3>

                                        <div class="characters__age characters__attribute">
                                            <b>Age:</b> 40                                                
                                        </div>

                                        <div class="characters__occupation characters__attribute">
                                            <b>Occupation:</b> Housewife                                                    
                                        </div>                                                    
                                                
                                        <div class="characters__voicedBy characters__attribute">
                                            <b>Voiced by:</b> Julie Kavner                                                    
                                        </div>                                                    
                                                
                                    </div>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>