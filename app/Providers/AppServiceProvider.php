<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Cache;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */

    public function boot()
    {
        $settings = Cache::remember('site_settings', 60*60, function () {
            $row = \DB::table('settings')->first();
            if ($row) {
                return [
                    'phone1' => $row->phone1 ?? '',
                    'phone2' => $row->phone2 ?? '',
                    'email1' => $row->email1 ?? '',
                    'email2' => $row->email2 ?? '',
                    'address1' => $row->address1 ?? '',
                    'address2' => $row->address2 ?? '',
                    'facebook' => $row->fb ?? '',
                    'instagram' => $row->insta ?? '',
                    'youtube' => $row->youtube ?? '',
                    'linkedin' => $row->linkedin ?? '',
                    'pinterest' => $row->pinterest ?? '',
                    'twitter' => $row->twitter ?? '',
                ];
            }
            return [];
        });

        foreach ($settings as $key => $value) {
            config(['site.' . $key => $value]);
        }
    }


}
