{{-- 
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

@endsection  --}}


@extends('layouts.app')

@section('title', 'post-card')

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
            background-image: url('{{asset('/img/bacgroung-image.png')}}');
            background-repeat: no-repeat;
            background-size: contain;
        }
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* background-color: rgba(0, 0, 0, 0.5); */
            background-image: url('{{asset('/img/library_back.jpg')}}');
            background-size: cover;
            background-position: center;
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
          
        }

        .modal-content ul li {
            cursor: pointer;
    margin-bottom: 10px; /* Adjust the value as needed for the desired spacing */
}


        .modal-close {
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 10px;
        }
        .left {
            height: 100%;
            width: 20%;
        }

        .content-box {
            width: 60%;
            background-color: white;
            margin-top: 15%;
            margin-bottom: 10%;
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


        .heading-box4 {
            padding: 10px 30px;
            font-size: 20px;
            line-height: 1.4;
            font-size: 20px;
            color: rgb(54, 54, 54);
            margin-top: 50px;
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

            .heading-box3 {
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
                <p>Post a Tribute (Letter)</p>
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
            <form method="post" action="{{ route('routeToSubmitCard', $obituary->id) }}">
                @csrf <!-- CSRF protection -->
                <div class="heading-box3">
                    <p>Choose a card design</p>
                    <p style="font-size: 14px;  color: #5e5e5e">Show your love and presence to mark your condolences.</p>

                    



                    






                </div>

                

                <div class="heading-box4">
                    <p>Tribute Message</p>
                    <p style="font-size: 14px;  color: #5e5e5e">Simply send a tribute message in your own words or select
                        from our library.</p>
                    </p>
                </div>
                {{-- <div class="heading-box5">
                    <textarea name="message" id="message" rows="5"
                        placeholder="Simply send a tribute message in your own words or select from our library."></textarea>
                    <div class="box5-smallbox">
                        <a class="smallbox-link1" href=""><img src='{{ asset('img/library-icone.png') }}'
                                alt="" width="20px">
                            <p style="margin-left: 10px;">Our Library</p>
                        </a>
                        <a class="smallbox-link1" href="#" onclick="clearText()"> Clear</a>
                    </div>
                    <p style="font-size: 12px; color: #5e5e5e;">Max 2000 characters allowed</p>
                </div> --}}


                <div class="heading-box5">
                    <textarea name="message" id="message" rows="5" placeholder="Simply send a tribute message in your own words or select from our library."></textarea>
                    <div class="box5-smallbox">
                        <a class="smallbox-link1" href="#" onclick="openLibraryModal()">
                            <img src='{{ asset('img/library-icone.png') }}' alt="" width="20px">
                            <p style="margin-left: 10px;">Our Library</p>
                        </a>
                        <a class="smallbox-link1" href="#" onclick="clearText()">
                            Clear
                        </a>
                    </div>
                    <p style="font-size: 12px; color: #5e5e5e;">Max 2000 characters allowed</p>
                </div>

                <div id="libraryModal" class="modal">
                    <div class="modal-content">
                        <span class="modal-close" onclick="closeLibraryModal()">&times;</span>
                        <p>Click on a statement to insert into the message:</p>
                        <ul>
                            <li onclick="insertText('I was saddened to hear that the beautiful person passed away. My thoughts are with you and your family')">I was saddened to hear that the beautiful person passed away. My thoughts are with you and your family</li>
                            <hr>
                            
                            <li onclick="insertText('We are sorry for your loss, was such a great person, the memories will live forever with us.')">We are sorry for your loss, was such a great person, the memories will live forever with us.</li>
                            <hr>
                            <li onclick="insertText('I know too well of the devastation, hurt and tragedy that this will inevitably cause.')">I know too well of the devastation, hurt and tragedy that this will inevitably cause.</li>
                            <hr>
                            <li onclick="insertText('Anyone can be forgotten but not you who choose a life of selflessness and generosity')">Anyone can be forgotten but not you who choose a life of selflessness and generosity</li>
                            <hr>
                            <li onclick="insertText('Death is something all of us are bound to face. Truly, we will miss you always. However, have no worries we will meet you someday.')">Death is something all of us are bound to face. Truly, we will miss you always. However, have no worries we will meet you someday.</li>
                            <hr>
                            <li onclick="insertText('I am thankful to have shared memories with you. I will miss all of them truly and your impact on our family.')">I am thankful to have shared memories with you. I will miss all of them truly and your impact on our family.</li>
                            <hr>
                            <li onclick="insertText('Our hearts are filled with sadness and tears but our memories are filled with smiles and laughter of the good times we shared over the years')">Our hearts are filled with sadness and tears but our memories are filled with smiles and laughter of the good times we shared over the years</li>
                            <hr>
                            <li onclick="insertText('Grief can be so hard, but our special memories help us cope. Remembering you and your loved one today and always')">Grief can be so hard, but our special memories help us cope. Remembering you and your loved one today and always</li>
                            <hr>
                        </ul>
                    </div>
                </div>

                <div id="previewModal" class="modal">
                    <div class="modal-content">
                        <span class="modal-close" onclick="closePreviewModal()">&times;</span>
                        <h2>Preview</h2>
                        <!-- Preview content will be dynamically added here -->
                        <div id="previewContent"></div>
                    </div>
                </div>



                <div class="heading-box6">
                    <p>Tribute by</p>
                    <p style="font-size: 14px; color: #5e5e5e;">Choose how you want your name to appear on the tribute.</p>
                    <input type="text" id="name" name="name" placeholder="Your Name">
                    <input type="text" id="relation" name="relation" placeholder="Organization or Address or Relation">
                    <input type="text" id="country" name="country" placeholder="Country">

                </div>
                <div class="heading-box7">
                    <div class="box7-smallbox1">
                        
                       
<button type="button" class="btn" onclick="showPreview()">Preview</button>

<a href="{{route('routeToTributeModal',$obituary->id)}}"><button type="button" class="btn2">Change Tribute Type</button></a>
                    </div>
                    <div class="box7-smallbox2">
                        <a class="box7-link" href="{{route('routeToClickedObituary',$obituary->id)}}">
                            <p>Back</p>
                        </a>
                        <button type="submit" class="btn3">Continue</button>
                    </div>
            </form>
        </div>

    </div>
    <div class="right"></div>
    </div>

    <script>

function showPreview() {
       
        var formData = {
            message: document.getElementById('message').value,
            name: document.getElementById('name').value,
            relation: document.getElementById('relation').value,
            country: document.getElementById('country').value,
        };
        populatePreview(formData);

// Display the preview modal
document.getElementById('previewModal').style.display = 'block';
}
function populatePreview(formData) {
        var previewContent = '<p><strong>Tribute Message:</strong> ' + formData.message + '</p>';
        previewContent += '<p><strong>Tribute by:</strong> ' + formData.name + '</p>';
        previewContent += '<p><strong>Relation:</strong> ' + formData.relation + '</p>';
        previewContent += '<p><strong>Country:</strong> ' + formData.country + '</p>';

        // Insert the preview content into the modal
        document.getElementById('previewContent').innerHTML = previewContent;
    }

    // Function to close the preview modal
    function closePreviewModal() {
        document.getElementById('previewModal').style.display = 'none';
    }

function openLibraryModal() {
        var modal = document.getElementById('libraryModal');
        modal.style.display = 'flex';
    }

    function closeLibraryModal() {
        var modal = document.getElementById('libraryModal');
        modal.style.display = 'none';
    }

    function insertText(text) {
        var messageTextarea = document.getElementById('message');
        messageTextarea.value += text;
        closeLibraryModal(); // Close the modal after inserting text
    }

function clearText(){
    var messageTextarea = document.getElementById('message');
    messageTextarea.value = '';
}




    </script>


@endsection
