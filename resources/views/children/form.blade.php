

    {!! Form::open(['route'=>'post-child' ,'class'=>'form-horizontal ', 'method' => 'post']) !!}



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Children</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" name="name"  id="name" aria-describedby="emailHelp" placeholder="Enter Name">
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
