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
    <p>Here is our diverse range of delicious and nutritious recipes for you to explore! Whether you're looking for a quick weeknight dinner, a slow-cooked Sunday feast, or a refreshing smoothie, our collection has something to tantalize every taste bud. Dive into our carefully curated selections and find the perfect dishes to complement your culinary journey. Happy browsing!</p>
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




@endsection