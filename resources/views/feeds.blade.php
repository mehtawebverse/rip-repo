@extends('layouts.app')
@section('title','HOME')

@section('internal-css')

<style>

*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}

body{
    font-family: 'Mukta Malar', sans-serif;
}

header{
    width:100%;
    height:88px;
    background-color: aqua;
    position: fixed;
    z-index:1 ;
}


input[type=text]:focus {
    outline: none;
  }
.topwar{
    width:100%;
    height:32px;
    background-color: white;
}

.nav{
    height: 56px;
    width: 100%;
    background-color: #202F4F;
}

.topbox{
    width:1034;
    /* border: 1px solid black; */
    height:32px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.dropdown{
    margin-left:-2px;
}
#language{
    border: none;
    font-size: 12px;
    text-align:left;
    font-weight:600;
    font-family: 'Mukta Malar', sans-serif;
}

ul{
    list-style: none;
}

.toplist{
    display: flex;
}

a{
    text-decoration: none;
}


.top-list{
    padding: 0 0 0 39px;
}


.top-link{
 color: #1c1c1c;
    font-size: 12px;
    text-align: center;
    font-weight:500;
}

.nav-box{
width:1034px;
height:56px;
display:block;
margin-left: auto;
margin-right: auto;
/* border:1px solid white; */
display: flex;
justify-content: space-between;
align-items: center;
}

.search-war{
    width:350px;
    height:32px;
    border-radius:2px;
    padding-left: 15px;
    font-size:12px;
    font-family: 'Mukta Malar', sans-serif;
    border:none;
}

.search-icone{
    /* background-color: #FF4437; */
    padding: 0 16px;
    margin-left: -33px;
    background-image: url(image/searchicone.png);
    background-size:20px;
    background-position: 4px 7px;
    background-repeat: no-repeat;
}

.browse-btn{
    width: 74px;
    margin: 0 17px;
    height: 30px;
    color: #404549;
    border-radius: 3px;
    border: none;
    font-family: 'Mukta Malar', sans-serif;
    background-color: white;
    cursor: pointer;
}

.browse-btn:hover{
    background-color: #FF4437;
    color:white;
}

.creat-btn{
    width: 133px;
    height: 33px;
    border-radius: 2px;
    border: none;
    color: white;
    background-color: #FF4437;
    font-family: 'Mukta Malar', sans-serif;
    cursor: pointer;
}

main{
    /* width:100%; */
    height:1319px;
    background-color:#F1F1F1;

}

.content-box{
    width: 1034px;
    height:1000px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    display: flex;
    justify-content: space-between;
}

.left-section{
    width:200px;
    height:780px;
    background-color:rgb(255, 255, 255);
    margin-top: 105px;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.15)
    
}

.lefthead-line{
    height: 29px;
    width: 5px;
    background: #fab808;
    
}

.lefthead{
    width:200px;
    height:48px;
    background-color: white;
    padding:0 44px 0 0px;
    /* box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.10); */
    text-align: center;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 3px solid rgb(224, 223, 223);
}

.info{
    width:200px;
    height:48px;
    /* border: 1px solid black; */
    padding: 5px 14px;
    margin-bottom: 0px;
    margin-top:px;
}


a{
    color: black;
}

.heading-1{
   font-size:14px;
    
}

.heading-2{
    font-size: 12px;
    font-weight: 500;
    text-align: left;
    color: #8f8e8e;
    display: block;
    width: 100%;
    line-height: 16px;
}

.center-section{
    width:504px;
    height:913px;
    background-color:rgb(240, 240, 240);
    margin-top:87px;
    /* box-shadow: 2px 5px 10px 0px rgba(0, 0, 0, 0.15); */
    /* border: 1px solid black; */
}

.centerhead-line{
    width:525px;
    height:16px;
    background-color:rgb(240, 240, 240);
    z-index: 1;
    margin-left: -2px;
    position: fixed;
    margin-top: 1px;
}

.bottom-line{
    width: 117px;
    height: 2px;
    background-color: #FF4437;
    margin-top: 47px;
    margin-left: -26px;
}

.centerhead-box{
    margin-left: -305px;
}

.centerhead{
    justify-content: space-between;
    width: 504px;
    height: 50px;
    background-color: white;
    padding: 0 0 0 10px;
    box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.10);
    /* text-align: center; */
    position: fixed;
    margin-top: 16px;
    display: flex;
    padding: 13px 26px;
    align-items: center;
    
}
    
.centerhead-first-box{
    display: flex;
    align-items: center;
    cursor: pointer;
}

.centerhead-headding{
    margin-top: -26px;
    margin-left: 38px;
    font-size: 16px;
    color: #FF4437;
}

.number{
    font-size:20px;
    font-weight: bold;
    color: #28A745;
    cursor: pointer;
}

