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

Route::group([
    'prefix' => 'manager',
    'namespace' => 'Manager', 
    'as' => 'manager-'],function(){
        // Job action
        Route::get('/',[
            'as' => 'index',
            'uses' => 'JobController@index'
        ]);
        Route::get('/job/create',[
            'as' => 'create-job',
            'uses' => 'JobController@create',
        ]);
        Route::post('/job/store',[
            'as' => 'store-job',
            'uses' => 'JobController@store'
        ]);
        Route::get('/job/show/{id}',[
            'as' => 'show-job',
            'uses' => 'JobController@show'
        ]);

        Route::get('/job/delete/{id}',[
            'as' => 'delete-job',
            'uses' => 'JobController@destroy'
        ]);

        Route::get('job/edit/{id}',[
            'as' => 'edit-job',
            'uses' => 'JobController@edit'
        ]);

        Route::post('job/update',[
            'as' => 'update-job',
            'uses' => 'JobController@update'
        ]);

        Route::get('job/duplicate/{id}',[
            'as' => 'duplicate-job',
            'uses' => 'JobController@duplicate',
        ]);
        
        //Order action
        Route::get('/order/create/{job_id}',[ 
            'as' => 'create-order',
            'uses' => 'OrderController@create'
        ]);

        Route::post('/order/store',[
            'as' => 'store-order',
            'uses' => 'OrderController@store' 
        ]);

        Route::get('/order/delete/{id}',[
            'as' => 'delete-order',
            'uses' => 'OrderController@destroy'
        ]);
        
        Route::get('/order/edit/{id}',[
            'as' => 'edit-order',
            'uses' => 'OrderController@edit'
        ]);

        Route::post('/order/update',[
            'as' => 'update-order',
            'uses' => 'OrderController@update'
        ]);

        //Queue action
        Route::get('/job/queue/add/{id}',[
            'as' => 'add-queue',
            'uses' => 'QueueController@add'
        ]);

        Route::get('/job/queue/prioritize/{id}',[
            'as' => 'prioritize-queue',
            'uses' => 'QueueController@prioritize'
        ]);

        Route::get('/job/queue/public/{id}',[
            'as' => 'public-queue',
            'uses' => 'QueueController@public'
        ]);

        Route::get('job/queue/finish/{id}',[
            'as' => 'finish-queue',
            'uses' => 'QueueController@finish'
        ]);

        Route::get('job/queue/return/{id}',[
            'as' => 'return-queue',
            'uses' => 'QueueController@return'
        ]);

        //Comment action
        Route::post('/comment/store',[
            'as' => 'store-comment',
            'uses' => 'CommentController@store',
        ]);
        
});

Route::group([
    'prefix' => 'editor',
    'namespace' => 'Editor',
    'as' => 'editor-'], function(){

        //Job Action
        Route::get('/',[
            'as' => 'index',
            'uses' => 'JobController@index'
        ]);

        Route::get('/job/show/{id}',[
            'as' => 'show-job',
            'uses' => 'JobController@show'
        ]);

        Route::get('/job/public',[
            'as' => 'public-job',
            'uses' => 'JobController@public'
        ]);

        //Queue Action
        Route::get('/queue/get',[
            'as' => 'get-queue',
            'uses' => 'QueueController@get'
        ]);

        Route::get('/queue/get/{id}',[
            'as' => 'getPublic-queue',
            'uses' => 'QueueController@getPublic'
        ]);
        
        Route::get('/queue/finish/{id}',[
            'as' => 'finish-queue',
            'uses' => 'QueueController@finish'
        ]);

        Route::get('/queue/back/{id}',[
            'as' => 'back-queue',
            'uses' => 'QueueController@back'
        ]);

        Route::get('/queue/return/{id}',[
            'as' => 'return-queue',
            'uses' => 'QueueController@return'
        ]);
        //Comment action
        Route::post('/comment/store',[
            'as' => 'store-comment',
            'uses' => 'CommentController@store',
        ]);

});

Route::group([
    'prefix' => 'qa',
    'namespace' => 'QualityAssurance',
    'as' => 'qa-'], function(){

        //Job Action

        Route::get('/',[
            'as' => 'index',
            'uses' => 'JobController@index'
        ]);

        Route::get('/checklist',[
            'as' => 'checklist',
            'uses' => 'JobController@checklist'
        ]);

        Route::get('/job/show/{id}',[
            'as' => 'show-job',
            'uses' => 'JobController@show'
        ]);

        //Queue Action
        Route::get('/queue/get/{id}',[
            'as' => 'get-queue',
            'uses' => 'QueueController@get'
        ]);
        
        Route::get('/queue/finish/{id}',[
            'as' => 'finish-queue',
            'uses' => 'QueueController@finish'
        ]);
        
        Route::get('/queue/back/{id}',[
            'as' => 'back-queue',
            'uses' => 'QueueController@back'
        ]);
        //Comment action
        Route::post('/comment/store',[
            'as' => 'store-comment',
            'uses' => 'CommentController@store',
        ]);

});


Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'as' => 'admin-'], function() {

    //Style action
    Route::get('/style',[
        'as' => 'list-style',
        'uses' => 'StyleController@index'
    ]);

    Route::get('/style/create',[
        'as' => 'create-style',
        'uses' => 'StyleController@create'
    ]);

    Route::post('/style/store',[
        'as' => 'store-style',
        'uses' => 'StyleController@store'
    ]);

    Route::get('/style/show/{id}',[
        'as' => 'show-style',
        'uses' => 'StyleController@show'
    ]);

    Route::get('/style/edit/{id}',[
        'as' => 'edit-style',
        'uses' => 'StyleController@edit'
    ]);

    Route::post('/style/update',[
        'as' => 'update-style',
        'uses' => 'StyleController@update'
    ]);

    Route::get('/style/delete/{id}',[
        'as' => 'delete-style',
        'uses' => 'StyleController@destroy'
    ]);
});

