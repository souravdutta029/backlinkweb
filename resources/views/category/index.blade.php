@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div class="inline-block dashboard">
                        All Categories
                    </div>
                    <div>
                        <a class="btn btn-warning btn-back" href="{{ route('home') }}">back</a>
                    </div>
                </div>

                <div class="card-body">
                    @foreach($categories as $category)
                        <h5>{{$category->categoryname}}</h5>
                    @endforeach
                    <example-component></example-component>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
