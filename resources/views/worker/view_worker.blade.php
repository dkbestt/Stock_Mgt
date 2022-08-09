@extends('layout')

@section('content')

<div class="container">
    <div class="row my-2">
        <div class="col-md-10">
            <h3>Worker List</h3>
        </div>
        <div class="col-md-2">
            <a href="{{route('add_worker')}}"><button class="btn btn-primary">Add worker</button></a>
        </div>
    </div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mo.no.</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach($worker as $wor)
            <tr>
                <th>{{ $loop->iteration }}</th>
                <td>{{ $wor->name }}</td>
                <td>{{ $wor->email }}</td>
                <td>{{ $wor->mobile_no }}</td>
                <td>
                    <form action="{{ route('del_worker.destroy',$wor->id) }}" method="POST">
                        <a href="{{ route('edit_worker', $wor->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ route('show_worker', $wor->id) }}" class="btn btn-secondary">Show</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
@endsection