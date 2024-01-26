@extends('layouts.app')

@section('title','post-letter')

@section('internal-css')
<style>

.modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        .modal-close {
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 10px;
        }

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
    background-color: #898989;
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
    margin-top: 16%;
    margin-bottom: 10%;
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
    line-height: 1.4;
    font-size: 20px;
    color: rgb(54, 54, 54);
}

.heading-box4{
    padding: 10px 30px;
    font-size: 20px;
    line-height: 1.4;
    font-size: 20px;
    color: rgb(54, 54, 54);
    margin-top: 50px;
}

input[type=text]:focus{
    outline: none;
}

#title{
    width: 100%;
    padding: 15px;
    border: 0.5px solid #d3d3d3;
}

.heading-box5{
    padding: 10px 30px;
    font-size: 20px;
    line-height: 1.4;
    font-size: 20px;
    color: rgb(54, 54, 54);
}

#letter-body{
    width: 100%;
    border: 0.5px solid #d3d3d3;
    outline: none;
}

.heading-box6{
    padding: 10px 30px;
    font-size: 20px;
    line-height: 1.4;
    font-size: 20px;
    color: rgb(54, 54, 54);
}

#Signature{
    width: 100%;
    border: 0.5px solid #d3d3d3;
    outline: none;
    padding: 15px;
}

.heading-box7{
    padding: 10px 30px;
    font-size: 20px;
    line-height: 1.4;
    font-size: 20px;
    color: rgb(54, 54, 54);
}

#name{ 
    width: 100%;
    border: 0.5px solid #d3d3d3;
    outline: none;
    padding: 15px;
}

#relation{
    width: 100%;
    border: 0.5px solid #d3d3d3;
    outline: none;
    padding: 15px;
    margin-top: 10px;
}

.heading-box8{
    padding: 10px 30px;
    display: flex;
    justify-content: space-between;

}

.btn{
    padding: 10px 30px;
    border: none;
    border-radius: 2px; 
    color: #5e5e5e;
    cursor: pointer;
}

.btn:hover{
    background-color: #FF4437;
    color: white;
}

.btn2{
    padding: 10px 30px;
    border: none;
    border-radius: 2px;
    color: #5e5e5e;
    cursor: pointer;
    margin-left: 10px;
}

.btn2:hover{
    background-color: #FF4437;
    color: white;
}

.box8-smallbox2{
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.btn3{
    padding: 10px 30px;
    border: none;
    border-radius: 2px;
    color: #ffffff;
    cursor: pointer;
    background-color: #FF4437;
}

.box8-link{
    text-decoration: none;
    font-size: 16px;
    margin-right: 40px;

}


.right{
    width: 20%;
    height: 100%;
    
}



@media only screen and (max-width:1024px){

    body{
        overflow-x: hidden;
    }
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


@media only screen and (max-width:700px){
    .heading-box8{
        display: block;
        text-align: center;
    }

    .box8-smallbox2{
        justify-content: center;
        margin-top: 20px;
    }
}


@media only screen and (max-width:550px){
    .box2-btn{
        display: none;
    }

    .heading-box1{
        font-size: 12px;
        padding: 9px 10px ;
    }

    .heading-box2{
        padding: 9px 10px;
    }

    .btn{
        padding: 10px;
    }

    .btn2{
        padding: 10px;
    }

}@media only screen and (max-width:360px){
    .main-body{
        height: 140%;
    }
}




    </style>
@endsection

@section('content')


<div class="main-body">
    <div class="left"></div>
    <div class="content-box">
        <div class="heading-box1"><p>Post a Tribute (Letter)</p>
            <a href="card_page.html"><img src='{{asset("img/cutt-icone.png")}}' alt="" width="20px"></a>
        </div>
        <div class="heading-box2">
            <div class="box2-heading-box1">
                <img src="{{ asset('uploads/' . $obituary->photo) }}" alt="" width="70px">
                <div class="name-box">
                    <p style="font-size: 20px;">{{$obituary->full_name}}</p>
                    <p>{{ \Carbon\Carbon::parse($obituary->birth_date)->format('Y') }}-{{ \Carbon\Carbon::parse($obituary->death_date)->format('Y') }}</p>
                    <p>{{$obituary->birth_place}},{{$obituary->birth_country}}</p>
                </div>
            </div>
            <a href="TRIBUTE PAGE.HTML"><button class="box2-btn">Tribute</button></a>
        </div>
        <form method="POST" action="{{ route('routeToSubmitLetter', $obituary->id) }}">
            @csrf
        <div class="heading-box3">
            <p>Choose a template</p>
            <p style="font-size: 14px;  color: #5e5e5e">Write a letter of all things you forgot to say.. They will want to know.</p>
        </div>
        <div class="heading-box4">
            Letter Title
            <input type="text" name="letter_title" id="letter_title" placeholder="My Last Letter to you">
        </div>
        <div class="heading-box5">Letter Body
            <textarea id="letter_body" name="letter_body"  rows="7" placeholder="We are sorry for your loss, was such a great person, The memories will live forever with us."></textarea>
            <p style="font-size: 12px;  color: #5e5e5e">Max 2000 characters allowed</p>
        </div>
        <div class="heading-box6">Signature Title
            <input type="text" id="signature_title" name="signature_title" placeholder="Your Love">
        </div>
        <div class="heading-box7">Letter Form
            <input type="text" id="name" name="name" placeholder="Your Name">
            <input type="text" id="relation" name="relation" placeholder="Organization or Relation">

        </div>

        <div id="previewModal" class="modal">
            <div class="modal-content">
                <span class="modal-close" onclick="closePreviewModal()">&times;</span>
                <h2>Preview</h2>
                <!-- Preview content will be dynamically added here -->
                <div id="previewContent"></div>
            </div>
        </div>

        <div class="heading-box8">
            <div class="box8-smallbox1">
                <button type="button" class="btn" onclick="showPreview()">Preview</button>
                <a href="{{route('routeToTributeModal',$obituary->id)}}"><button type="button" class="btn2">Change Tribute Type</button></a>
            </div>
            <div class="box8-smallbox2">
                <a class="box8-link" href="{{route('routeToClickedObituary',$obituary->id)}}"><p>Back</p></a>
                <a href="continue_page.html"><button class="btn3">Continue</button></a>
            </div>
        </div>
        
    </form>

 </div>
 <div class="right">
</div>
</div>

<script>
    function showPreview()
    {
        var formData = {
            letter_title: document.getElementById('letter_title').value,
            letter_body: document.getElementById('letter_body').value,
            signature_title: document.getElementById('signature_title').value,
            name: document.getElementById('name').value,
           relation: document.getElementById('relation').value,
        };
        populatePreview(formData);

        //Display the preview modal
        document.getElementById('previewModal').style.display = 'block';

    }

    function populatePreview(formData){
        var previewContent = '<p> <strong> Letter Title: </strong>' + formData.letter_title + '</p>';
        previewContent += '<p> <strong> Letter Body: </strong>' + formData.letter_body + '</p>';
        previewContent += '<p> <strong> Signature Title: </strong>' + formData.signature_title + '</p>';
        previewContent += '<p><strong>Name:</strong> ' + formData.name + '</p>';
        previewContent += '<p><strong>Relation:</strong> ' + formData.relation + '</p>';

         // Insert the preview content into the modal
       document.getElementById('previewContent').innerHTML = previewContent;
    }

    function closePreviewModal() {
       document.getElementById('previewModal').style.display = 'none';
   }

</script>

@endsection