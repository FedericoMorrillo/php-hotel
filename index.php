<!--PHP -->

<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>

<!--/PHP -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>

<body>
    <!--senza tabella-->
    <?php

    //ciclo

    foreach ($hotels as $hotel) {

        //ciclo

        foreach ($hotel as $key => $hotel_info) {
            echo $key . ": " . $hotel_info;
            echo "<br>";
        }

        //ciclo

        echo "<hr>";
    }

    //ciclo

    ?>
    <!--/senza tabella-->

    <!--Tabella-->
    <table class="table">

        <thead>

            <!--intestazione tabella-->
            <tr>
                <th scope="col">Hotel Name</th>
                <th scope="col">Description</th>
                <th scope="col">Parking</th>
                <th scope="col">Vote</th>
                <th scope="col">distance_to_center</th>
            </tr>
            <!--/intestazione tabella-->

        </thead>

        <tbody>

            <!-- Row array[0]-->
            <tr>

                <!--Ciclo-->
                <?php foreach ($hotels[0] as $key => $hotel_info) {

                    if ($key === 'parking') {
                        // Verifichiamo se 'parking' è true e assegnamo la stringa corrispondente
                        $availability = $hotel_info ? 'Disponibile' : 'Non Disponibile';
                        echo "<td>$availability</td>";
                    } elseif ($key === 'distance_to_center') {
                        // Aggiungo "km" alla colonna 'distance_to_center'
                        echo "<td>$hotel_info km</td>";
                    } else {
                        echo "<td>$hotel_info</td>";
                    }
                }
                ?>
                <!--/Ciclo-->

            </tr>
            <!-- /Row array[0]-->

            <!-- Row array[1]-->
            <tr>

                <!--Ciclo-->
                <?php foreach ($hotels[1] as $key => $hotel_info) {

                    if ($key === 'parking') {
                        // Verifichiamo se 'parking' è true e assegnamo la stringa corrispondente
                        $availability = $hotel_info ? 'Disponibile' : 'Non Disponibile';
                        echo "<td>$availability</td>";
                    } elseif ($key === 'distance_to_center') {
                        // Aggiungo "km" alla colonna 'distance_to_center'
                        echo "<td>$hotel_info km</td>";
                    } else {
                        echo "<td>$hotel_info</td>";
                    }
                }
                ?>
                <!--/Ciclo-->

            </tr>
            <!-- /Row array[1]-->

            <!-- Row array[2]-->
            <tr>

                <!--Ciclo-->
                <?php foreach ($hotels[2] as $key => $hotel_info) {

                    if ($key === 'parking') {
                        // Verifichiamo se 'parking' è true e assegnamo la stringa corrispondente
                        $availability = $hotel_info ? 'Disponibile' : 'Non Disponibile';
                        echo "<td>$availability</td>";
                    } elseif ($key === 'distance_to_center') {
                        // Aggiungo "km" alla colonna 'distance_to_center'
                        echo "<td>$hotel_info km</td>";
                    } else {
                        echo "<td>$hotel_info</td>";
                    }
                }
                ?>
                <!--/Ciclo-->

            </tr>
            <!-- /Row array[2]-->

            <!-- Row array[3]-->
            <tr>

                <!--Ciclo-->
                <?php foreach ($hotels[3] as $key => $hotel_info) {

                    if ($key === 'parking') {
                        // Verifichiamo se 'parking' è true e assegnamo la stringa corrispondente
                        $availability = $hotel_info ? 'Disponibile' : 'Non Disponibile';
                        echo "<td>$availability</td>";
                    } elseif ($key === 'distance_to_center') {
                        // Aggiungo "km" alla colonna 'distance_to_center'
                        echo "<td>$hotel_info km</td>";
                    } else {
                        echo "<td>$hotel_info</td>";
                    }
                }
                ?>
                <!--/Ciclo-->

            </tr>
            <!-- /Row array[3]-->

            <!-- Row array[4]-->
            <tr>

                <!--Ciclo-->
                <?php foreach ($hotels[4] as $key => $hotel_info) {

                    if ($key === 'parking') {
                        // Verifichiamo se 'parking' è true e assegnamo la stringa corrispondente
                        $availability = $hotel_info ? 'Disponibile' : 'Non Disponibile';
                        echo "<td>$availability</td>";
                    } elseif ($key === 'distance_to_center') {
                        // Aggiungo "km" alla colonna 'distance_to_center'
                        echo "<td>$hotel_info km</td>";
                    } else {
                        echo "<td>$hotel_info</td>";
                    }
                }
                ?>
                <!--/Ciclo-->

            </tr>
            <!-- /Row array[4]-->
        </tbody>
    </table>
    <!--/Tabella-->
</body>

</html>