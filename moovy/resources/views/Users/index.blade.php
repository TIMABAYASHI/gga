
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Users</div>
                            <div class="panel-body">
                            
                            
                                <a href="{{ url("Users/create") }}" class="btn btn-success btn-sm" title="Add New Users">
                                    Add New
                                </a>

                                <form method="GET" action="{{ url("Users") }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search" placeholder="Search...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-info" type="submit">
                                                <span>Search</span>
                                            </button>
                                        </span>
                                    </div>
                                </form>


                                <br/>
                                <br/>
                                
                                
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr><th>id</th><th>name</th><th>name_mei</th><th>kana_sei</th><th>kana_mei</th><th>email</th><th>password</th><th>phone</th><th>address</th><th>birthday</th><th>language</th><th>licence</th><th>school</th><th>school_dept</th><th>school_subject</th><th>gender</th><th>salary</th><th>image_url</th><th>back_image_url</th><th>remember_token</th><th>user_role_id</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($Users as $item)
                                    
                                    <tr>

                                            <td>{{ $item->id}} </td>

                                            <td>{{ $item->name}} </td>

                                            <td>{{ $item->name_mei}} </td>

                                            <td>{{ $item->kana_sei}} </td>

                                            <td>{{ $item->kana_mei}} </td>

                                            <td>{{ $item->email}} </td>

                                            <td>{{ $item->password}} </td>

                                            <td>{{ $item->phone}} </td>

                                            <td>{{ $item->address}} </td>

                                            <td>{{ $item->birthday}} </td>

                                            <td>{{ $item->language}} </td>

                                            <td>{{ $item->licence}} </td>

                                            <td>{{ $item->school}} </td>

                                            <td>{{ $item->school_dept}} </td>

                                            <td>{{ $item->school_subject}} </td>

                                            <td>{{ $item->gender}} </td>

                                            <td>{{ $item->salary}} </td>

                                            <td>{{ $item->image_url}} </td>

                                            <td>{{ $item->back_image_url}} </td>

                                            <td>{{ $item->remember_token}} </td>

                                            <td>{{ $item->user_role_id}} </td>
  
                                                <td><a href="{{ url("/Users/" . $item->id) }}" title="View Users"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="{{ url("/Users/" . $item->id . "/edit") }}" title="Edit Users"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/Users/{{ $item->id }}" class="form-horizontal" style="display:inline;">
                                                        {{ csrf_field() }}
                                                        
                                                        {{ method_field("DELETE") }}
                                                        <button type="submit" class="btn btn-danger btn-xs" title="Delete User" onclick="return confirm('Confirm delete')">
                                                        Delete
                                                        </button>    
                                                    </form>
                                                   </td>
                                              </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="pagination-wrapper"> {!! $Users->appends(["search" => Request::get("search")])->render() !!} </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    