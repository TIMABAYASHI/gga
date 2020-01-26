
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Create New Messages</div>
                            <div class="panel-body">
                                <a href="{{ url("/Messages") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                
                                
                                <form method="POST" action="/Messages/store" class="form-horizontal">
                                    {{ csrf_field() }}

    										<div class="form-group">
                                        <label for="room_id" class="col-md-4 control-label">room_id: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="room_id" type="text" id="room_id" value="{{old('room_id')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="massage" class="col-md-4 control-label">massage: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="massage" type="text" id="massage" value="{{old('massage')}}">
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
    