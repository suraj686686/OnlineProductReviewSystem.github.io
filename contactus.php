<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <meta name="author" content="Codeconvey" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/contactus.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900');



        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        article,
        header,
        section,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        main,
        nav,
        section,
        summary {
            display: block;
        }

        body {
            background: #f2eee1 none repeat scroll 0 0;
            color: #222;
            font-size: 100%;
            line-height: 24px;
            margin: 0;
            padding: 0;
            font-family: "Raleway", sans-serif;
        }

        a {
            font-family: "Raleway", sans-serif;
            text-decoration: none;
            outline: none;
        }

        a:hover,
        a:focus {
            color: #373e18;
        }

        section {
            float: left;
            width: 100%;
            padding-bottom: 3em;
        }

        h2 {
            color: #1a0e0e;
            font-size: 26px;
            font-weight: 700;
            margin: 0;
            line-height: normal;
            text-transform: uppercase;
        }

        h2 span {
            display: block;
            padding: 0;
            font-size: 18px;
            opacity: 0.7;
            margin-top: 5px;
            text-transform: uppercase;
        }

        #float-right {
            float: right;
        }


        .ScriptTop {
            background: #fff none repeat scroll 0 0;
            float: left;
            font-size: 0.69em;
            font-weight: 600;
            line-height: 2.2;
            padding: 12px 0;
            text-transform: uppercase;
            width: 100%;
        }

        /* To Navigation Style 1*/
        .ScriptTop ul {
            margin: 24px 0;
            padding: 0;
            text-align: left;
        }

        .ScriptTop li {
            list-style: none;
            display: inline-block;
        }

        .ScriptTop li a {
            background: #6a4aed none repeat scroll 0 0;
            color: #fff;
            display: inline-block;
            font-size: 14px;
            font-weight: 600;
            padding: 5px 18px;
            text-decoration: none;
            text-transform: capitalize;
        }

        .ScriptTop li a:hover {
            background: #000;
            color: #fff;
        }


        .ScriptHeader {
            float: left;
            width: 100%;
            padding: 2em 0;
        }

        .rt-heading {
            margin: 0 auto;
            text-align: center;
        }

        .Scriptcontent {
            line-height: 28px;
        }

        .ScriptHeader h1 {
            font-family: "brandon-grotesque", "Brandon Grotesque", "Source Sans Pro", "Segoe UI", Frutiger, "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: #6a4aed;
            font-size: 26px;
            font-weight: 700;
            margin: 0;
            line-height: normal;

        }

        .ScriptHeader h2 {
            color: #312c8f;
            font-size: 20px;
            font-weight: 400;
            margin: 5px 0 0;
            line-height: normal;

        }

        .ScriptHeader h1 span {
            display: block;
            padding: 0;
            font-size: 22px;
            opacity: 0.7;
            margin-top: 5px;

        }

        .ScriptHeader span {
            display: block;
            padding: 0;
            font-size: 22px;
            opacity: 0.7;
            margin-top: 5px;
        }



        .rt-container {
            margin: 0 auto;
            padding-left: 12px;
            padding-right: 12px;
        }

        .rt-row:before,
        .rt-row:after {
            display: table;
            line-height: 0;
            content: "";
        }

        .rt-row:after {
            clear: both;
        }

        [class^="col-rt-"] {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -o-box-sizing: border-box;
            -ms-box-sizing: border-box;
            padding: 0 15px;
            min-height: 1px;
            position: relative;
        }


        @media (min-width: 768px) {
            .rt-container {
                width: 750px;
            }

            [class^="col-rt-"] {
                float: left;
                width: 49.9999999999%;
            }

            .col-rt-6,
            .col-rt-12 {
                width: 100%;
            }

        }

        @media (min-width: 1200px) {
            .rt-container {
                width: 1170px;
            }

            .col-rt-1 {
                width: 16.6%;
            }

            .col-rt-2 {
                width: 30.33%;
            }

            .col-rt-3 {
                width: 50%;
            }

            .col-rt-4 {
                width: 67.664%;
            }

            .col-rt-5 {
                width: 83.33%;
            }


        }

        @media only screen and (min-width:240px) and (max-width: 768px) {

            .ScriptTop h1,
            .ScriptTop ul {
                text-align: center;
            }

            .ScriptTop h1 {
                margin-top: 0;
                margin-bottom: 15px;
            }

            .ScriptTop ul {
                margin-top: 12px;
            }

            .ScriptHeader h1,
            .ScriptHeader h2,
            .scriptnav ul {
                text-align: center;
            }

            .scriptnav ul {
                margin-top: 12px;
            }

            #float-right {
                float: none;
            }

        }


        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .contact-parent {
            background: #fff;
            display: flex;
            margin: 80px 0;
        }

        .contact-child {
            display: flex;
            flex: 1;
            box-shadow: 0px 0px 10px -2px rgba(0, 0, 0, 0.75);
        }

        .child1 {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("images/contactus.jpg");
            background-size: cover;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            color: #fff;
            padding: 100px 0;
        }

        .child1 p {
            padding-left: 20%;
            font-size: 20px;
            text-shadow: 0px 0px 2px #000;
        }

        .child1 p span {
            font-size: 16px;
            color: #9df2fd;
        }

        .child2 {
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
        }

        .inside-contact {
            width: 90%;
            margin: 0 auto;
        }

        .inside-contact h2 {
            text-transform: uppercase;
            text-align: center;
            margin-top: 50px;
        }

        .inside-contact h3 {
            text-align: center;
            font-size: 16px;
            color: #0085e2;
        }

        .inside-contact input,
        .inside-contact textarea {
            width: 100%;
            background-color: #eee;
            border: 1px solid rgba(0, 0, 0, 0.48);
            padding: 5px 10px;
            margin-bottom: 20px;
        }

        .inside-contact input[type=submit] {
            background-color: #000;
            color: #fff;
            transition: 0.2s;
            border: 2px solid #000;
            margin: 30px 0;
        }

        .inside-contact input[type=submit]:hover {
            background-color: #fff;
            color: #000;
            transition: 0.2s;
        }

        @media screen and (max-width:991px) {
            .contact-parent {
                display: block;
                width: 100%;
            }

            .child1 {
                display: none;
            }

            .child2 {
                background-image: linear-gradient(rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.7)), url("images/contactus.jpg");
                background-size: cover;
            }

            .inside-contact input,
            .inside-contact textarea {
                background-color: #fff;
            }
        }
    </style>
