<?php


    $methodType = $_SERVER['REQUEST_METHOD'];
    $data = array("status" => "fail", "msg" => "On $methodType");



    // attach the transaction to the data
    $data['transaction'] = $transaction;

    //echo $methodType;
    //var_dump($transaction);

    // to see you will need to type this in the URL bar of your browser:
    // http://localhost/lab_7/lab_07_GetTable.php?output=json
    // Note: you may also need to include a port (check XAMPP/WAMP/LAMP/MAMP for the port)
    if ($methodType === 'GET') {
        if(isset($_GET['output'])) {
            $output = $_GET['output'];


            // YOUR CODE GOES HERE TO GRAB THE DATA FROM THE DATABASE
            // (I.E., YOUR TRY CATCH)
            /////////////////////////////////////////////////////////

            switch($output) {
                case "json":
                    $data['status'] = 'success';
                    $data['msg'] = 'Retrieving data as JSON';

                    // YOUR CODE GOES HERE TO OUTPUT THE DATA FROM THE DATABASE
                    //
                    /////////////////////////////////////////////////////////


                    break;
                case "html":


                    // YOUR CODE GOES HERE TO OUTPUT THE DATA FROM THE DATABASE
                    //
                    /////////////////////////////////////////////////////////


                    break;
            }

        } else {
            echo "Need a type of output!";
        }

    } else {
        echo $data;
    }



?>

