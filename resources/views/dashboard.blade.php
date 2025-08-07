@extends('user.layouts.app')

@section('title', 'Dashboard')

@section('content')
    @include('user.partials.about')
    @include('user.partials.categories')
    @include('user.partials.team')
@endsection
