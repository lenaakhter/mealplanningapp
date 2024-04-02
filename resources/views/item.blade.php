@extends('layouts.layout')

@section('content')

<p>{{$item->serving_size}}</p>

<form action="{{route ('mealplan.add')}}" method="POST">
    <input type="hidden" name="recipe" id="recipe" value="{{$item->id}}">
    @csrf
    <button type="submit">Add to Meal Plan</button>
</form>

@endsection