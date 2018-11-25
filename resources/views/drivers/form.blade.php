@if(isset($drivers))

    {!! Form::model($drivers,['route'=>['post-update-driver',$drivers->id],'method'=>'post','class'=>'form-horizontal','role'=>'form']) !!}


@else

    {!! Form::open(['route'=>'post-driver' ,'class'=>'form-horizontal ', 'method' => 'post']) !!}


@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Drivers</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ isset($drivers) ? $drivers->name : '' }}" id="name" aria-describedby="emailHelp" placeholder="Enter Name">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" class="form-control" name="address" value="{{ isset($drivers) ? $drivers->address : '' }}" id="address" aria-describedby="emailHelp" placeholder="Enter Address">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone</label>
                            <input type="text" class="form-control" name="phone" value="{{ isset($drivers) ? $drivers->phone : '' }}" id="phone" aria-describedby="emailHelp" placeholder="Enter Phone">
                        </div>


                        <label for="exampleInputEmail1">Bus Number</label>

                        {!! Form::select('bus_id', $bus, null,  ['class'=>'form-control','data-placeholder'=>'bus Number']) !!}


                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>





{!! Form::close() !!}
