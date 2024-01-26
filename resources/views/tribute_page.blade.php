@extends('layouts.app')
@section('title','Tribute Page')

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
    position:fixed;
    z-index:1 ;
    top: 0;
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
    background-position: 4px 6px;
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
    width: 100%;
    background-color:#F1F1F1;
    position: absolute;
    
}

.content-box{
    width: 1034px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    background-color:#F1F1F1;

}

.box1{
        width: 100%;
        background-color: white;
        margin-top: 108px;
        font-size: 24px;
        padding: 14px 26px;
        font-weight: 700;
        text-align: center;
   }
    


   /* box2   css */
   .box2{
    width: 100%;
    background-color: #1c1c1c;
    padding: 30px;
   }

   .box2-contentbox1{
    width: 100%;
    display:flex;
    /* border: 1px solid white; */
    color: white;
    justify-content: center;
    align-items: center;
   }
   .text-box1{
    text-align: center;
    margin-right: 100px;
   }
   
   .text-box2{
    text-align: center;
    margin-left: 100px;
   }

   .box2-contentbox2{
    width: 100%;
    text-align: center;
    /* border: 1px solid white; */
    padding: 16px 52px;
    color: white;
   }

   .contentbox2-heading1{
    font-size: 29px;
    font-weight: 600;
    color: #fab808;
   }

   .contentbox2-btn{
    width: 89px;
    font-size: 18px;
    color: #fab808;
    background: none;
    border: 1px solid #202F4F;
    border-radius: 2px;
   }

   .contentbox2-heading2{
    font-size: 16px;
    margin-top: 5px;
   }

   .box2-contentbox3{
    width: 100%;
    /* border: 1px solid white; */
    display:flex;
    padding: 12px 19px;
    justify-content: center;
    align-items: center;
   }

   .tribute-btn{
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 8px 30px;
    font-size: 16px;
    line-height: 20px;
    border: none;
    width: 178px;
    cursor: pointer;
   }

   .sendflowers-btn{
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 8px 30px;
    font-size: 16px;
    line-height: 20px;
    border: none;
    background-color: #FF4437;
    color: white;
    cursor: pointer;
   }

   .share-btn{
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 8px 30px;
    font-size: 16px;
    line-height: 20px;
    border: none;
    width: 177px;
    cursor: pointer;
   }

    /* BOX2   CSS END */ 


    /* BOX3    CSS  */
   .box3{
    width: 100%;
    height: 50px;
    background-color: #202F4F;
    display: flex;
    align-items: center;
    justify-content: space-between;
   }
   

   .box3-nav{
    display: flex;
    width: 100%;
    align-items: center;
    justify-content: space-between;
   }
   
   .box3-list{
    width: 259px;
    text-align: center;
    height: 48px;
    padding: 9px;
   }

   .box3-link{
    color: white;
    font-size: 16px;
   }
   
   .box3-link-active{
    color: #fab808;
   }

   .box3-list-active{
    border-top: 2px solid #fab808;
   }
   /* BOX3   CSS */


   /* BOX4  CSS */

.box4{
    width: 100%;
    background-color: #F1F1F1;
    margin-top: 20px;
    display: flex;
    justify-content: space-between;
}

.box4-leftsection{
    width: 630px;
    background-color: #F1F1F1;

}
 

.lefthead-line{
    height: 46px;
    width: 5px;
    background: #fab808;
    
}

.lefthead{
    width:100%;
    height:48px;
    background-color: white;
    padding:0 44px 0 0px;
    /* box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.10); */
    text-align:left;
    display: flex;
    border-bottom: 3px solid rgb(224, 223, 223);
    font-size: 16px;
    align-items: center;
    font-weight: 600;
}


.left-sectio-box2{
    width: 100%;
    height: 99px;
    padding: 20px;
    position: relative;
    background-color: white;
}

#submit{
    width: 100%;
    min-height: 56px;
    border-radius: 4px;
    background-color: #fcfcfc;
    border: solid 1px #d2d2d2;
    display: inline-block;
    padding: 0 12px 0 25px;
    max-width: 100%;
    position: relative;
}

.left-sectio-btn{
    position: absolute;
    right: 29px;
    top: 30px;
    width: 137px;
    height: 35px;
    background-color: #FF4437;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
}

.left-sectio-box3{
    width: 100%;
    padding: 15px 20px 0px;
    background-color: rgb(0, 0, 0);
    margin-top: 20px;
    display: flex;
    justify-content: space-between;
    align-items:center;
}

