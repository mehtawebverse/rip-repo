@extends('layouts.app')
@section('title', 'adding')
@section('content')
    <h1>Add Remembrance</h1>

    <form action="{{ route('routeToSubmitObituary') }}" method="POST" enctype="multipart/form-data" id="obForm">
        @csrf

        <!-- Add these hidden fields inside your form -->
<input type="hidden" name="selected_country" id="selected_country" value="">
<input type="hidden" name="selected_state" id="selected_state" value="">
<input type="hidden" name="selected_city" id="selected_city" value="">


        <label for="remembrance">Remembrance:</label>
        <input type="text" id="remembrance" name="remembrance" placeholder="Enter Remembrance or keep it black" ><br>

        <label for="your_name">Your Name:</label>
        <input type="text" id="your_name" name="your_name" ><br>

        <label for="your_relation">Your Relation With Deceased Person:</label>
        <input type="text" id="your_relation" name="your_relation" ><br>

        <label for="full_name">Full Name:</label>
        <input type="text" id="full_name" name="full_name" ><br>

        <label for="religion">Religion:</label>
        <input type="text" id="religion" name="religion"><br>

        <label for="profession">Profession:</label>
        <input type="text" id="profession" name="profession"><br>

        <label for="birth_date">Birth Date:</label>
        <input type="date" id="birth_date" name="birth_date"><br>

        <label for="birth_place">Birth Country:</label>
        <input type="text" id="birth_country" name="birth_country" placeholder="Country"><br>  


        <label for="birth_place">Birth Place:</label>
        <input type="text" id="birth_place" name="birth_place" placeholder="City,State"><br>  


        <label for="lived_places">Lived Places:</label>
        <textarea id="lived_places" name="lived_places" placeholder="City,State,Country|City,State,Country|City,State,Country|......"></textarea><br>

        <label for="photo">Photo:</label>
        <input type="file" id="photo" name="photo"><br>

        <label for="death_date">Death Date:</label>
        <input type="date" id="death_date" name="death_date"><br>

        <label for="notification">Notification:</label>
        <textarea id="notification" name="notification"></textarea><br>

        <label for="video">Video:</label>
        <input type="file" id="video" name="video"><br>

        <button type="submit">Submit</button>
    </form>

@endsection
