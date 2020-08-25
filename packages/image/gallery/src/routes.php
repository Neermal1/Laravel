<?php

Route::group(
    ['middleware' => ['web', 'auth','checkScope'], 'prefix' => 'admin', 'namespace' => 'Image\Gallery'], function()
{
    Route::resource('photos', 'PhotosController');
    Route::resource('albums', 'AlbumsController');
    Route::resource('product', 'ProductsController');


    
});