@extends('layouts.layout')

@section('content')



</form>

<div class="itemcontainer">
  <div class="itemleft">
    <div class="itemimage">
      <img src="{{$item->coverimg}}"></img>
    </div>
    <div class="itemform">
      <form action="{{route ('mealplan.add')}}" method="POST">
        <div class="selections">
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
        </div>
        <div class="itembutton">
          <button type="submit">Add to Meal Plan</button>
        </div>

    
    </div>
  </div>
  <div class="itemright">

    <h2>{{$item->title}}</h2>

    <div class="serveprepsect">

      <div class="iconlines">
        <img src="/fe-images/serving.png"></img>
        <p>{{$item->serving_size}}</p>
      </div>
      <div class="iconlines">
        <img src="/fe-images/stopwatch.png"></img>
        <p>{{$item->preparation_time}}</p>
      </div>


    </div>



    <h5>Calories: {{$item->calories}}</h5>
    <h5>Carbohydrates: {{$item->carbohydrates}}</h5>
    <h5>Protein: {{$item->protein}}</h5>
    <h5>Fats: {{$item->fats}}</h5>

    <p>{{$item->description}}</p>
  
  </div>
</div>



@endsection