<?php

namespace App\Http\Controllers;

use App\Models\TopAd;
use App\Models\TopAds;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\VendorCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index(Request $request)
    // {
    //     // $vendorNormalAds = Advertisement::orderBy('id','desc')->paginate(5);
    //     // $vendorTopAds = TopAd::orderBy('id','desc')->paginate(1);
    //     // $allCategories = VendorCategory::all();

    //     // return view('common.vendors',['vendorNormalAds' => $vendorNormalAds, 'vendorTopAds' => $vendorTopAds, 'allCategories' => $allCategories]);

    //       // Retrieve search inputs from request
    // $category = $request->input('category');
    // $location = $request->input('location');

    // // Query advertisements with filters
    // $advertisementsQuery = Advertisement::query();
    // $topAdsQuery = TopAd::query();
    // if ($category && $location) {
    //     $advertisementsQuery->where('category_id', $category)->where('v_bus_location', 'like', '%'.$location.'%');;
    //     $topAdsQuery->where('category_id', $category)->where('v_bus_location', 'like', '%'.$location.'%');;
    //     };

    // if ($location && $category == null) {
    //     $advertisementsQuery->where('v_bus_location', 'like', '%'.$location.'%');
    //     $topAdsQuery->where('v_bus_location', 'like', '%'.$location.'%');
    // }

    // if ($category && $location == null) {
    //     $vendorNormalAds = $advertisementsQuery->where('category_id', $category);
    //     $topAdsQuery->where('category_id', $category);
    // }

    // if($category == null && $location == null) {
    //     $vendorNormalAds = $advertisementsQuery->orderBy('id','desc')->paginate(5);
    //     $vendorTopAds = $topAdsQuery->orderBy('id','desc')->paginate(1);
    // }

    // // Retrieve paginated results
    // // $vendorNormalAds = $advertisementsQuery->orderBy('id','desc')->paginate(5);
    // // $vendorTopAds = $topAdsQuery->orderBy('id','desc')->paginate(1);
    // // $vendorNormalAds = $advertisementsQuery->orderBy('id','desc')->paginate(5);
    // // $vendorTopAds = $topAdsQuery->orderBy('id','desc')->paginate(1);

    // $pagination = $vendorNormalAds->lastPage() >= $vendorTopAds->lastPage() ? $vendorNormalAds : $vendorTopAds;
    // // if($vendorNormalAds->lastPage() && $vendorTopAds->lastPage()){
    // //     $pagination = $vendorNormalAds->lastPage() >= $vendorTopAds->lastPage() ? $vendorNormalAds : $vendorTopAds;
    // // }


    // $allCategories = VendorCategory::all();

    // // Pass results to view
    // return view('common.vendors', [
    //     'vendorNormalAds' => $vendorNormalAds,
    //     'vendorTopAds' => $vendorTopAds,
    //     'allCategories' => $allCategories,
    //     'pagination' => $pagination,
    // ]);
    // }




    // public function index(Request $request)
    // {
    //     // Retrieve search inputs from request
    //     $category = $request->input('category');
    //     $location = $request->input('location');

    //     // Query advertisements with filters
    //     $advertisementsQuery = Advertisement::query();
    //     $topAdsQuery = TopAd::query();

    //     if ($category && $location) {
    //         $advertisementsQuery->where('category_id', $category)->where('v_bus_location', 'like', '%'.$location.'%');
    //         $topAdsQuery->where('category_id', $category)->where('v_bus_location', 'like', '%'.$location.'%');
    //     } elseif ($location && $category == null) {
    //         $advertisementsQuery->where('v_bus_location', 'like', '%'.$location.'%');
    //         $topAdsQuery->where('v_bus_location', 'like', '%'.$location.'%');
    //     } elseif ($category && $location == null) {
    //         $advertisementsQuery->where('category_id', $category);
    //         $topAdsQuery->where('category_id', $category);
    //     }

    //     // Determine which paginator to use
    //     $paginator = null;
    //     if (!$category && !$location) {
    //         $vendorNormalAds = $advertisementsQuery->orderBy('id', 'desc')->paginate(5);
    //         $vendorTopAds = $topAdsQuery->orderBy('id', 'desc')->paginate(1);

    //         $paginator = ($vendorNormalAds->lastPage() > $vendorTopAds->lastPage()) ? $vendorNormalAds : $vendorTopAds;
    //     } else {
    //         $vendorNormalAds = ($category || $location) ? $advertisementsQuery->orderBy('id', 'desc')->get() : null;
    //         $vendorTopAds = ($category || $location) ? $topAdsQuery->orderBy('id', 'desc')->get() : null;
    //     }

    //     // Retrieve all categories
    //     $allCategories = VendorCategory::all();

    //     // Pass results to view
    //     return view('common.vendors', [
    //         'vendorNormalAds' => ($vendorNormalAds !== null) ? $vendorNormalAds : [],
    //         'vendorTopAds' => ($vendorTopAds !== null) ? $vendorTopAds : [],
    //         'allCategories' => $allCategories,
    //         'paginator' => $paginator,
    //     ]);
    // }





    // public function index(Request $request)  //workingggggggggggggggggg
    // {
    //     // Retrieve search inputs from request
    //     $category = $request->input('category');
    //     $location = $request->input('location');

    //     // Query advertisements with filters
    //     $advertisementsQuery = Advertisement::query();
    //     $topAdsQuery = TopAd::query();

    //     if ($category && $location) {
    //         $advertisementsQuery->where('category_id', $category)->where('v_bus_location', 'like', '%'.$location.'%');
    //         $topAdsQuery->where('category_id', $category)->where('v_bus_location', 'like', '%'.$location.'%');
    //     } elseif ($location && $category == null) {
    //         $advertisementsQuery->where('v_bus_location', 'like', '%'.$location.'%');
    //         $topAdsQuery->where('v_bus_location', 'like', '%'.$location.'%');
    //     } elseif ($category && $location == null) {
    //         $advertisementsQuery->where('category_id', $category);
    //         $topAdsQuery->where('category_id', $category);
    //     }

    //     // Determine which paginator to use
    //     $paginator = null;
    //     if (!$category && !$location) {
    //         $vendorNormalAds = $advertisementsQuery->orderBy('id', 'desc')->paginate(5);
    //         $vendorTopAds = $topAdsQuery->orderBy('id', 'desc')->paginate(1);
    //         $allAds = null;

    //         $paginator = ($vendorNormalAds->lastPage() > $vendorTopAds->lastPage()) ? $vendorNormalAds : $vendorTopAds;
    //     } else {
    //         $allAdsQuery = $advertisementsQuery->unionAll($topAdsQuery);
    //         $allAds = $allAdsQuery->orderBy('id', 'desc')->paginate(8);

    //         $vendorNormalAds = $allAds->whereInstanceOf(Advertisement::class);
    //         $vendorTopAds = $allAds->whereInstanceOf(TopAd::class);
    //     }

    //     // Retrieve all categories
    //     $allCategories = VendorCategory::all();

    //     // Pass results to view
    //     return view('common.vendors', [
    //         'vendorNormalAds' => ($vendorNormalAds !== null) ? $vendorNormalAds : [],
    //         'vendorTopAds' => ($vendorTopAds !== null) ? $vendorTopAds : [],
    //         'allCategories' => $allCategories,
    //         'paginator' => $paginator,
    //         'allAds' => $allAds,
    //     ]);
    // }



    // public function index(Request $request)         //works good
    // {
    //     // Retrieve search inputs from request
    //     $category = $request->input('category');
    //     $location = $request->input('location');

    //     // Query advertisements with filters
    //     $advertisementsQuery = Advertisement::query();
    //     $topAdsQuery = TopAd::query();

    //     if ($category && $location) {
    //         $advertisementsQuery->where('category_id', $category)->where('v_bus_location', 'like', '%'.$location.'%')->orWhere('v_bus_branches', 'like', '%'.$location.'%');
    //         $topAdsQuery->where('category_id', $category)->where('v_bus_location', 'like', '%'.$location.'%');
    //     } elseif ($location && $category == null) {
    //         $advertisementsQuery->where('v_bus_location', 'like', '%'.$location.'%');
    //         $topAdsQuery->where('v_bus_location', 'like', '%'.$location.'%');
    //     } elseif ($category && $location == null) {
    //         $advertisementsQuery->where('category_id', $category);
    //         $topAdsQuery->where('category_id', $category);
    //     }

    //     // Determine which paginator to use
    //     $paginator = null;
    //     if (!$category && !$location) {
    //         $vendorNormalAds = $advertisementsQuery->orderBy('id', 'desc')->paginate(5);
    //         $vendorTopAds = $topAdsQuery->orderBy('id', 'desc')->paginate(1);
    //         $allAds = null;

    //         $paginator = ($vendorNormalAds->lastPage() > $vendorTopAds->lastPage()) ? $vendorNormalAds : $vendorTopAds;
    //     } else {
    //         $allAdsQuery = $advertisementsQuery->unionAll($topAdsQuery);
    //         $allAds = $allAdsQuery->orderBy('id', 'desc')->paginate(8);

    //         $vendorNormalAds = $allAds->whereInstanceOf(Advertisement::class);
    //         $vendorTopAds = $allAds->whereInstanceOf(TopAd::class);
    //     }

    //     // Retrieve all categories
    //     $allCategories = VendorCategory::all();

    //     // Pass results to view
    //     return view('common.vendors', [
    //         'vendorNormalAds' => ($vendorNormalAds !== null) ? $vendorNormalAds : [],
    //         'vendorTopAds' => ($vendorTopAds !== null) ? $vendorTopAds : [],
    //         'allCategories' => $allCategories,
    //         'paginator' => $paginator,
    //         'allAds' => $allAds,
    //         'category' => $category,
    //         'location' => $location,
    //         'request' => $request,
    //     ]);
    // }



    public function index(Request $request)
{
    // Retrieve search inputs from request
    $category = $request->input('category');
    $location = $request->input('location');

    // Query advertisements with filters
    $advertisementsQuery = Advertisement::query();
    $topAdsQuery = TopAd::query();

    if ($category && $location) {
        $advertisementsQuery->where('category_id', $category)->where(function ($query) use ($location) {
            $query->where('v_bus_location', 'like', '%'.$location.'%')
                  ->orWhereJsonContains('v_bus_branches', $location);
        });
        $topAdsQuery->where('category_id', $category)->where(function ($query) use ($location) {
            $query->where('v_bus_location', 'like', '%'.$location.'%')
                  ->orWhereJsonContains('v_bus_branches', $location);
        });
    } elseif ($location && $category == null) {
        $advertisementsQuery->where(function ($query) use ($location) {
            $query->where('v_bus_location', 'like', '%'.$location.'%')
                  ->orWhereJsonContains('v_bus_branches', $location);
        });
        $topAdsQuery->where(function ($query) use ($location) {
            $query->where('v_bus_location', 'like', '%'.$location.'%')
                  ->orWhereJsonContains('v_bus_branches', $location);
        });
    } elseif ($category && $location == null) {
        $advertisementsQuery->where('category_id', $category);
        $topAdsQuery->where('category_id', $category);
    }

    // Determine which paginator to use
    $paginator = null;
    if (!$category && !$location) {
        $vendorNormalAds = $advertisementsQuery->orderBy('id', 'desc')->paginate(5);
        $vendorTopAds = $topAdsQuery->orderBy('id', 'desc')->paginate(1);
        $allAds = null;

        $paginator = ($vendorNormalAds->lastPage() > $vendorTopAds->lastPage()) ? $vendorNormalAds : $vendorTopAds;
    } else {
        $allAdsQuery = $advertisementsQuery->unionAll($topAdsQuery);
        $allAds = $allAdsQuery->orderBy('id', 'desc')->paginate(8);

        $vendorNormalAds = $allAds->whereInstanceOf(Advertisement::class);
        $vendorTopAds = $allAds->whereInstanceOf(TopAd::class);
    }

    // Retrieve all categories
    $allCategories = VendorCategory::all();

    // Pass results to view
    return view('common.vendors', [
        'vendorNormalAds' => ($vendorNormalAds !== null) ? $vendorNormalAds : [],
        'vendorTopAds' => ($vendorTopAds !== null) ? $vendorTopAds : [],
        'allCategories' => $allCategories,
        'paginator' => $paginator,
        'allAds' => $allAds,
        'category' => $category,
        'location' => $location,
        'request' => $request,
    ]);
}


