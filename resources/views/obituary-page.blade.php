@extends('layouts.app')
@section('title','Obituary-Page')

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

.leftsection-head{
    width: 100%;
    height: 49px;
    background-color: rgb(255, 255, 255);
    display: flex;
    align-items: center;
}

.lefthead-box1{
    color: #FF4437;
    font-size: 16px;
    padding: 16px 15px 14px;
}
.lefthead-box2{
    color: #8f8e8e;
    font-size: 16px;
    padding: 16px 15px 14px;
}

.box4-rightsection{
    width: 380px;
}

.head-link1{
    color: #FF4437;
    font-size: 16px;
    font-weight: bold;
}
.head-link2{
    color: #8f8e8e;
    font-size: 16px;
    font-weight: bold;
}

.head-list{
    border-bottom: 3px solid #FF4437;
    padding: 8px 20px;
}

.leftsection-box1{
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: relative;
    padding: 12px;
    background: #ffe49e;
    border: 1px dashed #fab808;
}

.box1-img-box{
    border-radius: 2px;
    background-color: #202f4f;
    padding: 7px 10px;
    font-size: 14px;
    color: white;
    text-align: center;
    line-height: 1;

}

.box1-content-box{
    padding: 0 15px;
    line-height: 21px;
    white-space: normal;
    color: #333;
    font-size: 14px;
    font-weight: 500;
}



.box1-btn{
    width: 98px;
    background-color: #FF4437;
    font-size: 14px;
    color: white;
    border: navajowhite;
    height: 27px;
    border-radius: 2px;
    cursor: pointer;
}

.leftsection-box2{
    background-color: white;
    padding: 30px 40px;
    margin-top: 20px;
}

.leftsection-box3{
    font-size: 20px;
    padding: 0px 8px;
}

.leftsection-box4{
    background-color: white;
    padding: 70px 20px;
    text-align: center;
    color: #8f8e8e;
    line-height: 1.2;
}

.box3-btn{
    background-color: #FF4437;
    height: 22px;
    width: 90px;
    border: none;
    border-radius: 2px;
    color: white;
    margin-top: 6px;
    cursor: pointer;
}


.box4-rightsection{
    width: 380px;
}


.rightsection-box1{
padding: 24px 0px;
margin: 0px 0px 13px;
background-color: white;
display: flex;
justify-content: center;
align-items: center;
}

.rightsection-box1-line{
    width: 2px;
    height: 32px;
    background-color: #8f8e8e;
}


