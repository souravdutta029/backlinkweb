@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div class="inline-block dashboard">
                        Dashboard
                    </div>
                    <div>
                        <form class="inline-block" action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="btn-log" type="submit" >Logout</button>
                        </form>
                    </div>
                </div>

                <div class="card-body">
                    You are logged in!
                    <div class="d-flex align-items-between">
                        <a class="btn btn-success w-50 m-1" href="{{ route('category.create') }}">Add Category</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
