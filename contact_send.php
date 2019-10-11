
<?php
    $from = 'Demo cantact <sorinh@zahav.net.il>';
    $senndTo = 'Send to <sorinh@zahav.net.il>';
    $subject = 'Message from the group';
    $fields = array('name'=>'Sender name', 'email'=>'Sender email', 'message'=>'');
    $okMessage = 'הודעה נשלחה. נתקשר בקרוב';
    $errorMessage = '';
    error_reporting(E_ALL & ~E_NOTICE);

    try {
        if(count($_POST) == 0) throw new \Exception('לא הוקלדו נתונים');
        $emailText = "יש לך הודע חדשה מ \n==============\n";
        foreach ($_POST as $key => $value) {
            if (isset($fields[$key])) {
                $emailText .= "$fields[$key]: $value\n ";
            }
        }
        $headers = array('Content-Type: text/plain; charset="UTF-8";',
            'From: ' .$from, 'Replay-to: ' .$from, 'Return-Path: ' .$from,);

        mail($senndTo, $subject, $emailText, implode("\n", $headers));
        $responseArray = array('type' => 'success', 'message'=> $okMessage);
    }
    catch (\Exception $e) {
        $responseArray = array('type' => 'danger', 'message' => $errorMessage);
    }
    echo $okMessage;

    // if requested by AJAX request return JSON response
    // if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    //     $encoded = json_encode($responseArray);
    //     header('Content-Type: application/json');
    //     echo $encoded;
    // }
    // else {
    //     echo $responseArray['message'];
    // }
 ?>
