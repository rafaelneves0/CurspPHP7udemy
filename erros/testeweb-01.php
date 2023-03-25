<?php
// A user-defined error handler function
function myErrorHandler($errno, $errstr, $errfile, $errline) {
 echo json_encode(array(
        "code"=>$errno,
        "message"=>$errstr,
        "fine"=>$errfile,
        "lile"=>$errline
    ));
}

// Set user-defined error handler function
set_error_handler("myErrorHandler");

$test=2;

// Trigger error
if ($test>1) {
    trigger_error("A custom error has been triggered");
}
?>