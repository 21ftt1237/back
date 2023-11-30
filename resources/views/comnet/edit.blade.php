@extends('layouts.app')

@section('content')

<div class="container mt-5 mb-5">

    <h2>Update Product</h2>
    <hr>

    <form id="updateForm" action="{{ route('comnet.update', $product->id) }}" enctype="multipart/form-data" method="POST">
        @csrf


        <div class="mb-3">
            <label for="picture" class="form-label">Choose Picture</label>
            <input class="form-control" type="file" name="picture" id="picture">
          </div>

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $product->name }}" placeholder="Enter title">
          </div>

          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" name="price" id="price" value="{{ $product->price }}" placeholder="Enter price">
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" placeholder="Enter Description">{{ $product->description }}</textarea>
          </div>
        
   
        <button type="submit" class="btn btn-primary" onclick="submitForm()">Update Product</button>

    </form>

     <script>
        function submitForm() {
            var form = document.getElementById('updateForm');
            var formData = new FormData(form);

            // Append the desired method
            formData.append('_method', 'PUT');

            // Make an AJAX request
            fetch('{{ route("comnet.update", $product->id) }}', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                // Handle success
                console.log(data);
                // Optionally, redirect or update the UI
            })
            .catch(error => {
                // Handle errors
                console.error('There was a problem with the fetch operation:', error);
            });
        }
    </script>

</div>


@endsection
