@extends('layouts.app')
@section('content')

<div class="container">
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    @if(isset($product))
        <div class="card uper">
        <div class="card-header">
            Edit Product
        </div>
        <div class="card-body">
            <form method="post" action="{{url('update/'.$product->id)}}">
                @csrf
                <div class="form-group">
                    <label for="name">Product Name:</label>
                    <input type="text" class="form-control" name="product_name" value="{{$product->name}}" />
                </div>
                <div class="form-group">
                    <label for="price">Product Price :</label>
                    <input type="text" class="form-control" name="product_price" value="{{$product->price}}" />
                </div>
                <div class="form-group">
                    <label for="quantity">Product Quantity:</label>
                    <input type="text" class="form-control" name="product_qty" value="{{$product->quantity}}" />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
          </div>
    @else
    <div class="card uper">
        <div class="card-header">
            Add Product
        </div>
        <div class="card-body">
            <form method="post" action="store">
                @csrf
                <div class="form-group">
                    <label for="name">Product Name:</label>
                    <input type="text" class="form-control" name="product_name" />
                </div>
                <div class="form-group">
                    <label for="price">Product Price :</label>
                    <input type="text" class="form-control" name="product_price" />
                </div>
                <div class="form-group">
                    <label for="quantity">Product Quantity:</label>
                    <input type="text" class="form-control" name="product_qty" />
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
          </div>
    @endif



</div>

@endsection
