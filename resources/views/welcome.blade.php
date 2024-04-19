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

<div class="featuredrecipes">
    <div class="featuredtitle">
        <h1>Featured Recipes</h1>
    </div>
    <div class="featuredcards">
        @php $count = 0; @endphp
        @foreach($recipes as $recipe)
            @if($count < 4)
                <a href="/recipe/{{$recipe->id}}">
                    <div class="recipecard">
                        <div class="cardimg">
                            <img src="{{$recipe->coverimg}}"></img>
                        </div>
                        <div class="recipeprep">
                            <h5>{{$recipe->title}}</h5>
                            <div class="prepline">
                                <img src="/images/timer.png"></img>
                                <p>{{$recipe->preparation_time}}</p>
                            </div>
                        </div>
                    </div>
                </a>
                @php $count++; @endphp
            @endif
        @endforeach

        

    </div>
</div>

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