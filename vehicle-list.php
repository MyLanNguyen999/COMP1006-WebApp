<?php
$title = 'Vehicle List';
include('shared/header.php');

//* Connect with DB
$db = new PDO('mysql:host=172.31.22.43;dbname=MyLan200567763', 'MyLan200567763', 'D4DH4hX6-O');

//* Select query to show data from as1_vehicle
$sql = "SELECT * FROM as1_vehicle";
$cmd = $db->prepare($sql);

//* Execute the query
$cmd->execute();
$as1_vehicles = $cmd->fetchAll();

//* Start the table
echo '<h1> Vehicle List </h1>';

//* Format table
echo '<table>
        <thead>
            <tr>
                <th> Year </th>
                <th> Make </th>
                <th> Model </th>
                <th> Range </th>
                <th> Price </th>
            </tr>
        </thead>';
foreach ($as1_vehicles as $as1_vehicle) {
    echo '<tbody>
            <tr>
                <td> ' . $as1_vehicle['year'] . '</td>
                <td> ' . $as1_vehicle['make'] . '</td>
                <td> ' . $as1_vehicle['model'] . '</td>
                <td> ' . $as1_vehicle['vehicleRange'] . '</td>
                <td> ' . $as1_vehicle['price'] . '</td>
             </tr>
        </tbody>';
}

//* End the table
echo '</table>';
//* Disconnect db
$db = null;
?>