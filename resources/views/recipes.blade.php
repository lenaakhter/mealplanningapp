@extends('layouts.layout')

@section('content')


<div class="bannertitle" id="welcometop">
<div class="bannercontents">
    @auth
        <div class="bannertext">
            <h1>Welcome back {{ Auth::user()->name }}, ready for your next meal?</h1>
        </div>
        <div class="bannerbutton">
            <a href="/mealplan">
                <button>
                    My Meal Plan
                </button>
            </a>
        </div>
    @endauth

    @guest
        <div class="bannertext">
            <h1>Recipes</h1>
        </div>
    @endguest
</div>

</div>

<div class="recipetext">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
          nisi ut aliquip ex ea commodo consequat</p>
</div>




<div class="featuredrecipes">
    <div class="featuredtitle">
        <h1>Featured Recipes</h1>
    </div>

    <div class="featuredcards">
        @foreach($recipes as $recipe)
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
        @endforeach
        

    </div>
</div>



<div class="parallax">
    <h1>Lorem ipsum dolor sit amet, </h1>
  <h3>consectetur adipiscing elit, 
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</h3>
</div>

<div class="recipetext">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
          nisi ut aliquip ex ea commodo consequat</p>
</div>
<br>

@endsection