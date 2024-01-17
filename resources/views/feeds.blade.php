@extends('layouts.app')
@section('title','HOME')
@section('content')
<main>
    <link rel="stylesheet" href="{{asset('css/Home.css')}}">
<div class="content-box">

    <!-- LEFT SECTION HTML -->
    
        
    
    <div class="left-section">
        <div class="lefthead">
            <div class="lefthead-line"></div>
            <h2>RECENT POST</h2>
        </div>
        @foreach ($recentObituaries as $recent)
        <div  class="info">
            <a href="">
                <p class="heading-1">{{$recent->birth_country}}</p>
                <p class="heading-2"> {{ $countryCounts[$recent->birth_country] ?? 0 }} Post{{ $countryCounts[$recent->birth_country] != 1 ? 's' : '' }}</p>
            </a>
        </div>
        @endforeach
    </div>

    <!-- LEFT SECTION HTML END -->


    

    <!-- CENTER SECTION HTML -->
   
    <div class="center-section">
        <div class="centerhead-line"></div>
        <div class="centerhead">
            <div class="centerhead-first-box">
                <a href="TRIBUTE PAGE.HTML"><img src={{("img/feedicone.png")}} alt="" width="30px"></a>
                <a href="TRIBUTE PAGE.HTML">
                    <p style="margin-left: 5px;">Feed</p>
                </a>
            </div>
            <div class="number">+91 12 345 67890 <span class="greenbox">24/7</span></div>
        </div>
        @foreach ($obit as $ob )
        <div class="contentbox-center center-top-box">
            <div class="content-head">
                <p style="font-size: 16px;">{{$ob->remembrance_day}}</p>
                <p style="font-size: 12px; color:  #656565;">Feed Time</p>
            </div>
            <div class="content-main">
                <img src={{("img/profile-photo.png")}} alt="profile">
                <a href="{{route('routeToClickedObituary',$ob->id)}}">
                    <div class="maincontent-textbox">
                        <p class="contentbox-headind">{{$ob->full_name}}</p>
                        <p class="sub-heading">{{ \Carbon\Carbon::parse($ob->birth_date)->format('Y') }}-{{ \Carbon\Carbon::parse($ob->death_date)->format('Y') }}</p>
                        <p class="sub-heading">{{$ob->birth_place}}</p>
                        <p class="sub-heading">{{$ob->birth_country}}</p>
                    </div>
                </a>
            </div>
            <div class="content-footer">
                <div class="footer-box1"><a href="#"><img src={{("img/flower.png")}} alt="" width="40px"></a>
                    <p class="footer-heading">
                    <p><span>5</span> Tributes</p>
                </div>
                <a href="{{route('pt',$ob->id)}}"><button class="footer-btn">Post Tributes</button></a>
            </div>
        </div>
        @endforeach
      

    </div>
    
    <!-- CENTER SECTION HTML END -->


    <!-- RIGHT SECTION HTML -->
    <div class="right-section">
        <div class="right-head">
            <h2>RECENT<br>TRIBUTES</h2>
        </div>
        <div style="margin-top:10;" class="rightsection-infobox">
            <a href="#"><img src={{("img/phone-icone.png")}} alt="" width=50px>
                <p class="rightbox-heading"> Late Person Name</p>
                <p class="rightbox-heading2"> Tributes Person Name</p>
                <p class="rightbox-time">Time</p>
            </a>
        </div>
      
        
    </div>
    <!-- RIGHT SECTION HTML END -->
</div>
</main>


@endsection