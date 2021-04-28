<?php include 'includes/header.php'; ?>
        <style media="screen">
            body
            {
                margin: 0;
                padding: 0;
                background: pink;
            }

            .box
            {
                width: 450px;
                background: yellow;
                padding: 40px;
                text-align: center;
                margin: auto;
                margin-top: 5%;
                color: gray;
            }

            .box img
            {
                border-radius: 50%;
                width: 200px;
                height: 200px;
            }

            .box h1
            {
                font-size: 40px;
                letter-spacing: 4px;
                font-weight: 100;
            }

            .box h5
            {
                font-size: 20px;
                letter-spacing: 3px;
                font-weight: 100;
            }

            .box p
            {
                text-align: justify;
            }

            ul
            {
                margin: 0;
                padding: 0;
            }

            .box li
            {
                display: inline-block;
                margin: 6px;
                list-style: none;
            }

            .box li a
            {
                color: red;
                text-decoration: none;
                font-size: 60px;
                transition: all ease-in-out 250ms;
            }

            .box li a:hover
            {
                color: aqua;
            }
        </style>
<div class="box">
            <img src="images/ezgif-7-86e1ec5a8f38.jpg">
            <h1>Dang Tan Nguyen</h1>
            <h5>Student</h5>
            <p>I'm currently the second year student of the University of Science, a member of the Vietnam National University, Ho Chi Minh City.</p>
            <ul>
                <li><a href="#"><i class="fab fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-tiktok" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <a href="index.html">Go back to the main page</a>
    <?php include 'includes/footer.php'; ?>