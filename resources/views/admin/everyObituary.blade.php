@extends('layouts.app')

@section('full_name','All Obituaries')

@section('content')





<main>
    <section>
        <div class="container">
            <h1>All obits</h1>

            @if($list->count()>0)
                <table class="obit-table"
                id="tableId">
                    <thead>
                        <tr>
                            <th>full_name</th>
                            <th>remembrance_day</th>
                            <th>profession</th>
                            <th>photo</th>
                            <th>birth_date</th>
                            <th>death_date</th>
                            <th>birth_place</th>
                            <th>lived_places</th>
                            <th>Actions</th>
                            <th>status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list as $obit)
                            <tr class="obit-item" id="obit-{{$obit->id}}">
                                <td class="obit-full_name"> <a href=""> {{$obit->full_name}} </a> </td>
                                <td class="obit-remembrance"> {{$obit->remembrance_day}}</td>
                                <td class="obit-profession">{{ $obit->profession }}</td>
                                <td class="obit-photo">
                                    @if($obit->photo)
                                        <img src="{{ asset('uploads/'.$obit->photo) }}" alt="obit photo" class="obit-photo" height="100px" width="100px">
                                    @endif
                                </td>
                                <td class="obit-birth_date">{{ $obit->birth_date }}</td>
                                <td class="obit-profession">{{ $obit->death_date }}</td>
                                <td class="obit-profession">{{ $obit->birth_place }}</td>
                                <td class="obit-profession">{{ $obit->lived_places }}</td>
                                <td>
                                    <a href="{{route('toBeEdited',$obit->id)}}">Edit</a>
                                    <form action="{{route('routeToDeleteObituary',$obit->id)}}"
                                        class="test"
                                        method="POST" style="display:inline;" >
                                        @csrf
                                        @method('DELETE')
                                        <button id="buttonfordelete" type="submit">Delete</button>
                                    </form>
                                     
                                </td>
                                <td class="obit-status">{{$obit->status}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No obits found.</p>
            @endif
        </div>
    </section>
</main>

 


<style>
    .container {
        max-width: auto;
        margin: 0 auto;
    }

    .obit-table {
        width: 100%;
        border-collapse: collapse;
        margin-left: 10px;
        margin-top: 20px;
    }

    .obit-table th, .obit-table td {
        border: 1px solid #bb0d0d;
        padding: 10px;
        text-align: left;
    }

    .obit-full_name {
        font-size: 1.5em;
    }

    .obit-photo img {
        max-width: 100%;
        height: auto;
        margin-top: 10px;
    }
</style>

@endsection

