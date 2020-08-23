<?php

Route::group(
    ['middleware' => ['web', 'auth','checkScope'], 'prefix' => 'admin', 'namespace' => 'Neermal\Staff'], function()
{
    Route::resource('staffs', 'staffController');
    
});