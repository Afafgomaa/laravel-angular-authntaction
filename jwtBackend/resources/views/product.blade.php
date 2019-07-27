<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Shop Laravel+Angular</title>
<link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Manage <b>Products</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#" class="btn btn-success" data-toggle="modal" data-target="#addTaskModal"><i class="material-icons">&#xE147;</i> <span>Add New Product</span></a>                       
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Products</th>
                        <th>Created At</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php $count = 1 ;?>
                    @foreach($products as $product)
                    <tr>
                        <td>{{$count++}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->created_at}}</td>
                        <td>{{$product->description}}</td>
                      <!--  <td>{{($product->done) ? 'Yes' : 'No'}}</td>-->
                        <td>{{$product->price}}</td>
                        <td>{{$product->image}}</td>

                        <td>
                            <a onclick="editProductForm({{$product->id}});" href="#" class="edit open-modal" data-toggle="modal" value="{{$product->id}}"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a onclick="deleteTaskForm({{$product->id}});" href="#" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Showing <b>{{$products->count()}}</b> out of <b>{{$products->total()}}</b> entries</div>
                {{ $products->links() }}
            </div>

        </div>
    </div>

    @include('partials.product_add')
    @include('partials.product_edit')
    @include('partials.product_delete')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="{{asset('js/product.js')}}"></script>
     <script type="text/javascript" >
         


     </script>