.greenbox{
    background-color: #28A745;
    color: white;
    padding: 0px 5px 0px 5px;
    border-radius: 5px;
}

.center-top-box{
    margin-top: 77px
}


.contentbox-center{
    width: 504px;
    height: 220px;
    /* background-color: red; */
    margin-bottom: 10px;
}

.content-head{
    width:504px;
    height: 43px;
    background-color: white;
    border-bottom: 0.5px solid rgb(224, 223, 223);
    display: flex;
    justify-content: space-between;
    padding: 10px 15px;
    align-items: center;
}

.content-main{
    width:504px;
    height:132px;
    background-color: white;
    border-bottom: 0.5px solid rgb(224, 223, 223);
    display: flex;
    padding: 12px 15px;
}

.maincontent-textbox{
    padding: 0 15px;
}

.contentbox-headind{
    font-size: 18px;
    /* font-weight: bold; */
    padding: 0 0 5px;
}

.content-main:hover .maincontent-textbox{
    color: #FF4437;
}

.sub-heading{
    font-size: 14px;
    line-height:16px;
    color:   #656565;
}

.content-footer{
    width:504px;
    height: 45px;
    background-color: #F7F7F7;
    box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, 0.25);
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 15px;
}

.footer-box1{
    display: flex;
    align-items: center;
    font-size: 15px;
    justify-content: space-between;
    color: #FF4437;
    width: 112px;
}

span{
    font-size: 18px;
}

.footer-btn{
    font-size: 12px;
    border: none;
    background-color: #FF4437;
    height: 21px;
    color: white;
    width: 87px;
    border-radius: 2px;
    cursor: pointer;
}
.right-section{
    width:300px;
    height:100%;
    background-color:rgb(255, 255, 255);
    margin-top: 105px;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.15);
}

.right-head{
    width:300px;
    height:72px;
    /* border: 1px solid black; */
    background-image: url(image/backgrond.png);
    background-size: cover;
    image-orientation:unset;
    line-height:23PX;
    padding: 14px 27px;
    color: #FF4437;
}
.rightsection-infobox{
    width:300px;
    height: 71px;
    /* border: 1px solid black; */
    padding: 10px 14px;
    line-height: normal ;
    position:relative;
    border-bottom: 0.5px solid rgb(224, 223, 223);
}
.rightsection-infobox:hover{
    background-color: #FFF6F5;
}
.rightbox-heading{
    position: absolute;
    left: 74px;
    top: 5px;
    font-size: 14px;
}

.rightbox-heading:hover{
    color: #FF4437;
}

.rightbox-heading2{
    position: absolute;
    left: 74px;
    top: 25px;
    font-size:12px;
    color: rgb(88, 162, 247);
} 

.rightbox-time{
    position: absolute;
    left: 74px;
    top: 45px;
    font-size: 11px;
    color: #656565;
}










/* mobile nav  css */
.mob-nav{
    width: 100%;
    height: 100vh;
    background-color: #1c1c1c;
    color: white;
    text-align: center;
    display: none;
    position: absolute;
    margin-top: -1;
    z-index: 3;
}

.mob-list{
    padding: 44px;
}

.mob-link{
    color: white;
    font-size: 20px;
    font-weight: bold;
}

.mob-btn{
    display: none;
}







@media only screen and (max-width:1100px){

    body{
        overflow-x: hidden;
    }
    
    .topbox{
        display: none;
    }


    header{
        height: 56px;
    }
    .nav{
        margin-top: -31px;
    }

    .mob-nav{
        display: block;
        margin-left: -100%;
        transition: all 0.5s;
    }

    .mob-menu{
        margin-left: 0;
        position: absolute;
    }

    .mob-btn{
        display: block;
        margin-right: 15px;
        margin-left: 20px;
        cursor: pointer;
    }

    .logo{
        margin-left: o;
    }

  
    .creat-btn{
        display:none;
    }
    .center-nav{
        display: none;
    }

    .left-nav{
        display: block;
        margin-right: auto;
        display: flex;
        width: 0;
        align-items: center;
        height: 56px;
        justify-content: space-between;
    }

    .nav-box{
     width: 100%;
    }
    

    .left-section{
        display: none;
    }

    .right-section{
        display: none;
    }

    .content-box{
        width: 100%;
    }

    .center-top-box{
        margin-top: 10px;
    }

    .centerhead-line{
        width: 100%;
    margin-top: -30px;
    /* background: red; */
    margin-left: 0;
    height: 17px;
    z-index: 0;

    }
     
    .centerhead{
        width: 100%;
        margin-top: -13px;
    }

    .content-head{
        width: 100%;
    }

    .content-main{
        width: 100%;
    }

    .contentbox-center{
        width: 100%;
    }

    .content-footer{
        width: 100%;
    }

    .center-section{
        width: 100%;
    }
}

    </style>

@endsection

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