</head>

<body>
    <?php
    include('php/header.php');
    ?>
    <div class="ScriptTop">
        <div class="rt-container">
            <div class="col-rt-4" id="float-right">
            </div>
            <div class="col-rt-2">
                <ul>
                    <li><a href="index.php" title="Back to tutorial page">Back</a></li>
                </ul>
            </div>
        </div>
    </div>

    <header class="ScriptHeader">
        <div class="rt-container">
            <div class="col-rt-12">
                <div class="rt-heading">
                    <center>
                        <h1 style="color: #ffffff;">Contact Us </h1>
                        <p style="color: #ffffff;">If you have any questions, feedback, or inquiries, please don't
                            hesitate to get in touch with us. We're here to assist you and provide the information you
                            need.</p>
                    </center>
                </div>
            </div>
        </div>

    </header>

    <section>
        <div class="rt-container">
            <div class="col-rt-12">
                <div class="Scriptcontent">

                    <div>
                        <div class="container">
                            <div class="contact-parent">
                                <div class="contact-child child1">
                                    <p>
                                        <i class="fas fa-map-marker-alt"></i> Address <br />
                                        <span>
                                            <p>
                                                #13/89,Phase 9 Industrial Area <br />
                                                Mohali,Punjab,India-160062
                                            </p>
                                        </span>
                                    </p>

                                    <p>
                                        <i class="fas fa-phone-alt"></i> Let's Talk <br />
                                        <span>
                                            <p><a href="#">+91-6280560686</a></p>
                                        </span>
                                    </p>

                                    <p>
                                        <i class=" far fa-envelope"></i> General Support <br />
                                        <span>
                                            <p><a href="#">info@suraj686.com</a></p>
                                        </span>
                                    </p>
                                </div>

                                <div class="contact-child child2">
                                    <div class="inside-contact">
                                        <h2>Contact Us</h2>
                                        <h3>
                                            <span id="confirm">
                                        </h3>
                                        <div class="box">

                                            <p>Name *</p>
                                            <input id="txt_name" type="text" Required="required">

                                            <p>Email *</p>
                                            <input id="txt_email" type="text" Required="required">

                                            <p>Phone *</p>
                                            <input id="txt_phone" type="text" Required="required">

                                            <p>Subject *</p>
                                            <input id="txt_subject" type="text" Required="required">

                                            <p>Message *</p>
                                            <textarea id="txt_message" rows="4" cols="20"
                                                Required="required"></textarea>

                                            <input type="submit" id="btn_send" value="SEND">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </section>

    <?php
    include('php/footer.php');
    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Get references to the content divs and the toggle button
            var loginContent = document.getElementById("loginContent");
            var menuContent = document.getElementById("menuContent");
            var toggleButton = document.getElementById("toggleButton");

            // Add a click event listener to the toggle button
            toggleButton.addEventListener("click", function () {
                // Toggle the visibility of the login and menu content
                if (loginContent.style.display === "block") {
                    loginContent.style.display = "none";
                    menuContent.style.display = "block";
                } else {
                    loginContent.style.display = "block";
                    menuContent.style.display = "none";
                }
            });
        });
    </script>
</body>

</html>