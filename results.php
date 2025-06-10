<?php
    // Setting the variables
    $userNumMin = $_POST['minNumber'];
    $userNumMax = $_POST['maxNumber'];

    // initialize the counter to 0
    $counter = 0;
    // initalize numbers as an empty string
    $numbers = "";
    $numbers2 = "";

    while ($counter <= $userNumMin) {
        // build the string of numbers with a line break each time
        $numbers = $numbers . $counter . "<br>";
        // increment the counter
        $counter = $counter +1;
    }
    while ($counter <= $userNumMax) {
        // build the string of numbers with a line break each time
        $numbers2 = $numbers2 . $counter . "<br>";
        // increment the counter
        $counter = $counter +1;
    }
?>	
	<!-- display the results -->
    <h4>Results:</h4>
    <?php echo $numbers ?>
    <?php echo $numbers2 ?>