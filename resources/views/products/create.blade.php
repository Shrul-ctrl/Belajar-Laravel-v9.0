@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Data Product</div>
                    <div class="card-body">
                        <form action="{{route('product.store')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                              <label class="form-label">Name Product</label>
                              <input type="text" class="form-control" name="name_product">    
                            </div>
                             <div class="mb-3">
                              <label class="form-label">Price</label>
                              <input type="text" class="form-control" name="price">    
                            </div>
                             <div class="mb-3">
                              <label class="form-label">Description</label>
                              <input type="text" class="form-control" name="description">    
                            </div>
                            <div class="mb-3">
                              <label class="form-label">ID</label>
                              <input type="text" class="form-control" name="id_brand">    
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection