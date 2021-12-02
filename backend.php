<?php 
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
            // var_dump($jsonChar);
            $charData = json_decode($jsonChar, true);
            // var_dump($charData);
            // echo $charData[0]["Name"]; 
            // echo $charData[0]["Image"];
            // echo $charData[0]["Age"]; 
            // echo $charData[0]["Occupation"]; 
            // echo $charData[0]["VoiceActor"]; 
            // echo $charData[0]["ID"];

        } else {
            print "<p>Could not fetch data</p>";
        }
    } else {
        // connection unsuccessful
        die("Error " . mysqli_error($dbconnect));
    }

    if (isset($_GET['characters'])) {
        $characters = $_GET['characters'];
        var_dump($characters);
        echo "These characters were selected:<br/>";
        foreach ($characters as $char => $value) {
            echo "$value<br/>";
        }
    } else {
        echo "Please select a character";
    }
?>