
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit Reports #{{ $Reports->id }}</div>
                            <div class="panel-body">
                                <a href="{{ url("Reports") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
    
                            <form method="POST" action="/Reports/{{ $Reports->id }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field("PUT") }}
            
										<div class="form-group">
                                        <label for="id" class="col-md-4 control-label">id: </label>
                                        <div class="col-md-6">{{$Reports->id}}</div>
                                    </div>
										<div class="form-group">
                                            <label for="user_id" class="col-md-4 control-label">user_id: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="user_id" type="text" id="user_id" value="{{$Reports->user_id}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="clients_id" class="col-md-4 control-label">clients_id: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="clients_id" type="text" id="clients_id" value="{{$Reports->clients_id}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="job_id" class="col-md-4 control-label">job_id: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="job_id" type="text" id="job_id" value="{{$Reports->job_id}}">
                                            </div>
                                        </div>
               
                                    <div class="form-group">
                                        <div class="col-md-offset-4 col-md-4">
                                            <input class="btn btn-primary" type="submit" value="Update">
                                        </div>
                                    </div>   
                                </form>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    