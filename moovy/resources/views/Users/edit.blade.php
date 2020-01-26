
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit Users #{{ $Users->id }}</div>
                            <div class="panel-body">
                                <a href="{{ url("Users") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
    
                            <form method="POST" action="/Users/{{ $Users->id }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field("PUT") }}
            
										<div class="form-group">
                                        <label for="id" class="col-md-4 control-label">id: </label>
                                        <div class="col-md-6">{{$Users->id}}</div>
                                    </div>
										<div class="form-group">
                                            <label for="name" class="col-md-4 control-label">name: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="name" type="text" id="name" value="{{$Users->name}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="name_mei" class="col-md-4 control-label">name_mei: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="name_mei" type="text" id="name_mei" value="{{$Users->name_mei}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="kana_sei" class="col-md-4 control-label">kana_sei: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="kana_sei" type="text" id="kana_sei" value="{{$Users->kana_sei}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="kana_mei" class="col-md-4 control-label">kana_mei: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="kana_mei" type="text" id="kana_mei" value="{{$Users->kana_mei}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="email" class="col-md-4 control-label">email: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="email" type="text" id="email" value="{{$Users->email}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="password" class="col-md-4 control-label">password: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="password" type="text" id="password" value="{{$Users->password}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="phone" class="col-md-4 control-label">phone: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="phone" type="text" id="phone" value="{{$Users->phone}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="address" class="col-md-4 control-label">address: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="address" type="text" id="address" value="{{$Users->address}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="birthday" class="col-md-4 control-label">birthday: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="birthday" type="date" id="birthday" value="{{$Users->birthday}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="language" class="col-md-4 control-label">language: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="language" type="text" id="language" value="{{$Users->language}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="licence" class="col-md-4 control-label">licence: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="licence" type="text" id="licence" value="{{$Users->licence}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="school" class="col-md-4 control-label">school: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="school" type="text" id="school" value="{{$Users->school}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="school_dept" class="col-md-4 control-label">school_dept: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="school_dept" type="text" id="school_dept" value="{{$Users->school_dept}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="school_subject" class="col-md-4 control-label">school_subject: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="school_subject" type="text" id="school_subject" value="{{$Users->school_subject}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="gender" class="col-md-4 control-label">gender: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="gender" type="text" id="gender" value="{{$Users->gender}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="salary" class="col-md-4 control-label">salary: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="salary" type="text" id="salary" value="{{$Users->salary}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="image_url" class="col-md-4 control-label">image_url: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="image_url" type="text" id="image_url" value="{{$Users->image_url}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="back_image_url" class="col-md-4 control-label">back_image_url: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="back_image_url" type="text" id="back_image_url" value="{{$Users->back_image_url}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="remember_token" class="col-md-4 control-label">remember_token: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="remember_token" type="text" id="remember_token" value="{{$Users->remember_token}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="user_role_id" class="col-md-4 control-label">user_role_id: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="user_role_id" type="text" id="user_role_id" value="{{$Users->user_role_id}}">
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
    