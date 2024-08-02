@extends('layouts.masterlayout')

{{-- title --}}
@section('title')
    User Detail
@endsection

@section('main-content')

<h1 style="background-color: bisque;text-align:center">User Detail</h1>

<h3>Name: {{ $id['name'] }}</h3>
<h3>Phone: {{ $id['phone'] }}</h3>
<h3>City: {{ $id['city'] }}</h3>

@endsection