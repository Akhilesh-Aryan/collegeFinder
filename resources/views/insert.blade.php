@extends('base')
@section('title_section')
This is insertpage
@endsection
@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-7 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="text-center">Insert CollegeName and their Details</h5>
                    <div class="card-body">
                        <form action="{{route('insertpost')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-2">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" value="{{old('title')}}">
                                <small class="text-danger">{{$errors->first('title')}}</small>
                            </div>
                            <div class="form-group mb-2">
                                <label for="type">Type</label>
                                <input type="text" class="form-control" name="type" value="{{old('type')}}">
                                <small class="text-danger">{{$errors->first('type')}}</small>
                            </div>
                            <div class="form-group mb-2">
                                <label for="est_year">Est_year</label>
                                <input type="text" class="form-control" name="est_year" value="{{old('est_year')}}">
                                <small class="text-danger">{{$errors->first('est_year')}}</small>
                            </div>
                            <div class="form-group mb-2">
                                <label for="city">City</label>
                                <input type="text" class="form-control" name="city" value="{{old('city')}}">
                                <small class="text-danger">{{$errors->first('city')}}</small>
                            </div>
                            <div class="form-group mb-2">
                                <label for="state">State</label>
                                <input type="text" class="form-control" name="state" value="{{old('state')}}">
                                <small class="text-danger">{{$errors->first('state')}}</small>
                            </div>
                            <div class="form-group mb-2">
                                <label for="logo">Logo</label>
                                <input type="file" class="form-control" name="logo" value="{{old('logo')}}">
                                <small class="text-danger">{{$errors->first('logo')}}</small>
                            </div>
                            <div class="form-group mb-2">
                                <input type="submit" class="form-control btn btn-info btn-block" name="post">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <table class="table table-bordered table-striped">
            <tr class="bg-secondary text-white">
                <th>Title</th>
                <th>Type</th>
                <th>Est_year</th>
                <th>City</th>
                <th>State</th>
                <th>Action</th>
            </tr>
            @foreach($data as $d)      
            <tr>
                <td>{{$d->title}}</td>
                <td>{{$d->type}}</td>
                <td>{{$d->est_year}}</td>
                <td>{{$d->city}}</td>
                <td>{{$d->state}}</td>
                <td>
                    <a href="{{route('edit',['id'=>$d->id])}}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{route('delete',['id'=>$d->id])}}" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
