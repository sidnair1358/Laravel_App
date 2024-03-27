<h1> {{ $heading }} </h1>
@foreach ($listings as $listing)
    <div>{{ $listing['id'] }}</div>
    <div>{{ $listing['title'] }}</div>
@endforeach
