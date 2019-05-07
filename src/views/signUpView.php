<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap stylesheet -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Note: External stylesheets must come after Bootstrap stylesheet -->
        <link href="CSS/signUpView-styles.css" rel="stylesheet" type="text/css" />

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <title>Amazon Registration</title>
    </head>

    <body>
        <p class="aligncenter">
            <img src="images/amazon-smile.png" alt="Amazon Smile Logo" class="img-fluid logo" />
        </p>

        <div class="container">
            <div class="row justify-content-center signup-row">
                <div class="col-md-5 col-sm-5 col-xs-12 signup-box">
                    <div class="signup-text">
                        <span id="createAccount">Create account</span>
                    </div>

                    <div class="signup-form">
                        <form action="searchView.php" method="post">
                            <br />
                            Your name
                            <input type="text" name="name" style="width:100%;" /><br /><br />
                            Email
                            <input type="email" name="email" style="width: 100%;" /><br /><br />
                            Password
                            <input type="password" name="password" style="width: 100%;" placeholder="At least 6 characters"/>
                            <br />
                            <div id="pass-text">Passwords must be at least 6 characters.</div><br />
                            Re-enter your password
                            <input type="password" name="reenter-password" style="width: 100%;" /><br /><br />
                            <input type="submit" value="Create your Amazon account" />
                            <br />
                        </form>
                    </div>

                    <div class="signup-text-2">
                        <br />
                        <span>By continuing, you agree to Amazon's</span>
                        <span class="hyperlink">Conditions of Use</span>
                        <span>and</span>
                        <span class="hyperlink">Privacy Notice.</span>

                        <br /><br />
                        <hr />
                        <br />
                        <span>Already have an account?</span>
                        <span class="hyperlink">Sign in</span>
                    </div>
                </div>
            </div>
        </div>

        <footer class="page-footer fixed-bottom">
            <div class="container-fluid">
                <!-- Login footer -->
                <div class="row login-footer">
                    <div class="col-12" align="center">
                        <span>Learn more about AmazonSmile</span> &nbsp&nbsp&nbsp
                        <span>Back to Amazon.com</span> &nbsp&nbsp&nbsp
                        <span>Represent a charitable organization? Visit org.amazon.com</span> &nbsp&nbsp&nbsp
                        <span>Conditions of Use</span> &nbsp&nbsp&nbsp
                        <span>Privacy Notice</span> &nbsp&nbsp&nbsp

                        <br />

                        <div class="footer-copyright text-center py-3">
                            <span id="copyright">© 1996-2019, Amazon.com, Inc. or its affiliates</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
