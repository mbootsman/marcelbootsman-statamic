<?php

namespace App\Providers;

use App\UrlPaginator;
use App\CustomGenerator;
use Illuminate\Support\ServiceProvider;
use Studio1902\PeakSeo\Handlers\ErrorPage;
use Statamic\Extensions\Pagination\LengthAwarePaginator;
use Statamic\Facades\Entry;
use Statamic\Facades\Markdown;
use Statamic\StaticSite\Generator;
use Statamic\StaticSite\SSG;
use Statamic\StaticSite\Tasks;
use Torchlight\Commonmark\V2\TorchlightExtension;

class AppServiceProvider extends ServiceProvider {
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        // Statamic::script('app', 'cp');
        // Statamic::style('app', 'cp');

        // Doesn't work with Peak at the moment
        // ErrorPage::handle404AsEntry();

        Markdown::addExtension(function () {
            return new TorchlightExtension;
        });

        $this->app->singleton(Generator::class, function ($app) {
            return new CustomGenerator($app, $app['files'], $app['router'], $app[Tasks::class]);
        });

        SSG::after(function () {
            $from = public_path('img');
            $to = config('statamic.ssg.destination') . '/img';
            app('files')->copyDirectory($from, $to);
        });
    }
}
