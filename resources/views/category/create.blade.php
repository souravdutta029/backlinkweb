@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div class="inline-block dashboard">
                        Dashboard
                    </div>
                    <div>
                        <a class="btn btn-warning btn-back" href="{{ route('home') }}">back</a>
                    </div>
                </div>

                <div class="card-body">
                    Add New Category
                    <form action="{{route('category.store')}}" method="post">
                        @csrf
                        <div class="form-group mt-4">
                            <label for="category">Enter a Category</label>
                            <input type="text" class="form-control" name="categoryname">
                            @error('categoryname')
                                <div class="error text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Submit Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
