@extends('layouts.app')
@section('title','Post Tribute')

@section('internal-css')
<style>

.box{
    padding:10px 20px;
    background-color: #f4f4f4;
    border: 0.5px solid #d3d3d3;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.box-link{
    display: flex;
    align-items: center;
    text-decoration: none;
    font-size: 14px;
    color: #FF4437;
}

.box-button{
    width: 98px;
    height: 27px;
    border: none;
    background: white;
    cursor: pointer;
    border-radius: 2px;
}

.box-button:hover{
    background-color: #FF4437;
    color: white;
}

    </style>

@endsection


@section('content')
<div class="container">
    <h2>Create a Message</h2>
    <form method="post" action="{{route('routeToAddTribute',$obituary->id)}}">
        @csrf <!-- CSRF protection -->
        
        <!-- Message -->
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea class="form-control" id="message" name="message" rows="4"></textarea>
            <div class="box">
                <a class="box-link" href=""><img src={{("img/library-icone.png")}} alt="" width="20px"><p style="margin-left: 10px;">Our Library</p></a>
                <a class="box-link" href=""><button class="box-button">Clear</button></a>
            </div>
        </div>

        <!-- Tribute By -->
        <div class="form-group">
            <label for="tribute_by">Tribute By:</label>
            <input type="text" class="form-control" id="tribute_by" name="tribute_by">
        </div>

        <!-- relation -->
        <div class="form-group">
            <label for="relation">Relation:</label>
            <input type="text" class="form-control" id="relation" name="relation">
        </div>

        <!-- Country -->
        <div class="form-group">
            <label for="country">Country:</label>
            <input type="text" class="form-control" id="country" name="country">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection