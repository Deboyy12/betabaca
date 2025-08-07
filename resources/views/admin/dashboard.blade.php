@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    @include('partials.overview')
    @include('partials.stats')
@endsection
