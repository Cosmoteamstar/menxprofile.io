<?php
session_start();
if (isset($_SESSION['guest'])) {
    $name = $_SESSION['guest'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="/assets/geur.css">
    <title>Profile</title>
</head>

<body>
    
    <video autoplay muted loop>
        <source src="/assets/images/BOTY.mp4" type="video/mp4">
    </video>
    <div class="container my-5 center-content">
        <div class="row">
            <div class="col-12 col-md-12 col-xl-12 ">
                <div class="col-12 col-md-12 col-xl-12">
                    <div class="card text-left glass" style="border-radius: 17px;">
                        <div class="card-header pt-4 pb-4 px-4">
                            <div class="row">
                                <div class="col-5 col-md-2 col-xl-2">
                                    <img src="/assets/images/menn.png" alt="Profile Picture" class="w-100" style="border-radius: 10px;">
                                </div>
                                <div class="col-7 col-md-10 col-xl-10 d-flex flex-column justify-content-center">
                                    <div>
                                        <h6><a class="text-dark" href="#" style="text-decoration: none;">Thanaphat Komut</a><img class="" src="/assets/images/check.png" style="width: 12px;margin-left:3px"></h6>
                                    </div>
                                    <div class=""><small>Developer</small> </div>
                                    <div class="mt-1"><small>King Mongkut's University of Technology North Bangkok,</small></div>
                                    <div class="mt-1"><small>Information Technology for Industry.</small></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-6 col-xl-6 mt-1">
                                    <div class="card text-left" style="border-radius: 15px;">
                                        <div class="card-header">
                                            <div style="font-size: 15px;">Skills</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <img src="/assets/images/skills/php.svg" style="width: 10%;" alt="PHP">
                                                <span class="ms-2">Pure PHP and SQL Database</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="/assets/images/skills/laravel.png" style="width: 10%;" alt="Laravel">
                                                <span class="ms-2">Laravel Framework</span>
                                            </div>
                                            <div class="d-flex align-items-center mt-2">
                                                <img src="/assets/images/skills/javascript.png" style="width: 10%; border-radius:8%" alt="javascript">
                                                <span class="ms-2">Javascript, jQuery</span>
                                            </div>
                                            <div class="d-flex align-items-center mt-2">
                                                <img src="/assets/images/skills/photoshop.png" style="width: 10%;" alt="design">
                                                <span class="ms-2">Designer: Photoshop, Figma, Canva</span>
                                            </div>
                                            <div class="d-flex align-items-center mt-2">
                                                <img src="/assets/images/skills/cpp.png" style="width: 10%;border-radius:8%" alt="cpp">
                                                <span class="ms-2">C++, Arduino</span>
                                            </div>
                                            <div class="d-flex align-items-center mt-2">
                                                <img src="/assets/images/skills/flutter.png" style="width: 10%;" alt="flutter">
                                                <span class="ms-2">Dart, Flutter</span>
                                            </div>
                                            <div class="d-flex align-items-center mt-2">
                                                <img src="/assets/images/skills/python.webp" style="width: 10%;" alt="python">
                                                <span class="ms-2">Python</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-6 mt-1">
                                    <div class="card text-left" style="border-radius: 15px;">
                                        <div class="card-header">
                                            <div style="font-size: 16px;">Educations</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="d-flex align-items-center mt-2">
                                                    <img src="/assets/images/kmutnb.png" style="width: 10%;" alt="kmutnb">
                                                    <div class="ms-2">
                                                        <span>King Mongkut's University of Technology North Bangkok</span>
                                                        <div>
                                                            <small class="text-secondary">2022 - 2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="d-flex align-items-center mt-2">
                                                    <img src="/assets/images/cat-th-12.gif" style="width: 10%;" alt="kmutnb">
                                                    <div class="ms-2">
                                                        <span>Loei Technical College</span>
                                                        <div>
                                                            <small class="text-secondary">2016 - 2021</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="d-flex align-items-center mt-2">
                                                    <img src="/assets/images/hathai.jpg" style="width: 10%;" alt="kmutnb">
                                                    <div class="ms-2">
                                                        <span>Hathai Christian School</span>
                                                        <div>
                                                            <small class="text-secondary">2004 - 2016</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>