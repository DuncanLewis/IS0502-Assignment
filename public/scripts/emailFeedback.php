<?php
/**
 * Created by PhpStorm.
 * User: duncanlewis
 * Date: 26/03/15
 * Time: 13:58
 */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $to      = 'duncan.lewis@me.com';
    $subject = 'Website Feedback Received';

    $from    = $_POST['emailAddress'];
    $name    = $_POST['name'];
    $rating  = $_POST['rating'];
    $comment = $_POST['comment'];

    $message = "Comment received from " . $from . " on " . date('Y-m-d h:m') . " \r\n ";
    $message .= "Name: " . $name . " \r\n ";
    $message .= "Rating: " . $rating . "/5 \r\n ";
    $message .= "Comment: " . $comment . " \r\n ";

    $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

}
