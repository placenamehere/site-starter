<?php include_once('../inc/config.inc.php'); ?>
<?php

json_headers();

$success = array(
	'error' => null,
	'result' => array(
		'data_item1' => 'Hello',
		'data_item2' => 'World'
	),
	'id' => null
);

$error = array(
	'error' => 'There was an error with this request',
	'result' => null,
	'id' => null
);


// Have some basic logic to check a value or required field or something from the request
// or just manually change betwee ntrue and false
if (true) {
	echo json_encode($success);
} else {
	echo json_encode($error);
}

?>
