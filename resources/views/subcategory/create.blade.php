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
                    Add New Subcategory
                    <form action="{{route('subcategory.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleformcontrolselect1">Select Category</label>
                            <select class="form-control" name="category_id" id="exampleformcontrolselect1">
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->categoryname}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="subcategory"></label>
                        </div>
                        <div class="form-group mt-4">
                            <label for="category">Enter Subcategory</label>
                            <input type="text" class="form-control" name="subcategoryname">
                            @error('subcategoryname')
                                <div class="error text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Submit Subcategory</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
