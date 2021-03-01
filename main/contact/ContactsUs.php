<!DOCTYPE html>
<html>

<head>
    <title>Contact Us</title>
</head>
<?php 
error_reporting (E_ALL ^ E_NOTICE);
include("../../Session.php");
include("../../header.php") ?>

<body class="container">
    <!--Heading-->
    <div class="container pt-2">
        <div style="margin-top: 55px;">
            <div class="text-white" style="border-radius: 20px; background: linear-gradient(rgba(0, 0, 0, 0.799), rgba(0, 0, 0, 0.799));">
                <div style="margin-top: auto;">
                    <h1 class="title text-center"><strong>Contact Us</strong></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container pt-2">
        <div class="inputs" style="height: 100%; margin-bottom: 5%;">
            <form class="container" action="./php/contactengine.php" autocomplete="on" style="margin-bottom: 5%;">
                <div class="enter pt-5">
                    <input class="input form-control" type="text" name="name" required placeholder="Name" autofocus>
                </div>
                <div class="enter">
                    <input class="input form-control" disabled type="text" name="Subject" value="Web services" required placeholder="Subject">
                </div>

                <div class="enter ">
                    <textarea class="input form-control" name="message" rows="4" maxlength="1000 " style="width:50vw; color:black; width:100%; border: none; background:rgba(255, 255, 255, 0.799); " rows="3 " type="text " placeholder="How can we be of assistance?"></textarea>
                </div>

                <div class="enter " style="float: right; margin-top: -20px; margin-bottom: 10px; ">
                    <span><div class="btn ">
                        <button class="login " type="submit " name="print signature ">Submit</button>
                    </div>
                    <div class="btn ">
                        <button class="login " type="reset " name="clear form ">Clear From</button>
                    </div></span>
                </div>
            </form>
        </div>
        <iframe class="container"
            height="250"
            frameborder="0" style="margin-left:15%; margin-right:auto; border:0; width:70%"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD2lAn9cWR2veiV_nWFVq5EKuzKKtsd2ew
            &q=345+Rivnia+Boulevard,Edenburg" allowfullscreen>
        </iframe>
    </div>
    <?php include("../../footer.php") ?>
</body>

</html>