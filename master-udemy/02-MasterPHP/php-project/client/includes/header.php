<?php
// Database connection
require_once 'database.php';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PDG-Manager Online</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <header id="title">
            <!--Title-->
            <h1>PDG-Manager Online</h1>
            <br />
            <!--Menu Options-->
            <nav id="menu">
                <ul>
                    <li>
                        <a href="../server/webcallback.php">PDG-Systems Engineering</a>
                    </li>
                    <li>
                        <a href="../server/guest-chat-api.php">PDG-Telematics Engineering</a>
                    </li>
                    <li>
                        <a href="../server/webchat-widget.php">PDG-Teachers and Monitors</a>
                    </li>
                </ul>
            </nav>
            <div class="clearfix"></div>
        </header>
