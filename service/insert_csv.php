
<?php
include 'config.php';

$date = date("Y-m-d");
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($_POST['type'] == 'add_layer') {
        $name_layer = $_POST['name_layer'];
        $sql = "INSERT INTO layers(
            name_layer,
            date,
            type_data
        ) VALUES
        ( 
            '$name_layer',
            '$date',
            'csv'
        )";   
        $result = pg_query($conn, $sql);
        if ($result) {
            $query = pg_query($conn,"SELECT * FROM layers order by id desc limit 1;");
            $objResult = pg_fetch_all($query);
            $json = json_encode($objResult);

            // Output the JSON response
            header('Content-Type: application/json');
            echo $json;
        }
    }


    if ($_POST['type'] == 'add_geojson') {
        $geom = $_POST['geom'];
        $layer_id = $_POST['layer_id'];
        $zone = $_POST['zone'];
        $x = $_POST['x'];
        $y = $_POST['y'];
        $place = $_POST['place'];
        $owner = $_POST['owner'];
        $no = $_POST['no'];
        $soi = $_POST['soi'];
        $road = $_POST['road'];
        $lat = $_POST['lat'];
        $lng = $_POST['lng'];
        $image_1 = $_POST['image_1'];
        $image_2 = $_POST['image_2'];
        
        $sql = "INSERT INTO csv_data (
            zone,
            x,
            y,
            place,
            owner,
            no,
            soi,
            road,
            lat,
            lng,
            layer_id,
            geom,
            image_1,
            image_2
        ) VALUES(
            '$zone',
            '$x',
            '$y',
            '$place',
            '$owner',
            '$no',
            '$soi',
            '$road',
            '$lat',
            '$lng',
            '$layer_id',
            ST_GeomFromGeoJSON('$geom'),
            '$image_1',
            '$image_2'
        )  ; ";
        $result = pg_query($conn, $sql);
    }
  }


?>