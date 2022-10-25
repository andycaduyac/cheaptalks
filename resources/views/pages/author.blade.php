@extends('base')
@include('layouts.navbar')
@section('content')
<div class="container mt-4">
    <h4 class="d-flex justify-content-center mb-4">{{$author->name}}</h4>

    <div class="row mt-5">
            <div class="col" id="post-cards">
            @foreach ($posts as $post)
            <div class="card mb-2" id="card-main" @if ($post->user->gender === 'female')
                style="background-color: lightpink"
                @else
                style="background-color: lightblue"
            @endif>
                <div class="card-body">
                    <h5 class="card-title">{{$post->user->name}}</h5>
                    <hr>
                    <p class="card-subtitle fw-bold mb-3">{{$post->category->category}}</p>
                    <p class="card-text">{{$post->post}}</p>
                </div>
                <p class="d-flex ms-auto mx-2">{{$post->created_at}}</p>

            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection

<style>
        @media (min-width: 900px) {
            #post-cards {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                grid-auto-rows: auto;
                grid-gap: 1rem;
            }
            #card-main {
                width: 20rem;
            }
        }

    </style>
