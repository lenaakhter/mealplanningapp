@extends('layouts.layout')

@section('content')

<div class="bannertitle" id="welcometop">
    <div class="bannercontents">
        <div class="bannertext">
            <h1>Create Your Custom Meal Plan Today</h1>
        </div>
        <div class="bannerbutton">
            <a href="/mealplan">
                <button>
                    Create Now
                </button>
            </a>
        </div>
    </div>
</div>

<div class="infobannerleft">
    <div class="textleft">
        <h1>What we do?</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
             Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div class="imageright">
        <br>

    </div>
</div>

<!-- <div class="test-img"> -->
    <img src="/images/cookies.jpg" alt="image" width="24" height="35"></img>
<!-- </div> -->


<div class="infobannerright">
    <div class="imageleft">
        <br>
    </div>
    <div class="textright">
        <h1>What we do?</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
             Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat.</p>
    </div>
</div>

<div class="bannerbottom">
    <div class="bannercontents">
        <div class="bannertext2">
            <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h1>
        </div>
        <div class="bannerbutton">
            <a href="/mealplan">
                <button>
                    Register Now
                </button>
            </a>
        </div>
    </div>
</div>

@endsection