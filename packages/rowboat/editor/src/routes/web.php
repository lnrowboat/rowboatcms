<?php

Route::get('template/', 'TemplateEditorController@index');
Route::get('template/create', 'TemplateEditorController@create');
Route::post('template/create', 'TemplateEditorController@postCreate');
Route::get('template/{container_id}', 'TemplateEditorController@show');
Route::post('template/edit/{container_id}/{content_id?}', 'TemplateEditorController@edit');

Route::get('find-insert', 'TemplateEditorController@mongoFindAndInsert');