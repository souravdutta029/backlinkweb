@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 d-flex flex-column justify-content-center">
                <div class="py-3">
                    <h1>
                        Link Building is one of the important aspects of <span class="textmain">SEO</span>
                    </h1>
                </div>
                <div><h4>Submit Your Domain and get dofollow backlink from our Website</h4></div>
                <div class="py-5"><a href="#" class="btn btn-primary">Submit Your Domain</a></div>
            </div>
            <div class="col-6">
                <div class="d-flex justify-content-end align-items-center">
                    <img class="w-100 py-5 pl-5" src="{{asset('img/backlink.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <h2 class="font-weight-border">Categories</h2>
        </div>
    </div>
@endsection