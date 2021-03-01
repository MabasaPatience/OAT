<!DOCTYPE html>

<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Print Signature</title>
</head>

<?php include("../../header.php") ?>

<body class="container">
    <!--Heading-->
    <div class="container pt-2">
        <div style="margin-top: 55px;">
            <div class="text-white" style="border-radius: 20px; background: linear-gradient(rgba(0, 0, 0, 0.799), rgba(0, 0, 0, 0.799));">
                <div style="margin-top: auto;">
                    <h1 class="title text-center"><strong>Print Signature</strong></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-2">
        <div class="inputs">
            <form action="./php/handler.php" method="POST" autocomplete="on">
                <div class="enter">
                    <input class="input form-control" type="text" name="name" required placeholder="Name" autofocus>
                </div>
                <div class="enter">
                    <input class="input form-control" type="email" name="email_address" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" required placeholder="Email Address">
                </div>
                <div class="enter">
                    <input class="input form-control" type="tel" name="phone" pattern="[0-0]{1}[0-9]{9}" required placeholder="Phone Number">

                    <select name="position" class="input">
                        <option name = "position" value="intern">Intern</option>
                        <option name = "position" value="hr">HR</option>
                        <option name = "position" value="network administrator">Network Administrator</option>
                    </select>

                    <select name="companies" class="input">
                        <option name = "companies" value="hages">Hages</option>
                        <option name = "companies" value="technodyn">Technodyn</option>
                        <option name = "companies" value="dynatech">Dynatech</option>
                    </select>
                </div>

                <div class="btn1">
                    <button class="login" type="submit" name="print signature">Print Signature</button>
                </div>
                <div class="btn1">
                    <button class="login" type="reset" name="clear form">Clear From</button>
                </div>
            </form>
        </div>
    </div>
    <br>
</body>

<?php include("../../footer.php") ?>

</html>