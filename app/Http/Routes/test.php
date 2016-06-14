<?php
Route::get('/test/child', function() {
    session(['user.name'=>'jerryxu0909','user.id'=>'0']);

    return view('test.child', ['name'=>'<li>Jerry</li>']);
});

Route::group(['middleware'=>'mw'],function(){
    Route::get('/test/mw',function(){
        return "成年人可以入内！";
    });
});
Route::resource('/test/session','SessionController');
Route::resource('/test/session1','SessionController@getSession');
Route::resource('/test/flush','SessionController@flushSession');

Route::get('/test/mw1',['as'=>'refuse',function(){
    return "未成年人禁止入内！";
}]);