//     public function index(Request $request)
// {
//     // Retrieve search inputs from request
//     $category = $request->input('category');
//     $location = $request->input('location');

//     // Query advertisements with filters
//     $advertisementsQuery = Advertisement::query();
//     $topAdsQuery = TopAd::query();

//     if ($category && $location) {
//         $advertisementsQuery->where('category_id', $category)->where('v_bus_location', 'like', '%'.$location.'%');
//         $topAdsQuery->where('category_id', $category)->where('v_bus_location', 'like', '%'.$location.'%');
//     } elseif ($location && $category == null) {
//         $advertisementsQuery->where('v_bus_location', 'like', '%'.$location.'%');
//         $topAdsQuery->where('v_bus_location', 'like', '%'.$location.'%');
//     } elseif ($category && $location == null) {
//         $advertisementsQuery->where('category_id', $category);
//         $topAdsQuery->where('category_id', $category);
//     }

//     // Determine which paginator to use
//     $paginator = null;
//     if (!$category && !$location) {
//         $vendorNormalAds = $advertisementsQuery->orderBy('id', 'desc')->paginate(5);
//         $vendorTopAds = $topAdsQuery->orderBy('id', 'desc')->paginate(1);

//         $paginator = ($vendorNormalAds->lastPage() > $vendorTopAds->lastPage()) ? $vendorNormalAds : $vendorTopAds;
//     } else {
//         $vendorNormalAds = ($category || $location) ? $advertisementsQuery->orderBy('id', 'desc')->paginate(10) : null;
//         $vendorTopAds = ($category || $location) ? $topAdsQuery->orderBy('id', 'desc')->paginate(1) : null;
//     }

//     // Retrieve all categories
//     $allCategories = VendorCategory::all();

//     // Pass results to view
//     return view('common.vendors', [
//         'vendorNormalAds' => ($vendorNormalAds !== null) ? $vendorNormalAds : [],
//         'vendorTopAds' => ($vendorTopAds !== null) ? $vendorTopAds : [],
//         'allCategories' => $allCategories,
//         'paginator' => $paginator,
//     ]);
// }







    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function show($advertisement)
    {
          $topAd = Advertisement::findOrFail($advertisement);
        //   dd($advertisement);
        $vendorId= DB::table('advertisements')->select('v_id')->where('id', '=', $advertisement)->value('v_id');
        $vendorAds = Advertisement::where('v_id', $vendorId)->take(10)->get();
        return view('common.vendorposts', compact('topAd', 'vendorAds'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function edit(Advertisement $advertisement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advertisement $advertisement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advertisement $advertisement)
    {
        //
    }
}
