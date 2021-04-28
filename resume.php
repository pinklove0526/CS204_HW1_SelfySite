<?php include 'includes/header.php' ?>
<style media="screen">
            @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap');

            *
            {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                list-style: none;
                font-family: 'Montserrat', sans-serif;
            }

            body
            {
                background: #ff007f;
                font-size: 14px;
                line-height: 22px;
                color: pink;
            }

            .bold
            {
                font-weight: 700;
                font-size: 20px;
                text-transform: uppercase;
            }

            .semi-bold
            {
                font-weight: 500;
                font-size: 16px;
            }

            .resume
            {
                width: 800px;
                height: auto;
                display: flex;
                margin: 50px auto;
            }

            .resume .resume_left
            {
                width: 280px;
                background: aqua;
            }

            .resume .resume_left .resume_profile
            {
                width: 100%;
                height: 280px;
            }

            .resume .resume_left .resume_profile img
            {
                width: 100%;
                height: 100%;
            }

            .resume .resume_left .resume_content
            {
                padding: 0 25px;
            }

            .resume .title
            {
                margin-bottom: 20px;
                
            }

            .resume .resume_left .bold
            {
                color: deeppink;
            }

            .resume .resume_left .regular
            {
                color: deeppink;
            }

            .resume .resume_item
            {
                padding: 25px 0;
                border-bottom: 2px solid red;
            }

            .resume .resume_left .resume_item:last-child
            {
                border-bottom: 0px;    
            }

            .resume .resume_left ul li
            {
                display: flex;
                align-items: center;
                margin-bottom: 10px;
            }

            .resume .resume_left ul li:last-child
            {
                margin-bottom: 0;
            }

            .resume .resume_left ul li .icon
            {
                width: 35px;
                height: 35px;
                background: white;
                color: hotpink;
                border-radius: 50%;
                margin-right: 15px;
                font-size: 16px;
                position: relative;
            }

            .resume .icon i, .resume .resume_right .resume_hobby ul li i
            {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            .resume .resume_left ul li .data
            {
                color: hotpink;
            }

            .resume .resume_left .resume_skills ul li
            {
                color: hotpink;
                justify-content: space-between;
            }

            .resume .resume_left .resume_skills ul li .skill_name
            {
                width: 100%;
            }

            .resume .resume_right
            {
                width: 520px;
                background: gray;
                padding: 25px;
            }

            .resume .resume_right .bold
            {
                color: yellow;
            }

            .resume .resume_right .resume_education
            {
                padding-left: 40px;
                overflow: hidden;
            }

            .resume .resume_right ul li
            {
                position: relative;
            }

            .resume .resume_right ul li .date
            {
                font-size: 16px;
                font-weight: 500;
                margin-bottom: 15px;
            }

            .resume .resume_right ul li .info
            {
                margin-bottom: 20px;
            }

            .resume .resume_right ul li:last-child .info
            {
                margin-bottom: 0;
            }

            .resume .resume_right .resume_education ul li:before
            {
                content: "";
                position: absolute;
                top: 5px;
                left: -25px;
                width: 6px;
                height: 6px;
                border-radius: 50%;
                border: 2px solid pink;
            }

            .resume .resume_right .resume_hobby ul
            {
                display: flex;
            }

            .resume .resume_right .resume_hobby ul li
            {
                width: 80px;
                height: 80px;
                border: 2px solid yellow;
                border-radius: 50%;
                position: relative;
                color: pink;
            }

            .resume .resume_right .resume_hobby ul li i
            {
                font-size: 30px;
            }
        </style>
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
        <div class="resume">
            <div class="resume_left">
                <div class="resume_profile">
                    <img src="images/ezgif-7-86e1ec5a8f38.jpg" alt="Profile picture" height="280px" width="280px">
                </div>
                <div class="resume_content">
                    <div class="resume_item resume_info">
                        <div class="title">
                            <p class="bold">Dang Tan Nguyen</p>
                            <p class="regular">Student</p>
                        </div>
                        <ul>
                            <li>
                                <div class="icon"><i class="fas fa-map-marker"></i></div>
                                <div class="data">
                                    Hoa Hong Street, Phu Nhuan District, Ho Chi Minh City<br>
                                    Vietnam
                                </div>
                            </li>
                            <li>
                                <div class="icon"><i class="fas fa-mobile-alt" aria-hidden="true"></i></div>
                                <div class="data">+84******154</div>
                            </li>
                            <li>
                                <div class="icon"><i class="fas fa-envelope"></i></div>
                                <div class="data">pinklove0526@naver.com</div>
                            </li>
                            <li>
                                <div class="icon"><i class="fas fa-globe"></i></div>
                                <div class="data">1959034.epizy.com</div>
                            </li>
                        </ul>
                    </div>
                    <div class="resume_item resume_skills">
                        <div class="title">
                            <p class="bold">Skills</p>
                            <ul>
                                <li>
                                    <div class="skill_name">
                                        <p>Programming</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="skill_name">
                                        <p>Video editing</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="skill_name">
                                        <p>Content creation</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="skill_name">
                                        <p>Technology review</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="resume_item resume_social">
                        <div class="title">
                            <p class="bold">Social networks</p>
                        </div>
                        <ul>
                            <li>
                                <div class="icon"><i class="fab fa-twitter-square" aria-hidden="true"></i></div>
                                <div class="data">
                                    <p class="semi_bold">Twitter</p>
                                    <p>@jellyfish_pink2</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><i class="fab fa-instagram-square" aria-hidden="true"></i></div>
                                <div class="data">
                                    <p class="semi_bold">Instagram</p>
                                    <p>jellyfish.pink</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><i class="fab fa-tiktok" aria-hidden="true"></i></div>
                                <div class="data">
                                    <p class="semi_bold">TikTok</p>
                                    <p>@jellyfish.pink2</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="resume_right">
                <div class="resume_item resume_about">
                    <div class="title">
                        <p class="bold">About me</p>
                        <p>I'm currently the second year student of the University of Science, a member of the Vietnam National University, Ho Chi Minh City.</p>
                    </div>
                </div>
                <div class="resume_item resume_education">
                    <div class="title">
                        <p class="bold">Education</p>
                        <ul>
                            <li>
                                <div class="date">2019 - present</div>
                                <div class="info">
                                    <p class="semi-bold">Computer & Information Sciences (VNUHCM - University of Science)</p>
                                    <p></p>
                                </div>
                            </li>
                            <li>
                                <div class="date">2016 - 2019</div>
                                <div class="info">
                                    <p class="semi-bold">Le Quy Don High School</p>
                                    <p></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="resume_item resume_hobby">
                    <div class="title">
                        <p class="bold">Hobbies</p>
                    </div>
                    <ul>
                        <li><i class="fas fa-music" aria-hidden="true"></i></li>
                        <li><i class="fas fa-gamepad" aria-hidden="true"></i></li>
                        <li><i class="fas fa-video" aria-hidden="true"></i></li>
                        <li><i class="fas fa-laptop-code" aria-hidden="true"></i></li>
                    </ul>
                </div>
                <a href="index.html">Go back to the home page</a>
            </div>
        </div>
    <?php include 'includes/footer.php'; ?>