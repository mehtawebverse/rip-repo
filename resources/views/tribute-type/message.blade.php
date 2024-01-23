@extends('layouts.app')

@section('title','message')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Photo Form') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('routeToSubmitMessage',$obituary->id)}}" enctype="multipart/form-data">
                        @csrf

                        

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" class="form-control" name="message" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <textarea id="email" class="form-control" name="email" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="phone_no">Phone Number</label>
                            <textarea id="phone_no" class="form-control" name="phone_no" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="country">Country</label>
                            <input id="country" type="text" class="form-control" name="country" required>
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

@section('title', 'post-message')

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
            height: 107%;
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

        .heading-box4 {
            padding: 10px 30px;
            font-size: 20px;
            line-height: 1.4;
            font-size: 20px;
            color: rgb(54, 54, 54);
            margin-top: 20px;
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



        @media only screen and (max-width:1024px) {

            body {
                overflow-x: hidden;
            }

            .left {
                display: none;
            }

            .right {
                display: none;
            }

            .content-box {
                width: 90%;
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

            .heading-box4 {
                padding: 10px;
            }

            .heading-box5 {
                padding: 10px;
            }

            .heading-box5 {
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
                <p>Post a Tribute(Message)</p>
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
            <form method="POST" action="{{ route('routeToSubmitMessage', $obituary->id) }}">
                <div class="heading-box4">
                    <p>Tribute Message</p>
                    <p style="font-size: 14px;  color: #5e5e5e">Simply send a tribute message in your own words or select
                        from our library.</p>
                    </p>
                </div>
                
                <div class="heading-box5">
                    <textarea name="message" id="message" rows="5"
                        placeholder="Simply send a tribute message in your own words or select from our library."></textarea>
                    <div class="box5-smallbox">
                        <a class="smallbox-link1" href=""><img src='{{ asset('img/library-icone.png') }}'
                                alt="" width="20px">
                            <p style="margin-left: 10px;">Our Library</p>
                        </a>
                        <a class="smallbox-link1" href=""><button class="smallbox-btn">Clear</button></a>
                    </div>
                    <p style="font-size: 12px; color: #5e5e5e;">Max 2000 characters allowed</p>
                </div>
                <div class="heading-box6">
                    <p>Tribute by</p>
                    <p style="font-size: 14px; color: #5e5e5e;">Choose how you want your name to appear on the tribute.</p>
                    <input type="text" id="name" name="name" placeholder="Your Nme">

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
                        <a href="continue_page.html"><button class="btn3">Continue</button></a>
                    </div>

                </div>
            </form>

        </div>
        <div class="right"></div>
    </div>



@endsection --}}
