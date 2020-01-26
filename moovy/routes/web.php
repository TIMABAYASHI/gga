<?php
use Illuminate\Http\Response;

//default
Route::get("/", function () {
    return view("welcome");
});

//=======================================================================
//index
Route::get("Jobs/", "JobsController@index");
//create
Route::get("Jobs/create", "JobsController@create");
//show
Route::get("Jobs/{id}", "JobsController@show");
//store
Route::post("Jobs/store", "JobsController@store");
//edit
Route::get("Jobs/{id}/edit", "JobsController@edit");
//update
Route::put("Jobs/{id}", "JobsController@update");
//destroy
Route::delete("Jobs/{id}", "JobsController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("Applicants/", "ApplicantsController@index");
//create
Route::get("Applicants/create", "ApplicantsController@create");
//show
Route::get("Applicants/{id}", "ApplicantsController@show");
//store
Route::post("Applicants/store", "ApplicantsController@store");
//edit
Route::get("Applicants/{id}/edit", "ApplicantsController@edit");
//update
Route::put("Applicants/{id}", "ApplicantsController@update");
//destroy
Route::delete("Applicants/{id}", "ApplicantsController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("Admins/", "AdminsController@index");
//create
Route::get("Admins/create", "AdminsController@create");
//show
Route::get("Admins/{id}", "AdminsController@show");
//store
Route::post("Admins/store", "AdminsController@store");
//edit
Route::get("Admins/{id}/edit", "AdminsController@edit");
//update
Route::put("Admins/{id}", "AdminsController@update");
//destroy
Route::delete("Admins/{id}", "AdminsController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("Clients/", "ClientsController@index");
//create
Route::get("Clients/create", "ClientsController@create");
//show
Route::get("Clients/{id}", "ClientsController@show");
//store
Route::post("Clients/store", "ClientsController@store");
//edit
Route::get("Clients/{id}/edit", "ClientsController@edit");
//update
Route::put("Clients/{id}", "ClientsController@update");
//destroy
Route::delete("Clients/{id}", "ClientsController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("Likes/", "LikesController@index");
//create
Route::get("Likes/create", "LikesController@create");
//show
Route::get("Likes/{id}", "LikesController@show");
//store
Route::post("Likes/store", "LikesController@store");
//edit
Route::get("Likes/{id}/edit", "LikesController@edit");
//update
Route::put("Likes/{id}", "LikesController@update");
//destroy
Route::delete("Likes/{id}", "LikesController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("Messages/", "MessagesController@index");
//create
Route::get("Messages/create", "MessagesController@create");
//show
Route::get("Messages/{id}", "MessagesController@show");
//store
Route::post("Messages/store", "MessagesController@store");
//edit
Route::get("Messages/{id}/edit", "MessagesController@edit");
//update
Route::put("Messages/{id}", "MessagesController@update");
//destroy
Route::delete("Messages/{id}", "MessagesController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("Users/", "UsersController@index");
//create
Route::get("Users/create", "UsersController@create");
//show
Route::get("Users/{id}", "UsersController@show");
//store
Route::post("Users/store", "UsersController@store");
//edit
Route::get("Users/{id}/edit", "UsersController@edit");
//update
Route::put("Users/{id}", "UsersController@update");
//destroy
Route::delete("Users/{id}", "UsersController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("UserRoles/", "UserRolesController@index");
//create
Route::get("UserRoles/create", "UserRolesController@create");
//show
Route::get("UserRoles/{id}", "UserRolesController@show");
//store
Route::post("UserRoles/store", "UserRolesController@store");
//edit
Route::get("UserRoles/{id}/edit", "UserRolesController@edit");
//update
Route::put("UserRoles/{id}", "UserRolesController@update");
//destroy
Route::delete("UserRoles/{id}", "UserRolesController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("MessageRooms/", "MessageRoomsController@index");
//create
Route::get("MessageRooms/create", "MessageRoomsController@create");
//show
Route::get("MessageRooms/{id}", "MessageRoomsController@show");
//store
Route::post("MessageRooms/store", "MessageRoomsController@store");
//edit
Route::get("MessageRooms/{id}/edit", "MessageRoomsController@edit");
//update
Route::put("MessageRooms/{id}", "MessageRoomsController@update");
//destroy
Route::delete("MessageRooms/{id}", "MessageRoomsController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("UserMovies/", "UserMoviesController@index");
//create
Route::get("UserMovies/create", "UserMoviesController@create");
//show
Route::get("UserMovies/{id}", "UserMoviesController@show");
//store
Route::post("UserMovies/store", "UserMoviesController@store");
//edit
Route::get("UserMovies/{id}/edit", "UserMoviesController@edit");
//update
Route::put("UserMovies/{id}", "UserMoviesController@update");
//destroy
Route::delete("UserMovies/{id}", "UserMoviesController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("Reports/", "ReportsController@index");
//create
Route::get("Reports/create", "ReportsController@create");
//show
Route::get("Reports/{id}", "ReportsController@show");
//store
Route::post("Reports/store", "ReportsController@store");
//edit
Route::get("Reports/{id}/edit", "ReportsController@edit");
//update
Route::put("Reports/{id}", "ReportsController@update");
//destroy
Route::delete("Reports/{id}", "ReportsController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("ClientRoles/", "ClientRolesController@index");
//create
Route::get("ClientRoles/create", "ClientRolesController@create");
//show
Route::get("ClientRoles/{id}", "ClientRolesController@show");
//store
Route::post("ClientRoles/store", "ClientRolesController@store");
//edit
Route::get("ClientRoles/{id}/edit", "ClientRolesController@edit");
//update
Route::put("ClientRoles/{id}", "ClientRolesController@update");
//destroy
Route::delete("ClientRoles/{id}", "ClientRolesController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("UserWorkExps/", "UserWorkExpsController@index");
//create
Route::get("UserWorkExps/create", "UserWorkExpsController@create");
//show
Route::get("UserWorkExps/{id}", "UserWorkExpsController@show");
//store
Route::post("UserWorkExps/store", "UserWorkExpsController@store");
//edit
Route::get("UserWorkExps/{id}/edit", "UserWorkExpsController@edit");
//update
Route::put("UserWorkExps/{id}", "UserWorkExpsController@update");
//destroy
Route::delete("UserWorkExps/{id}", "UserWorkExpsController@destroy");
//=======================================================================
