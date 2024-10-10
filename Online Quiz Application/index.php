<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Quiz Application</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400&display=swap" rel="stylesheet">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script>
        function validateForm() {
            var y = document.forms["form"]["name"].value;
            var letters = /^[A-Za-z]+$/;
            if (y == null || y == "") {
                alert("Name must be filled out.");
                return false;
            }
            var z = document.forms["form"]["college"].value;
            if (z == null || z == "") {
                alert("College must be filled out.");
                return false;
            }
            var x = document.forms["form"]["email"].value;
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");
            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
                alert("Not a valid e-mail address.");
                return false;
            }
            var a = document.forms["form"]["password"].value;
            if (a == null || a == "") {
                alert("Password must be filled out");
                return false;
            }
            if (a.length < 5 || a.length > 25) {
                alert("Passwords must be 5 to 25 characters long.");
                return false;
            }
            var b = document.forms["form"]["cpassword"].value;
            if (a != b) {
                alert("Passwords must match.");
                return false;
            }
        }
    </script>
</head>

<body>

    <!-- Sign in Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content title1">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title title1"><span style="color:white">Log In</span></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="login.php?q=index.php" method="POST">
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="email"></label>
                                <div class="col-md-6">
                                    <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="password"></label>
                                <div class="col-md-6">
                                    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
                                </div>
                            </div>
                        </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Log in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign in Modal End -->

    <div class="bg1">
        <!-- Header -->
        <div class="header">
            <header>
                <h2 class="logo">Quiz</h2>
                <nav class="navigation">
                    <button class="sub1" data-toggle="modal" data-target="#myModal">Log In</button>
                </nav>
            </header>
        </div>

        <!-- Typing Text Section -->
        <div class="containgdiv">
        <div class="typing-section">
            <h1>Welcome to the Quiz Application<br><span></span></h1>
        </div>

        <!-- Main Signup Form Section -->
        <div class="row">
            <div class="col-md-7"></div>
            <div class="col-md-4 panel">
                <!-- Sign up Form -->
                <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
                    <fieldset>
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="name"></label>
                            <div class="col-md-12">
                                <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text" style="color: #eee !important;">
                            </div>  
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="gender"></label>
                            <div class="col-md-12">
                                <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md">
                                    <option style="color:black" value="Male">Select Gender</option>
                                    <option style="color:black" value="M">Male</option>
                                    <option style="color:black" value="F">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="college"></label>
                            <div class="col-md-12">
                                <input id="college" name="college" placeholder="Enter your college name" class="form-control input-md" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="email"></label>
                            <div class="col-md-12">
                                <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="mob"></label>
                            <div class="col-md-12">
                                <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md" type="number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="password"></label>
                            <div class="col-md-12">
                                <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="cpassword"></label>
                            <div class="col-md-12">
                                <input id="cpassword" name="cpassword" placeholder="Confirm Password" class="form-control input-md" type="password">
                            </div>
                        </div>
                        <?php if (@$_GET['q7']) { echo '<p style="color:red;font-size:15px;">'.@$_GET['q7']; } ?>
                        <div class="form-group">
                            <label class="col-md-12 control-label" for=""></label>
                            <div class="col-md-12">
                                <input type="submit" class="sub" value="Sign Up" class="btn btn-primary" />
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        </div>
    </div>
<!-- Footer Section -->
<div class="footer">
    <div class="row">
        <div class="col-md-3 box">
            <a href="#" data-toggle="modal" data-target="#aboutUs">About Us</a>
        </div>
        <div class="col-md-3 box">
            <a href="#" data-toggle="modal" data-target="#login">Admin Login</a>
        </div>
        <div class="col-md-3 box">
            <a href="#" data-toggle="modal" data-target="#developers">Developers</a>
        </div>
        <div class="col-md-3 box">
            <a href="feedback.php" target="_blank">Feedback</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <p>&copy; 2024 Online Quiz Application. All rights reserved.</p>
        </div>
    </div>
</div>

<!-- Modal For About Us -->
<div class="modal fade" id="aboutUs">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" style="font-family:'typo'"><span style="color:white">About Us</span></h4>
            </div>
            <div class="modal-body">
                <p style="color: white;">
                We are a dedicated team passionate about making learning engaging through our Online Quiz Application. Our platform offers a diverse array of quizzes, designed to enhance knowledge and provide a fun, interactive experience for users of all ages.
                </p>
            </div>
        </div>
    </div>
</div>
    <!-- Modal For Developers -->
    <div class="modal fade title1" id="developers">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" style="font-family:'typo' "><span style="color:white">Developers</span></h4>
                </div>
                <div class="modal-body">
                    <p>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-5">
                                <a href="" style="color:white; font-family:'typo' ; font-size:18px" title="Find on Facebook">Akshith Perakam</a>
                                <h4 style="color:white; font-family:'typo' ;font-size:16px" class="title1">+91 7075654189</h4>
                                <h4 style="font-family:'typo'; color:white ">Sathyabama Institute of Science and Technology</h4>
                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Admin Login -->
    <div class="modal fade" id="login">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title"><span style="color:white;font-family:'typo' ">LOGIN</span></h4>
                </div>
                <div class="modal-body title1">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <form role="form" method="post" action="admin.php?q=index.php">
                                <div class="form-group">
                                    <input type="text" name="uname" maxlength="20" placeholder="Admin user id" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" maxlength="15" placeholder="Password" class="form-control" />
                                </div>
                                <div class="form-group" align="center">
                                    <input type="submit" name="login" value="Login" class="btn btn-primary" />
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Typing effect script -->
    <script>
        const words = ["Quiz Platform", "Fun & Educational", "Test your Knowledge", "Join Now"];
        let i = 0;
        let timer;

        function typingEffect() {
            let word = words[i].split("");
            var loopTyping = function() {
                if (word.length > 0) {
                    document.querySelector(".typing-section span").innerHTML += word.shift();
                } else {
                    deletingEffect();
                    return false;
                };
                timer = setTimeout(loopTyping, 200);
            };
            loopTyping();
        };

        function deletingEffect() {
            let word = words[i].split("");
            var loopDeleting = function() {
                if (word.length > 0) {
                    word.pop();
                    document.querySelector(".typing-section span").innerHTML = word.join("");
                } else {
                    if (words.length > (i + 1)) {
                        i++;
                    } else {
                        i = 0;
                    };
                    typingEffect();
                    return false;
                };
                timer = setTimeout(loopDeleting, 100);
            };
            loopDeleting();
        };

        typingEffect();
    </script>
</body>

</html>
