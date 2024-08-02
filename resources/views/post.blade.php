@extends('layouts.masterlayout')

@section('main-content')
    <h2>Post Page</h2>
    
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis aliquid impedit fugiat qui consectetur perferendis dolore? Illo, obcaecati doloremque laboriosam corporis nemo molestiae minus tempora beatae iste ratione sint voluptatum.</p>
    <a href="{{ route('chomePage') }}">Controller Home Page</a>
@endsection

@section('title')
    Post
@endsection
{{-- <h1>Post Page</h1>

<a href="/about">About Page</a> --}}