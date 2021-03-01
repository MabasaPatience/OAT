<!DOCTYPE html>
<html lang="en">

<head>
    <title>About</title>
</head>

<?php 
error_reporting (E_ALL ^ E_NOTICE);
include("../../Session.php");
include("../../header.php") ?>

<body class="container ">
    <!--Heading-->
    <div class="container pt-2">
        <div style="margin-top: 55px;">
            <div class="text-white" style="border-radius: 20px; background: linear-gradient(rgba(0, 0, 0, 0.799), rgba(0, 0, 0, 0.799));">
                <div style="margin-top: auto;">
                    <h1 class="title text-center"><strong>About</strong></h1>
                </div>
            </div>
        </div>
    </div>
<div class="container pt-2">
    <div class="container inputs">
        <strong><h2 class="text-center"><strong>This project is headed by:</strong></h2>
        <br>
        <ul>
            <li>Team Manager: Fundzo</li>
            <li>Cheif Visionary Officer: Thato</li>
            <li>Website & Chatbot Designer/Developer: Nolan</li>
            <li>Assistant Manager: Akani</li>
            <li>Chatbot Designer: Precious</li>
            <li>Ngiyadlala tetete: Busisiwe</li>
            <li>Business Analyst: Xolani</li>
            <li>Gambler: Kenedy</li>
            <li>Diretor: Tlou</li>
            <li>IT Intern: Thendo</li>
            <li>Manager: Njabulo</li>
            <li>Cheif Executive Officer: Thabo</li>
            <li>Database Administrator: Mfumi</li>
            <li>Developer: Patience</li>
        </ul>
        <br>
        <p>Initiated by the Subject Matter Expects Coach Mercy and Mr Ayo</p></strong>
    </div>
</div>
 
    <?php 
        include("../bot/about.php")
    ?>
    <?php include("../../footer.php") ?>
</body>

</html>