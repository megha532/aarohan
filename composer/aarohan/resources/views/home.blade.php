@extends('layouts.master')
@section('title')
    Aarohan Poornima
@endsection

@section('content')

    <section id="home">
        <div id="main-slider" class="carousel slide" data-ride="carousel" data-pause="false">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" >
                <div class="item active" id="home_item">
                    <img class="img-responsive" src="assets/images/slider/banner1.JPG" alt="slider">
                    <div class="carousel-caption">
                        <h2>Five day festival</h2>
                        <a href="#contact">VIEW SCHEDULE<i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="item" id="home_item">
                    <img class="img-responsive" src="assets/images/slider/banner2.JPG" alt="slider">
                    <div class="carousel-caption">
                        <h2>Stay up to date</h2>
                        <a href="#contact">VIEW ANNOUNCEMENTS<i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="item" id="home_item">
                    <img class="img-responsive" src="assets/images/slider/banner3.JPG" alt="slider">
                    <div class="carousel-caption">
                        <h2>Several events</h2>
                        <a href="#contact" >GET REGISTERED<i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#home-->

    <section id="explore">



    </section><!--/#explore-->

    <section id="event">
        <div class="container">
            <div class="row">
                        <h2 class="heading">THE EVENTS TAKING PLACE</h2>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="single-event">
                                            <img class="img-responsive" src="assets/images/event/tech.jpg" alt="event-image">
                                            <h4>Technical Events</h4>
                                            <a href="#">View Details<i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-2">
                                        <div class="single-event">
                                            <img class="img-responsive" src="assets/images/event/club.png" alt="event-image">
                                            <h4>Club Events</h4>
                                            <a href="#">View Details<i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-2">
                                        <div class="single-event">
                                            <img class="img-responsive" src="assets/images/event/cultural.jpg" alt="event-image">
                                            <h4>Cultural Events</h4>
                                            <a href="#">View Details<i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-2">
                                         <div class="single-event">
                                              <img class="img-responsive" src="assets/images/event/sports.jpg" alt="event-image">
                                            <h4>Sports Events</h4>
                                            <a href="#">View Details<i class="fa fa-angle-right"></i></a>
                                         </div>
                                    </div>
                                </div>
                            </div>






                <div class="guitar">
                    <img class="img-responsive" src="assets/images/guitar.png" alt="guitar">
                </div>
            </div>
        </div>
    </section><!--/#event-->

    <section id="about">
        <div class="about-content">

            <div class="container">
                <div id="grid-gallery" class="grid-gallery">
                    <section class="grid-wrap">
                        <ul class="grid">
                            <li class="grid-sizer"></li><!-- for Masonry column width -->
                            <li>
                                <figure>
                                    <img src="assets/images/thumb/1.png" alt="img01"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="assets/images/thumb/3.png" alt="img02"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="assets/images/thumb/1.png" alt="img03"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="assets/images/thumb/5.png" alt="img04"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="assets/images/thumb/5.png" alt="img05"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="assets/images/thumb/5.png" alt="img06"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="assets/images/thumb/1.png" alt="img01"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="assets/images/thumb/1.png" alt="img02"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="assets/images/thumb/5.png" alt="img03"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="assets/images/thumb/3.png" alt="img04"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="assets/images/thumb/3.png" alt="img05"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="assets/images/thumb/3.png" alt="img01"/>
                                </figure>
                            </li>
                        </ul>
                    </section><!-- // grid-wrap -->
                    <section class="slideshow">
                        <ul>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Caption</h3>
                                        <p>abouts.</p>
                                    </figcaption>
                                    <img src="assets/images/large/1.png" alt="img01"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Caption</h3>
                                        <p>abouts.</p>
                                    </figcaption>
                                    <img src="assets/images/large/3.png" alt="img02"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Caption</h3>
                                        <p>abouts.</p>
                                    </figcaption>
                                    <img src="assets/images/large/1.png" alt="img03"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Caption</h3>
                                        <p>abouts.</p>
                                    </figcaption>
                                    <img src="assets/images/large/5.png" alt="img04"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Caption</h3>
                                        <p>abouts.</p>
                                    </figcaption>
                                    <img src="assets/images/large/5.png" alt="img05"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Caption</h3>
                                        <p>abouts.</p>
                                    </figcaption>
                                    <img src="assets/images/large/5.png" alt="img06"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Caption</h3>
                                        <p>abouts.</p>
                                    </figcaption>
                                    <img src="assets/images/large/1.png" alt="img01"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Caption</h3>
                                        <p>abouts.</p>
                                    </figcaption>
                                    <img src="assets/images/large/5.png" alt="img02"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Caption</h3>
                                        <p>abouts.</p>
                                    </figcaption>
                                    <img src="assets/images/large/3.png" alt="img03"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Caption</h3>
                                        <p>abouts.</p>
                                    </figcaption>
                                    <img src="assets/images/large/3.png" alt="img04"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Caption</h3>
                                        <p>abouts.</p>
                                    </figcaption>
                                    <img src="assets/images/large/3.png" alt="img05"/>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <figcaption>
                                        <h3>Caption</h3>
                                        <p>abouts.</p>
                                    </figcaption>
                                    <img src="assets/images/large/1.png" alt="img01"/>
                                </figure>
                            </li>
                        </ul>
                        <nav>
                            <span class="icon nav-prev"></span>
                            <span class="icon nav-next"></span>
                            <span class="icon nav-close"></span>
                        </nav>

                    </section><!-- // slideshow -->
                </div><!-- // grid-gallery -->
            </div>


        </div>
    </section><!--/#about-->

    <section id="twitter">
        <div id="twitter-feed" class="carousel slide">
            <div class="twit">
                <img class="img-responsive" src="assets/images/cup.png" alt="twit">
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3" style="padding-top: 10%;">
                    <div class="text-center carousel-inner center-block">
                        <div class="item active">
                            <img src="assets/images/mindgames.jpg" alt="">
                            <p>Technical Events</p>
                            <a href="#">View Results</a>
                        </div>
                        <div class="item">
                            <img src="assets/images/colors.png" width="150%" alt="">
                            <p>Club Events</p>
                            <a href="#">View Results</a>
                        </div>
                        <div class="item">
                            <img src="assets/images/guitar3.png" alt="">
                            <p>Cultural Events</p>
                            <a href="#">View Results</a>
                        </div>
                        <div class="item">
                            <img src="assets/images/sports.png" alt="">
                            <p>Sports Events</p>
                            <a href="#">View Results</a>
                        </div>
                    </div>
                    <a class="twitter-control-left" href="#twitter-feed" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                    <a class="twitter-control-right" href="#twitter-feed" data-slide="next"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </section><!--/#twitter-feed-->

    <section id="sponsor">
        <div id="sponsor-carousel" class="carousel slide" data-interval="false">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10">
                        <h2>Sponsors</h2>
                        <a class="sponsor-control-left" href="#sponsor-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="sponsor-control-right" href="#sponsor-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
                        <div class="carousel-inner">
                            <div class="item active">
                                <ul>
                                    <li><a href="#"><img class="img-responsive" src="assets/images/sponsor/sponsor1.png" alt=""></a></li>
                                    <li><a href="#"><img class="img-responsive" src="assets/images/sponsor/sponsor2.png" alt=""></a></li>
                                    <li><a href="#"><img class="img-responsive" src="assets/images/sponsor/sponsor3.png" alt=""></a></li>
                                    <li><a href="#"><img class="img-responsive" src="assets/images/sponsor/sponsor4.png" alt=""></a></li>
                                    <li><a href="#"><img class="img-responsive" src="assets/images/sponsor/sponsor5.png" alt=""></a></li>
                                    <li><a href="#"><img class="img-responsive" src="assets/images/sponsor/sponsor6.png" alt=""></a></li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul>
                                    <li><a href="#"><img class="img-responsive" src="assets/images/sponsor/sponsor6.png" alt=""></a></li>
                                    <li><a href="#"><img class="img-responsive" src="assets/images/sponsor/sponsor5.png" alt=""></a></li>
                                    <li><a href="#"><img class="img-responsive" src="assets/images/sponsor/sponsor4.png" alt=""></a></li>
                                    <li><a href="#"><img class="img-responsive" src="assets/images/sponsor/sponsor3.png" alt=""></a></li>
                                    <li><a href="#"><img class="img-responsive" src="assets/images/sponsor/sponsor2.png" alt=""></a></li>
                                    <li><a href="#"><img class="img-responsive" src="assets/images/sponsor/sponsor1.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="light">
                <img class="img-responsive" src="assets/images/light.png" alt="">
            </div>
        </div>
    </section><!--/#sponsor-->

    <section id="contact">

        <div class="contact-section">
            <div class="ear-piece">
                <img class="img-responsive" src="assets/images/ear-piece.png" alt="">
            </div>
            <div class="container">
                <div class="row">


                </div>
            </div>
        </div>
    </section>
    <!--/#contact-->


@endsection





