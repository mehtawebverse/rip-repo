
{{-- <link rel="stylesheet" href="{{asset('css/header-footer.css')}}">  --}}


<style>

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

    </style>


    <!-- TOPWAR   HTML -->
    <div class="topwar">
        <div class=topbox>
            <div class="lefttop">
                <form class="dropdown" action="">
                    <select name="Language" id="Language">
                        <option value="English">English</option>
                        <option value="Tamil">Tamil</option>
                    </select>
                </form>

            </div>
            <div class="righttop">
                <ul class="toplist">
                    <li class="top-list"><a class="top-link" href="#">Product</a></li>
                    <li class="top-list"><a class="top-link" href="#">Pricing</a></li>
                    <li class="top-list"><a class="top-link" href="#">Contact Us</a></li>
                    <li class="top-list"><a class="top-link" href="#">Help</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- TOWAR   HTML END -->


    <!-- NAVBAR     HTML -->
    <div class="nav">
        <div class="nav-box">
            <div class="left-nav">
                <img class="mob-btn" src="{{asset('img/bar.png')}}" alt="" width="30px">
                <a href="#"><img src="{{asset('img/logo.png')}}" alt="logo" width="156px"></a>
            </div>
            <div class="center-nav">
                <input class="search-war" type="text" placeholder="Search a Person"><span class="search-icone"><img
                        src="" alt=""></span>
                <a href="#"><button class=" browse-btn">Browse</button></a>
            </div>
            <div class="right-nav"></div>
            <a href="#"><button class="Creat-btn">Create Memorial</button></a>


            @if (auth()->check())
            <form method = 'POST' action="{{ route('logout') }}">
                @csrf
                <button class="Creat-btn">Logout</button></a>
            </form>
                @else
                <a href="{{route('login')}}"><button class="Creat-btn">Login</button></a>
                <a href="{{route('register')}}"><button class="Creat-btn">Register</button></a>
                
            @endif



        </div>
    </div>
    <!-- NAVBAR   HTML  END -->

    <!-- mobile  nav   html -->
    <div class="mobile-nav">
        <ul class="mob-nav">
            <li class="mob-list"><a class="mob-link" href="#">Product</a></li>
            <li class="mob-list"><a class="mob-link" href="#">Pricing</a></li>
            <li class="mob-list"><a class="mob-link" href="#">Contact Us</a></li>
            <li class="mob-list"><a class="mob-link" href="#">Help</a></li>
        </ul>
    </div>
    <!-- mobile  nav   html end -->



