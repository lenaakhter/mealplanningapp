@extends('layouts.layout')

@section('content')

<p>{{$item->serving_size}}</p>


<form action="{{route ('mealplan.add')}}" method="POST">
    <select name="mealtime" id="mealtime">
        <option value="Breakfast">Breakfast</option>
        <option value="Lunch">Lunch</option>
        <option value="Dinner">Dinner</option>
      </select>
      <select name="dayOfWeek" id="dayOfWeek">
        <option value="Monday">Monday</option>
        <option value="Tuesday">Tuesday</option>
        <option value="Wednesday">Wednesday</option>
        <option value="Thursday">Thursday</option>
        <option value="Friday">Friday</option>
        <option value="Saturday">Saturday</option>
        <option value="Sunday">Sunday</option>
      </select>
    <input type="hidden" name="recipe" id="recipe" value="{{$item->id}}">
    @csrf
    <button type="submit">Add to Meal Plan</button>

</form>

@endsection