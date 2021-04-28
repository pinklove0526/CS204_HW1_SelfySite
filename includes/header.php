<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Selfy Site</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Average&family=Fjalla+One&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
        <style media="screen">
            h1, h2, h3, h4, nav ul li
            {
                font-family: 'Fjalla One', sans-serif;
            }

            p, ul li
            {
                font-family: 'Average', serif;
            }

            body
            {
                margin: 0px;
            }

            div#banner
            {
                background: grey;
                height: 50vh;
                padding: 10vh;
                color: white;
                background-image: url(images/jellyfish-4949516_960_720.jpg);
                background-size: 100%;
                background-repeat: no-repeat;
                background-position-x: center;
                background-position-y: 1%;
            }

            header
            {
                position: fixed;
                background: rgb(255,0,127) !important;
                top: 0px;
                left: 0px;
                width: 100%;
                height: 69px;
                box: 1px 1px 5px #ff007f;
                z-index: 10;
            }

            .logo
            {
                width: 120px;
                top: 20px;
                left: 20px;
                position: absolute;
            }

            .logo h1
            {
                margin: 0px;
                text-transform: uppercase;
                font-size: 2em;
                color: white !important;
                text-shadow: 0px 1px 1px black;
                text-decoration: none;
                font-style: italic;
                text-transform: lowercase;
            }

            img
            {
                max-width: 100%;
            }

            .main-nav
            {
                position: absolute;
                top: 8px;
                right: 20px;
            }

            nav ul
            {
                display: inline-flex;
            }

            nav ul li
            {
                padding: 10px;
                list-style: none;
                text-decoration: none;
            }

            nav ul li a
            {
                text-decoration: none;
                color: white;
            }

            .quote
            {
                margin-top: 18vh;
                width: 50%;
            }

            #main-col
            {
                width: 90%;
                background: pink;
                margin: auto;
                display: flex;
            }

            .col-3
            {
                float: left;
                width: 33%;
            }

            .col-3
            {
                padding: 10px;
            }

            .col-four-social-icons
            {
                position: fixed;
                top: 27%;
                left: 1%;
            }

            .col-four-social-icons img
            {
                width: 30px;
                margin-top: 10px;
            }

            .info
            {
                width: 90%;
                margin: auto;
                display: flex;
                margin-top: 38px;
                border-top: dotted 1px pink;
                padding-top: 35px;
            }

            footer
            {
                background: rgb(255, 0, 127);
                color: white;
                padding: 8%;
                text-align: center;
            }

            @media screen and (max-width: 450px)
            {
                .quote
                {
                    margin-top: 18vh;
                    width: 50%;
                }
                div#banner
                {
                    background: grey;
                    height: 50vh;
                    padding: 10vh;
                    color: white;
                    background-image: url(images/jellyfish-4949516_960_720.jpg);
                    background-size: 100%;
                    background-repeat: no-repeat;
                    background-position-x: center;
                    background-position-y: 1%;
                }
                body
                {
                    background: #ff007f;
                }
                #main-col
                {
                    display: block;
                }
                .info
                {
                    display: block;
                }
            }

        </style>
    </head>
    <body>
        <header>
            <div class="logo">
                <img src="images/logo@2x.png" alt="logo">
            </div>
            <div class="main-nav">
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="aboutme.php">About me</a></li>
                        <li><a href="resume.php">Resume</a></li>
                    </ul>
                </nav>
            </div>
        </header>