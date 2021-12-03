<!DOCTYPE html>
<!------------------------------------------------- 
Author: Chris Geelhoed
Modified by: Destiny Lewis
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
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    
    <header id="masthead" class="site-header layout-container">
        <a href="simpsons_archive.php">
            <img class="site-header__logo" src="images/logo.svg" alt="Logo">
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
                                            <input id="homer" type="checkbox" name='characters[]' value="Homer Simpson"<?php if(isset($_GET['characters'])) { if (in_array("Homer Simpson", $_GET['characters'])) { echo "checked='checked'"; } }?>>                                
                                        </li>

                                        <li class="form__item">
                                            <label for="marge">
                                                Marge Simpson                                                
                                            </label>
                                            <input id="marge" type="checkbox" name='characters[]' value="Marge Simpson" <?php if(isset($_GET['characters'])) { if (in_array("Marge Simpson", $_GET['characters'])) { echo "checked='checked'"; } }?>>                                
                                        </li>

                                        <li class="form__item">
                                            <label for="bart">
                                                Bart Simpson                                                
                                            </label>
                                            <input id="bart" type="checkbox" name='characters[]' value="Bart Simpson" <?php if(isset($_GET['characters'])) { if (in_array("Bart Simpson", $_GET['characters'])) { echo "checked='checked'"; } }?>>                                
                                        </li>

                                        <li class="form__item">
                                            <label for="lisa">
                                                Lisa Simpson                                                
                                            </label>
                                            <input id="lisa" type="checkbox" name='characters[]' value="Lisa Simpson" <?php if(isset($_GET['characters'])) { if (in_array("Lisa Simpson", $_GET['characters'])) { echo "checked='checked'"; } }?>>        
                                        </li>

                                        <li class="form__item">
                                            <label for="maggie">
                                                Maggie Simpson                                                
                                            </label>
                                            <input id="maggie" type="checkbox" name='characters[]' value="Maggie Simpson" <?php if(isset($_GET['characters'])) { if (in_array("Maggie Simpson", $_GET['characters'])) { echo "checked='checked'"; } }?>>                                
                                        </li>

                                        <li class="form__item">
                                            <label for="moe">
                                                Moe Szyslak                                                
                                            </label>
                                            <input id="moe" type="checkbox" name='characters[]' value="Moe Szyslak" <?php if(isset($_GET['characters'])) { if (in_array("Moe Szyslak", $_GET['characters'])) { echo "checked='checked'"; } }?>>                                
                                        </li>
                                    </ul>

                                    <input class="form__button" type="submit" value="Show Characters">

                                </form>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="characters__container layout-container">
                    <div class="characters__row layout-row">
                        <ul class="characters__items">
                            <?php include "backend.php" ?>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
<script>
    let soundClips = document.querySelectorAll(".audio").forEach()

</script>

</body>
</html>