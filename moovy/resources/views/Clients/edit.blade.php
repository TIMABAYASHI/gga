
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit Clients #{{ $Clients->id }}</div>
                            <div class="panel-body">
                                <a href="{{ url("Clients") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
    
                            <form method="POST" action="/Clients/{{ $Clients->id }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field("PUT") }}
            
										<div class="form-group">
                                        <label for="id" class="col-md-4 control-label">id: </label>
                                        <div class="col-md-6">{{$Clients->id}}</div>
                                    </div>
										<div class="form-group">
                                            <label for="lid" class="col-md-4 control-label">lid: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="lid" type="text" id="lid" value="{{$Clients->lid}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="password" class="col-md-4 control-label">password: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="password" type="text" id="password" value="{{$Clients->password}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="client_name" class="col-md-4 control-label">client_name: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="client_name" type="text" id="client_name" value="{{$Clients->client_name}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="founded_in" class="col-md-4 control-label">founded_in: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="founded_in" type="date" id="founded_in" value="{{$Clients->founded_in}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="location" class="col-md-4 control-label">location: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="location" type="text" id="location" value="{{$Clients->location}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="company_url" class="col-md-4 control-label">company_url: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="company_url" type="text" id="company_url" value="{{$Clients->company_url}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="client_url" class="col-md-4 control-label">client_url: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="client_url" type="text" id="client_url" value="{{$Clients->client_url}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="client_industry" class="col-md-4 control-label">client_industry: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="client_industry" type="text" id="client_industry" value="{{$Clients->client_industry}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="client_business" class="col-md-4 control-label">client_business: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="client_business" type="text" id="client_business" value="{{$Clients->client_business}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="client_employees_num" class="col-md-4 control-label">client_employees_num: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="client_employees_num" type="text" id="client_employees_num" value="{{$Clients->client_employees_num}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="client_image_url" class="col-md-4 control-label">client_image_url: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="client_image_url" type="text" id="client_image_url" value="{{$Clients->client_image_url}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="client_job_sum" class="col-md-4 control-label">client_job_sum: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="client_job_sum" type="text" id="client_job_sum" value="{{$Clients->client_job_sum}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="client_role_id" class="col-md-4 control-label">client_role_id: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="client_role_id" type="text" id="client_role_id" value="{{$Clients->client_role_id}}">
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
    