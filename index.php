<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>E-Play Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body style="margin: 0">
    <div class="background-video-wrapper">
        <video autoplay muted id="home_video">
            <source src="videos/index_video.mp4" type="video/mp4">
        </video>
        <audio id="home_audio">
            <source src="audio/index_music.ogg" type="audio/ogg"></audio>
    </div>

    <!--This div tag holds everything except the background video..Like body of the html-->
    <div id="body_div">
        <div class="empty_divs"></div>
        <div id="middle_div">
            <div style="height: 100%;width: 20%;float: left;background-color:teal;margin-left: 2%;border:3px solid yellow;border-radius: 20px"
                align="center">
                <div id="logo_div" style="heigh:40%">
                    &nbsp;&nbsp;&nbsp;&nbsp;<img id="logo_img" width="100px" height="100px"
                        src="images/logo/logo3.png" />
                </div>
                <h1 id="demo" style="color: white;height: 10%;"></h1>
                <hr style="color:honeydew" />
                <div style="width: 100%;height: 50%;">
                    <div class="flip_container" style="width:80%;height: 100%;">
                        <div class="flip_card">
                            <div class="flip_front"><img src="images/home_prize/front_card.png" style="width:100%;height: 100%;" />
                            </div>
                            <div class="flip_back"><img src="images/home_prize/back_card.png"
                                    style="width:100%;height: 100%;" /></div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="height: 100%; width: 30%;float: right;" align="center">
                <div id="form_div" align="center">
                    <div id="flip_form">
                        <div id="login_div">
                            <form style="width: 100%;height: 100%;" action="php/authentication/login.php" method="POST">
                                <h1 class="signup_input" style="background-color: teal;color: white">Login</h1>
                                <input class="login_input" type="text" name="login_email" placeholder="Email" />
                                <input class="login_input" type="password" name="login_password"
                                    placeholder="Password" />
                                <br /><br />
                                <input type="submit" class="signup_button" value="Login" /><br />
                                <h2 class="signup_input" style="height:40px;margin:0;background-color: teal;padding: 0">
                                    New User:
                                    <button id="switch_button" onclick="flipSignup()"
                                        style="background: transparent;border: 0;color:darkblue;text-decoration: underline;font-size: 25px;">Login</button>
                                </h2>
                            </form>
                        </div>
                        <div id="signup_div">
                            <form style="width: 100%;height: 90%;" action="php/authentication/signup.php" method="POST">
                                <h1 class="signup_input" style="background-color: teal;color: white">Sign-Up</h1>
                                <input class="signup_input" type="text" name="signup_name" placeholder="Name" />
                                <input class="signup_input" type="text" name="signup_id"
                                    placeholder="Pubg Game Username" />
                                <input class="signup_input" type="text" name="signup_email" placeholder="Email" />
                                <input class="signup_input" type="password" name="signup_password"
                                    placeholder="New Password" />
                                <br /><br />
                                <input type="submit" class="signup_button" value="Sign Up" /><br />
                                <h2 class="signup_input" style="height:40px;margin:0;background-color: teal;padding: 0">
                                    Already a user:
                                    <button id="switch_button" onclick="flipLogin()"
                                        style="background: transparent;border: 0;color:darkblue;text-decoration: underline;font-size: 25px;">Login</button>
                                </h2>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="empty_divs">
        </div>
    </div>
    <script type="text/javascript" src="js/countdown.js"></script>
    <script type="text/javascript" src="js/signup_login.js"></script>
</body>

</html>