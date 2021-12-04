<!------------------------------------------------- 
Author: Destiny Lewis
Course: DGL-123, Introduction to PHP
Section: DLU-1
Date: December 2nd 2021
Final Course Project

backend.php
Purpose: Display information about varying Simpson's characters based on user selection using
data retrieved from characters.json
------------------------------------------------->

<?php    
    if (file_exists("characters.json")) {
        $jsonChar = file_get_contents("characters.json");
        $charData = json_decode($jsonChar, true);
    }
?>

<?php if (isset($_GET['characters'])) : ?>
    <?php $characters = $_GET['characters']; ?>
    <?php for ($i = 0; $i < count($charData); $i++) : ?>
        <?php if (in_array($charData[$i]['Name'], $characters)) : ?>
            <li class="characters__itemContainer">
                <div class="characters__item">
                    <img src="images/<?=$charData[$i]['Image']?>" alt="<?=$charData[$i]['Name']?>" class="characters__image">
                    <div class="characters__info">

                        <h3 class="characters__name">
                            <?=$charData[$i]['Name']?>
                        </h3>

                        <div class="characters__age characters__attribute">
                            <b>Age:</b> <?=$charData[$i]['Age']?>                                                
                        </div>

                        <div class="characters__occupation characters__attribute">
                            <b>Occupation:</b> <?=$charData[$i]['Occupation']?>                                                    
                        </div>                                                    
                                                            
                        <div class="characters__voicedBy characters__attribute">
                            <b>Voiced by:</b> <?=$charData[$i]['VoiceActor']?>                                                    
                        </div>
                        
                        <div class="characters__soundClip characters__attribute">
                            <audio controls class="audio">
                                <source src="audio/<?=$charData[$i]['Soundclip']?>" type="audio/mp3">
                                Your browser does not support the audio tag.
                            </audio>
                            <a href="<?=$charData[$i]['AudioSource']?>" target="_blank" class="sourceLink">Audio Source</a>
                        </div>
                                                            
                    </div>

                </div>
            </li>
        <?php endif; ?>
    <?php endfor; ?>
<?php else : ?>
    <p>Please select some characters!</p>
<?php endif ?>








