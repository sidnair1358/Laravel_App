@extends('layout')

@section('content')
    @include('./partials/_search')
    <h1>{{ $heading }}</h1>
    <div>{{ $listing['id'] }}</div>
    <div>{{ $listing['title'] }}</div>
@endsection
