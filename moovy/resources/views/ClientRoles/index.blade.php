
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">ClientRoles</div>
                            <div class="panel-body">
                            
                            
                                <a href="{{ url("ClientRoles/create") }}" class="btn btn-success btn-sm" title="Add New ClientRoles">
                                    Add New
                                </a>

                                <form method="GET" action="{{ url("ClientRoles") }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
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
                                            <tr><th>id</th><th>role_name</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($ClientRoles as $item)
                                    
                                    <tr>

                                            <td>{{ $item->id}} </td>

                                            <td>{{ $item->role_name}} </td>
  
                                                <td><a href="{{ url("/ClientRoles/" . $item->id) }}" title="View ClientRoles"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="{{ url("/ClientRoles/" . $item->id . "/edit") }}" title="Edit ClientRoles"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/ClientRoles/{{ $item->id }}" class="form-horizontal" style="display:inline;">
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
                                    <div class="pagination-wrapper"> {!! $ClientRoles->appends(["search" => Request::get("search")])->render() !!} </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    