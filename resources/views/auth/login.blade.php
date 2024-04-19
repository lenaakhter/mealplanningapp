@extends('layouts.layout')

@section('content')


<div class="accountcontainer">

    <div class="loginsect" id="accdiv">
        <h1>Login</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
    
            <!-- Email Address -->
            <div class="email1">
                <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" class="input" placeholder="Email"/>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
    
            <div class="pass1">
                <x-text-input id="password"
                                type="password"
                                name="password"
                                required autocomplete="current-password" 
                                class="input"
                                placeholder="Password"/>
    
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>    
    

    
                <x-primary-button class="formbutton" >
                    {{ __('Log in') }}
                </x-primary-button>
    
        </form>
    </div>
    
    <div class="signupsect" id="accdiv">
        <h1>Register</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
    


    
            <div class="name">
                <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" class="input" placeholder="Name"/>
                <x-input-error :messages="$errors->get('name')" class="mt-2" /> 
            </div>


            <div class="email2">
                <x-text-input id="email"  type="email" name="email" :value="old('email')" required autocomplete="username" class="input" placeholder="Email"/>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

    
            <div class="pass2">
                <x-text-input id="password" 
                type="password"
                name="password"
                required autocomplete="new-password" 
                class="input"
                placeholder="Password"/>

                <x-input-error :messages="$errors->get('password')" class="mt-2" placeholder="Password"/>
            </div>
    
    
            <!-- Confirm Password -->
    
            <div class="confpass">
                <x-text-input id="password_confirmation"
                type="password"
                name="password_confirmation" required autocomplete="new-password" 
                class="input"
                placeholder="Confirm Password"/>

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

<!-- Age Input -->
<div>
    <label for="age">{{ __('Age') }}</label>
    <input id="age" class="input" type="number" name="age" required autofocus>
</div>

<!-- Gender Input -->
<div>
    <label for="gender">{{ __('Sex') }}</label>
    <select id="gender" class="input" name="gender" required>
        <option value="male">{{ __('Male') }}</option>
        <option value="female">{{ __('Female') }}</option>
    </select>
</div>

  
    
    
    
                <x-primary-button class="formbutton">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>

</div>


@endsection