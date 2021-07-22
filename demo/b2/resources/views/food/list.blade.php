@extends('food.layout.master')
@section('title','food list')
@section('content')
    <div class="col-md-12">
        <a href="{{route('food.add')}}" class="btn btn-success">Add Customer</a>
        <div class="card strpied-table-with-hover">
            <div class="card-body table-full-width table-responsive">
                <table class="table table-hover table-striped">
                    <thead class="">
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($foods as $food)
                        <tr>
                            <td>{{$food->name}}</td>
                            <td>{{$food->email}}</td>
                            <td>{{$food->address}}</td>
                            <td>
                                <a href="{{ route('food.detail',$food->id) }}"
                                   class="btn btn-outline-success">Detail</a>
                                <a href="{{ route("food.edit",$food->id) }}"
                                   class="btn btn-warning">Update</a>
                                <a href="{{ route('food.delete',$food->id) }}"
                                   onclick="confirm('Are you sure about that ???')" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">No data</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
