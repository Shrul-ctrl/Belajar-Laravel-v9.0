@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Data Product</div>
                    <div class="card-body shadow-lg">
                        <form action="{{ route('product.update', $product->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Name Product</label>
                                <input type="text" class="form-control" name="name_product"
                                    value="{{ $product->name_product }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Price</label>
                                <input type="text" class="form-control" name="price" value="{{ $product->price }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <input type="text" class="form-control" name="description"
                                    value="{{ $product->description }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">ID Brand</label>
                                <select class="form-control" name="id_brand">
                                    @foreach ($brand as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $product->id_brand ? 'selected' : '' }}>{{ $data->name_brand }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Cover</label>
                                <img src="{{ asset('images/product/' . $product->cover) }}" width="100" alt="">
                                <input type="file" class="form-control" name="cover">
                            </div>
                            <div class="vstack gap-2 col-md-5 mx-auto">
                                <button type="sumbit" class="btn btn-primary">Save changes</button>
                                <a href="{{ url('product') }}" class="btn btn-outline-primary">Cancel</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
