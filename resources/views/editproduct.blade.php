<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
</head>
<body>
    <form action="/edit/{{ $product->id }}" method="post">
    <div class="col-md-12">
        <div class="panel panel-default col-6">
            <div class="panel-heading">
                <h3 class="">Edit product</h3>
            </div>
            <div class="panel-body">
                <form action="/edit/{{ $product->id }}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <label>Product name</label>
                        <br>
                        <input type="text" name="p_name" value="{{ $product->p_name }}" />
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        <br>
                        <input type="number" name="qty" value="{{ $product->qty }}" />
                    </div>
                    <div class="form-group">
                        <label>price</label>
                        <br>
                        <input type="text" name="price" value="{{ $product->price }}" />
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
    </div>
 </form>   
</body>
</html>