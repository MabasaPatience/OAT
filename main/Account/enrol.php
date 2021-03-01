<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/OATFinalTHATO/src/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/OATFinalTHATO/src/css/Custom.css" />

    <title>Enrol</title>
</head>

<body class="container contain">
    <div class="inputs mt-4 mb-4" style="height: 100%;">
        <div class="logo mt-4">
            <div style="text-align:center" class="slideshow-container">

                <div class="mySlides fade">
                    <img class="logos" src="/OATFinalTHATO/src/img/coralite.png" style="width:50%">
                </div>

                <div class="mySlides fade">
                    <img class="logos" src="/OATFinalTHATO/src/img/texhnodyn.png" style="width:50%;text-align:center">
                </div>

                <div class="mySlides fade">

                    <img class="logos" src="/OATFinalTHATO/src/img/hages.jpg" style="width:50%">
                </div>

                <div class="mySlides fade">
                    <img class="logos" src="/OATFinalTHATO/src/img/tibco-spotfire.png" style="width:35%">
                </div>

                <div class="mySlides fade">
                    <img class="logos" src="/OATFinalTHATO/src/img/tuvlogo.jpg" style="width:50%">
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
        <div class="sign mt-4">
            <h4 style="color: black;margin: 0;padding: 0;">
                <strong>Create Your Account</strong>
            </h4>
        </div>
        <br>
        <form name="myform" method="post" action="/OATFinalTHATO/InsertEnrol.php" onsubmit="return validateform()" enctype="multipart/form-data">
            <div class="enter">
                <label style="text-align: left;color: black">Name</label>
                <input class="input" name="name" type="text" required>
            </div>
            <div class="enter">
                <label style="color: black">Lastname</label>
                <input class="input" name="lastname" type="text" required>
            </div>
			<div class="enter">
                <label style="color: black">Identity no</label>
                <input class="input" name="Identity_no" type="text" required>
            </div>
            <div class="enter">
                <label style="color: black">Email Address</label>
                <input class="input" name="email" type="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" required>
            </div>
            <div class="enter">
                <label style="color: blacpasscodek">Birthdate</label>
                <input class="input" name="dob" type="date" required>
            </div>

            <div class="enter">
                <label style="color: black">Contact No</label>
                <input class="input" name="cellphone" type="tel" pattern="[0-0]{1}[0-9]{9}" required>
            </div>

            <div class="enter">
                Gender:<select name="gender" class="input">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Transgender">Transgender</option>
                    <option value="other">other</option>
                </select>
            </div>

            <div class="enter">
                Position:<select name="position" class="input">
                    <option name = "position" value="administrator">Administrator</option>
                    <option name = "position" value="intern">Intern</option>
                    <option name = "position" value="hr">HR</option>
                    <option name = "position" value="network administrator">Network Administrator</option>
            </select>
            </div>

            <div class="enter">
                <label style="color: black">Manager's Name</label>
                <input class="input" name="manager" type="text">
            </div>

            <div class="enter">
                <label style="color: black">Attach Image</label>
                <input class="input" name="image" type="file"id="image">
            </div>

            <div class="enter">
                <label style="color: black">Password</label>
                <input class="input" name="passcode" type="password">
            </div>
            <div class="fgt">
                <a class="a" style="margin-left: 20px;">
            Already have an account? <a style="color: rgb(21, 21, 20)" href="index.php"> LOG IN</a>
                </a>
            </div>
            <div class="btn">
                <input type="submit" name="submit" class="login" value="Submit">
            </div>
        </form>
    </div>
    <script>
        function validateform() {

            var name = document.myform.name.value;
            var password = document.myform.password.value;
            var lastname = document.myform.lastname.value;
            var email = document.myform.email.value;
            var position = document.myform.position.value;
            var manager = document.myform.manager.value;
			var Profile_Img=document.getElementByID('image');
			var p_img=Profile_Img=document.Value
		var allowExtention=/(\.jpg|\.jpej|\.png|\.gif)$/i;

            if (name == null || name == "" || name < 3) {
                alert("Enter your name");
                return false;
            } else if (lastname == null || lastname == "" || lastname < 3) {
                alert("Enter your lastname");
                return false;
            } else if (email == null || email == "" || email != $("#email").val()) {
                alert("Email not correctly formatted");
                return false;
            } else if (position == null || position == "") {
                alert("Enter your position");
                return false;
            } else if (manager == null || manager == "") {
                alert("Enter managers name");
                return false;
            } else if (password.length < 6) {
                alert("Password must be at least 6 characters long.");
                return false;
            }else if(!allowExtention.exec(p_img=Profile)){
				alert("Upload Image");
				Profile_Img.value='';
			return false;
			}
			
			else if(Profile_Img ==null){
				alert("Upload Image");
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
    <?php
        include("./main/bot/enrol.php") 
    ?> 
</body>

</html>

