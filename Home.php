<html lang="en">
<head>
    <link rel="stylesheet" href="CSS.css">
    <script src="https://kit.fontawesome.com/376bdccfa7.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnSoft</title>
</head>
<body>
    
    <div class="navbar">
        <div class="navall">
        <div class="navtitle"><h1>OnSoft</h1></div>
        <div class="navitemcol">
        <a href=""><i class="fa fa-home"></i> Home</a>
        <a href=""><i class="fas fa-info"></i> About us</a>
        <a href=""><i class="fas fa-book-open"></i> Portfolio</a>
        <a href=""><i class="fas fa-tools"></i> Services</a>
        <a href=""><i class="far fa-address-book"></i> Contact</a>
        <a href="SIGN_UP.php"><i class="fas fa-sign-in-alt"></i> Sign-up</a>
        <a href="LOG_IN.php"><i class="fas fa-user"></i> Log-in</a>
        </div>
        </div>  
    </div>

    <div class="upbody-100">
        <div class="upbody1">
            <div class="upbodyhead">
            <h1>Welcome to OnSoft</h1>
            </div>
            <div class="upbodycont">
                <img class="picslide" src="img/c.png" alt="">
                <img class="picslide" src="img/a.png" alt="">
                <img class="picslide" src="img/b.png" alt="">
                <img class="picslide" src="img/e.png" alt="">

            <script>
                var slideIn = 0;
                carousel();

                function carousel() {
                var i;
                var x = document.getElementsByClassName("picslide");
                for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
                }
                slideIn++;
                if (slideIn > x.length) {slideIn = 1}
                x[slideIn-1].style.display = "block";
                setTimeout(carousel, 3000);
                }
            </script>
            </div>
        </div>
    </div>

    <div class="about-100">
        <div class="about1">
            <div class="abouthead">
            <h1>ABOUT US</h1>
            </div>
            <div class="aboutcont">
            <div class="col1"><img id="img1" src="img/d.png" alt=""></div>
            <div class="col2"><p id="p1">Online Software Solution (OnSoft) website is one of the best websites in Bangladesh. Our organization deeply thinks in the case of software development and provides satisfactory service. The developers of our company always attempt to create some new ways and techniques to solve our daily problems through software. We keep ourselves in touch with updated things so that we can create a responsive design and user-friendly software with intelligible function. Our company paves the way for the advancement of the modern age by creating various types of software. Moreover, this corporation has gone to the highest peak of success regarding web design and development.</p></div>
            </div>
        </div>
    </div>
    
    <div class="port-100">
        <div class="port1">
            <div class="porthead">
            <h1>PORTFOLIO</h1>
            </div>
            <div class="portcont">
            <div class="col1"><img id="portimg1" src="img/p1.PNG" alt=""></div>
            <div class="col2"><img id="portimg2" src="img/p5.png" alt=""></div>
            <div class="col3"><img id="portimg3" src="img/p3.png" alt=""></div>
            </div>
        </div>
    </div>

    <div class="ser-100">
        <div class="ser1">
            <div class="serhead">
            <h1>SERVICES</h1>
            </div>
            <div class="sercont">
            <div class="col1"><i class="fab fa-android"></i><h4>Android App Development</h4><p id="serp1">An Android app is a software application that is built and designed for mobile devices like a smartphone or a tablet PC. For the success of your business, you should, at first, be determined about the platform based on which you will go forth. A proper decision can determine your success but a wrong assessment can bring failure to your business. If you would like to run an android application, you are most welcome in our dais. “OnSoft” is one of the most renowned android application development companies in Bangladesh.</p></div>
            <div class="col2"><i class="fab fa-app-store-ios"></i><h4>iOS App Development</h4><p id="serp2">An iOS app is a software application that is built and designed for Apple mobile devices like an iPhone or an iPad. For the success of your business, you should, at first, be determined about the platform based on which you will go forth. A proper decision can determine your success but a wrong assessment can bring failure to your business. If you would like to run an iOS application, you are most welcome in our dais. “OnSoft” is one of the most renowned iOS application development companies in Bangladesh.</p></div>
            <div class="col3"><i class="fas fa-chart-line"></i><h4>E-Commerce Development</h4><p id="serp3">Many business owners are overwhelmed when trying to understand how to take their business online. We've helped businesses of all types take advantage of eCommerce. With Real Cart, you'll have all the tools available to engage customers and keep them coming back for more. The best part is, we take care of all the work to get you, your design and your products up and running.</p></div>
            <div class="col4"><i class="fas fa-server"></i><h4>Domain Registration & Hosting</h4><p id="serp4">OnSoft Web Hosting is the Top Web Hosting Company in Bangladesh. We are a Bangladeshi Online Software company. We provide domain registration and SSD web hosting service in Bangladesh. We use USA Data-center and have USA based powerful Hosting server. Our USA-located servers help our clients to get secure web hosting services from us. We provide domain registration service and web hosting service both. If you want to get the best quality and secure web hosting from Bangladesh at a reasonable price and satisfaction, OnSoft should be your first choice without any doubt.</p></div>
            <div class="col5"><i class="fas fa-robot"></i><h4>AI Robotics Development</h4><p id="serp5">Artificial intelligence is moving forward, and whether we like it or not, machine learning will play an essential role in our technological future. The largest and best companies in the world already know this, and they are investing heavily in AI. For the importance of AI robotics, we start to build AI software.</p></div>
            <div class="col6"><i class="fas fa-globe-asia"></i><h4>Website Development</h4><p id="serp6">OnSoft web application development practice addresses a wide range of business needs. Whether it's a content management system or a web-based data interface, our solutions demonstrate all the hallmarks of competence. Our web applications address the specific business requirements, whether it's a fortune 500 company or a small start-up. There are thousands of web design and development companies in Bangladesh. OnSoft is one of the top listed web design and development companies in BD. We have a talented team of web developers & designers. We provide web design & development services, we develop mobile apps & web apps & so on.</p></div>
            </div>
        </div>
    </div>

    <div class="footer-100">
        <div class="footer">
            <div class="footercont">
                <div class="col1"><a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a></div>
                <div class="col2"><a href="https://twitter.com/"><i class="fab fa-twitter-square"></i></a></div>
                <div class="col3"><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></div>
                <div class="col4"><a href="https://bd.linkedin.com/"><i class="fab fa-linkedin"></i></a></div>
            </div>
        </div>
    </div>
</body>
</html>