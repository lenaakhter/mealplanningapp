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

    <!-- Display meal plans -->
    @if(count($mealplan) > 0)
        @foreach($mealplan as $plan)
        
            <div>
                <h3>{{ $plan->title }}</h3> <!-- Assuming 'name' is a column in 'recipes' -->
                <p>{{ $plan->calories }}</p> <!-- Assuming 'description' is a column in 'recipes' -->
                <p>Day: {{ $plan->dayOfWeek }}</p>
            </div>
        @endforeach
    @else
        <p>No meal plans found for this day.</p>
    @endif


</div>

@endsection