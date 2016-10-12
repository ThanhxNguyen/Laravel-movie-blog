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

        <div class="container">

            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#showing">Showing</a></li>
                <li><a data-toggle="tab" href="#comingSoon">Coming Soon</a></li>
            </ul>


            <div class="tab-content">

                <!-- Showing -->
                <div id="showing" class="tab-pane fade in active">
                    <h3>Showing Now</h3>
                    <!-- movie 1 -->
                    <div class="col-md-4">
                        <div class="row" >
                            <img src="images/deepwater_horizon.jpg" alt="1" class="img-responsive center-block"  width="75%">
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
                            <img src="images/kevin_hart_what_now.jpg" alt="2" class="img-responsive center-block" width="75%">
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
                            <img src="images/max_steel.jpg" alt="3" class="img-responsive center-block" width="75%">
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
                            <img src="images/passage_to_mars.jpg" alt="4" class="img-responsive center-block" width="75%">
                        </div>
                        <div class="row">
                            </br>
                            <p>Title:</p>
                            <P>Description</P>
                        </div>
                    </div>
                </div>

                <!-- Coming Soon -->
                <div id="comingSoon" class="tab-pane fade">
                    <h3>Coming Soon</h3>
                    <!-- movie 5 -->
                    <div class="col-md-4">
                        <div class="row">
                            <img src="images/priceless.jpg" alt="5" class="img-responsive center-block" width="75%">
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
                            <img src="images/spirit_of_the_game.jpg" alt="6" class="img-responsive center-block" width="75%">
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
                            <img src="images/the_hollow.jpg" alt="7" class="img-responsive center-block" width="75%">
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


