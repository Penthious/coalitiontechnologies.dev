@extends('layouts.app')

@section('content')
    <div class="container">
        <form>
            <input type="hidden" value="{!! csrf_token()!!}" id="token">
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

@section('javascript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script>
        $('form').submit(function (e) {
            var data = {
                '_token': '{{csrf_token()}}',
                'product_name': $('#product_name').val(),
                'quantity_in_stock': $('#quantity_in_stock').val(),
                'price': $('#price').val()
            };
           e.preventDefault();
            console.log(data);
            $.ajax({
                type: "POST",
                url: '/product/store',
                data: data,
            }).done(function () {
               $('#product_name').val('');
                $('#quantity_in_stock').val('')
                $('#price').val('')
            });
        });
    </script>
@stop