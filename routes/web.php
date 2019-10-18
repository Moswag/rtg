<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/','UserController@login')->name('login');
Route::post('/signin','UserController@authenticate')->name('signin');
Route::get('/logout','UserController@logout')->name('logout');


Route::get('sendbasicemail','MailController@basic_email');
Route::get('sendhtmlemail','MailController@html_email');
Route::get('sendattachmentemail','MailController@attachment_email');


Route::group(['namespace'=>'Admin','middleware'=>'auth'], function (){
    Route::get('/home','AdminController@dashboard')->name('home');
    Route::get('/add_admin','AdminController@addAdmin')->name('add_admin');
    Route::post('/save_admin','AdminController@saveAdmin')->name('save_admin');
    Route::get('/view_admins','AdminController@viewAdmins')->name('view_admins');
    Route::get('/delete_admin/{id}','AdminController@deleteAdmin')->name('delete_admin');




    Route::get('/add_branch','BranchController@addBranch')->name('add_branch');
    Route::post('/save_branch','BranchController@saveBranch')->name('save_branch');
    Route::get('/view_branches','BranchController@viewBranches')->name('view_branches');


    Route::get('/add_employee','EmployeeController@addEmployee')->name('add_employee');
    Route::post('/save_employee','EmployeeController@saveEmployee')->name('save_employee');
    Route::get('/delete_employee/{id}','EmployeeController@deleteEmployee')->name('delete_employee');
    Route::get('/view_employees','EmployeeController@viewEmployees')->name('view_employees');


    Route::get('/view_managers','ManagerController@viewManagers')->name('view_managers');
    Route::get('/add_manager','ManagerController@addManager')->name('add_manager');
    Route::post('/save_manager','ManagerController@saveManager')->name('save_manager');
    Route::get('/delete_manager/{id}','ManagerController@deleteManager')->name('delete_manager');

    Route::get('/view_agencies','RequestTypeController@viewTravelAgencies')->name('view_agencies');
    Route::get('/add_agency','RequestTypeController@addTravelAgency')->name('add_agency');
    Route::post('/save_agency','RequestTypeController@saveTravelAgency')->name('save_agency');
    Route::get('/delete_agency/{id}','RequestTypeController@deleteTravelAgency')->name('delete_agency');


    Route::get('/view_distance','DistanceController@viewDistances')->name('view_distance');
    Route::get('/add_distance','DistanceController@addDistance')->name('add_distance');
    Route::post('/save_distance','DistanceController@saveDistance')->name('save_distance');
    Route::get('/delete_distance/{id}','DistanceController@deleteDistance')->name('delete_distance');

    Route::get('/view_fuel_prices','FuelPriceController@viewFuelPrices')->name('view_fuel_prices');
    Route::get('/add_fuel_price','FuelPriceController@addFuelPrice')->name('add_fuel_price');
    Route::post('/save_fuel_price','FuelPriceController@saveFuelPrice')->name('save_fuel_price');
    Route::get('/delete_fuel_price/{id}','FuelPriceController@deleteFuelPrice')->name('delete_fuel_price');

    Route::get('/view_average_lunch','MealController@viewMealPrice')->name('view_average_lunch');
    Route::get('/add_average_lunch','MealController@addMealPrice')->name('add_average_lunch');
    Route::post('/save_average_lunch','MealController@saveMealPrice')->name('save_average_lunch');
    Route::get('/delete_average_lunch/{id}','MealController@deleteMealPrice')->name('delete_average_lunch');



});

Route::group(['middleware'=>'auth'], function (){
    Route::get('/change_password', 'UserController@changePassword')->name('change_password');
    Route::post('/update_password', 'UserController@updatePassword')->name('update_password');
});

Route::group(['namespace'=>'Manager','middleware'=>'auth'], function (){

    Route::get('/manager_dashboard','ManagerController@dashboard')->name('manager_dashboard');
    Route::get('/branch_employees','ManagerController@viewEmployees')->name('branch_employees');
    Route::get('/view_bracnch_applications','ApplicationsController@viewApplications')->name('view_bracnch_applications');
    Route::get('/view_application/{id}','ApplicationsController@viewApplication')->name('view_application');

    Route::get('/reject_application/{id}','ApplicationsController@rejectApplication')->name('reject_application');

    Route::post('/reject_emp_application','ApplicationsController@rejectEmpApplication')->name('reject_emp_application');


    Route::get('/view_rejected_applications','ApplicationsController@rejectedApplications')->name('view_rejected_applications');

    Route::post('/update_emp_application','ApplicationsController@updateApplicationStatus')->name('update_emp_application');
    Route::get('/view_approved_applications','ApplicationsController@approvedApplications')->name('view_approved_applications');

    Route::get('/view_emps_to_hotel','ManagerController@viewEmpsComing')->name('view_emps_to_hotel');

});

Route::group(['namespace'=>'Employee','middleware'=>'auth'], function (){

    Route::get('/my_manager','EmployeesController@viewMyManager')->name('my_manager');
    Route::get('/travel_application','ApplicationController@addApplication')->name('travel_application');

    Route::post('/save_application','ApplicationController@saveApplication')->name('save_application');
    Route::get('/view_applications','ApplicationController@viewApplications')->name('view_applications');

    Route::get('/view_my_application/{id}','ApplicationController@viewApplication')->name('view_my_application');






});


