@extends('layouts.layout')

@section('content')

<div class="mealplantitle">
    <h1>My Meal Plan</h1>
</div>

<div class="mealplandetail">
    <div class="macros">
        <h3>
            My Macros
        </h3>
    </div>
    <div class="editing">
        <p>
            Edit
        </p>
    </div>
</div>

<br>
<br>
<h4>loader placeholder</h4>
<br>
<br>

<div class="mealdetail">
    <div class="mealtitle">
        <h1>Breakfast</h1>
    </div>
    <div class="mealcards">
        <div class="card" id="card1">
            <div class="card-details">
            </div>
            <button class="card-button">Lets Cook!</button>
        </div>
        
        <div class="card" id="card2">
            <div class="card-details">
            </div>
            <button class="card-button">Lets Cook!</button>
        </div>
        
        <div class="card" id="card3">
            <div class="card-details">
            </div>
            <button class="card-button">Lets Cook!</button>
        </div>
        
        <div class="card" id="card4">
            <div class="card-details">
            </div>
            <button class="card-button">Lets Cook!</button>
        </div>
    </div>
</div>

@endsection