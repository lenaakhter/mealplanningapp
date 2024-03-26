@extends('layouts.layout')

@section('content')

<div class="accountcontainer">

    <div class="loginsect">
        <form method="POST" action="{{ route('login') }}">
            @csrf
    
            <!-- Email Address -->
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
    
    
                <x-input-label for="password" :value="__('Password')" />
    
                <x-text-input id="password"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
    
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
    
    
    
                <x-primary-button >
                    {{ __('Log in') }}
                </x-primary-button>
    
        </form>
    </div>
    
    <div class="signupsect">
        <form method="POST" action="{{ route('register') }}">
            @csrf
    
            <!-- Name -->
    
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
    
    
            <!-- Email Address -->
    
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email"  type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
    
    
            <!-- Password -->
    
                <x-input-label for="password" :value="__('Password')" />
    
                <x-text-input id="password" 
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
    
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
    
    
            <!-- Confirm Password -->
    
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
    
                <x-text-input id="password_confirmation"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />
    
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    
    
    
                <x-primary-button >
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>

</div>


@endsection