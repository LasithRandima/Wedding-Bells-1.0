<x-frontend>
    <div class="container" style="margin-top: 130px; margin-bottom:130px">
        <h1 data-aos="zoom-in">SRI LANKA’S NO. 1 WEDDING RESOURCE DIRECTORY</h1>
        <h3 data-aos="zoom-in">POPULAR WEDDING SERVICE CATEGORIES</h3>
        <p data-aos="zoom-in">Let’s face it, planning a wedding is never, ever going to be easy. There’s a million and one things to think about, and if you forget something, it can really come back to cause trouble later on. Weddings are hugely important, and can cost well in the tens of thousands. No wonder they’re so stressful to plan!
          That being said, here are the ways the right wedding directory can take some of that sting out of the planning of your wedding.
          TAKE THE PANIC OUT OF PLANNING; Imagine everything you need, all in one place. GIVE YOUR WEDDING A UNIQUE FEEL EXPLORING NEW IDEAS </p>

           <div class="row" >

                 @foreach ($allCategories as $category)

                    <div class="col-md-4 about_grid " style="background-color: rgba(0, 0, 0, 0); background-image: url({{  $category->Category_image != null  ? asset('/storage/'.$category->Category_image)  : asset('/storage/default_images/default_category_thumb.jpg') }} ); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit; z-index: 20;" data-aos="zoom-in" data-aos-duration="2000">
                        <i class="fa fa-heart"></i>
                        <h4 style="margin-top: 85px;">{{$category->Category_name}}</h4>
                        <p class="cat-pargraph"></p>
                        <a href="{{ route('vendorCategories.show', $category->id) }}" class="more-bttn my-2">
                            View More
                          </a>
                      </div>

                 @endforeach

                 <div class="container d-flex justify-content-center">
                    <a  href="{{ route('dashboard') }}" class="btn btn-outline-secondary btn-block" style="margin-top: 5rem !important">
                        Home
                      </a>
                 </div>





           </div>
      </div>
    </div>
</x-frontend>
