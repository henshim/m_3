@extends('layout.master')
@section('title','customer list')
@section('content')
    <a href="{{ route('customers.add') }}" class="btn btn-primary">Add Customer</a>
    <div class="col-md-12">
        <div class="card strpied-table-with-hover">
            <div class="card-body table-full-width table-responsive">
                <table class="table table-hover table-striped">
                    <thead class="">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($customers as $customer)
                        <tr>
                            <td scope="row">{{$customer->id}}</td>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->email}}</td>
                            <td>{{$customer->address}}</td>
                            <td>
                                <a href="{{ route('customers.detail',$customer->id) }}"
                                   class="btn btn-success">Detail</a>
                                <a href="{{ route("customers.edit",$customer->id) }}"
                                   class="btn btn-warning">Update</a>
                                <a href="{{ route('customers.delete',$customer->id) }}"
                                   onclick="confirm('Are you sure about that ???')" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
