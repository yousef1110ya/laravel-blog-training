@extends('layouts.app')
@section('container')

<div class="container mt-3">
    <div class="card">
        <div class="card-header">
            Post info
        </div>
        <div class="card-body">
            <h5 class="card-title">title:{{$post['title']}}</h5>
            <p class="card-text">{{$post['discreption']}}</p>
        </div>
    </div>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                Post creator info
            </div>
            <div class="card-body">
                <h5 class="card-title">Name:{{$post['posted_by']}}</h5>
                <p class="card-text">{{$post['user-Email']}}</p>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
    </div>
</div>



@endsection