.box4-leftsection-text{
    color: white;
    text-align: left;
}

.text-head{
color: #8f7373;
font-size: 19px;
font-weight: 500;
}

.text-head2{
    margin-top: 0px;
    font-size: 14px;
    margin-left: 32px;
}



.box4-rightsection{
    width: 380px;
    background-color:#F1F1F1;
}


.right-section-box2{
    width: 100%;
    /* height: 209px; */
    background-color: white;
    line-height: 1.3;
    padding: 15px 40px;
    font-size: 16px;
    border-bottom: 0.5px solid rgb(224, 223, 223);
}

.right-section-box3{
    width: 100%;
    background-color: white;
    padding: 10px;
    color: #FF4437;
    text-align: center;
    font-size: 14px;
}

.right-section-head1{
    margin-bottom: 15px;
}

.right-section-head2{
    margin-bottom: 15px;
}

.right-section-box4{
    width: 100%;
    height: 50px;
    background-color: white;
    margin-top: 20px;
}

.right-section-box5{
    width: 100%;
    background-color: white;
}

.right-section-box6{
    font-size: 14px;
    padding: 5px 0px;
    color: #8f8e8e;
}
.leftsection-box2{
    background: #ffedeb;
    padding: 10px;
    border: 5px solid #ffc9c5;
    display: flex;
    align-items: center;
    position: relative;

}
.leftsection-card-box{
    padding: 5px;
    font-size: 14px;
    margin-left: 15px;
    margin-top: -9px;
}

.card-btn{
    height: 33px;
    width: 112px;
    border-radius: 2px;
    border: none;
    background-color: #bc095d;
    color: white;
    margin-top: 10px;
}

.card-shape{
    position: absolute;
    right: 30;
    top: -5px;
}

.white-card{
    border: 5px solid #e3e3e3;
    background-color: white;
}






/* FOOTER    CSS */
footer{
    width: 100%;
    height: 111px;
    background-color: #202F4F;
    margin-top: 22px;
} 

.footer1{
    width: 1034px;
    height: 65px;
    margin: auto;
    border-bottom: 1px solid #47536d;
    display: flex;
    justify-content: center;
    align-items: center;
}

.footer2{
  width: 100%;
  height: 46px;
  display: flex;
  justify-content: center;
  align-items: center;
  color: white;
  background-color: #1a2640;
  font-size: 14px;
}

.footer-nav{
 display: flex;
 list-style: none;
 align-items: center;
}

.footer-list{
   padding: 0px 60px;
}

.footer-link{
    color: white;
    font-size: 14px;

}
input[type=text]:focus {
    outline: none;
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


    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box  ;
    }

    body{
        overflow-x: hidden;
    }

    .topbox{
        display: none;
    }


    header{
        height: 56px;
        position: fixed;
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

    .content-box{
        width: 100%;
    }

    .box1{
        margin-top: 55px;
    font-size: 15px;
    padding: 10px 21px;
    font-weight: 600;
    }

    .box2-contentbox1{
        /* display: block; */
        margin: auto;
        position: relative;
    }

    .text-box1{
        position: absolute;
    left: 0;
    bottom: -146;
    }

    .text-box2{
        position: absolute;
    right: 0;
    margin-top: 540px;
    }

    .box2-contentbox2{
        padding: 12px 0px;
    }

    .contentbox2-heading2{
        margin-top: 76px;
    }

    .box2-contentbox3{
        padding: 12px 0px;
    }

    .tribute-btn{
        padding: 0px 3px;
        font-size: 13px;
        height: 35px;
        width: 97px;
    }
    
    .share-btn{
        padding: 6px 15px;
        font-size: 13px;
        width: 96px;
        height: 35px;
    }

    .sendflowers-btn{
        padding: 8px 6px ;
        font-size:13px ;
        width: 112px;
    }

    .box4{
        display: block;
    }

    .box4-leftsection{
        width: 100%;
    }

    .box4-rightsection{
        width: 100%;
    }

    .right-head{
        margin-top: 30px;
    }

    .box3-link{
        font-size: 13px;
    }

    .left-sectio-btn{
        width: 117px;
        font-size: 12px;
    }

     /* FOOTER CSS */

    
     .footer1{
        width: 100%;
     }
 
     .footer-list{
         padding: 0 6px;
     }

     .footer-link{
        font-size: 12px;
     }
}





/* model share screen */


