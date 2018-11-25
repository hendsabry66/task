@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Buses    <a href="{{url('bus/create')}}" class="btn btn-info">Create Bus</a>  </div>

                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Number</th>
                                <th scope="col">Direction</th>
                                <th scope="col">created_at</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($buses as $bus)
                                <tr>
                                    <th scope="row">{{ $bus->id }}</th>
                                    <td>{{ $bus->number }}</td>
                                    <td><a href="{{url('bus/direction/'.$bus->id)}}">direction</a></td>
                                    <td>{{ $bus->created_at}}</td>
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


