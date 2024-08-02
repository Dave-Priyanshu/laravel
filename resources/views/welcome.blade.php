@extends('layouts.masterlayout')

@section('main-content')
    <h2>Home Page</h2>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis aliquid impedit fugiat qui consectetur perferendis dolore? Illo, obcaecati doloremque laboriosam corporis nemo molestiae minus tempora beatae iste ratione sint voluptatum.</p>
    <br>
    <a href="{{ route('cPostPage') }}">Controller Post Page</a></br>
</br>
    {{-- <a href="{{ route('queryBuilder') }}">Query Builder Page</a> --}}
@endsection


@section('title')
    Home
@endsection



{{-- <h1>Home Page</h1>

<a href="/about">About</a>

<br><br> --}}
{{-- !php tags in blade--}}
{{-- 
{{ 5+2 }}

<br><br>
{{ "Hello Priyanshu " }}

<br><br>
{!! "<h1>Dave</h1>" !!}

<br><br>
{!! "<script> alert('Hello PD')</script>" !!} --}}

{{-- ! Printing variavles --}}

{{-- define Array --}}
{{-- @php  
    $names = ['Priyanshu','Yash','Hmza','Meet'];
    $user = "Priyanshu Dave";
@endphp --}}

{{-- looping the array --}}
{{-- <ul>
@foreach($names as $value)
    <li>{{$loop->index }} -  {{ $value }}</li>
@endforeach
</ul> --}}
{{-- print variables --}}
{{-- {{ "User name is: ". $user }} --}}


{{-- @include('pages/footer') --}}