<!DOCTYPE html>

<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/OATFinalTHATO/src/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/OATFinalTHATO/src/css/Custom.css" />
    <link rel="stylesheet" href="/OATFinalTHATO/login.php">

    <title>Login</title>

</head>

<body class="container contain">
<div  Style="color:rgb(153, 0, 0); font-size:20px;background-color:rgb(102, 224, 255) ;width:750px;margin-top:25px;margin-left:200px;text-align:center">
        <span > <?php echo $pproved ?></span>
</div>
    <div class="inputs mt-3 mb-2" style="height: 100%;">
    
        <div class="logo mt-4">
     
            <div style="text-align:center" class="slideshow-container">

                <div class="mySlides fade">
                    <img class="logos" src="/src/img/coralite.png" style="width:50%">
                </div>

                <div class="mySlides fade">
                    <img class="logos" src="/src/img/texhnodyn.png" style="width:50%;text-align:center">
                </div>

                <div class="mySlides fade">

                    <img class="logos" src="/src/img/hages.jpg" style="width:50%">
                </div>

                <div class="mySlides fade">
                    <img class="logos" src="/src/img/tibco-spotfire.png" style="width:35%">
                </div>

                <div class="mySlides fade">
                    <img class="logos" src="/src/img/tuvlogo.jpg" style="width:50%">
                </div>

            </div>
            <br>

            <div style="text-align:center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
        <div class="enter pt-3">
            <h4 style="color: black">
                <strong>Sign in to your account</strong>
            </h4>
        </div>
        <br>
        <form method="post" name="myform" onsubmit=" return validateform()" action="loginAdmin.php">
            <div class="enter">
                <label style="text-align: left;color: black">Email</label>
                <input class="input" name="email" type="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" required>
            </div>
            <div class="enter">
                <label style="color: black">Password</label>
                <input class="input" name="passcode" type="password" required>
            </div>
            <div class="enter">
                <label style="text-align: left;color: black">Employee ID</label>
                <input class="input" name="EmployeeID" type="text" required>
            </div>
            <div class="btn">
                <input type="submit" name="submit" class="login" value="LOG IN">
            </div>
            
        </form>
    </div>

    <script>
        function validateform() {

            var email = document.myform.email.value;
            var passcode = document.myform.passcode.value;
            var EmployeeEmail = document.myform.EmployeeEmail.value;

            if (email == null || email == "" || email != $("#email").val()) {
                alert("Enter your email address");
                return false;
            } else if (passcode.length < 6) {
                alert("Enter your password");
                return false;
            }else if(EmployeeID == null || EmployeeID == "" ){
                alert("Enter Employees email email address");
                return false;
            }
        }


        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>

</body>

</html>