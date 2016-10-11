@extends('layout')

@section('title')
    Home Page
@stop

@section('content')

    <div class="row">
        <h1 class="text-center">Welecome to Thanh's movie world</h1>

        <!-- container for carousel section -->
        <div class="container" width="75%">

            <!-- carousel  -->
            <div id="moive-carousel" class="carousel slide" data-ride="carousel">
                <!-- indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#moive-carousel" data-slide-to="1" class="active"></li>
                    <li data-target="#moive-carousel" data-slide-to="2"></li>
                    <li data-target="#moive-carousel" data-slide-to="2"></li>
                    <li data-target="#moive-carousel" data-slide-to="3"></li>
                    <li data-target="#moive-carousel" data-slide-to="4"></li>
                    <li data-target="#moive-carousel" data-slide-to="5"></li>
                    <li data-target="#moive-carousel" data-slide-to="6"></li>
                </ol>
                <!-- wrapper for sliders -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/deepwater_horizon.jpg" alt="1" class="img-responsive center-block" width="300">
                        <div class="carousel-caption">movie 1</div>
                    </div>
                    <div class="item">
                        <img src="images/kevin_hart_what_now.jpg" alt="2" class="img-responsive center-block" width="300">
                        <div class="carousel-caption">movie 2</div>
                    </div>
                    <div class="item">
                        <img src="images/max_steel.jpg" alt="3" class="img-responsive center-block" width="300">
                        <div class="carousel-caption">movie 3</div>
                    </div>
                    <div class="item">
                        <img src="images/passage_to_mars.jpg" class="img-responsive center-block" width="300">
                        <div class="carousel-caption">movie 4</div>
                    </div>
                    <div class="item">
                        <img src="images/priceless.jpg" alt="5" class="img-responsive center-block" width="300">
                        <div class="carousel-caption">movie 5</div>
                    </div>
                    <div class="item">
                        <img src="images/spirit_of_the_game.jpg" alt="6" class="img-responsive center-block" width="300">
                        <div class="carousel-caption">movie 6</div>
                    </div>
                    <div class="item">
                        <img src="images/the_hollow.jpg" alt="7" class="img-responsive center-block" width="300">
                        <div class="carousel-caption">movie 7</div>
                    </div>
                </div>
                <!-- Left and right controls -->
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

        <div class="container" style="margin-top: 2em">


                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#showing">Showing</a></li>
                    <li><a data-toggle="tab" href="#comingSoon">Coming Soon</a></li>
                    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
                </ul>

                <div class="tab-content">
                    <div id="showing" class="tab-pane fade in active">
                        <h3>Showing</h3>
                        <p>Some content.</p>
                    </div>
                    <div id="comingSoon" class="tab-pane fade">
                        <h3>Coming Soon</h3>
                        <p>Some content in menu 1.</p>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <h3>Menu 2</h3>
                        <p>Some content in menu 2.</p>
                    </div>
                </div>


        </div>

    </div>




@stop


