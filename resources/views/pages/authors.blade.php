@extends('base')
@include('layouts.navbar')
@section('content')
<div class="container mt-4">
    <h4 class="d-flex justify-content-center mb-4">Authors</h4>
    <div class="row">
        <div class="col" id="author-cards">
            @foreach ( $users as $user )
                    <div class="card mb-5" id="cards">
                            <div class="card-body" @if ($user->gender === 'female')
                                style="background-color: lightpink"
                            @else
                                style="background-color: lightblue"
                            @endif>
                                <h5 class="card-text">{{$user->name}}</h5>
                                <hr>
                                <p class="card-text mb-3">Posts: {{$user->posts()->count()}}</p>
                                <a href="/authors/{{$user->id}}">
                                    <button class="btn btn-primary d-flex float-end mb-2">
                                        View Posts
                                    </button>
                                </a>
                            </div>
                    </div>
                @endforeach
        </div>
    </div>

    <div class="container mt-3 mb-5 d-flex justify-content-center">
        {{$users->links()}}

    </div>
</div>


    <style>
        @media (min-width: 600px) {
            #author-cards {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                grid-auto-rows: auto;
                grid-gap: 1rem;
            }
            #cards{
                width: 18rem;
                height: 12rem;
            }
        }
    </style>
@endsection

