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
                        <form action="{{route('updateDetails',['id'=>$record->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-2">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" value="{{$record->title}}">
                                <small class="text-danger">{{$errors->first('title')}}</small>
                            </div>
                            <div class="form-group mb-2">
                                <label for="type">Type</label>
                                <input type="text" class="form-control" name="type" value="{{$record->type}}">
                                <small class="text-danger">{{$errors->first('type')}}</small>
                            </div>
                            <div class="form-group mb-2">
                                <label for="est_year">Est_year</label>
                                <input type="text" class="form-control" name="est_year" value="{{$record->est_year}}">
                                <small class="text-danger">{{$errors->first('est_year')}}</small>
                            </div>
                            <div class="form-group mb-2">
                                <label for="city">City</label>
                                <input type="text" class="form-control" name="city" value="{{$record->city}}">
                                <small class="text-danger">{{$errors->first('city')}}</small>
                            </div>
                            <div class="form-group mb-2">
                                <label for="state">State</label>
                                <input type="text" class="form-control" name="state" value="{{$record->state}}">
                                <small class="text-danger">{{$errors->first('state')}}</small>
                            </div>
                             <div class="form-group mb-2">
                                <label for="logo">Logo</label>
                                <input type="file" class="form-control" name="logo" value="">
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
</div>
@endsection
