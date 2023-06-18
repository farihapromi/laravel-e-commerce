@extends('backend.layouts.app')
@section('title', 'outlet Create')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <a href="{{ route('outlet.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <form action="{{ route('outlet.store') }}" method="post" >
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Outlet Area Name *</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" required autofocus>
                    </div>

                    <div class="mb-3">
                        <label for="distance" class="form-label">Outlet Distance</label>
                        <input type="number" class="form-control" name="distance" id="distance" required>
                    </div>

                    <div class="mb-3">
                        <label for="district" class="form-label">District *</label>
                        <input type="text" class="form-control" name="district" id="district" required>
                    </div>

                   


                 

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
