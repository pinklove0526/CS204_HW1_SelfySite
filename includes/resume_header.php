<!DOCTYPE html>
<html>
    <head>
        <title>My resume</title>
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
    </head>
    <body>