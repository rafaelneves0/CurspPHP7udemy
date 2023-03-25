<?php

function error_handler($code, $message, $file, $line){

    echo json_encode(array(
        "code"=>$code,
        "message"=>$message,
        "fine"=>$file,
        "lile"=>$line
    ));

}

set_error_handler("error_handler");

$test=2;

// Trigger error
if ($test>1) {
    trigger_error("A custom error has been triggered");
}

/*\Throwable*/
?>





