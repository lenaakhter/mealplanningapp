@extends('layouts.layout')

@section('content')

<p>{{$item->serving_size}}</p>

<form action="{{ route('mealplan.add') }}" method="POST">
    @csrf
    <input type="hidden" name="recipe_id" value="{{$item->id}}">
    <button type="submit">Add to Meal Plan</button>
</form>


@endsection