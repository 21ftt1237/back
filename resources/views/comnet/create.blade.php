@extends('layouts.app')

@section('content')



<div class="container mt-5 mb-5">

    <h2>Create Product</h2>
    <hr>

    @if(isset($newProduct))
        <div class="mb-3">
            <label for="image_link" class="form-label">Image</label>
            <img src="{{ asset($newProduct->image_link) }}" alt="{{ $newProduct->name }}" class="img-thumbnail">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <p>{{ $newProduct->description }}</p>
        </div>
    @endif

    <form action="{{ route('comnet.store') }}" enctype="multipart/form-data" method="POST">
        @csrf

                <div class="mb-3">
            <label for="store_id" class="form-label">Select Store</label>
            <select class="form-select" name="store_id" id="store_id">
                
                <option value="1">comnet</option>
                <option value="2">gameside</option>
 >
            </select>
        </div>

        <div class="mb-3">
            <label for="image_link" class="form-label">Choose Picture</label>
            <input class="form-control" type="file" name="image_link" id="image_link">
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
            <textarea class="info" name="description" id="description" placeholder="Enter Description"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Create Product</button>

    </form>

</div>


@endsection
