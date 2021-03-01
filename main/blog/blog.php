<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="/Blog/src/css/Custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <title>Blog</title>

</head>

<?php 
error_reporting (E_ALL ^ E_NOTICE);

include("../../Session.php");
include("../../header.php");

?>

<body class="container">
    <!--Heading-->
    <div class="container pt-2">
        <div style="margin-top: 55px;">
            <div class="text-white" style="border-radius: 20px; background: linear-gradient(rgba(0, 0, 0, 0.799), rgba(0, 0, 0, 0.799));">
                <div style="margin-top: auto;">
                    <h1 class="title text-center"><strong>Blog</strong></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container pt-2">
        <div class="row">
            <div class="col-md-6">
                <form class="blog" action="./php/insertData.php" method="POST">
                    <div class="enter" style="margin-top: 5%; padding-right:175px; border-radius: 20px;">
                        <input type="text" name="title" maxlength="25" style="padding-left:10px; padding-top:5%; width:210%; border-radius: 20px;" required placeholder="Title">
                    </div>
                    <div class="enter" style="margin-top: 5%; padding-right:175px; border-radius: 20px;">
                        <textarea name="messages" rows="6" maxlength="250" style="padding-left:10px; padding-top:5%; width:210%; border-radius: 20px; " required placeholder="Whats on your mind?"></textarea>
                    </div>

                    <div class="btn1">
                        <button name="submit" class="login">Submit</button> &nbsp;&nbsp;
                    </div>

                    <div class="btn1">
                        <button class="login" type="reset" name="clear form">Clear From</button>
                    </div>
                    <p id="pop"></p>

                    <script>
                        function myFunction() {
                            var txt;
                            if (confirm("message submitted")) {
                                txt = "You pressed OK!";
                            } else {
                                txt = "You pressed Cancel!";
                            }
                            document.getElementById("pop").innerHTML = txt;
                        }
                    </script>
                </form>
            </div>
            <div class="col-md-6">
                <div class="blog">
                    <h2 class="content-title"><strong>Recent Posts</strong></h2>
                    <iframe src="./php/selectData.php" style="border-radius:5px; background-color:white; margin-bottom: 15px; width:90%; height:385px; border:0; border:0px solid;">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
    
</body>
<?php include("../../footer.php") ?>
</html>