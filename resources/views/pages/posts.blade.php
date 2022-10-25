@extends('base')
@include('layouts.navbar')

@section('content')
<div class="container mt-4">
    <h4 class="d-flex justify-content-center mb-4">Posts</h4>
    <div class="row">
        <div class="col my-4">
            <select name="gender" class="form-select">
                <option value="all">All</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
        <div class="col my-4">
            <select name="categories" class="form-select">
                <option value="all">All</option>
                <option value="1">Politics</option>
                <option value="2">Religion</option>
                <option value="3">Business</option>
                <option value="4">Comedy</option>
                <option value="5">Education</option>
                <option value="6">Romance</option>
            </select>
        </div>
        <div class="col my-4">
            <form action="{{ route('posts')}}" class="input-group" method="get">
                <input class="form-control" name="search" placeholder="Search" type="search">
            </form>
        </div>
    </div>
    <div class="row">
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
    <hr>
    <div class="container mt-3 mb-5 d-flex justify-content-center">
        {{$posts->links()}}

    </div>
</div>
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
@endsection
