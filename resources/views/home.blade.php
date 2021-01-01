@extends('base')
@section('title_section')
This is homepage
@endsection
@section('content')
<div class="container mt-3">
    <div class="row">
        @foreach($data as $d)
        <div class="col-lg-3">
            <div class="card p-2 mt-2">
                <a href=""><img src="{{asset('images/'.$d->logo)}}" class="card-img-top" width="100px" height="250px"
                        alt=""></a>
                <div class="card-body">
                    <h4 class="lead">{{$d->title}}</h4>
                    <h5 class="lead">Est-Year:- {{$d->est_year}}</h5>
                    <small class="small">our courses:- {{$d->type}}</small><br>
                    <small>City:- {{$d->city}}</small>
                    <p class="small">State:- {{$d->state}}</p>
                </div>
                <div class="gap-2 d-flex justify-content-center">
                    <a href="" class="btn btn-info btn-sm">View More..</a>
                    <a href="" class="btn btn-primary btn-sm">Apply now</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
