@extends('layouts.layout')

@section('content')

<div class="mealplantitle">
    <h1>My Meal Plan</h1>
</div>

    <!-- Day selection form -->
    <form action="{{ route('mealplan.index') }}" method="GET">
        <select name="day" onchange="this.form.submit()">
            <option value="">Select a day</option>
            <option value="Monday" {{ $selectedDay == 'Monday' ? 'selected' : '' }}>Monday</option>
            <option value="Tuesday" {{ $selectedDay == 'Tuesday' ? 'selected' : '' }}>Tuesday</option>
            <option value="Wednesday" {{ $selectedDay == 'Wednesday' ? 'selected' : '' }}>Wednesday</option>
            <option value="Thursday" {{ $selectedDay == 'Thursday' ? 'selected' : '' }}>Thursday</option>
            <option value="Friday" {{ $selectedDay == 'Friday' ? 'selected' : '' }}>Friday</option>
            <option value="Saturday" {{ $selectedDay == 'Saturday' ? 'selected' : '' }}>Saturday</option>
            <option value="Sunday" {{ $selectedDay == 'Sunday' ? 'selected' : '' }}>Sunday</option>
        </select>
    </form>

    <div class="cardmeals">
            <!-- Display meal plans -->
    @if(count($mealplan) > 0)
    @foreach($mealplan as $plan)
    <a href="/recipe/{{$plan->recipeID}}">
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front" >
                    <!-- Background Image -->
                    <img src="{{$plan->coverimg}}" alt="Recipe Image" style="width: 100%; height: 100%; object-fit: cover; position: absolute; z-index: -1; border-radius: 1rem;">
                    <p class="title">{{ $plan->title }}</p>
                    <p>{{ $plan->dayOfWeek }}</p>
                    <p>{{ $plan->mealtime }}</p>
                </div>
                <div class="flip-card-back">
                    <!-- Optionally, add an image here too if needed -->
                    <p class="title"></p>
                    <p>Lets Cook</p>
                </div>
            </div>
        </div>
    </a>
    


    @endforeach

    </div>


    @else
        <p>No meal plans found for this day.</p>
    @endif


</div>

@endsection






