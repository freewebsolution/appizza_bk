@extends('layouts.main')
@section('title','Appizza')
@section('content')
    @include('frontend.sections.slider')
    @include('frontend.sections.intro')
    @include('frontend.sections.about')
    @include('frontend.sections.services')
    @include('frontend.sections.counter')
@endsection
