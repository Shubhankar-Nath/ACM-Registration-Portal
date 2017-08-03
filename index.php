<?php
    session_start();
    if(isset($_SESSION['message'])) unset($_SESSION['message']);
?>
    <html>

    <head>
        <title>Register - UPES ACM/ACM-W Student Chapters</title>

        <link href="assets/css/common.css" rel="stylesheet" />
        <link href="assets/css/index.css" rel="stylesheet" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
    </head>

    <body>
        <?php include 'assets/parts/header.php'; ?>
        <section>
            <article>
                <div id="gif">
                    <div id="logos" onmouseover="showImages();" onmouseout="hideImages();">
                        <center>
                            <a href="http://upesacm.org" target="_blank"><img src="assets/images/UPES%20ACM%20LOGO.png" /></a>
                            <a href="http://upesacmwomen.org" target="_blank"><img src="assets/images/ACM-W.png" /></a>
                        </center>
                    </div>
                </div>
            </article>
            <article>
                <center>
                    <form action="." method="post" id="form" onsubmit="return verify_form();">
                        <input type="text" name="code" id="code" class="inp-txt" placeholder="Enter Unique Code Here" title="Enter the unique code provided to you to register" onblur="verify_code();" required />
                        <div class="left">
                            <input type="text" name="name" class="inp-txt" placeholder="Name*" title="Please enter your name" required />
                            <input type="text" name="branch" class="inp-txt" placeholder="Branch*" title="Please enter your Branch" required />
                            <input type="number" name="year" class="inp-txt" placeholder="Year of Study*" title="Please enter your current year of study" required />
                        </div>
                        <div class="right">
                            <input type="email" name="email" class="inp-txt" placeholder="Email ID*" title="Please enter your Email-ID" required />
                            <input type="number" name="phone" class="inp-txt" placeholder="Contact Number*" title="Please enter your Contact Number" maxlength="10" required />
                            <input type="number" name="whatsapp" class="inp-txt" placeholder="WhatsApp Number" title="Please enter your WhatsApp Number (if any)" maxlength="10" />
                            <input type="number" name="type" id="type" class="inp-txt" placeholder="Membership type" title="Automatically set, depending on your code" />
                        </div>
                        <div class="button">
                            <input type="submit" name="submit" value="Register" />
                        </div>
                    </form>
                </center>
            </article>
        </section>
    </body>

    </html>
