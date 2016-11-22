@extends('welcome')

@section('content')
    <div class="container">
        <form>
            {{csrf_field()}}
            <div class="form-group">
                <input type="text" class="form-control" id="product_name" name="product_name"
                       placeholder="Product Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="quantity_in_stock" name="quantity_in_stock"
                       placeholder="Quantity in stock">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="price" name="price" placeholder="Price">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@stop