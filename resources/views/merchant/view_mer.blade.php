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
            <tr>
                <th>1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                    <a href="#"><button class="btn btn-info">Edit</button></a>
                    <a href="#"><button class="btn btn-danger">Delete</button></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection