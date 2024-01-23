  {{-- <link rel="stylesheet" href="{{asset('css/header-footer.css')}}">  --}}


  <style>
    .allhead{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}



.topbar{
    width:100%;
    height:32px;
    background-color: white;
}


input[type=text]:focus {
    outline: none;
  }
.fav{
    height: 56px;
    width: 100%;
    background-color: #202F4F;
}

.topboxx{
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

.droppdown{
    margin-left:-2px;
}
#language{
    border: none;
    font-size: 12px;
    text-align:left;
    font-weight:600;
    font-family: 'Mukta Malar', sans-serif;
}



.topfist{
    display: flex;
    list-style: none;
}



.top-fist{
    padding: 0 0 0 39px;
}


.top-fink{
 color: #1c1c1c;
    font-size: 12px;
    text-decoration: none;
    text-align: center;
    font-weight:500;
}

.fav-box{
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

.search-bar{
    width:350px;
    height:32px;
    border-radius:2px;
    padding-left: 15px;
    font-size:12px;
    font-family: 'Mukta Malar', sans-serif;
    border:none;
}

.search-icon{
    /* background-color: #FF4437; */
    padding: 0 16px;
    margin-left: -33px;
    background-image: url('/img/searchicone.png');
    background-size:20px;
    background-position: 4px 6px;
    background-repeat: no-repeat;
}
.browse-butt{
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

.browse-butt:hover{
    background-color: #FF4437;
    color:white;
}

.creat-butt{
    width: 133px;
    height: 33px;

    border-radius: 5px;
    font-size: 14.5px;
    letter-spacing: 0.5px;
    border: none;
    color: white;
    background-color: #FF4437;
    font-family: 'Mukta Malar', sans-serif;
    cursor: pointer;
}



/* MOBILE fav CSS */
.mob-fav{
    width: 100%;
    height: 100vh;
    background-color: #1c1c1c;
    color: white;
    text-align: center;
    display: none;
    position: absolute;
    margin-top: -1;
}

.mob-fist{
    padding: 44px;
}

.mob-fink{
    color: white;
    font-size: 20px;
    font-weight: bold;
}

.mob-butt{
    display: none;
}

    </style>



  <div class="allhead">
    <header>
    <div class="topbar">
        <div class=topboxx>
            <div class="lefttop">
                <form class="droppdown" action="">
                    <select name="Language" id="Language">
                        <option value="English">English</option>
                        <option value="Tamil">Tamil</option>
                    </select>
                </form>

            </div>
            <div class="righttop">
                <ul class="topfist">
                    <li class="top-fist"><a class="top-fink" href="#">Product</a></li>
                    <li class="top-fist"><a class="top-fink" href="pricing.html">Pricing</a></li>
                    <li class="top-fist"><a class="top-fink" href="Contact.html">Contact Us</a></li>
                    <li class="top-fist"><a class="top-fink" href="Contact.html">Help</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="fav">
        <div class="fav-box">
            <div class="left-fav">
                <img class="mob-butt" src='{{asset("img/bar.png")}}' alt="" width="30px">
               
                <a href="{{ auth()->user() && auth()->user()->id === 1 ? route('adminHome') : route('home') }}">
                    
                    <img class="logo" src='{{asset("img/logo.png")}}' alt="logo" width="156px"></a>
            </div>

            <div class="center-fav">
                <input class="search-bar" type="text" placeholder="Search a Person"><span class="search-icon"><img
                        src="" alt=""></span>
                <a href="BROWSE PAGE.HTML"><button class=" browse-butt">Browse</button>
            </div>

            @if(auth()->check())
            <form method="post" action="{{route('logout')}}">
                @csrf
            <button type = 'submit' class="Creat-butt">Logout</button>
            </form>
            @else
           <a href="{{ route('login') }}"> <button class="Creat-butt" >Login</button></a>
            <a href="{{ route('register') }}"> <button class="Creat-butt" >Register</button></a>
            @endif

            <div class="right-fav"></div>
            <a href="pricing.html"><button class="Creat-butt">Create Memorial</button></a>
        </div>
    </div>
    <!-- mobile  fav   html -->
    <div class="mobile-fav">
        <ul class="mob-fav">
            <li class="mob-fist"><a class="mob-fink" href="">Product</a></li>
            <li class="mob-fist"><a class="mob-fink" href="pricing.html">Pricing</a></li>
            <li class="mob-fist"><a class="mob-fink" href="Contact.html">Contact Us</a></li>
            <li class="mob-fist"><a class="mob-fink" href="Contact.html">Help</a></li>
        </ul>
    </div>
    <!-- mobile  fav   html end -->
</header>
  </div>