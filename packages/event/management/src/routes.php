<?php

Route::group(
    ['middleware' => ['web', 'auth','checkScope'], 'prefix' => 'admin', 'namespace' => 'Event\Management'], function()
{
    Route::resource('events', 'ManagementController');
    
});