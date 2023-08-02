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
use App\Models\VendorGallery;
use App\Policies\VendorGalleryPolicy;
use App\Models\SocialNetwork;
use App\Policies\SocialNetworkPolicy;
use App\Models\VendorFaq;
use App\Policies\VendorFaqPolicy;
use App\Models\Media;
use App\Policies\MediaPolicy;

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
        VendorGallery::class => VendorGalleryPolicy::class,
        SocialNetwork::class => SocialNetworkPolicy::class,
        VendorFaq::class => VendorFaqPolicy::class,
        Media::class => MediaPolicy::class,
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
