<?php

Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {

    //index
    Route::get('/index', 'DashboardController@index')->name('index');

    //contact us requests
    Route::resource('contact_us_requests', 'ContactUsRequestController')->only(['index', 'destroy']);

    //team members
    Route::resource('team_members', 'TeamMemberController');

    //blog posts
    Route::resource('blog_posts', 'BlogPostController');

    //services
    Route::resource('services', 'ServiceController');
    
    //site settings
    Route::resource('site_settings', 'SiteSettingController')->only(['create', 'store']);

    //slider route
    Route::resource('sliders', 'SliderController');

    //project routes
    Route::resource('projects', 'ProjectController');

});