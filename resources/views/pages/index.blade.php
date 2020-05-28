@extends('layouts.app')

@section('content')

    <!--First Slider-->
    <div class="container-fluid p-0">
        <div class="site-slider">
            <div class="slider-1">
                <div>
                    <img src="images/Banner-1.png" class="img-fluid" alt="Banner-1">
                </div>
                <div>
                    <img src="images/Banner-2.png" class="img-fluid" alt="Banner-2">
                </div>
                <div>
                    <img src="images/Banner-3.png" class="img-fluid" alt="Banner-3">
                </div>
                <div>
                    <img src="images/Banner-4.png" class="img-fluid" alt="Banner-4">
                </div>
                <div>
                    <img src="images/Banner-5.png" class="img-fluid" alt="Banner-5">
                </div>
            </div>
            <div class="slider-btn">
                <span class="prev position-top">
                    <i class="fas fa-chevron-left"></i>
                </span>
                <span class="next position-top right-0">
                    <i class="fas fa-chevron-right"></i>
                </span>
            </div>
        </div>
    </div>    
    <!--/First Slider-->

    <!--Second Slider-->
    <div class="container-fluid">
        <div class="site-slider2 px-md-4">
            <div class="row slider-2 text-center">
                <div class="col-md-2 genre pt-md-5 pt- 4 pb-4">
                    <img src="Images/Children.jpg" alt="Genre-1">
                    <span class="border site-btn btn-span">Children's</span>
                </div>
                <div class="col-md-2 genre pt-md-5 pt-4 pb-4">
                    <img src="Images/Educational.jpg" alt="Genre-2">
                    <span class="border site-btn btn-span">Educational</span>
                </div>
                <div class="col-md-2 genre pt-md-5 pt-4 pb-4">
                    <img src="Images/Fantasy.jpg" alt="Genre-3">
                    <span class="border site-btn btn-span">Fantasy</span>
                </div>
                <div class="col-md-2 genre pt-md-5 pt-4 pb-4">
                    <img src="Images/Romance.jpg" alt="Genre-4">
                    <span class="border site-btn btn-span">Romance</span>
                </div>
                <div class="col-md-2 genre pt-md-5 pt-4 pb-4">
                    <img src="Images/Adventure.jpg" alt="Genre-5">
                    <span class="border site-btn btn-span">Adventure</span>
                </div>
                <div class="col-md-2 genre pt-md-5 pt-4 pb-4">
                    <img src="Images/Selfhelp.jpg" alt="Genre-6">
                    <span class="border site-btn btn-span">Self-Help</span>
                </div>
                <div class="col-md-2 genre pt-md-5 pt-4 pb-4">
                    <img src="Images/Crafthobbies.jpg" alt="Genre-7">
                    <span class="border site-btn btn-span">Craft & Hobbies</span>
                </div>
            </div>
            <div class="slider-btn">
                <span class="prev position-top">
                    <i class="fas fa-chevron-left fa-2x text-secondary"></i>
                </span>
                <span class="next position-top right-0">
                    <i class="fas fa-chevron-right fa-2x text-secondary"></i>
                </span>
            </div>
        </div>
    </div>
    <!--/Second Slider-->



@endsection


