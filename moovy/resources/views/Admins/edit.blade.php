
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit Admins #{{ $Admins->id }}</div>
                            <div class="panel-body">
                                <a href="{{ url("Admins") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
    
                            <form method="POST" action="/Admins/{{ $Admins->id }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field("PUT") }}
            
										<div class="form-group">
                                        <label for="id" class="col-md-4 control-label">id: </label>
                                        <div class="col-md-6">{{$Admins->id}}</div>
                                    </div>
										<div class="form-group">
                                            <label for="lid" class="col-md-4 control-label">lid: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="lid" type="text" id="lid" value="{{$Admins->lid}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="password" class="col-md-4 control-label">password: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="password" type="text" id="password" value="{{$Admins->password}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="email" class="col-md-4 control-label">email: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="email" type="text" id="email" value="{{$Admins->email}}">
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
    