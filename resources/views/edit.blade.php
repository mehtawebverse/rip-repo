@extends('layouts.app')
@section('title', 'Editing Obituary')
@section('content')
    <h1>Add Remembrance</h1>

    <form action="{{route('routeToEditObituary',$data->id)}}" method="POST" enctype="multipart/form-data" id="obForm">
        @csrf

        <label for="remembrance">Remembrance:</label>
        <input type="text" id="remembrance"
        value="{{$data->remembrance_day}}" name="remembrance" placeholder="Enter Remembrance or keep it black" ><br>

        <label for="full_name">Full Name:</label>
        <input type="text" id="full_name" name="full_name"  value="{{$data->full_name}}" ><br>

        <label for="profession">Profession:</label>
        <input type="text" id="profession" name="profession" value="{{$data->profession}}"><br>

        <label for="birth_date">Birth Date:</label>
        <input type="date" id="birth_date" name="birth_date" value="{{$data->birth_date}}"><br>

        <label for="birth_place">Birth Place:</label>
        <input type="text" id="birth_place" name="birth_place" value="{{$data->birth_place}}"><br>

        <label for="lived_places">Lived Places:</label>
        <textarea id="lived_places" name="lived_places">{{$data->notification}}</textarea><br>
        <label for="video">Old Photo:</label>
        <img src="{{ asset('uploads/'.$data->photo) }}" alt="obit photo" class="obit-photo" height="100px" width="100px"><br>
        <label for="photo">Replace Photo:</label>
        <input type="file" id="photo" name="photo" ><br>


        <label for="death_date">Death Date:</label>
        <input type="date" id="death_date" name="death_date" value="{{$data->death_date}}"><br>

        <label for="notification">Notification:</label>
        <textarea id="notification" name="notification" >
        {{$data->notification}}    
        </textarea><br>

        <label for="video">Old Video:</label>
        <video controls width="300">
            <source src="{{ asset('uploads/videos/'.$data->video) }}" type="video/mp4">
        </video><br>

        <label for="video">Replace Video:</label>
        <input type="file" id="video" name="video"><br>

        <button type="submit">Save Changes</button>
    </form>
@endsection