.box1-smallbox{
    text-align: center;
    width: 40%;
    line-height: 1.2;
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

.right-section-box2{
    width: 100%;
    /* height: 209px; */
    background-color: white;
    line-height: 1.3;
    padding: 15px 40px;
    font-size: 16px;
    border-bottom: 0.5px solid rgb(224, 223, 223);
}

.right-section-head2{
    margin-bottom: 15px;
}

.right-section-head1{
    margin-bottom: 15px;
}
.right-section-box3{
    height: 37px;
    width: 100%;
    background-color: white;
    padding: 10px;
    color: #FF4437;
    text-align: center;
    font-size: 14px;
}

.lastbox-rightsection{
    font-size: 14px;
    color: #8f8e8e;
    padding: 10px;
}


.right-section-box4{
    background-color: white;
    padding: 40px 20px;
    text-align: center;
    font-size: 16px;
    color: #8f8e8e;
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


    .leftsection-box1{
        display: block;
    }

    .box1-img-box{
        width: 78px;
        margin: auto;
        margin-bottom: 5px;
    }

    .box1-content-box{
        text-align: center;
    }

    .box1-btn{
        margin: auto;
        display: block;
        margin-top: 5px;
    }

    .leftsection-box2{
        padding: 20px 30px;
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
        <div class="box1">{{$obit->remembrance_day}}</div>




        <div class="box2">
            <div class="box2-contentbox1">
                <div class="text-box1">
                    <p> Birth<br><span>{{$obit->birth_date}}</span></p>
                </div>
                <img src="{{ asset('uploads/' . $obit->photo) }}" alt="no photo found" width="300px">
                <div class="text-box2">
                    <p>Death<br><span>{{$obit->death_date}}</span></p>
                </div>
            </div>
            <div class="box2-contentbox2">
                <p class="contentbox2-heading1">{{$obit->full_name}}</p>
                <button class="contentbox2-btn">Tribute</button>
                <p class="contentbox2-heading2">{{$obit->birth_place}},{{$obit->birth_country}}
                </p>
            </div>
            <div class="box2-contentbox3">
                <a href="card_page.html"><button class="tribute-btn"><img src='{{asset("img/flower.png")}}' alt="" width="20px">Tribute
                        Now</button></a>
                <a href="TRIBUTE PAGE.HTML"><button class="sendflowers-btn"><img src='{{asset("img/flower.png")}}' alt="" width="20px">Send
                        Flowers</button></a>
                        <a href="#" id="share-btn"><button class="share-btn"><img src='{{asset("img/share icone.png")}}' alt=""
                            width="20px">Share</button></a>
            </div>
        </div>



        <div class="box3">
            <ul class="box3-nav">
                <li class="box3-list"><a class="box3-link" href="Home page.html">Home</a></li>
                <li class="box3-list"><a class="box3-link" href="overview-page.html">Overview</a>
                </li>
                <li class="box3-list"><a class="box3-link" href="TRIBUTE PAGE.HTML">Tribute</a>
                </li>
                <li class="box3-list box3-list-active" ><a class="box3-link box3-link-active" href="Announcements_page.html">Announcements</a></li>
            </ul>
        </div>




        <div class="box4">
            <div class="box4-leftsection">
                <div class="leftsection-head">
                    <div class="lefthead-box1">
                        <ul>
                            <li class="head-list"><a class="head-link1" href="">Tearful tributes</a></li>
                        </ul>
                    </div>
                    <div class="lefthead-box">
                        <a class="head-link2" href="">Send Massage</a>
                    </div>
                </div>
                <div class="leftsection-box1">
                    <div class="box1-img-box">
                        <p>Tribute<br><span style="font-size: 24px; font-weight: bold; color: #fab808;">1</span></p>
                    </div>
                    <div class="box1-content-box">
                        
Here you can offer your grief to the deceased in words.
                    </div>
                    <div class="box1-btn-box">
                        <a href="card_page.html"><button class="box1-btn">Post Tribute</button></a>
                    </div>
                </div>
                <div class="leftsection-box2">
                    <p style="margin-bottom: 16px;"> Here is all information about the deceased person யாழ். ஏழாலை களவாடையைப் பிறப்பிடமாகவும், சுண்ணகம் சூறாவத்தை ”கோகிலவாசம்”, கொழும்பு எசக்கிமுத்து பிளேஸ், லண்டன் Pinner ஐ வதிவிடமாகவும் கொண்டிருந்த திலகவதி சிவசிங்கம் அவர்களின் 5ம் ஆண்டு நினைவஞ்சலி.</p>
                    <p style="margin-bottom: 16px;">யாழ். புலோலியைப் பிறப்பிடமாகவும், மருதங்கேணியை வசிப்பிடமாகவும் கொண்ட முருகன் திரவியம் அவர்கள் 02-08-2023 புதன்கிழமை அன்று காலமானார்.</p>
                    <p style="margin-bottom: 16px;">அன்னார், காலஞ்சென்றவர்களான முருகன் சிவக்கொழுந்து தம்பதிகளின் அன்பு மகனும், காலஞ்சென்ற வல்லி, லக்சுமி தம்பதிகளின் அன்பு மருமகனும்,</p>
                    <p style="margin-bottom: 16px;">காலஞ்சென்ற இராசேஸ்வரி அவர்களின் அன்புக் கணவரும்,</p>
                    <p style="margin-bottom: 16px;">வரதராசா, வசந்தராசா, மனோகரன், தர்சனா ஆகியோரின் பாசமிகு தந்தையும்</p>
                    <p style="margin-bottom: 16px;">பிருந்தா, பிரித்திகா, ஆகாஷ், அனுசன், டனுசியா, சஞ்சித், சஞ்சிகா, சஞ்சயன் ஆகியோரின் பாசமிகு பேரனும்,</p>
                    <p style="margin-bottom: 16px;"><b>அன்னாரின் இறுதிக்கிரியை 03-08-2023 வியாழக்கிழமை அன்று பருத்தித்துறை புலோலி மத்தி அவ்வொல்லையில் உள்ள அவரது இல்லத்தில் நடைபெற்று பி.ப 02:00 மணியளவில் சுப்பர்மடம் இந்து மயானத்தில் பூதவுடல் தகனம் செய்யப்படும்.</b></p>
                </div>
                <div class="leftsection-box3">Information Source: family</div>
                <div class="leftsection-box4">
                    <p>No Tributes Found <br>Be the first to post a tribute</p>
                    <button class="box3-btn">Post Tribute</button>
                </div>
        </div>
        <div class="box4-rightsection right-head">
            <div class="lefthead">
                <div class="lefthead-line"></div>
                <p style="margin-left: 10px;">SUMMARY</p>
            </div>
            <div class="right-section-box2">
                <p class="right-section-head1">{{$obit->birth_place}},{{$obit->birth_country}}
                    <br><span style="color: #8f8e8e; font-size: 14px;">Place of Birth</span>
                </p>
                <p class="right-section-head2"> Sri Lanka
                    <br>Toronto, Canada
                    <br><span style="color: #8f8e8e; font-size: 14px;">Lived Places</span>
                </p>
                <p class="right-section-head3">Christian
                    <br><span style="color: #8f8e8e; font-size: 14px;">Religion</span>
                </p>
            </div>
            <div class="right-section-box3">Know more about Cartoon Character</div>
            <div style="margin-top: 20px;" class="lefthead">
                <div class="lefthead-line"></div>
                <p style="margin-left: 10px;">PHOTOS</p>
            </div>
            <div class="right-section-box4">No Photos</div>
            <div style="margin-top: 20px;" class="lefthead">
                <div class="lefthead-line"></div>
                <p style="margin-left: 10px;">NOTICES</p>
            </div>
            <div class="lastbox-rightsection">Report Obituary</div>
        </div>
    </div>
    
    </div>

      <!-- model share screen -->
      <div class="main-body" id="share-screen">
        <div class="left"></div>
        <div class="share-box">
            <div class="heading-box1"><p>Post a Tribute(Message)</p>
                <a href="#"><img id="back-btn" src="image/cutt-icone.png" alt="" width="20px"></a>
            </div>
            <div class="icone-box">
                <div class="iconebox-box1">
                    <div class="small-box1"><a href=""><img src='{{asset("img/fb.png")}}' alt="" width="40px"><p>Facebook</p></a></div>
                    <div class="small-box1"><a href=""><img src='{{asset("img/insta.png")}}' alt="" width="30px"><p>Instagram</p></a></div>
                    <div class="small-box1"><a href=""><img src='{{asset("img/twiter.png")}}' alt="" width="30px"><p>Twitter</p></a></div>
                    <div class="small-box1"><a href=""><img src='{{asset("img/whatsapp icone.png")}}' alt="" width="30px"><p>whatsapp</p></a></div>

                </div>
                <div class="iconebox-box2">
                    <div class="small-box2"><a href=""><img src='{{asset("img/messenger.png")}}' alt="" width="30px"><p>Messenger</p></a></div>
                    <div class="small-box2"><a href=""><img src='{{asset("img/message.png")}}' alt="" width="30px"><p>Message</p></a></div>
                    <div class="small-box2"><a href=""><img src='{{asset("img/linked in.png")}}' alt="" width="30px"><p>Linkedin</p></a></div>

                </div>

            </div>
        </div>

        <div class="right"></div>

     </div>

</main>


@endsection