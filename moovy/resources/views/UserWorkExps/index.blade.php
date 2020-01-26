
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">UserWorkExps</div>
                            <div class="panel-body">
                            
                            
                                <a href="{{ url("UserWorkExps/create") }}" class="btn btn-success btn-sm" title="Add New UserWorkExps">
                                    Add New
                                </a>

                                <form method="GET" action="{{ url("UserWorkExps") }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
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
                                            <tr><th>id</th><th>user_id</th><th>user_quit_job</th><th>exp_company</th><th>exp_industry</th><th>exp_occupation</th><th>exp_job</th><th>exp_start</th><th>exp_end</th><th>previous_company</th><th>previous_industry</th><th>previous_occupation</th><th>previous_job</th><th>previous_start</th><th>previous_end</th><th>second_last_company</th><th>second_last_industry</th><th>second_last_occupation</th><th>second_last_job</th><th>second_last_start</th><th>second_last_end</th><th>third_last_company</th><th>third_last_industry</th><th>third_last_occupation</th><th>third_last_job</th><th>third_last_start</th><th>third_last_end</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($UserWorkExps as $item)
                                    
                                    <tr>

                                            <td>{{ $item->id}} </td>

                                            <td>{{ $item->user_id}} </td>

                                            <td>{{ $item->user_quit_job}} </td>

                                            <td>{{ $item->exp_company}} </td>

                                            <td>{{ $item->exp_industry}} </td>

                                            <td>{{ $item->exp_occupation}} </td>

                                            <td>{{ $item->exp_job}} </td>

                                            <td>{{ $item->exp_start}} </td>

                                            <td>{{ $item->exp_end}} </td>

                                            <td>{{ $item->previous_company}} </td>

                                            <td>{{ $item->previous_industry}} </td>

                                            <td>{{ $item->previous_occupation}} </td>

                                            <td>{{ $item->previous_job}} </td>

                                            <td>{{ $item->previous_start}} </td>

                                            <td>{{ $item->previous_end}} </td>

                                            <td>{{ $item->second_last_company}} </td>

                                            <td>{{ $item->second_last_industry}} </td>

                                            <td>{{ $item->second_last_occupation}} </td>

                                            <td>{{ $item->second_last_job}} </td>

                                            <td>{{ $item->second_last_start}} </td>

                                            <td>{{ $item->second_last_end}} </td>

                                            <td>{{ $item->third_last_company}} </td>

                                            <td>{{ $item->third_last_industry}} </td>

                                            <td>{{ $item->third_last_occupation}} </td>

                                            <td>{{ $item->third_last_job}} </td>

                                            <td>{{ $item->third_last_start}} </td>

                                            <td>{{ $item->third_last_end}} </td>
  
                                                <td><a href="{{ url("/UserWorkExps/" . $item->id) }}" title="View UserWorkExps"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="{{ url("/UserWorkExps/" . $item->id . "/edit") }}" title="Edit UserWorkExps"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/UserWorkExps/{{ $item->id }}" class="form-horizontal" style="display:inline;">
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
                                    <div class="pagination-wrapper"> {!! $UserWorkExps->appends(["search" => Request::get("search")])->render() !!} </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    