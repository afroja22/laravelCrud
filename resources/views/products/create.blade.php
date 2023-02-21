@extends('products.layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-8">
        <div class="my-3 text-center">
            <h2>Add New Product</h2>
        </div>
        <div class="my-3">
            <a class="btn btn-success" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="row justify-content-center">
    <div class="alert alert-danger col-8">
        <strong>Whoops!</strong> There were some problems with your input<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif

<form action="{{ route('products.store') }}" method="POST">
    @csrf

     <div class="row justify-content-center">
        <div class="col-8 mb-2">
            <div class="form-group">
                <strong>Product Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-8 my-2">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" name="price" class="form-control" placeholder="Price">
            </div>
        </div>
        <div class="col-8 my-2">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" class="dropify" data-max-file-size="1M" name="image">
            </div>
        </div>
        <div class="col-8 my-2">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="col-8 text-center">
                <button type="submit" class="btn btn-success my-3">Add Product</button>
        </div>
    </div>

</form>
@endsection
