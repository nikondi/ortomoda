<?php

use App\Controllers\SitemapController;
use App\Controllers\WelcomeController;
use Engine\Router;

Router::get('/sitemap', SitemapController::class);

Router::get('/', WelcomeController::class);