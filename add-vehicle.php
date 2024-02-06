<?php
$title = 'Add Your EV';
include('shared/header.php');
?>

<h1> Add Your EV </h1>
<form method="post" action="insert-vehicle.php">
    <fieldset>
        <label for="year"> Year: * <label>
        <input name="year" id="year" placeholder="2024" type="number" required /> 
    </fieldset>
    <fieldset>
        <label for="make"> Make: * <label>
        <input name="make" id="make" required /> 
    </fieldset>
    <fieldset>
        <label for="Model"> Model: * <label>
        <input name="model" id="model" required /> 
    </fieldset>
    <fieldset>
        <label for="price"> Price: * <label>
        <input name="price" id="price" required /> 
    </fieldset>
    <fieldset>
        <label for="vehicleRange"> Vehicle Range: * <label>
        <input name="vehicleRange" id="vehicleRange" required /> 
    </fieldset> 
    <button> Submit </button>
</form>
</body>
</html>
