<?php
    session_start();
?>
    <html>

    <head>
        <title>Register - UPES ACM/ACM-W Student Chapters</title>

        <link href="assets/css/index.css" rel="stylesheet" />

        <script type="text/javascript">
            function showImages()
            {
                var i=document.getElementsByTagName('img');
                i[0].style.opacity = 1;
                i[1].style.opacity = 1;
            }
            function hideImages() {
                var i=document.getElementsByTagName('img');
                i[0].style.opacity = 0;
                i[1].style.opacity = 0;
            }
        </script>
    </head>

    <body>
        <header>
            <hgroup>
                <h1><a href="." class="brand">register</a></h1>
            </hgroup>
        </header>
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
                    <form action="assets/functions/register.php" method="post" id="form">
                        <input type="text" name="code" id="code" class="inp-txt" placeholder="Enter Unique Code Here" required />
                        <div class="left">
                            <input type="text" name="name" class="inp-txt" placeholder="Name" required />
                            <input type="text" name="name" class="inp-txt" placeholder="Branch" required />
                            <input type="email" name="name" class="inp-txt" placeholder="Email ID" required />
                        </div>
                        <div class="right">
                            <input type="number" name="name" class="inp-txt" placeholder="Contact Number" required />
                            <input type="number" name="name" class="inp-txt" placeholder="WhatsApp Number" />
                            <select class="inp-txt" required>
                                <option value="">Membership Duration</option>
                                <option>1 year membership</option>
                                <option>4 years membership</option>
                            </select>
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
