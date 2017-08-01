<?php
    session_start();
?>
    <html>

    <head>
        <title>Register - UPES ACM/ACM-W Student Chapters</title>

        <link href="assets/css/index.css" rel="stylesheet" />
    </head>

    <body>
        <header>
            <hgroup>
                <h1><a href="." class="brand">register</a></h1>
            </hgroup>
        </header>
        <section>
            <article>
                <center>
                    <form action="assets/functions/register.php" method="post" id="form">
                        <input type="text" name="code" id="code" class="inp-txt" placeholder="Unique Code" required />
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
