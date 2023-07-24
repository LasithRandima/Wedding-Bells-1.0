<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Advertisement;
use App\Policies\AdvertisementPolicy;
use App\Policies\SitePackagesPolicy;
use App\Models\SitePackage;
use App\Policies\CategoriesPolicy;
use App\Models\VendorCategory;
use App\Models\Vendor;
use App\Policies\VendorsPolicy;
use App\Models\ClientVendorBooking;
use App\Policies\BookingPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Advertisement::class => AdvertisementPolicy::class,
        SitePackage::class => SitePackagesPolicy::class,
        VendorCategory::class => CategoriesPolicy::class,
        Vendor::class => VendorsPolicy::class,
        ClientVendorBooking::class => BookingPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
    }
}
