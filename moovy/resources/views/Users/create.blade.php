
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Create New Users</div>
                            <div class="panel-body">
                                <a href="{{ url("/Users") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                
                                
                                <form method="POST" action="/Users/store" class="form-horizontal">
                                    {{ csrf_field() }}

    										<div class="form-group">
                                        <label for="name" class="col-md-4 control-label">name: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="name" type="text" id="name" value="{{old('name')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="name_mei" class="col-md-4 control-label">name_mei: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="name_mei" type="text" id="name_mei" value="{{old('name_mei')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="kana_sei" class="col-md-4 control-label">kana_sei: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="kana_sei" type="text" id="kana_sei" value="{{old('kana_sei')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="kana_mei" class="col-md-4 control-label">kana_mei: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="kana_mei" type="text" id="kana_mei" value="{{old('kana_mei')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="email" class="col-md-4 control-label">email: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="email" type="text" id="email" value="{{old('email')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="password" class="col-md-4 control-label">password: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="password" type="text" id="password" value="{{old('password')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="phone" class="col-md-4 control-label">phone: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="phone" type="text" id="phone" value="{{old('phone')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="address" class="col-md-4 control-label">address: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="address" type="text" id="address" value="{{old('address')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="birthday" class="col-md-4 control-label">birthday: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="birthday" type="date" id="birthday" value="{{old('birthday')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="language" class="col-md-4 control-label">language: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="language" type="text" id="language" value="{{old('language')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="licence" class="col-md-4 control-label">licence: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="licence" type="text" id="licence" value="{{old('licence')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="school" class="col-md-4 control-label">school: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="school" type="text" id="school" value="{{old('school')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="school_dept" class="col-md-4 control-label">school_dept: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="school_dept" type="text" id="school_dept" value="{{old('school_dept')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="school_subject" class="col-md-4 control-label">school_subject: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="school_subject" type="text" id="school_subject" value="{{old('school_subject')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="gender" class="col-md-4 control-label">gender: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="gender" type="text" id="gender" value="{{old('gender')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="salary" class="col-md-4 control-label">salary: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="salary" type="text" id="salary" value="{{old('salary')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="image_url" class="col-md-4 control-label">image_url: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="image_url" type="text" id="image_url" value="{{old('image_url')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="back_image_url" class="col-md-4 control-label">back_image_url: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="back_image_url" type="text" id="back_image_url" value="{{old('back_image_url')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="remember_token" class="col-md-4 control-label">remember_token: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="remember_token" type="text" id="remember_token" value="{{old('remember_token')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="user_role_id" class="col-md-4 control-label">user_role_id: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="user_role_id" type="text" id="user_role_id" value="{{old('user_role_id')}}">
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
    