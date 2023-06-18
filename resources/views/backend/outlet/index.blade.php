@extends('backend.layouts.app')
@section('title', 'Outlet')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <a href="{{ route('outlet.create') }}" type="button" class="btn btn-primary float-end">Create</a>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <th>SL.</th>
                        
                        <th> Outlet Area Name</th>
                        <th>District</th>
                        <th>Distance</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        @foreach($outlets as $item)
                            <tr>
                            <td>{{ $loop->iteration }}</td>

                             

                                <td>{{ $item->name }}</td>
                                <td>{{ $item->district }}</td>
                                <td>{{ $item->distance }}</td>
                                <td>
                                    <form action="{{ route('outlet.destroy', $item->id) }}" method="post" style="display: inline-block;">
                                        @method("DELETE")
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    <a href="{{ route('outlet.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('outlet.show', $item->id) }}" class="btn btn-info">Show</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{ $outlets->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
