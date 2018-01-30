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
        Route::get('job/queue/add/{id}',[
            'as' => 'add-queue',
            'uses' => 'QueueController@add'
        ]);

        Route::get('job/queue/prioritize/{id}',[
            'as' => 'prioritize-queue',
            'uses' => 'QueueController@prioritize'
        ]);

        Route::get('job/queue/finish/{id}',[
            'as' => 'finish-queue',
            'uses' => 'QueueController@finish'
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

        //Queue Action
        Route::get('/queue/get',[
            'as' => 'get-queue',
            'uses' => 'QueueController@get'
        ]);
        
        Route::get('/queue/finish/{id}',[
            'as' => 'finish-queue',
            'uses' => 'QueueController@finish'
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

        //Comment action
        Route::post('/comment/store',[
            'as' => 'store-comment',
            'uses' => 'CommentController@store',
        ]);

});
