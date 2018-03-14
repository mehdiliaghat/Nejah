<?php


    Route::get('/login', 'LoginController@showLoginForm')->name('login');
    Route::post('/login', 'LoginController@login');
    Route::get('/index', 'DashboardController@index')->name('index');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/logout', 'LoginController@logout')->name('logout');

    Route::post('users', 'operator\UsersController@store')->name('users.store');
    Route::get('users', 'operator\UsersController@create')->name('users.create');
    Route::get('users/index/manager', 'operator\UsersController@indexManager')->name('users.indexmanager');
    Route::get('users/index/student', 'operator\UsersController@indexStudent')->name('users.indexstudent');
    Route::get('users/index/prof', 'operator\UsersController@indexProf')->name('users.indexprof');
    Route::get('users/index/employee', 'operator\UsersController@indexEmployee')->name('users.indexemployee');
    Route::get('users/index/operator', 'operator\UsersController@indexOperator')->name('users.indexoperator');
    Route::get('users/edit/{id}','operator\UsersController@edit')->name('userEdit');
    Route::post('users/update/{id}','operator\UsersController@update')->name('userUpdate');
    Route::delete('users/deleteManager/{id}','operator\UsersController@deleteManager')->name('users.deleteManager');
    Route::delete('users/deleteStudent/{id}','operator\UsersController@deleteStudent')->name('users.deleteStudent');
    Route::delete('users/deleteProf/{id}','operator\UsersController@deleteProf')->name('users.deleteProf');
    Route::delete('users/deleteEmployee/{id}','operator\UsersController@deleteEmployee')->name('users.deleteEmployee');
    Route::delete('users/deleteOperator/{id}','operator\UsersController@deleteOperator')->name('users.deleteOperator');

    Route::post('assignedcourses/store','operator\AssignedcoursesController@store')->name('assignedCourses.store');
    Route::get('assignedcourses/index','operator\AssignedcoursesController@index')->name('assignedcourses.index');
    Route::get('assignedcourses/create','operator\AssignedcoursesController@create')->name('assignedcourses.create');
    Route::delete('assignedcourses/delete/{id}','operator\AssignedcoursesController@delete')->name('assignedcourses.delete');
    Route::get('assignedcourses/edit/{id}','operator\AssignedcoursesController@edit')->name('assignedcourses.edit');
    Route::post('assignedcourses/update/{id}','operator\AssignedcoursesController@update')->name('assignedCoursesUpdate');
    Route::get('selectCourses/index','operator\SelectcoursesController@index')->name('selectCourses.index');
    Route::get('selectCourses/student/create','operator\SelectcoursesController@getPost_id')->name('selectCourses.student');
    Route::post('selectCourses/student/store','operator\SelectcoursesController@store')->name('selectCourses.store');
    Route::get('selectCourses/student/shows/{user_id}','operator\SelectcoursesController@shows')->name('selectCourses.shows');


    Route::get('selectCourses/student/indexShow','operator\SelectcoursesController@indexShow')->name('selectCourses.indexShow');
    Route::post('selectCourses/student/show','operator\SelectcoursesController@show')->name('selectCourses.show');
    Route::get('selectCourses/student/{id}','operator\SelectcoursesController@showById')->name('selectCourses.showById');
    Route::delete('studentInfo/delete/{id}','operator\SelectcoursesController@delete_create')->name('studentInfo.delete');
    Route::get('studentInfo/edit/{id}','operator\SelectcoursesController@edit')->name('studentInfo.edit');
    Route::post('studentInfo/update/{id}','operator\SelectcoursesController@update')->name('studentInfo.update');

    Route::get('selectCourse','operator\SelectCourseStudentController@index')->name('selectCourseIndex');
    Route::post('selectCourse/select/','operator\SelectCourseStudentController@getPost_id')->name('selectCourse.post_id');
    Route::get('selectCourse/select/{data}','operator\SelectCourseStudentController@student_id')->name('selectCourse.student_id');
    Route::post('selectCourse/select/store','operator\SelectCourseStudentController@store')->name('selectCourseStudent.store');
   // Route::delete('selectCourse/select/delete/{id}/{data}','operator\SelectCourseStudentController@delete')->name('selectCourseStudent.delete');


