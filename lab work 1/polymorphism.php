<?php

interface Transport
{
    public function send();
}

class SMTP implements Transport
{
    public function send()
    {
        echo "Sending email using SMTP<br>";
    }
}

class Postmark implements Transport
{
    public function send()
    {
        echo "Sending email using Postmark<br>";
    }
}

$smtp = new SMTP();
$postmark = new Postmark();

$smtp->send();
$postmark->send();

?>
