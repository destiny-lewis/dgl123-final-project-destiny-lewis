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
            
        } else {
            print "<p>Could not fetch data</p>";
        }
    } else {
        // connection unsuccessful
        die("Error " . mysqli_error($dbconnect));
    }

    if (isset($_GET['characters'])) {
        $characters = $_GET['characters'];
        $charData = json_decode($jsonChar, true);

        for ($j = 0; $j < count($characters); $j++) {
            var_dump($characters[$j]);
        }

        for ($i = 0; $i < count($charData); $i++){
            foreach ($charData[$i] as $data => $value) {
                echo "$value<br/>";
            }
        }
        
    } else {
        echo "Please select a character";
    }

?>