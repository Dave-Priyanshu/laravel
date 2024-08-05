@extends('layouts.masterlayout')

@section('title')
    About
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
@endsection

@section('main-content')
    <section class="about-section">
        <div class="about-content">
            <h2 class="about-title">About Us</h2>
            <p class="about-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis aliquid impedit fugiat qui consectetur perferendis dolore? Illo, obcaecati doloremque laboriosam corporis nemo molestiae minus tempora beatae iste ratione sint voluptatum.
            </p>
        </div>
        <div class="about-image-gallery">
            <img src="{{ asset('assets/images/about1.jpg') }}" alt="About Image 1" class="about-image">
            <img src="{{ asset('assets/images/about2.jpg') }}" alt="About Image 2" class="about-image">
            <img src="{{ asset('assets/images/about3.jpg') }}" alt="About Image 3" class="about-image">
        </div>
        <div class="about-footer">
            <a href="#" class="about-button">Learn More</a>
        </div>
    </section>
@endsection
