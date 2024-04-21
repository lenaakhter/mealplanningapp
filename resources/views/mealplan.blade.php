@extends('layouts.layout')

@section('content')
    @auth
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

        <form action="{{ route('mealplan.clear') }}" method="POST" style="margin-top: 20px;">
            @csrf
            <button type="submit" onclick="return confirm('Are you sure you want to clear all meal plans?')">Clear Meal Plan</button>
        </form>

        <div class="cardmeals">
            @if(count($mealplan) > 0)
                @foreach($mealplan as $plan)
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="{{$plan->coverimg}}" alt="Recipe Image" style="width: 100%; height: 100%; object-fit: cover; position: absolute; z-index: -1; border-radius: 1rem;">
                                <p class="title">{{ $plan->title }}</p>
                                <p>{{ $plan->dayOfWeek }}</p>
                                <p>{{ $plan->mealtime }}</p>
                            </div>
                            <div class="flip-card-back">
                                <p class="title">{{ $plan->title }}</p>
                                <p>Lets Cook</p>
                                <!-- Remove Recipe Form -->
                                <form action="{{ route('mealplan.remove', $plan->mealPlanID) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure you want to remove this meal plan?')">Remove</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No Recipes Found</p>
            @endif
        </div>
    @else
    <div class="guestpage">
        <div class="imageguest">
            <img src="/fe-images/guestauth.png"></img>
        </div>
        <div class="textguest">
            <h1>Please Log in to Access the Meal Plan Feature</h1>
            <a href="/login">
                <button>
                    login
                </button>
            </a>
        </div>
    </div>
    @endauth
@endsection


