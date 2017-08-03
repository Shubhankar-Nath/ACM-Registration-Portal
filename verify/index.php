<?php
    session_start();
    if(!isset($_SESSION['message'])) $_SESSION['message'] = "Please don't snoop around. Visit the <a href='../'>registration page</a> to register.";
?>
    <html>

    <head>
        <title>Verify Registration</title>
        <link href="../assets/css/common.css" rel="stylesheet" />
        <link href="../assets/css/verify.css" rel="stylesheet" />
    </head>

    <body>
        <?php include '../assets/parts/header.php'; ?>
        <center>
            <p>
                <?php echo $_SESSION['message']; ?>
            </p>
        </center>
    </body>

    </html>
