@extends('layouts.layout')

@section('content')


<div class="parallax" id="mindfulness">
    <h2>Mindfulness</h2>

</div>


<div class="bannerquote">
    <div class="bannercontents">
        <div class="bannertextquote">
            <h1>{{ $quote->text }}</h1>
            <p>{{ $quote->author }}</p>
        </div>
        <div class="bannerbutton">
            <a href="/">
            <form action="{{ route('quotes.index') }}" method="GET">
            <button type="submit">New Quote</button>
        </form>
            </a>
        </div>
    </div>
</div>

<div class="mindcollage">
    <div class="mimage" id="m1"></div>
    <div class="mimage" id="m2"></div>
    <div class="mimage" id="m3"></div>
    <div class="mimage" id="m4"></div>
    <div class="mimage" id="m5"></div>
    <div class="mimage" id="m6"></div>
    <div class="mimage" id="m7"></div>
    <div class="mimage" id="m8"></div>
</div>

@endsection