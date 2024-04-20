@extends('layouts.layout')

@section('content')


<div class="parallax" id="mindfulness">
    <h2>Mindfulness</h2>

</div>

<div>
        <p>{{ $quote->text }}</p>
        <p><strong>{{ $quote->author }}</strong></p>
        <form action="{{ route('quotes.index') }}" method="GET">
            <button type="submit">Show Another Quote</button>
        </form>
</div>

<div class="bannerquote">
    <div class="bannercontents">
        <div class="bannertextquote">
            <h1>Our greatest weakness lies in giving up. The most certain way to succeed is always to try just one more time.</h1>
        </div>
        <div class="bannerbutton">
            <a href="/">
                <button>
                    New Quote
                </button>
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