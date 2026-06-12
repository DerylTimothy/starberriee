<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

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
    public function boot(): void
    {
        // Sistem Pemaksa Migrasi Otomatis di Server Cloud
        try {
            if (!Schema::hasTable('products')) {
                // Jalankan migrasi tabel yang kosong
                Artisan::call('migrate', ['--force' => true]);
                
                // Jalankan pengisian data produk otomatis (seed)
                Artisan::call('db:seed', ['--force' => true]);
            }
        } catch (\Exception $e) {
            // Mencegah aplikasi crash jika database sedang bersiap
        }
    }
}