<?php

    // Connect to database & collect data.
    if ($dbconnect = mysqli_connect('localhost', 'root', '', 'simpsons_characters')) {
        // connection successful
        // fetch required table data
        $sqlFetch = "SELECT * FROM characters";
        if ($fetchResult = mysqli_query($dbconnect, $sqlFetch)) {
            // fetch successful
            // convert data into array
            $charsArray = array();
            while ($row = mysqli_fetch_assoc($fetchResult)) {
                $charsArray[] = $row;
            }
            // convert php array into JSON string
            $jsonChar = json_encode($charsArray);
            $charData = json_decode($jsonChar, true);
            
        } else {
            print "<p>Could not fetch data</p>";
        }
    } else {
        // connection unsuccessful
        die("Error " . mysqli_error($dbconnect));
    }     
    
?>

<?php if (isset($_GET['characters'])) : ?>
    <?php for ($i = 0; $i < count($charData); $i++) : ?>
        <?php if (in_array($charData[$i]['Name'], $_GET['characters'])) : ?>
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
                                                            
                    </div>

                </div>
            </li>
        <?php endif; ?>
    <?php endfor; ?>
<?php else : ?>
    <p>Please select some characters!</p>
<?php endif ?>








