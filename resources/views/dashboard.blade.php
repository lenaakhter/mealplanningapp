{{-- resources/views/dashboard.blade.php --}}
@extends('layouts.layout')

@section('content')

<div class="dashcontent">
    <div class="dashtitle">
        <h1>{{ Auth::user()->name }}'s Dashbaord</h1>
    </div>

    <div class="dashmainnav">
        <div class="linkstitle">
            <h2>Meal Plan Links</h2>
        </div>
        <div class="linkslinks">
            <div class="monlink">
                <a href="/mealplan?day=Monday" class="square-link">
                    <div>Monday Meals</div>
                </a>
            </div>
            <div class="tuelink">
                <a href="/mealplan?day=Tuesday" class="square-link">
                    <div>Tuesday Meals</div>
                </a>
            </div>
            <div class="wedlink">
                <a href="/mealplan?day=Wednesday" class="square-link">
                    <div>Wednesday Meals</div>
                </a>
            </div>
            <div class="thurlink">
                <a href="/mealplan?day=Thursday" class="square-link">
                    <div>Thursday Meals</div>
                </a>
            </div>
            <div class="frilink">
                <a href="/mealplan?day=Friday" class="square-link">
                    <div>Friday Meals</div>
                </a>
            </div>
            <div class="satlink">
                <a href="/mealplan?day=Saturday" class="square-link">
                    <div>Saturday Meals</div>
                </a>
            </div>
            <div class="sunlink">
                <a href="/mealplan?day=Sunday" class="square-link">
                    <div>Sunday Meals
                    </div>
                </a>
            </div>
            <div class="recipesdash">
                <a href="/recipes" class="square-link">
                    <div>Recipes</div>
                </a>
            </div>
            <div class="logoutdash">
                <a href="/mealplan" class="square-link">
                    <div>All Meals</div>
                </a>
            </div>
        </div>

    </div>
    <div class="dashhelplinks">

    </div>
</div>


@endsection

