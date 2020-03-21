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

Route::get('/', 'Frontend\ExamController@index')->name('index');

/*
 Exam routes
*/
 Route::group(['prefix' => 'exam'], function(){
 	Route::get('/start', 'Frontend\ExamController@startExam')->name('exam.start');
 	Route::get('/finish', 'Frontend\ExamController@finish')->name('exam.finish');
 	Route::post('/store/{id}', 'Frontend\ExamController@store')->name('exam.store');
 	Route::post('/create', 'Frontend\ExamController@create')->name('exam.create');
 	Route::get('/updateTemp', 'Frontend\ExamController@updateTemp')->name('exam.updateTemp');
 });

// user routes
Route::group(['prefix' => 'user'], function(){
	Route::get('/token/{token}', 'Frontend\VerificationController@verify')->name('user.verification');
	Route::get('/dashboard', 'Frontend\UsersController@dashboard')->name('user.dashboard');
	Route::get('/profile', 'Frontend\UsersController@profile')->name('user.profile');
	Route::post('/profile/update', 'Frontend\UsersController@profileUpdate')->name('user.profile.update');
});


//admin routes
Route::group(['prefix' => 'admin'], function(){
	Route::get('/', 'Backend\PagesController@index')->name('admin.index');
	
	// admin login route
	Route::get('/login', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
	Route::post('/login/submit', 'Auth\Admin\LoginController@login')->name('admin.login.submit');
	Route::post('/login/logout', 'Auth\Admin\LoginController@logout')->name('admin.logout');

	// password email send
	Route::get('/password/reset', 'Auth\Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	Route::post('/password/resetPost', 'Auth\Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');


	// password reset send notification
	Route::get('/password/reset/{token}', 'Auth\Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
	Route::post('/password/reset', 'Auth\Admin\ResetPasswordController@reset')->name('admin.password.reset.post');


	// Question sets routes
	Route::group(['prefix' => '/questionsets'], function(){

		Route::get('/', 'Backend\QuestionsetsController@index')->name('admin.questionsets');

		Route::get('/create', 'Backend\QuestionsetsController@create')->name('admin.questionsets.create');
		Route::get('/edit/{id}', 'Backend\QuestionsetsController@edit')->name('admin.questionsets.edit');	
		Route::get('/delete/{id}', 'Backend\QuestionsetsController@delete')->name('admin.questionsets.delete');

		Route::post('/store', 'Backend\QuestionsetsController@store')->name('admin.questionsets.store');

		Route::post('/questionsets/edit/{id}', 'Backend\QuestionsetsController@update')->name('admin.questionsets.update');
		Route::post('/questionsets/delete/{id}', 'Backend\QuestionsetsController@delete')->name('admin.questionsets.delete');
	});


	// questions routes
	Route::group(['prefix' => '/questions'], function(){

		Route::get('/', 'Backend\QuestionsController@index')->name('admin.questions');

		Route::get('/create', 'Backend\QuestionsController@create')->name('admin.question.create');
		Route::get('/edit/{id}', 'Backend\QuestionsController@edit')->name('admin.question.edit');	
		Route::get('/delete/{id}', 'Backend\QuestionsController@delete')->name('admin.question.delete');

		Route::post('/store', 'Backend\QuestionsController@store')->name('admin.question.store');

		Route::post('/questionset/edit/{id}', 'Backend\QuestionsController@update')->name('admin.question.update');
		Route::post('/questionset/delete/{id}', 'Backend\QuestionsController@delete')->name('admin.question.delete');
	});


		// questions options routes
	Route::group(['prefix' => '/questionoptions'], function(){

		Route::get('/', 'Backend\QuestionoptionsController@index')->name('admin.questionoptions');

		Route::get('/create', 'Backend\QuestionoptionsController@create')->name('admin.questionoption.create');
		Route::get('/edit/{id}', 'Backend\QuestionoptionsController@edit')->name('admin.questionoption.edit');	
		Route::post('/delete/{id}', 'Backend\QuestionoptionsController@delete')->name('admin.questionoption.delete');

		Route::post('/store', 'Backend\QuestionoptionsController@store')->name('admin.questionoption.store');
	});


	// sections routes
	Route::group(['prefix' => '/sections'], function(){

		Route::get('/', 'Backend\SectionsController@index')->name('admin.sections');

		Route::get('/create', 'Backend\SectionsController@create')->name('admin.section.create');
		Route::get('/edit/{id}', 'Backend\SectionsController@edit')->name('admin.section.edit');	
		Route::post('/delete/{id}', 'Backend\SectionsController@delete')->name('admin.section.delete');

		Route::post('/store', 'Backend\SectionsController@store')->name('admin.sections.store');

		Route::get('/ajax', 'Backend\SectionsController@sections')->name('admin.sections.ajax');
	});
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
