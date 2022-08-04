@extends('layout')

@section('content')

<div class="container">
    <div class="row  my-2">
        <div class="col-md-10">
            <h3>Merchant List</h3>
        </div>
        <div class="col-md-2">
            <a href="{{route('add_merchant')}}"><button class="btn btn-primary">Add merchant</button></a>
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

            @foreach($merchant as $mer)
            <tr>
                <th>{{ $loop->iteration }}</th>
                <td>{{ $mer->name }}</td>
                <td>{{ $mer->email }}</td>
                <td>{{ $mer->mobile_no }}</td>
                <td>
                    <form action="{{ route('del_mer.destroy',$mer->id) }}" method="POST">
                        <a href="{{ route('edit_mer', $mer->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ route('show_mer', $mer->id) }}" class="btn btn-secondary">Show</a>
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