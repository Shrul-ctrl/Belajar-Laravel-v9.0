@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data Product</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <a href="{{ route('product.create') }}" class="btn btn-primary">Add Data</a>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name Product</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Name Brand</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $id = 1; @endphp
                                @foreach ($product as $data)
                                    <tr>
                                        <th scope="row">{{ $id++ }}</th>
                                        <td>{{ $data->name_product }}</td>
                                        <td>{{ $data->price }}</td>
                                        <td>{{ $data->description }}</td>
                                        <td>{{ $data->id_brand }}</td>
                                        <form action="{{ route('product.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        <td>
                                            <a href="{{ route('product.edit', $data->id) }}"class="btn btn-primary">Edit</a>
                                            <a href="{{ route('product.show', $data->id) }}"class="btn btn-success">Show</a>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </td>
                                        </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
