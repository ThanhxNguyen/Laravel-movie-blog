@extends('layout')

@section('title')
    Home Page
@stop

@section('content')

    <div class="row">
        <h1 class="text-center">Welcome to Thanh's movie world</h1>

        <!-- container for carousel section -->
        <div class="container" width="75%">

            <!-- start carousel section -->
            <div id="moive-carousel" class="carousel slide" data-ride="carousel">
                <!-- indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#moive-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#moive-carousel" data-slide-to="1"></li>
                    <li data-target="#moive-carousel" data-slide-to="2"></li>
                    <li data-target="#moive-carousel" data-slide-to="3"></li>
                    <li data-target="#moive-carousel" data-slide-to="4"></li>
                    <li data-target="#moive-carousel" data-slide-to="5"></li>
                    <li data-target="#moive-carousel" data-slide-to="6"></li>
                </ol>
                <!-- wrapper for sliders -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/carousel/deepwater_horizon_1.jpg" alt="deepwater_horizon_1" class="img-responsive center-block" style="width: 1140px !important;height: 450px !important;">
                        <div class="carousel-caption">Deepwater Horizon</div>
                    </div>
                    <div class="item">
                        <img src="images/carousel/kevin_hart_what_now_1.jpg" alt="kevin_hart_what_now_1" class="img-responsive center-block" style="width: 1140px !important;height: 450px !important;">
                        <div class="carousel-caption">Kevin Hart What Now</div>
                    </div>
                    <div class="item">
                        <img src="images/carousel/max_steel_1.jpg" alt="max_steel_1" class="img-responsive center-block" style="width: 1140px !important;height: 450px !important;">
                        <div class="carousel-caption">Max Steel</div>
                    </div>
                    <div class="item">
                        <img src="images/carousel/passage_to_mars_1.jpg" alt="passage_to_mars_1" class="img-responsive center-block" style="width: 1140px !important;height: 450px !important;">
                        <div class="carousel-caption">Passage To Mars</div>
                    </div>
                    <div class="item">
                        <img src="images/carousel/priceless_1.jpg" alt="priceless_1" class="img-responsive center-block" style="width: 1140px !important;height: 450px !important;">
                        <div class="carousel-caption">Priceless</div>
                    </div>
                    <div class="item">
                        <img src="images/carousel/assassin_creed_1.jpg" alt="assassin_creed_1" class="img-responsive center-block" style="width: 1140px !important;height: 450px !important;">
                        <div class="carousel-caption">Assassin Creed</div>
                    </div>
                    <div class="item">
                        <img src="images/carousel/the_huntsman_winter's_war_1.jpg" alt="the_huntsman_winter's_war_1" class="img-responsive center-block" style="width: 1140px !important;height: 450px !important;">
                        <div class="carousel-caption">The Huntsman Winter's War</div>
                    </div>
                </div>
                <!-- left and right controls -->
                <a class="left carousel-control" href="#moive-carousel" role="button" data-slide="prev">
                    <span class="icon-prev" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#moive-carousel" role="button" data-slide="next">
                    <span class="icon-next" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>

        <!-- container for "movie categories" section -->
        <div class="container">

            <!-- tab -->
            <ul class="nav nav-tabs">
                <li class="active">
                    <a data-toggle="tab" href="#showing">Showing</a>
                </li>
                <li>
                    <a data-toggle="tab" href="#comingSoon">Coming Soon</a>
                </li>
            </ul>
            <!-- tab contents -->
            <div class="tab-content">
                <!-- tab1: Showing -->
                <div id="showing" class="tab-pane fade in active">
                    <h3>Showing Now</h3>
                    <!-- movie 1 -->
                    <div class="col-md-4">
                        <div class="row" >
                            <img src="images/gallery/deepwater_horizon.jpg" alt="deepwater_horizon" class="img-responsive center-block"  width="75%">
                        </div>
                        <div class="row">
                            </br>
                            <p>Title:</p>
                            <P>Description</P>
                        </div>
                    </div>
                    <!-- movie 2 -->
                    <div class="col-md-4">
                        <div class="row">
                            <img src="images/gallery/kevin_hart_what_now.jpg" alt="kevin_hart_what_now" class="img-responsive center-block" width="75%">
                        </div>
                        <div class="row">
                            </br>
                            <p>Title:</p>
                            <P>Description</P>
                        </div>
                    </div>
                    <!-- movie 3 -->
                    <div class="col-md-4">
                        <div class="row">
                            <img src="images/gallery/max_steel.jpg" alt="max_steel" class="img-responsive center-block" width="75%">
                        </div>
                        <div class="row">
                            </br>
                            <p>Title:</p>
                            <P>Description</P>
                        </div>
                    </div>
                    <!-- movie 4 -->
                    <div class="col-md-4">
                        <div class="row">
                            <img src="images/gallery/passage_to_mars.jpg" alt="passage_to_mars" class="img-responsive center-block" width="75%">
                        </div>
                        <div class="row">
                            </br>
                            <p>Title:</p>
                            <P>Description</P>
                        </div>
                    </div>
                </div>
                <!-- tab2: Coming Soon -->
                <div id="comingSoon" class="tab-pane fade">
                    <h3>Coming Soon</h3>
                    <!-- movie 5 -->
                    <div class="col-md-4">
                        <div class="row">
                            <img src="images/gallery/priceless.jpg" alt="priceless" class="img-responsive center-block" width="75%">
                        </div>
                        <div class="row">
                            </br>
                            <p>Title:</p>
                            <P>Description</P>
                        </div>
                    </div>
                    <!-- movie 6 -->
                    <div class="col-md-4">
                        <div class="row">
                            <img src="images/gallery/assassin_creed.jpg" alt="assassin_creed" class="img-responsive center-block" width="75%">
                        </div>
                        <div class="row">
                            </br>
                            <p>Title:</p>
                            <P>Description</P>
                        </div>
                    </div>
                    <!-- movie 7 -->
                    <div class="col-md-4">
                        <div class="row">
                            <img src="images/gallery/the_huntsman_winter's_war.jpg" alt="the_huntsman_winter's_war" class="img-responsive center-block" width="75%">
                        </div>
                        <div class="row">
                            </br>
                            <p>Title:</p>
                            <P>Description</P>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@stop


