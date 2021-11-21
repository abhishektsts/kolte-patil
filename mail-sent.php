<?php
if (isset($_POST['submit'])) {
    $to = "abhishekdev183@gmail.com";
    $subject = "HTML email";
    $message = "
    <html>
    <head>
    <title>HTML email</title>
    </head>
    <body>
    <p>This email contains HTML Tags!</p>
    <table>
    <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    </tr>
    <tr>
    <td>John</td>
    <td>Doe</td>
    </tr>
    </table>
    </body>
    </html>
    ";
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    // More headers
    $headers .= 'From: abhishek.tripathi@sts.in' . "\r\n";
    mail($to, $subject, $message, $headers);
} else {
    header('Location:index.php');
}
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kolte Patil</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <meta name=" description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/css-bootstrap.min.css">
    <link rel="stylesheet" href="css/css-LineIcons.2.0.css">
    <link rel="stylesheet" href="css/css-tiny-slider.css">
    <link rel="stylesheet" href="css/css-glightbox.min.css">
    <link rel="stylesheet" href="css/css-main.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>

<body>
    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">

                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="assets/logo-removebg.png" alt="Logo" style="width: 80px;">
                            </a>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </header>



    <section id="blog" class="blog-section section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="text-success mt-5">Message Sent Successfully We Will Get Back To You Shortly.</h2>
                        <div class="button">
                            <a href="index.php" class="btn">Back Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">

                        <div class="single-footer f-about">
                            <div class="logo">
                                <img src="assets/logo-removebg.png" alt="logo" style="width: 80px;">
                            </div>
                            <p>Making the world a better place through constructing elegant hierarchies.</p>
                            <ul class="social">
                                <li><a href="https://www.facebook.com/KoltePatilDevelopersLtd/"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="https://twitter.com/koltepatilltd"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="https://www.instagram.com/koltepatil/"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="https://www.youtube.com/user/koltepatilltd"><i class="lni lni-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-12">

                                <div class="single-footer f-link">
                                    <h3>Solutions</h3>

                                </div>

                            </div>
                            <div class="col-lg-3 col-md-6 col-12">

                                <div class="single-footer f-link">
                                    <h3>Support</h3>

                                </div>

                            </div>
                            <div class="col-lg-3 col-md-6 col-12">

                                <div class="single-footer f-link">
                                    <h3>Company</h3>

                                </div>

                            </div>
                            <div class="col-lg-3 col-md-6 col-12">

                                <div class="single-footer f-link">
                                    <h3>Legal</h3>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>

    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <script src="js/js-bootstrap.min.js"></script>
    <script src="js/js-wow.min.js"></script>
    <script src="js/js-tiny-slider.js"></script>
    <script src="js/js-glightbox.min.js"></script>
    <script src="js/js-count-up.min.js"></script>
    <script src="js/js-main.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/captcha.js"></script>
    <script>
        let forms = document.querySelectorAll('.form')
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity() || !validateCaptcha()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            });
    </script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
    <script type="text/javascript">
        //======== tiny slider
        tns({
            container: '.client-logo-carousel',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 15,
            nav: false,
            controls: false,
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 2,
                },
                768: {
                    items: 3,
                },
                992: {
                    items: 4,
                }
            }
        });

        //========= testimonial 
        tns({
            container: '.testimonial-slider',
            items: 3,
            slideBy: 'page',
            autoplay: false,
            mouseDrag: true,
            gutter: 0,
            nav: true,
            controls: false,
            controlsText: ['<i class="lni lni-arrow-left">', '<i class="lni lni-arrow-right">'],
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 1,
                },
                768: {
                    items: 1,
                },
                992: {
                    items: 1,
                },
                1170: {
                    items: 1,
                }
            }
        });

        //====== counter up 
        var cu = new counterUp({
            start: 0,
            duration: 2000,
            intvalues: true,
            interval: 100,
            append: " ",
        });
        cu.start();
    </script>
    <script defer src="js/beacon.min.js" data-cf-beacon='{"rayId":"6af0cecd9acc682e","version":"2021.11.0","r":1,"token":"e30b4e5ca0154d28b74c094697cafe5d","si":100}' crossorigin="anonymous"></script>
</body>

</html>