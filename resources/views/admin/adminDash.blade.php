@extends('adminlte::page')

@section('full_name','Admin Dashboard')

@section('content')

<button> <a href="{{route('routeToObituaryForm')}}"> Add Obituary </a></button>
<button> <a href="{{route('routeToViewObituaries')}}"> View Obituary </a></button>

@endsection