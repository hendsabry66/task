@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Drivers  <a href="{{url('drivers/create')}}" class="btn btn-info text-right">Create driver</a></div>

                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">phone</th>
                                <th scope="col">address</th>
                                <th scope="col">Bus</th>
                                <th scope="col">created_at</th>
                                <th scope="col">action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($drivers as $driver)
                                <tr>
                                    <th scope="row">{{ $driver->id }}</th>
                                    <td>{{ $driver->name }}</td>
                                    <td>{{ $driver->phone }}</td>
                                    <td>{{ $driver->address }}</td>
                                    <td>{{ $driver->bus->number }}</td>
                                    <td>{{ $driver->created_at}}</td>
                                    <td>
                                        <a href="{{url('drivers/edit/'.$driver->id)}}" class="btn btn-info">Edit</a>
                                        <a href="{{url('drivers/delete/'.$driver->id)}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


