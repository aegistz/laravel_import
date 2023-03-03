
<?php
include 'config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $layer_id = $_POST['layer_id'];
    if ($_POST['type'] == 'get_geojson_by_kml') {
        $sql = "SELECT *,ST_AsGeoJSON(geom) AS geojson from kml_parcel where layer_id = '$layer_id' ; ";
           // Perform database query
           $query = pg_query($conn,$sql);   
           //echo $sql;
            // Return route as GeoJSON
           $geojson = array(
              'type'      => 'FeatureCollection',
              'features'  => array()
           ); 
          
           // Add geom to GeoJSON array
           while($edge=pg_fetch_assoc($query)) {  
              $feature = array(
                 'type' => 'Feature',
                 'geometry' => json_decode($edge['geojson'], true),
                 'crs' => array(
                    'type' => 'EPSG',
                    'properties' => array('code' => '4326')
                 ),
                    'properties' => array(
                    'gid' => $edge['id'],
                    'layer_id' => $edge['layer_id'],
                    'style' => json_decode($edge['style']),
                    'data_properties' => json_decode($edge['data_properties'])
                 )
              );
              
              // Add feature array to feature collection array
              array_push($geojson['features'], $feature);
           }
           // Close database connection
           // Return routing result
           header('Content-type: application/json',true);
          echo json_encode($geojson);
    }
    if ($_POST['type'] == 'get_geojson_by_csv') {
      
      $sql = "SELECT *,ST_AsGeoJSON(geom) AS geojson from csv_data where layer_id = '$layer_id' ; ";
      // Perform database query
      $query = pg_query($conn,$sql);   
      //echo $sql;
       // Return route as GeoJSON
      $geojson = array(
         'type'      => 'FeatureCollection',
         'features'  => array()
      ); 
     
      // Add geom to GeoJSON array
      while($edge=pg_fetch_assoc($query)) {  
         $feature = array(
            'type' => 'Feature',
            'geometry' => json_decode($edge['geojson'], true),
            'crs' => array(
               'type' => 'EPSG',
               'properties' => array('code' => '4326')
            ),
               'properties' => array(
               'gid' => $edge['id'],
               'layer_id' => $edge['layer_id'],
               'zone' => $edge['zone'],
               'x' => $edge['x'],
               'y' => $edge['y'],
               'place' => $edge['place'],
               'owner' => $edge['owner'],
               'no' => $edge['no'],
               'soi' => $edge['soi'],
               'road' => $edge['road'],
               'lat' => $edge['lat'],
               'lng' => $edge['lng'],
               'image_1' => $edge['image_1'],
               'image_2' => $edge['image_2'],
            )
         );
         
         // Add feature array to feature collection array
         array_push($geojson['features'], $feature);
      }
      // Close database connection
      // Return routing result
      header('Content-type: application/json',true);
     echo json_encode($geojson);
    }
}


?>