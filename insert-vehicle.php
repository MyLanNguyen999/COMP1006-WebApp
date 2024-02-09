<?php
$title = 'Saving Your EV';
include('shared/header.php');


//* Capture the form inputs
$year           = $_POST['year'];
$make           = $_POST['make'];
$model          = $_POST['model'];
$price          = $_POST['price'];
$vehicleRange   = $_POST['vehicleRange'];
$ok             = true;

//* Validate the inputs

    //* Set the messages on the screen if we have wrong/empty data inputs

if (empty($year)){
    echo 'Vehicle year is required <br/>';
    $ok = false;
}

if (empty($make)){
    echo 'Vehile make is required <br/>';
    $ok = false;
}

if (empty($model)){
    echo 'Vehicle model is required <br/>';
    $ok = false;
}

if (empty($price)){
    echo 'Vehicle price is required <br/>';
    $ok = false;
}

if (empty($vehicleRange)){
    echo 'Vehicle range is required <br/>';
    $ok = false;
}

    //* If the data input is correct, proceed
if ($ok == true) {
    $db = new PDO ('mysql:host=172.31.22.43;dbname=MyLan200567763', 'MyLan200567763', 'D4DH4hX6-O');

    //* Insert the data to SQL
    $sql = "INSERT INTO as1_vehicle (year, make, model, price, vehicleRange) VALUES (:year, :make, :model, :price, :vehicleRange)";

    //* Link db with SQL command
    $cmd = $db->prepare($sql);

    //* Map the data input with the column table
    $cmd->bindParam(':year', $year, PDO::PARAM_INT);
    $cmd->bindParam(':make', $make, PDO::PARAM_STR, 100);
    $cmd->bindParam(':model', $model, PDO::PARAM_STR, 100);
    $cmd->bindParam(':price', $price, PDO::PARAM_INT);
    $cmd->bindParam('vehicleRange', $vehicleRange, PDO::PARAM_INT);

    //* Execute the INSERT command above
    $cmd->execute();

    //* Disconnect
    $db = null;

    //* Show the message to users
    echo '<p> Your EV information is saved.</p>';
}
?>
</body>
</html>