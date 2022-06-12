
<?php 

include __DIR__ .'/database.php';

// var_dump($dischi);

header('Content-Type: application/json');

echo json_encode($dischi);


?>