@extends('layouts.app')
@section('title','moments')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Photo Form') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('routeToSubmitMoment',$obituary->id)}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="photo_title">Photo Title</label>
                            <input id="photo_title" type="text" class="form-control" name="photo_title" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="photo_caption">Photo Caption</label>
                            <textarea id="photo_caption" class="form-control" name="photo_caption" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="_message">Message</label>
                            <textarea id="message" class="form-control" name="message" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" type="text" class="form-control" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="relation">Relation</label>
                            <input id="relation" type="text" class="form-control" name="relation" required>
                        </div>

                        <div class="form-group">
                            <label for="country">Country</label>
                            <input id="country" type="text" class="form-control" name="country" required>
                        </div>

                        <div class="form-group">
                            <label for="photos">Photos</label>
                            <input id="photos" type="file" class="form-control" name="photos[]" multiple accept="image/*" required>
                        </div>

                        <button type="submit" class="btn btn-primary">
                           Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



{{-- @extends('layouts.app')

@section('title', 'post-treasured')

@section('internal-css')
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        body {
            font-family: 'Mukta Malar', sans-serif;
        }

        .main-body {
            width: 100%;
            background-color: #898989;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 150%;
            background-image: url(image/bacgroung-image.png);
            background-repeat: no-repeat;
            background-size: contain;
        }

        .left {
            height: 100%;
            width: 20%;
        }

        .content-box {
            width: 60%;
            background-color: white;
            margin-top: 10%;
        }

        .heading-box1 {
            padding: 10px 30px;
            background-color: white;
            text-align: left;
            font-size: 30px;
            color: #FF4437;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .heading-box2 {
            background-color: #202F4F;
            padding: 20px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .box2-heading-box1 {
            display: flex;
            align-items: center;

        }

        .name-box {
            color: white;
            margin-left: 20px;
        }

        .box2-btn {
            background-color: #FF4437;
            color: white;
            height: 39px;
            width: 150;
            border: none;
            font-size: 17px;
            border-radius: 2px;
            cursor: pointer;
        }

        .heading-box3 {
            padding: 10px 30px;
            font-size: 20px;
            line-height: 1.4;
            font-size: 20px;
            color: rgb(54, 54, 54);
        }

        #title {
            width: 100%;
            padding: 15px;
            border: 0.5px solid #d3d3d3;
        }

        .photo-upload-box {
            padding: 10px 30px;
            font-size: 20px;
            line-height: 1.4;
            font-size: 20px;
            color: rgb(54, 54, 54);
        }

        #upload {
            width: 100%;
        }

        .photo-caption {
            padding: 10px 30px;
            font-size: 20px;
            line-height: 1.4;
            font-size: 20px;
            color: rgb(54, 54, 54);
        }

        #caption {
            background-color: #f4f4f4;
            outline: none;
            border: 0.5px solid #d3d3d3;
            padding: 20px;
            width: 100%;
        }

        .heading-box4 {
            padding: 10px 30px;
            font-size: 20px;
            line-height: 1.4;
            font-size: 20px;
            color: rgb(54, 54, 54);
            margin-top: 0px;
        }

        .heading-box5 {
            padding: 5px 30px;
            font-size: 20px;
            font-size: 20px;
            color: rgb(54, 54, 54);
        }


        #message {
            background-color: #f4f4f4;
            outline: none;
            border: 0.5px solid #d3d3d3;
            padding: 20px;
            width: 100%;
        }

        .box5-smallbox {
            padding: 10px 20px;
            background-color: #f4f4f4;
            border: 0.5px solid #d3d3d3;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .smallbox-link1 {
            display: flex;
            align-items: center;
            text-decoration: none;
            font-size: 14px;
            color: #FF4437;
        }

        .smallbox-btn {
            width: 98px;
            height: 27px;
            border: none;
            background: white;
            cursor: pointer;
            border-radius: 2px;
        }

        .smallbox-btn:hover {
            background-color: #FF4437;
            color: white;
        }

        .heading-box6 {
            padding: 5px 30px;
            font-size: 20px;
            font-size: 20px;
            color: rgb(54, 54, 54);
            line-height: 1.4;
            margin-top: 10px;
        }

        #name {
            width: 100%;
            margin-bottom: 10;
            height: 43px;
            border: 0.5px solid #d3d3d3;
            background-color: #f4f4f4;
            border-radius: 2px;
            padding: 0px 10px;
        }

        input[type=text]:focus {
            outline: none;
        }

        #relation {
            width: 100%;
            margin-bottom: 10;
            height: 43px;
            border: 0.5px solid #d3d3d3;
            background-color: #f4f4f4;
            border-radius: 2px;
            padding: 0px 10px;
        }

        #country {
            width: 100%;
            margin-bottom: 10;
            height: 43px;
            border: 0.5px solid #d3d3d3;
            background-color: #f4f4f4;
            border-radius: 2px;
            padding: 0px 10px;
        }

        .heading-box7 {
            padding: 10px 30px;
            display: flex;
            justify-content: space-between;

        }

        .btn {
            padding: 10px 30px;
            border: none;
            border-radius: 2px;
            color: #5e5e5e;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #FF4437;
            color: white;
        }

        .btn2 {
            padding: 10px 30px;
            border: none;
            border-radius: 2px;
            color: #5e5e5e;
            cursor: pointer;
            margin-left: 10px;
        }

        .btn2:hover {
            background-color: #FF4437;
            color: white;
        }

        .box7-smallbox2 {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn3 {
            padding: 10px 30px;
            border: none;
            border-radius: 2px;
            color: #ffffff;
            cursor: pointer;
            background-color: #FF4437;
        }

        .box7-link {
            text-decoration: none;
            font-size: 16px;
            margin-right: 40px;

        }


        .right {
            width: 20%;
            height: 100%;

        }

        .browse-files {
            margin-left: -258px;
        }

        .upload-files-container {
            border-radius: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .drag-file-area {
            border: 0.5px solid #d3d3d3;
            padding: 30px 50px;
            width: 100%;
            text-align: center;
            background-color: #f4f4f4;
        }

        .drag-file-area h3 {
            font-size: 16px;
            margin: 15px 0;
        }

        .drag-file-area label {
            font-size: 19px;
        }

        .drag-file-area label .browse-files-text {
            color: #FF4437;
            font-weight: bolder;
            cursor: pointer;
        }

        .browse-files span {
            position: relative;
        }

        .default-file-input {
            opacity: 0;
        }

        .cannot-upload-message {
            background-color: #ffc6c4;
            font-size: 17px;
            display: flex;
            align-items: center;
            margin: 5px 0;
            padding: 5px 10px 5px 30px;
            border-radius: 5px;
            color: #BB0000;
            display: none;
        }

        .cannot-upload-message span,
        .upload-button-icon {
            padding-right: 10px;
        }

        .cannot-upload-message span:last-child {
            padding-left: 20px;
            cursor: pointer;
        }

        .file-block {
            color: #f7fff7;
            background-color: #FF4437;
            transition: all 1s;
            width: 390px;
            position: relative;
            display: none;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            margin: 10px 0 15px;
            padding: 10px 20px;
            border-radius: 25px;
            cursor: pointer;
        }

        .file-info {
            display: flex;
            align-items: center;
            font-size: 15px;
        }

        .file-icon {
            margin-right: 10px;
        }

        .file-name,
        .file-size {
            padding: 0 3px;
        }

        .remove-file-icon {
            cursor: pointer;
        }

        .progress-bar {
            display: flex;
            position: absolute;
            bottom: 0;
            left: 4.5%;
            width: 0;
            height: 5px;
            border-radius: 25px;
            background-color: #4BB543;
        }

        .upload-button {
            font-family: 'Montserrat';
            background-color: #7b2cbf;
            color: #f7fff7;
            display: flex;
            align-items: center;
            font-size: 18px;
            border: none;
            border-radius: 20px;
            margin: 10px;
            padding: 7.5px 50px;
            cursor: pointer;
        }

        @media only screen and (max-width:1024px) {

            .left {
                display: none;
            }

            .right {
                display: none;
            }

            .content-box {
                width: 90%;
            }

            .heading-box1 {
                font-size: 25px;
            }
        }


        @media only screen and (max-width:650px) {
            .heading-box7 {
                display: block;
                text-align: center;
            }

            .box7-smallbox2 {
                justify-content: center;
                margin-top: 20px;
            }

            .heading-box1 {
                font-size: 16px;
            }
        }


        @media only screen and (max-width:550px) {
            .box2-btn {
                display: none;
            }

            .heading-box1 {
                font-size: 12px;
                padding: 9px 10px;
            }

            .heading-box2 {
                padding: 9px 10px;
            }

            .btn {
                padding: 10px;
            }

            .btn2 {
                padding: 10px;
            }

            .heading-box3 {
                padding: 10px;
            }

            .heading-box4 {
                padding: 10px;
            }

            .heading-box5 {
                padding: 10px;
            }

            .heading-box6 {
                padding: 10px;
            }

            .photo-caption {
                padding: 10px;
            }

            .photo-upload-box {
                padding: 10px;
            }
        }
    </style>
@endsection

@section('content')


    <div class="main-body">
        <div class="left"></div>
        <div class="content-box">
            <div class="heading-box1">
                <p>Post a Tribute (Treasured Moments)</p>
                <a href="card_page.html"><img src='{{ asset('img/cutt-icone.png') }}' alt="" width="20px"></a>
            </div>
            <div class="heading-box2">
                <div class="box2-heading-box1">
                    <img src="{{ asset('uploads/' . $obituary->photo) }}" alt="" width="70px">
                    <div class="name-box">
                        <p style="font-size: 20px;">{{ $obituary->full_name }}</p>
                        <p>{{ \Carbon\Carbon::parse($obituary->birth_date)->format('Y') }}-{{ \Carbon\Carbon::parse($obituary->death_date)->format('Y') }}
                        </p>
                        <p>{{ $obituary->birth_place }},{{ $obituary->birth_country }}</p>
                    </div>
                </div>
                <a href="TRIBUTE PAGE.HTML"><button class="box2-btn">Tribute</button></a>
            </div>
            <form method="post" action="{{route('routeToSubmitMoment',$obituary->id)}}" class="form-container"  enctype='multipart/form-data'>
            @csrf
                <div class="heading-box3">
                <p>Photo Title</p>
                <input type="text" id="title" placeholder="Memories" name="photo_title">

            </div>
            <div class="photo-upload-box">Upload Photo
               
                    <div class="upload-files-container">
                        <div class="drag-file-area">
                            <span class="material-icons-outlined upload-icon"> <img src='{{ asset('img/upload.png') }}'
                                    alt="" width="30px"> </span>
                            <h3 class="dynamic-message"> Drag & drop any file here </h3>
                            <label class="label"> or <span class="browse-files"> <input type="file" name="photos"
                                        class="default-file-input" /> <span class="browse-files-text">browse file</span>
                                    <span>from device</span> </span> </label>
                        </div>
                        <span class="cannot-upload-message"> <span class="material-icons-outlined">error</span> Please
                            select a file first <span class="material-icons-outlined cancel-alert-button">cancel</span>
                        </span>
                        <div class="file-block">
                            <div class="file-info"> <span class="material-icons-outlined file-icon">description</span> <span
                                    class="file-name"> </span> | <span class="file-size"> </span> </div>
                            <span class="material-icons remove-file-icon">delete</span>
                            <div class="progress-bar"> </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="photo-caption">Photo Caption
                <input type="text" id="caption" placeholder="Caption" name="photo_caption">
            </div>
            <div class="heading-box4">
                <p>Tribute Message</p>
            </div>
            <div class="heading-box5">
                <textarea name="message" id="message" rows="5"
                    placeholder="We are sorry for your loss, was such a great person, The memories will live forever with us."></textarea>
                <div class="box5-smallbox">
                    <a class="smallbox-link1" href=""><img src='{{ asset('img/library-icone.png') }}' alt=""
                            width="20px">
                        <p style="margin-left: 10px;">Our Library</p>
                    </a>
                    <a class="smallbox-link1" href=""><button class="smallbox-btn">Clear</button></a>
                </div>
                <p style="font-size: 12px; color: #5e5e5e;">Max 2000 characters allowed</p>
            </div>
            <div class="heading-box6">
                <p>Tribute by</p>
                <p style="font-size: 14px; color: #5e5e5e;">Choose how you want your name to appear on the tribute.</p>
                <input type="text" name="name" id="name" placeholder="Your Name">
                <input type="text" name="relation" id="relation" placeholder="Organization or Address">
                <input type="text" name="country" id="country" placeholder="Country">

            </div>
            <div class="heading-box7">
                <div class="box7-smallbox1">
                    <button class="btn">Preveiw</button>
                    <a href="card_page.html"><button class="btn2">Change Tribute Type</button></a>
                </div>
                <div class="box7-smallbox2">
                    <a class="box7-link" href="card_page.html">
                        <p>Back</p>
                    </a>
                    <button type="submit" class="btn3">Continue</button>
                </div>

            </div>

        </div>
        <div class="right"></div>
    </div>

@endsection --}}
