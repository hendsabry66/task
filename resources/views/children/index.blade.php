@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Children    <a href="{{url('children/create')}}" class="btn btn-info">Create Child</a>  </div>

                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Bus</th>
                                <th scope="col">created_at</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($children as $child)
                                <tr>
                                    <th scope="row">{{ $child->id }}</th>
                                    <td>{{ $child->name }}</td>
                                    <td>{{ $child->bus->number }}</td>
                                    <td>{{ $child->created_at}}</td>
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


