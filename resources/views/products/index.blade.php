@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="my-3 text-center">
                <h2>Bazaar - An E-Commerce site</h2>
            </div>
            <div class="my-3">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Image</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->image }}</td>
            <td>{{ $product->description }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                    <a class="btn btn-success" href="{{ route('products.show',$product->id) }}"><i class="fa-solid fa-circle-info fa-lg"></i></a>

                    <a class="btn btn-warning" href="{{ route('products.edit',$product->id) }}"><i class="fa-solid fa-pen-to-square fa-lg"></i></a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash fa-lg"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $products->links() }}
    @include("products.product_js")

@endsection
