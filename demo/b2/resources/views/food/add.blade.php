@extends('food.layout.master')
@section('title','add food')
@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add food</h3>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    @csrf
                    <div class="col-md-3 px-1">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Food name">
                        </div>
                    </div>
                    <div class="col-md-3 px-1">
                        <div class="form-group">
                            <input type="number" class="form-control" name="price" placeholder="Price">
                        </div>
                    </div>
                    <div class="col-md-3 px-1">
                        <div class="form-group">
                            <textarea name="description" id="" cols="30" rows="10" placeholder="description"></textarea>
                        </div>
                    </div>
                    <div class="col-md-3 px-1">
                        <div class="form-group">
                            <select name="cate" id="">
                                @foreach($cates as $cate)
                                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info btn-fill">Save</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
@endsection
