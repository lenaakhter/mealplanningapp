@extends('layouts.layout')

@section('content')


<div class="parallax" id="mindfulness">
    <h2>Mindfulness</h2>

</div>


<div class="bannerquote">
    <div class="bannercontents">
        <div class="bannertextquote">
            <h1>"{{ $quote->text }}" ~ {{ $quote->author }}</h1>
            
        </div>
        <div class="bannerbutton">
            <form action="{{ route('quotes.index') }}" method="GET">
                <button type="submit">Show Another Quote</button>
            </form>
        </div>
    </div>
</div>


<div class="collage">
    <div class="container">
        <div class="grid">
            @foreach($images as $image)
                <img src="{{ Storage::url($image->path) }}" alt="Photo">
            @endforeach
        </div>
        <button id="refresh">Refresh</button>
    </div>
    <script>
        document.getElementById('refresh').addEventListener('click', function() {
            window.location.reload();
        });
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
</div>




@endsection