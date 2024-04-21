{{-- resources/views/dashboard.blade.php --}}
@extends('layouts.layout')

@section('content')

<div class="dashcontent">
    <div class="dashtitle">

    </div>
    <div class="dashmainnav">
        <div class="monlink">
            <a href="/mealplan?day=Monday" class="square-link">
                <div>Monday</div>
            </a>
        </div>
        <div class="tuelink">
            <a href="/mealplan?day=Tuesday" class="square-link">
                <div>Tuesday</div>
            </a>
        </div>
        <div class="wedlink">
            <a href="/mealplan?day=Wednesday" class="square-link">
                <div>Wednesday</div>
            </a>
        </div>
        <div class="thurlink">
            <a href="/mealplan?day=Thursday" class="square-link">
                <div>Thursday</div>
            </a>
        </div>
        <div class="frilink">
            <a href="/mealplan?day=Friday" class="square-link">
                <div>Friday</div>
            </a>
        </div>
        <div class="satlink">
            <a href="/mealplan?day=Saturday" class="square-link">
                <div>Saturday</div>
            </a>
        </div>
        <div class="sunlink">
            <a href="/mealplan?day=Sunday" class="square-link">
                <div>Sunday</div>
            </a>
        </div>
        <div class="recipesdash">
            <a href="/recipes" class="square-link">
                <div>Recipes</div>
            </a>
        </div>
        <div class="logoutdash">
            <a href="" class="square-link">
                <div>Logout</div>
            </a>
        </div>
    </div>
    <div class="dashhelplinks">

    </div>
</div>


@endsection

