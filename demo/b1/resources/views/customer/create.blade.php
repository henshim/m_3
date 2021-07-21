@extends('layout.master')
@section('title','add customer')
@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add customer</h3>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    @csrf
                    <div class="col-md-5 pr-1">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="customer name">
                        </div>
                    </div>
                    <div class="col-md-3 px-1">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="email">
                        </div>
                    </div>
                    <div class="col-md-3 px-1">
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="address">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info btn-fill">Save</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
@endsection
