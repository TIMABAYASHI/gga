
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Create New UserWorkExps</div>
                            <div class="panel-body">
                                <a href="{{ url("/UserWorkExps") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                
                                
                                <form method="POST" action="/UserWorkExps/store" class="form-horizontal">
                                    {{ csrf_field() }}

    										<div class="form-group">
                                        <label for="user_id" class="col-md-4 control-label">user_id: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="user_id" type="text" id="user_id" value="{{old('user_id')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="user_quit_job" class="col-md-4 control-label">user_quit_job: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="user_quit_job" type="text" id="user_quit_job" value="{{old('user_quit_job')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="exp_company" class="col-md-4 control-label">exp_company: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="exp_company" type="text" id="exp_company" value="{{old('exp_company')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="exp_industry" class="col-md-4 control-label">exp_industry: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="exp_industry" type="text" id="exp_industry" value="{{old('exp_industry')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="exp_occupation" class="col-md-4 control-label">exp_occupation: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="exp_occupation" type="text" id="exp_occupation" value="{{old('exp_occupation')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="exp_job" class="col-md-4 control-label">exp_job: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="exp_job" type="text" id="exp_job" value="{{old('exp_job')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="exp_start" class="col-md-4 control-label">exp_start: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="exp_start" type="date" id="exp_start" value="{{old('exp_start')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="exp_end" class="col-md-4 control-label">exp_end: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="exp_end" type="date" id="exp_end" value="{{old('exp_end')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="previous_company" class="col-md-4 control-label">previous_company: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="previous_company" type="text" id="previous_company" value="{{old('previous_company')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="previous_industry" class="col-md-4 control-label">previous_industry: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="previous_industry" type="text" id="previous_industry" value="{{old('previous_industry')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="previous_occupation" class="col-md-4 control-label">previous_occupation: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="previous_occupation" type="text" id="previous_occupation" value="{{old('previous_occupation')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="previous_job" class="col-md-4 control-label">previous_job: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="previous_job" type="text" id="previous_job" value="{{old('previous_job')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="previous_start" class="col-md-4 control-label">previous_start: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="previous_start" type="date" id="previous_start" value="{{old('previous_start')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="previous_end" class="col-md-4 control-label">previous_end: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="previous_end" type="date" id="previous_end" value="{{old('previous_end')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="second_last_company" class="col-md-4 control-label">second_last_company: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="second_last_company" type="text" id="second_last_company" value="{{old('second_last_company')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="second_last_industry" class="col-md-4 control-label">second_last_industry: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="second_last_industry" type="text" id="second_last_industry" value="{{old('second_last_industry')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="second_last_occupation" class="col-md-4 control-label">second_last_occupation: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="second_last_occupation" type="text" id="second_last_occupation" value="{{old('second_last_occupation')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="second_last_job" class="col-md-4 control-label">second_last_job: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="second_last_job" type="text" id="second_last_job" value="{{old('second_last_job')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="second_last_start" class="col-md-4 control-label">second_last_start: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="second_last_start" type="date" id="second_last_start" value="{{old('second_last_start')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="second_last_end" class="col-md-4 control-label">second_last_end: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="second_last_end" type="date" id="second_last_end" value="{{old('second_last_end')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="third_last_company" class="col-md-4 control-label">third_last_company: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="third_last_company" type="text" id="third_last_company" value="{{old('third_last_company')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="third_last_industry" class="col-md-4 control-label">third_last_industry: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="third_last_industry" type="text" id="third_last_industry" value="{{old('third_last_industry')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="third_last_occupation" class="col-md-4 control-label">third_last_occupation: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="third_last_occupation" type="text" id="third_last_occupation" value="{{old('third_last_occupation')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="third_last_job" class="col-md-4 control-label">third_last_job: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="third_last_job" type="text" id="third_last_job" value="{{old('third_last_job')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="third_last_start" class="col-md-4 control-label">third_last_start: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="third_last_start" type="date" id="third_last_start" value="{{old('third_last_start')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="third_last_end" class="col-md-4 control-label">third_last_end: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="third_last_end" type="date" id="third_last_end" value="{{old('third_last_end')}}">
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
    