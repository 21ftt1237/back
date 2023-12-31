@extends('layouts.app')

@section('content')



<div class="container mt-5 mb-5">

    <h2>Create Product</h2>
    <hr>


    <form action="{{ route('comnet.store') }}" enctype="multipart/form-data" method="POST">
        @csrf

                <div class="mb-3">
            <label for="store_id" class="form-label">Select Store</label>
            <select class="form-select" name="store_id" id="store_id">
                
                <option value="1">comnet</option>
                <option value="2">gameside</option>
                <option value="3">digital universe</option>
              <option value="4">route66</option>
              <option value="5">defender</option>
              <option value="6">simanja</option>
 >
            </select>
        </div>

        <div class="mb-3">
            <label for="picture" class="form-label">Choose Picture</label>
            <input class="form-control" type="file" name="picture" id="picture">
          </div>

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter title" value="{{ old('name') }}" >
          </div>
        
          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Enter price">
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" placeholder="Enter Description"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Create Product</button>

    </form>

</div>


@endsection
