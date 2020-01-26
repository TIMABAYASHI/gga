
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Create New Jobs</div>
                            <div class="panel-body">
                                <a href="{{ url("/Jobs") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                
                                
                                <form method="POST" action="/Jobs/store" class="form-horizontal">
                                    {{ csrf_field() }}

    										<div class="form-group">
                                        <label for="client_id" class="col-md-4 control-label">client_id: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="client_id" type="text" id="client_id" value="{{old('client_id')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="job_title" class="col-md-4 control-label">job_title: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="job_title" type="text" id="job_title" value="{{old('job_title')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="job_occupation" class="col-md-4 control-label">job_occupation: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="job_occupation" type="text" id="job_occupation" value="{{old('job_occupation')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="job_position" class="col-md-4 control-label">job_position: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="job_position" type="text" id="job_position" value="{{old('job_position')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="job_type" class="col-md-4 control-label">job_type: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="job_type" type="text" id="job_type" value="{{old('job_type')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="job_message" class="col-md-4 control-label">job_message: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="job_message" type="text" id="job_message" value="{{old('job_message')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="image_url" class="col-md-4 control-label">image_url: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="image_url" type="text" id="image_url" value="{{old('image_url')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="job_status" class="col-md-4 control-label">job_status: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="job_status" type="text" id="job_status" value="{{old('job_status')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="delated_at" class="col-md-4 control-label">delated_at: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="delated_at" type="date" id="delated_at" value="{{old('delated_at')}}">
                                        </div>
                                    </div>
                    
                                    <div class="form-group">
                                        <div class="col-md-offset-4 col-md-4">
                                            <input class="btn btn-primary" type="submit" value="Create">
                                        </div>
                                    </div>     
                                </form>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    