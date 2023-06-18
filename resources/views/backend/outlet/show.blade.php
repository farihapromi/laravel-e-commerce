@extends('backend.layouts.app')
@section('title', 'outlet')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <a href="{{ route('outlet.index') }}" type="button" class="btn btn-secondary float-end">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">

                <h4><b>Name : </b>{{ $outlet->name }}</h4>
                <h4><b>District : </b>{{ $outlet->district }}</h4>
                <h4><b>Distance : </b>{{ $outlet->distance }}</h4>

            </div>
        </div>
    </div>

@endsection