.main-body{
    width: 100%;
    background-color: #00000057;
    justify-content: center;
    align-items: center;
    height: 100vh;
    display: none;
    position: absolute;
    top: 0%;
   }
   
   .left{
       height: 100%;
       width: 20%;
   }
   
   .share-box{
       width: 60%;
       background-color: white;
       /* margin-bottom: 318px; */
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
       border-bottom: 1px solid #d3d3d3;
   }
   
   .icone-box{
       padding: 20px 60px;
   }
   
   .iconebox-box1{
       display: flex;
       justify-content: space-between;
       align-items: center;
   }
   
   a{
       text-decoration: none;
       color: #5e5e5e;
   }
   
   .small-box1{
       text-align: center;
   }
   
   .iconebox-box2{
       display: flex;
       justify-content: space-between;
       align-items: center;
   }
   
   
   .small-box2{
       text-align: center;
       padding: 5% 10%;
   }
   
   
   
   .right{
       width: 20%;     
       height: 100%;
       
   }
   
   
   @media only screen and (max-width:1024px){
       .left{
           display: none;
       }
   
       .right{
           display: none;
   
       }
   
       .share-box{
           width: 90%;
       }
   }
   
   
   @media only screen and (max-width:650px){
       .heading-box1{
           font-size: 20px;
       }
   
       .small-box2{
           padding: 5% 8%;
       }
   }
   
   
   
   
   @media only screen and (max-width:550px){
       .heading-box1{
           font-size: 14px;
       }
   
       .small-box2{
           padding: 5% 6%;
       }
   
       .icone-box{
           padding: 20px;
       }
   
       a{
           font-size: 14px;
       }
   
   }




    </style>

    @endsection

    @section('content')
    <main>

    <div class="content-box">

      




        <div class="box1">{{$obituary->remembrance_day}}</div>




        <div class="box2">
            <div class="box2-contentbox1">
                <div class="text-box1">
                    <p> Birth Date<br><span>{{$obituary->birth_date}}</span></p>
                </div>
                <img src="{{ asset('uploads/' . $obituary->photo) }}" alt="" width="300px">
                <div class="text-box2">
                    <p> Death Date<br><span>{{$obituary->death_date}}</span></p>
                </div>
            </div>
            <div class="box2-contentbox2">
                <p class="contentbox2-heading1">{{$obituary->full_name}}</p>
                <button class="contentbox2-btn">Tribute</button>
                <p class="contentbox2-heading2">{{$obituary->birth_place}},{{$obituary->birth_country}}
                   
                </p>
            </div>
            <div class="box2-contentbox3">
                <a href="{{route('routeToTributeModal',$obituary->id)}}"><button class="tribute-btn"><img src="{{asset("img/flower.png")}}" alt="" width="20px">Tribute
                        Now</button></a>
                <a href="TRIBUTE PAGE.HTML"><button class="sendflowers-btn"><img src="{{asset("img/flower.png")}}" alt="" width="20px">Send
                        Flowers</button></a>
                <a href="#" id="share-btn"><button class="share-btn"><img src="{{asset("img/share icone.png")}}" alt=""
                            width="20px">Share</button></a>
            </div>
        </div>



        <div class="box3">
            <ul class="box3-nav">
                <li class="box3-list"><a class="box3-link" href="{{route('home')}}">Home</a></li>
                <li class="box3-list"><a class="box3-link" href="overview-page.html">Overview</a></li>
                <li class="box3-list box3-list-active"><a class="box3-link box3-link-active" href="{{route('routeToTributePage',$obituary->id)}}">Tribute</a>
                </li>
                <li class="box3-list"><a class="box3-link" href="Announcements_page.html">Announcements</a></li>
            </ul>
        </div>




        <div class="box4">
            <div class="box4-leftsection">
                <div class="lefthead">
                    <div class="lefthead-line"></div>
                    <p style="margin-left: 10px;">RECENT POST</p>
                </div>
                <div class="left-sectio-box2">
                   
                    <a href=""><button class="left-sectio-btn">Post Your Tribute</button></a>
                </div>
                {{-- <div class="left-sectio-box3">
                    <div class="box4-leftsection-text">
                        <p class="text-head">Tribute in light</p>
                        <p class="text-head2"> In Peace at the feet of the lord.<br>
                            <span style="color: #8f7373; font-size: 16px;">Cartoon Charater</span><span  style="color: #8f7373; font-size: 14px;">
                                <br>Neighbor</span>
                                <span style="color: #8f7373; font-size: 10px;">
                                    <br>Date and time</span></p>
                    </div>
                    <img src="{{asset("img/candle.png")}}" alt="" width="150">
                </div>       --}}

                @if($obituary->tributes->count()>0)
                @foreach ($obituary->tributes as $tribute )

                
                <div class="left-sectio-box3">
                    <div class="box4-leftsection-text">
                        <p class="text-head">Tribute in light</p>
                        <p class="text-head2"> {{$tribute->message}} <br>
                            <span style="color: #8f7373; font-size: 16px;">{{$tribute->name}}</span><span  style="color: #8f7373; font-size: 14px;">
                                <br>{{$tribute->relation}}</span>
                                <span style="color: #8f7373; font-size: 10px;">
                                    <br>{{$tribute->created_at}}</span></p>
                    </div>
                             @foreach ($tribute->photos as $photo )
                    <img src="{{ asset('uploads/tribute_photos/' . $photo->path) }}"  alt="" width="150">
              
                            @endforeach
                        </div> 
                @endforeach 
                @else
                <p>No Tributes Found <br>Be the first to post a tribute</p>
                @endif

            </div>




            <div class="box4-rightsection">
                <div class="lefthead right-head">
                    <div class="lefthead-line"></div>
                    <p style="margin-left: 10px;">SUMMARY</p>
                </div>
                <div class="right-section-box2">
                    <p class="right-section-head1">{{$obituary->birth_place}}
                        <br><span style="color: #8f8e8e; font-size: 14px;">Birth Place</span></p>
                    <p class="right-section-head2">
                        <br>{{$obituary->lived_places}}
                        <br><span style="color: #8f8e8e; font-size: 14px;">Lived Places</span></p>
                    <p class="right-section-head3">{{$obituary->religion}}
                        <br><span style="color: #8f8e8e; font-size: 14px;" >Religion</span></p>
                </div>
                <div class="right-section-box3">Know more about {{$obituary->full_name}}</div>
                <div class="right-section-box4">
                    <div class="lefthead">
                        <div class="lefthead-line"></div>
                        <p style="margin-left: 10px;">NOTICES</p>
                    </div>
                </div>
                <div class="right-section-box5">
                    <div class="leftsection-box2">
                        <img src="{{asset("img/im.png")}}" alt="">
                        <div class="leftsection-card-box">
                            <p style="color: #bc095d; font-size: 19px;;"> மரண அறிவித்தல்</p>
                            <img style="" src="{{asset("img/calender.png")}}" alt="">
                            <p
                                style="    margin-left: 20px;margin-top: -17px; font-family: Arial, Helvetica, sans-serif;">
                                Wed, 05 Jul, 2023</p>
                            <a href="Obituary_page.html"><button class="card-btn">View Obituary</button></a>
                            <img class="card-shape" src="{{asset("img/card-shape.png")}}" alt="">

                        </div>
                    </div>
                </div>
                <div class="right-section-box6">Report Obituary</div>
            </div>
        </div>
    </div>


            <!-- model share screen -->
            <div class="main-body" id="share-screen">
                <div class="left"></div>
                <div class="share-box">
                    <div class="heading-box1"><p>Post a Tribute(Message)</p>
                        <a href="#"><img id="back-btn" src="{{asset("img/cutt-icone.png")}}" alt="" width="20px"></a>
                    </div>
                    <div class="icone-box">
                        <div class="iconebox-box1">
                            <div class="small-box1"><a href=""><img src="{{asset("img/fb.png")}}" alt="" width="40px"><p>Facebook</p></a></div>
                            <div class="small-box1"><a href=""><img src="{{asset("img/insta.png")}}" alt="" width="30px"><p>Instagram</p></a></div>
                            <div class="small-box1"><a href=""><img src="{{asset("img/twiter.png")}}" alt="" width="30px"><p>Twitter</p></a></div>
                            <div class="small-box1"><a href=""><img src="{{asset("img/whatsapp icone.png")}}" alt="" width="30px"><p>whatsapp</p></a></div>
        
                        </div>
                        <div class="iconebox-box2">
                            <div class="small-box2"><a href=""><img src="{{asset("img/messenger.png")}}" alt="" width="30px"><p>Messenger</p></a></div>
                            <div class="small-box2"><a href=""><img src="{{asset("img/message.png")}}" alt="" width="30px"><p>Message</p></a></div>
                            <div class="small-box2"><a href=""><img src="{{asset("img/linked in.png")}}" alt="" width="30px"><p>Linkedin</p></a></div>
        
                        </div>
        
                    </div>
                </div>
        
                <div class="right"></div>
        
             </div>
              <!-- model share screen -->
    </main>
              

    @endsection