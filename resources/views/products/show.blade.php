@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Show Data Product</div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                              <label class="form-label">Name Product</label>
                              <input type="text" class="form-control" name="name_product" value="{{$product->name_product}}" disabled>    
                            </div>
                             <div class="mb-3">
                              <label class="form-label">Name Product</label>
                              <input type="text" class="form-control" name="price" value="{{$product->price}}" disabled>    
                            </div>
                             <div class="mb-3">
                              <label class="form-label">Name Product</label>
                              <input type="text" class="form-control" name="description" value="{{$product->description}}" disabled>    
                            </div>
                             <div class="mb-3">
                              <label class="form-label">Name Product</label>
                              <input type="text" class="form-control" name="name_product" value="{{$product->brand->name_brand}}" disabled>    
                            </div>
                             {{-- <div class="mb-3">
                              <label class="form-label">Cover</label>
                              <input type="text" class="form-control" name="cover" value="{{$product->cover}}" disabled>    
                            </div> --}}
                            <a href="{{url('product')}}" class="btn btn-primary">Back</a>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
