@extends('layouts.app')
@section('title','card-page')

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

.main-body{
 width: 100%;
 background-color: #898484;
 display: flex;
 justify-content: center;
 align-items: center;
 height: 107%;
 background-image: url(image/bacgroung-image.png);
 background-repeat: no-repeat;
 background-size:contain;
}

.left{
    height: 100%;
    width: 20%;
}

.content-box{
    width: 60%;
    background-color: white;
    margin-top: 140px;
    margin-bottom: 20px;
}

.heading-box1{
    padding: 10px 30px;
    background-color:white;
    text-align: left;
    font-size: 30px;
    color: #FF4437;
    display: flex;
    justify-content: space-between;
    align-items: center;
}


.heading-box2{
    background-color: #202F4F;
    padding: 20px 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.box2-heading-box1{
    display: flex;
    align-items: center;

}

.name-box{
    color: white;
    margin-left: 20px;
}

.box2-btn{
    background-color: #FF4437;
    color: white;
    height: 39px;
    width: 150;
    border: none;
    font-size: 17px;
    border-radius: 2px;
    cursor: pointer;
}

.heading-box3{
    padding: 10px 30px;
    font-size: 20px;
    background-color: #F1F1F1;
}

.card-box{
    background-color: white;
    padding: 10px;
    /* height: 621px; */
    /* background-color: #FF4437; */
    position: relative;
}
.card-box1{
     width: 100%;
    /* height: 49%; */
    display: flex;
    justify-content: space-between;
}

.card1{
    /* height: 100%; */
    width:32.7%;
    border: 1px solid #d0deff;
    background-color: #F2F6FF;
    text-align: center;
    padding: 14px 35px;
    line-height: 1.5;
    transition: all 0.5s;
    text-decoration: none;
    color: black;

}


.card-box2{
    width: 100%;
   /* height: 49%; */
   display: flex;
   justify-content: space-between;
   margin-top: 11px;
}

.card-heading{
    font-size: 14px;
    margin-top: 6px;
    color: #3d465c;
}

.card1:hover{
    box-shadow: 0 10px 11px rgb(214, 214, 214);
    margin-top:-7px;
    transition: all 0.5s;
}


.img1{
    width: 122px;
    }
    
    .img2{
      width: 89px;  
    }
    
    .img3{
        width: 123px;
        
    }
    
    .img4{
       width: 100px; 
    }
    
    .img5{
      width: 100px;  
    }
    
    .img6{
        width: 135px;
    }






.right{
    width: 20%;
    height: 100%;
}


@media only screen and (max-width:1450px){
    .left{
        display: none;
    }

    .right{
        display: none;
    }

    .content-box{
        width: 90%;
    }
}


@media only screen and (max-width:1000px){
    h2{
        font-size: 16px;
    }

    .card-heading{
        font-size: 12px;
    }
}

@media only screen and (max-width:786px){
 h2{
    font-size: 12px;
 }

 .card-heading{
    font-size: 9px;
 }

.img1{
width: 90px;
}

.img2{
  width: 71px;  
}

.img3{
    width: 98px;
    
}

.img4{
   width: 70px; 
}

.img5{
  width: 70px;  
}

.img6{
    width: 97px;
}


.content-box{
    margin-top: -100px;
}

}




@media only screen and (max-width:650px){

    .card1{
        padding:5px;
    }

    .card-box{
        padding: 5px;
    }

    .card-box2{
        margin-top: 2px;
    }

    .heading-box1{
        font-size: 12px;
        padding: 9px 10px ;
    }

    .heading-box2{
        padding: 9px 10px;
    }

    .box2-btn{
        display: none;
    }

    .img1{
        width: 90px;
        }
        
        .img2{
          width: 71px;  
        }
        
        .img3{
            width: 98px;
            
        }
        
        .img4{
           width: 70px; 
        }
        
        .img5{
          width: 70px;  
        }
        
        .img6{
            width: 97px;
        }
        

        .content-box{
            margin-top: -35px;
        }
}


@media only screen and (max-width:420px){

    h2{
        font-size: 8px;
    }

    .card-heading{
        font-size: 6px;
        margin-top: 0px;
    }

    .heading-box3{
        padding: 10px;
        font-size: 12px;
    }

    .img1{
        width: 45px;
        }
        
        .img2{
          width: 36px;  
        }
        
        .img3{
            width: 51px;
            
        }
        
        .img4{
           width: 39px; 
        }
        
        .img5{
          width: 39px;  
        }
        
        .img6{
            width: 53px;
        }
        

        .content-box{
            margin-top: -190px;
        }


}

</style>



@endsection







@section('content')
<div class="main-body">
    <div class="left"></div>
    <div class="content-box">
        <div class="heading-box1"><p>Post a Tribute (Letter)</p>
            <a href="TRIBUTE PAGE.HTML"><img src='{{asset("img/cutt-icone.png")}}' alt="" width="20px"></a>
        </div>
        <div class="heading-box2">
            <div class="box2-heading-box1">
                <img src='{{asset("img/photo.png")}}' alt="" width="70px">
                <div class="name-box">
                    <p style="font-size: 20px;">{{$obituary->full_name}}</p>
                    <p>{{ \Carbon\Carbon::parse($obituary->birth_date)->format('Y') }}-{{ \Carbon\Carbon::parse($obituary->death_date)->format('Y') }}</p>
                    <p>{{ $obituary->birth_place }},{{ $obituary->birth_country }}</p>
                </div>
            </div>
            <button class="box2-btn">Tribute</button>
        </div>
        <div class="heading-box3">Select Tribute Type</div>
        <div class="card-box">
            <div class="card-box1">
                <a class="card1" href="{{route('routeToPostCardPage',$obituary->id)}}"><div >
                    <img class="img1"  src='{{asset("img/card-img1.png")}}' alt="" width="112px">
                    <h2 style="margin-top: 10px;">Card</h2>
                    <p class="card-heading">Sending cards always shows how special a person was. Send a Tribute Card.</p>
                </div></a>
                <a  class="card1" href="{{route('routeToPostLightingPage',$obituary->id)}}"><div><img class="img2"  src='{{asset("img/card-img2.png")}}' alt="" width="89px">
                    <h2 style="margin-top: 10px;">Lighting of Candle</h2>
                    <p class="card-heading">Show your love and presence to mark your condolences.</p>
                </div></a>
                <a  class="card1" href="{{route('routeToPostWreathPage',$obituary->id)}}"><div>
                    <img class="img3"  src='{{asset("img/card-img3.png")}}' alt="" width="123px">
                    <h2 style="margin-top: 10px;">Wreath of Love</h2>
                    <p class="card-heading">Honour your loved one and show your last respect. They deserve this !!!</p>
                </div></a>

            </div>
            <div class="card-box2">
                <a  class="card1" href="{{route('routeToPostLetterPage',$obituary->id)}}"><div><img class="img4"  src='{{asset("img/card-img4.png")}}' alt="" width="100px">
                   <h2 style="margin-top: 10px;">Letter</h2>
                   <p class="card-heading">Write a letter of all things you forgot to say.. They will want to know.</p>
                </div></a>
                <a  class="card1" href="{{route('routeToPostTreasurePage',$obituary->id)}}"><div><img class="img5"  src='{{asset("img/card-img5.png")}}' alt="" width="100px">
                    <h2 style="margin-top: 10px;">Treasured Moments</h2>
                    <p class="card-heading">Images always speaks more than the words..Just share the photos here </p>
                </div></a>
                <a  class="card1" href="{{route('routeToPostMessagePage',$obituary->id)}}"><div><img class="img6"  src='{{asset("img/card-img6.png")}}' alt="" width="135px">
                    <h2 style="margin-top: 10px;">Message</h2>
                    <p class="card-heading">Words from Heart-Want to express your feelings? Send a message.</p>
                </div></a>

            </div>
        </div>
    </div>
    <div class="right"></div>
 </div>

@endsection