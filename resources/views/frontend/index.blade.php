@extends('frontend.layouts.app')

@section('content')
    <!-- Sliders & Today's deal -->
<section class="mb-2 mb-md-3">
    <div class="home-banner-area mb-3" style="margin-top:0.5rem;" >
        <div class="container" style="margin-left:4rem;">
            <div class="d-flex flex-wrap position-relative" >
                <div class="position-static d-none d-xl-block" >
                    @include('frontend.partials.category_menu')
                </div>

                <!-- Sliders -->
                <div class="home-slider">
                    @if (get_setting('home_slider_images') != null)
                        <div class="aiz-carousel dots-inside-bottom mobile-img-auto-height" data-autoplay="true" data-arrows="true" data-dots="false" data-infinite="true" style="width:110%;margin-left:1rem;">
                            @php $slider_images = json_decode(get_setting('home_slider_images'), true);  @endphp
                            @foreach ($slider_images as $key => $value)
                                <div class="carousel-box">
                                    <a href="{{ json_decode(get_setting('home_slider_links'), true)[$key] }}">
                                        <!-- Image -->
                                       
                                        <img class="d-block mw-100 img-fit overflow-hidden h-sm-auto  h-md-350px overflow-hidden"
                                            src="{{ uploaded_asset($slider_images[$key]) }}"
                                            alt="{{ env('APP_NAME')}} promo"
                                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';" style="border-radius:20px;width:100%;">
                                     
                                         </a>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<style>
  @media only screen and (max-width: 768px) {
  /* For mobile phones: */
  .home-banner-area {
    width: 100%;
  }
  .col{
      padding-left:5px !important;
      padding-right:5px !important;
  }
}
</style>
    <!-- Flash Deal -->
    @php
        $flash_deal = get_featured_flash_deal();
    @endphp
    @if($flash_deal != null)
    <section class="mb-2 mb-md-3 mt-2 mt-md-3">
        <div class="container">
         
            <!-- Top Section -->
            <div class="d-flex flex-wrap mb-2 mb-md-3 align-items-baseline justify-content-between">
             
                <!-- Title -->
                <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">
                    <span class="d-inline-block">{{ translate('Flash Sale') }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="24" viewBox="0 0 16 24" class="ml-3">
                        <path id="Path_28795" data-name="Path 28795" d="M30.953,13.695a.474.474,0,0,0-.424-.25h-4.9l3.917-7.81a.423.423,0,0,0-.028-.428.477.477,0,0,0-.4-.207H21.588a.473.473,0,0,0-.429.263L15.041,18.151a.423.423,0,0,0,.034.423.478.478,0,0,0,.4.2h4.593l-2.229,9.683a.438.438,0,0,0,.259.5.489.489,0,0,0,.571-.127L30.9,14.164a.425.425,0,0,0,.054-.469Z" transform="translate(-15 -5)" fill="#fcc201"/>
                    </svg>
                </h3>
                <!-- Links -->
                <div>
                    <div class="text-dark d-flex align-items-center mb-0">
                        <a href="{{ route('flash-deals') }}" class="fs-10 fs-md-12 fw-700 text-reset has-transition opacity-60 hov-opacity-100 hov-text-primary  mr-3">{{ translate('View All Flash Sale') }}</a>
                        <span class=" border-left border-soft-light border-width-2 pl-3">
                            <a href="{{ route('flash-deal-details', $flash_deal->slug) }}" class="fs-10 fs-md-12 fw-700 text-reset has-transition opacity-60 hov-opacity-100 hov-text-primary">{{ translate('View All Products from This Flash Sale') }}</a>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Countdown for small device -->
            <div class="bg-white mb-3 d-md-none">
             
                <div class="aiz-count-down-circle" end-date="{{ date('Y/m/d H:i:s', $flash_deal->end_date) }}"></div>
            </div>

            <div class="row gutters-5 gutters-md-16">
                <!-- Flash Deals Baner & Countdown -->
                <div class="col-xxl-4 col-lg-5 col-6 h-200px h-md-400px h-lg-475px">
                  
                    <div class="h-100 w-100 w-xl-auto" style="background-image: url('{{ uploaded_asset($flash_deal->banner) }}'); background-size: cover; background-position: center;">
                        <div class="py-5 px-md-3 px-xl-5 d-none d-md-block">
                            <div class="bg-white">
                                <div class="aiz-count-down-circle" end-date="{{ date('Y/m/d H:i:s', $flash_deal->end_date) }}"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Flash Deals Products -->
                <div class="col-xxl-8 col-lg-7 col-6" >
        
                  
                    @php
                        $flash_deals = $flash_deal->flash_deal_products->take(10);
                    @endphp
                    <div class="aiz-carousel border-top @if(count($flash_deals)>8) border-right @endif arrow-inactive-none arrow-x-0" data-items="5" data-xxl-items="5" data-xl-items="3.5" data-lg-items="3" data-md-items="2" data-sm-items="2.5" data-xs-items="2" data-arrows="true" data-dots="false">
                        @php
                            $init = 0 ;
                            $end = 1 ;
                        @endphp
                        @for ($i = 0; $i < 5; $i++)
                            <div class="carousel-box  @if($i==0) border-left @endif">
                            @foreach ($flash_deals as $key => $flash_deal_product)
                                @if ($key >= $init && $key <= $end)
                                    @php
                                        $product = get_single_product($flash_deal_product->product_id);
                                    @endphp
                                    @if ($product != null && $product->published != 0)
                                        @php
                                            $product_url = route('product', $product->slug);
                                            if($product->auction_product == 1) {
                                                $product_url = route('auction-product', $product->slug);
                                            }
                                        @endphp
                                        <div class="h-100px h-md-200px h-lg-auto flash-deal-item position-relative text-center border-bottom @if($i!=4) border-right @endif has-transition hov-shadow-out z-1">
                                            <a href="{{ $product_url }}" class="d-block py-md-3 overflow-hidden hov-scale-img" title="{{  $product->getTranslation('name')  }}">
                                                <!-- Image -->
                                              
                                                <img src="{{ $product->thumbnail != null ? my_asset($product->thumbnail->file_name) : static_asset('assets/img/placeholder.jpg') }}" class="lazyload h-60px h-md-100px h-lg-140px mw-100 mx-auto has-transition"
                                                    alt="{{  $product->getTranslation('name')  }}" onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                                                <!-- Price -->
                                                <div class="fs-10 fs-md-14 mt-md-3 text-center h-md-48px has-transition overflow-hidden pt-md-4 flash-deal-price">
                                                    <span class="d-block text-primary fw-700">{{ home_discounted_base_price($product) }}</span>
                                                    @if(home_base_price($product) != home_discounted_base_price($product))
                                                        <del class="d-block fw-400 text-secondary">{{ home_base_price($product) }}</del>
                                                    @endif
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                @endif
                            @endforeach
                        
                            @php
                                $init += 2;
                                $end += 2;
                            @endphp
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

  


    <!-- Banner section 1 -->

    <!-- Featured Categories -->
    @if (count($featured_categories) > 0)
        <section class="" >
            <div class="container" >
                <!--<div class="bg-white">-->
                    <!-- Top Section -->
                <!--    <div class="d-flex mb-2 mb-md-3 align-items-baseline justify-content-between" style="background-color:#EEEEEE;" >-->
                        <!-- Title -->
                <!--        <h3 class="fs-16 fs-md-20 fw-700  mb-sm-0" style="margin-left:-2.5rem;">-->
                <!--            <span class="">{{ translate('Featured Category') }}</span>-->
                <!--        </h3>-->
                        <!-- Links -->
                      
                <!--    </div>-->
                <!--</div>-->
                <!-- Categories -->
                <div class="bg-white px-sm-3" style="margin-left:-2.5rem;margin-right:-8rem;">
 <div class="container" style="width:18.5rem;disply:flex;float:left;box-shadow: 2px 2px 2px gray;background-color:white;margin:1.7rem;margin-left:-1rem;">
   <h3 style="margin-top:1.5rem;margin-bottom:1rem;"><b>Starting 199 | Sohes & Handbags</b></h3>
  <div class="row">
    <div class="col" style="padding-left:5px !important;padding-right:5px !important;"><a href="https://kolzom.com/category/womens-fashion-nhmh1">
      <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img23/Softlines_JWL_SH_GW_Assets/PCQC/phase3/Men_low_res._SY116_CB575248862_.jpg" style="width:164px;height:102px;margin: 0 0 12px 0;">
      
    </a><span class="mt-2">Mens's Sohes</span></div><br />
    <div class="col" style="padding-left:5px !important;padding-right:5px !important;"><a href="https://kolzom.com/category/womens-fashion-nhmh1">
      <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img23/Softlines_JWL_SH_GW_Assets/PCQC/phase3/Sports_low_res._SY116_CB575250117_.png" style="width:164px;height:102px;margin: 0 0 12px 0;">
     </a> <span class="mt-2">Mens's Sohes</span></div>
    <div class="w-100"></div><br />
    <div class="col" style="padding-left:5px !important;padding-right:5px !important;"><a href="https://kolzom.com/category/womens-fashion-nhmh1">
      <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img23/Softlines_JWL_SH_GW_Assets/PCQC/phase3/Heels_low_res._SY116_CB575248862_.png" style="width:164px;height:102px;margin: 0 0 12px 0;">
     </a> <span class="mt-2">Mens's Sohes</span></div><br />
    <div class="col" style="padding-left:5px !important;padding-right:5px !important;"><a href="https://kolzom.com/category/womens-fashion-nhmh1">
      <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img23/Softlines_JWL_SH_GW_Assets/PCQC/phase3/HB_low_res._SY116_CB575250117_.png" style="width:164px;height:102px;margin: 0 0 12px 0;">
     </a> <span class="mt-2">Mens's Sohes</span></div>
  </div>
   <a href="#"><p style="margin-top:10px;margin-bottom:10px;">See all offers</p></a>
</div>
      <div class="container" style="width:18.5rem;disply:flex;float:left;box-shadow: 2px 2px 2px gray;background-color:white;margin:1.7rem;margin-left:-1rem;">
        <h3 style="margin-top:1rem;margin-bottom:1rem;"><b>Upro 60% off | Style for men</b></h3>
  <div class="row">
    <div class="col" style="padding-left:5px !important;padding-right:5px !important;"><a href="https://kolzom.com/category/womens-fashion-nhmh1">
      <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img23/PB/Oct/Jupiter23/Kitchen/QC_PC_186x116_1._SY116_CB573889351_.jpg" style="width:164px;height:102px;margin: 0 0 12px 0;">
      
    </a><span class="mt-2">Mens's Sohes</span></div><br />
    <div class="col" style="padding-left:5px !important;padding-right:5px !important;"><a href="https://kolzom.com/category/womens-fashion-nhmh1">
      <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img23/PB/Oct/Jupiter23/Kitchen/QC_PC_186x116_7._SY116_CB573889443_.jpg" style="width:164px;height:102px;margin: 0 0 12px 0;">
     </a> <span class="mt-2">Mens's Sohes</span></div>
    <div class="w-100"></div><br />
    <div class="col" style="padding-left:5px !important;padding-right:5px !important;"><a href="https://kolzom.com/category/womens-fashion-nhmh1">
      <img src="https://images-eu.ssl-images-amazon.com/images/G/31/Symbol/2023/Jupiter23/Phase3/Desktop_QC/PB/2_1x._SY116_CB575198763_.png" style="width:164px;height:102px;margin: 0 0 12px 0;">
     </a> <span class="mt-2">Mens's Sohes</span></div><br />
    <div class="col" style="padding-left:5px !important;padding-right:5px !important;"><a href="https://kolzom.com/category/womens-fashion-nhmh1">
      <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img23/PB/Oct/Jupiter23/Kitchen/QC_PC_1_1x._SY116_CB573884255_.jpg" style="width:164px;height:102px;margin: 0 0 12px 0;">
     </a> <span class="mt-2">Mens's Sohes</span></div>
  </div>
        <a href="#"><p style="margin-top:10px;margin-bottom:10px;">See all offers</p></a>
</div>
     <div class="container" style="width:18.5rem;disply:flex;float:left;box-shadow: 2px 2px 2px gray;background-color:white;margin:1.7rem;margin-left:-1rem;">
   <h3 style="margin-top:1rem;margin-bottom:1rem;"><b>Revamp you home in style</b></h3>
  <div class="row">
    <div class="col" style="padding-left:5px !important;padding-right:5px !important;"><a href="https://kolzom.com/category/womens-fashion-nhmh1">
      <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2023/Jupiter/QCandCC/PCQCRevised/Curtain_186x116_QC_PC_5._SY116_CB575816590_.jpg" style="width:164px;height:102px;margin: 0 0 12px 0;">
      
    </a><span class="mt-2">Mens's Sohes</span></div><br />
    <div class="col" style="padding-left:5px !important;padding-right:5px !important;"><a href="https://kolzom.com/category/womens-fashion-nhmh1">
      <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2023/Jupiter/QCandCC/PCQCRevised/Functional_Lighting-1_186_116._SY116_CB575816590_.jpg" style="width:164px;height:102px;margin: 0 0 12px 0;">
     </a> <span class="mt-2">Mens's Sohes</span></div>
    <div class="w-100"></div><br />
    <div class="col" style="padding-left:5px !important;padding-right:5px !important;"><a href="https://kolzom.com/category/womens-fashion-nhmh1">
      <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2023/Jupiter/QCandCC/PCQCRevised/Showpieces-2_186x116._SY116_CB575816590_.jpg" style="width:164px;height:102px;margin: 0 0 12px 0;">
     </a> <span class="mt-2">Mens's Sohes</span></div><br />
    <div class="col" style="padding-left:5px !important;padding-right:5px !important;"><a href="https://kolzom.com/category/womens-fashion-nhmh1">
      <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2023/Jupiter/QCandCC/PCQCRevised/Under-Bed-Storage-1-186x116._SY116_CB575816590_.jpg" style="width:164px;height:102px;margin: 0 0 12px 0;">
     </a> <span class="mt-2">Mens's Sohes</span></div>
  </div>
       <a href="#"><p style="margin-top:10px;margin-bottom:10px;">Explore all</p></a>
</div>
    <div class="container" style="width:18.5rem;disply:flex;float:left;box-shadow: 2px 2px 2px gray;background-color:white;margin:1.7rem;margin-left:-1rem;">
   <h3 style="margin-top:1rem;margin-bottom:1rem;"><b>Smart watch Start at............</b></h3>
  <div class="row">
    <div class="col" style=""><a href="https://kolzom.com/category/womens-fashion-nhmh1">
      <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Central/P3/CEPC/R01_Cepc_Desktop_CC_1x._SY304_CB575146312_.jpg" style="width:16rem;">
      
    </a>
    </div><br />
      </div>
       <a href="#"><p style="margin-top:30px;margin-bottom:69px;">Shop Now</p></a>
</div>
                  
                </div>
            </div>
        </section>   
    @endif

    <!-- Featured Categories1 -->
   
<!-- Flash Sale -->
    @if (count($featured_categories) > 0)
        <section class="mb-2 mb-md-3 mt-2 mt-md-3">
            <div class="container">
                <div class="bg-white">
                    <!-- Top Section -->
                    <div class="d-flex mb-2 mb-md-3 align-items-baseline justify-content-between" style="background-color:#EEEEEE;">
                        <!-- Title -->
                        <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0" style="margin-left:-2.5rem;margin-top:-1rem;">
                            <span class="">{{ translate('Flash Sale') }}</span>
                        </h3>
                        <!-- Links -->
                    </div>
                </div>
                 <div class="row" style="width:75.5rem;background-color:white;margin-left:-2.5rem;margin-right:-50rem;">
                   <div class="col" style="margin:1rem;"><span style="font-size:16px;color: #202020;;">On Sale Now</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-size:14px;color: #202020;"> Ending In</span> &nbsp;&nbsp;&nbsp;&nbsp;
                 
                
                  <div id="clockdiv">
                  <div>
                    <span class="days"></span>

                  </div>
                  <div>
                    <span class="hours"></span>

                  </div>
                  <div>
                    <span class="minutes"></span>

                  </div>
                  <div>
                    <span class="seconds"></span>

                  </div>
                </div>
			</div>
					<style>
                         #clockdiv{
                        font-family: sans-serif;
                        color: #fff;
                        display: inline-block;

                        text-align: center;
                        font-size: 20px;
                      }

                      #clockdiv > div{

                        display: inline-block;
                      }

                      #clockdiv div > span{
                        padding: 5px;
                        border-radius: 3px;
                        background: #2898ff;
                        display: inline-block;
                      }
#as{
  width:98% !important;
                      }
                      .border-left{
                      width:98% !important;
                      }
                   </style>
     
                   <div class="col" style="">
                     <a href="https://kolzom.com/search?sort_by=newest">
                       <button class="btn" style="background-color:#2898ff;color:white;float:right;margin-top:1rem;">Shop More</button></a></div>
              </div>
              <hr >
                <!-- Categories -->
                <div class="px-sm-3" style="margin-left:-2.5rem;margin-top:-2.3rem;margin-right:-3.6rem;">
                    <div class="aiz-carousel sm-gutters-17"  data-items="8" data-xxl-items="8" data-xl-items="6" data-lg-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-arrows="true" data-dots="false" data-autoplay="true" data-infinite="true">
                        @foreach ($featured_categories as $key => $category)
                            <div id="as" class="bg-white carousel-box position-relative text-center has-transition hov-scale-img  border-right border-top border-bottom @if($key == 0) border-left @endif" style="width:95% !important;">
                                <a href="{{ route('products.category', $category->slug) }}" class="d-block">
                                    <img src="{{ uploaded_asset($category->banner) }}" class="lazyload h-130px mx-auto has-transition p-2 p-sm-4 mw-100"
                                        alt="{{ $category->getTranslation('name') }}" onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                                </a>
                                <h6 class="text-dark mb-3 h-40px text-truncate-2">
                                    <a class="text-reset fw-700 fs-14 hov-text-black" href="{{ route('products.category', $category->slug) }}" title="{{  $category->getTranslation('name')  }}">{{ $category->getTranslation('name') }}</a><br />
                              <span class="fw-700 text-black">{{ single_price($category->unit_price) }}</span> 
                              </h6>
                              <div class="fs-15 mt-2">
                                            
                                        </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>   
    @endif
<!-- Flash Sale -->

<!-- Category -->
<style>
h3{
    margin-top:0px !important;
}
</style>
  @if (count($featured_categories) > 0)
        <section class=" bg-gray-600"  >
            <div class="container" >
                <div class="bg-white">
                    <!-- Top Section -->
                    <div class="d-flex align-items-baseline justify-content-between" style="background-color:#EEEEEE;" >
                        <!-- Title -->
                        <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0" style="margin-left:-2.5rem;">
                            <span class="">{{ translate('Category') }}</span>
                        </h3>
                        <!-- Links -->
                       
                    </div>
                </div>
              
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />


<!-- UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit-icons.min.js"></script>

<!-- UIkit SECTION -->
<div class="uk-section uk-section-default d-flex" style="margin-top:-60px;margin-left:-5.2rem;margin-right:-6rem;margin-bottom:-60px; background-color:#EEEEEE;">
    <div class="uk-container" style="width:100%;">
		<div class="uk-margin uk-grid-match uk-grid-collapse uk-child-width-1-4@l uk-text-center" uk-grid style="width:100%;">
			<!-- UIkit CARD 1 -->
			<div class="uk-visible-toggle" tabindex="-1" style="width:13.8%;margin:2px;">
			    <div class="uk-margin uk-card uk-card-default uk-card-hover" >
				    <!-- UIkit CARD BODY -->
					<div class="uk-card-body" >
					    <a class="uk-link-reset uk-position-cover" href="https://kolzom.com/category/motors-tools--diy-ncya7"></a>
						<div class="uk-flex uk-flex-center">
							<span class="uk-icon default"><i class="far fa-newspaper fa-3x"></i></span>
							<span class="uk-icon hover"><i class="far fa-newspaper fa-3x"></i></span>
						</div>
					<img src="https://kolzom.com/public/uploads/all/H8aEDPmSLGvAjQNq86xTw9L3GUj3U4MKobUIo5iA.png" style="height:100px;width:200px;">
                        <p>Motors, Tools & DIY</p>
					</div>
					
				</div>
			</div>
				<div class="uk-visible-toggle" tabindex="-1" style="width:13.8%;margin:2px;">
			    <div class="uk-margin uk-card uk-card-default uk-card-hover" >
				    <!-- UIkit CARD BODY -->
					<div class="uk-card-body" >
					    <a class="uk-link-reset uk-position-cover" href="https://kolzom.com/category/motors-tools--diy-ncya7"></a>
						<div class="uk-flex uk-flex-center">
							<span class="uk-icon default"><i class="far fa-newspaper fa-3x"></i></span>
							<span class="uk-icon hover"><i class="far fa-newspaper fa-3x"></i></span>
						</div>
						<h3 class="uk-card-title"><img src="https://kolzom.com/public/uploads/all/H8aEDPmSLGvAjQNq86xTw9L3GUj3U4MKobUIo5iA.png" style="height:100px;width:200px;"></h3>
                        <p>Motors, Tools & DIY</p>
					</div>
					
				</div>
			</div>
			<!-- UIkit CARD 2 -->
			<div class="uk-visible-toggle" tabindex="-1" style="width:13.8%;margin:2px;">
			    <div class="uk-margin uk-card uk-card-default uk-card-hover">
				    <!-- UIkit CARD BODY -->
					<div class="uk-card-body">
					    <a class="uk-link-reset uk-position-cover" href="https://kolzom.com/category/Sports--Outdoor-TNRTE"></a>
						<div class="uk-flex uk-flex-center">
							<span class="uk-icon default"><i class="fas fa-ribbon fa-3x"></i></span>
							<span class="uk-icon hover"><i class="fas fa-ribbon fa-3x"></i></span>
						</div>
						<h3 class="uk-card-title"><img src="https://kolzom.com/public/uploads/all/mhEHingLCz5aNRine0NSRHYyHcWWVrJAL114ZBeA.png" style="height:100px;width:200px;"></h3>
                        <p>Sports & Outdoor</p>
					</div>
			
				</div>
			</div>
			<!-- UIkit CARD 3 -->
			<div class="uk-visible-toggle" tabindex="-1" style="width:13.8%;margin:2px;">
			    <div class="uk-margin uk-card uk-card-default uk-card-hover">
				    <!-- UIkit CARD BODY -->
					<div class="uk-card-body">
					    <a class="uk-link-reset uk-position-cover" href="https://kolzom.com/category/Home--Lifestyle-HGYFD"></a>
						<div class="uk-flex uk-flex-center">
							<span class="uk-icon default"><i class="fab fa-joomla fa-3x"></i></span>
							<span class="uk-icon hover"><i class="fab fa-joomla fa-3x"></i></span>
						</div>
						<h3 class="uk-card-title"><img src="https://kolzom.com/public/uploads/all/rMchcHxPSYh29GyhyNTXVrPY2MvRiHLtGuPH3W99.png" style="height:100px;width:200px;"></h3>
                        <p>Home & Lifystyle</p>
					</div>
				
			
				</div>
			</div>
			<!-- UIkit CARD 4 -->
			<div class="uk-visible-toggle" tabindex="-1" style="width:13.8%;margin:2px;">
			    <div class="uk-margin uk-card uk-card-default uk-card-hover">
				    <!-- UIkit CARD BODY -->
					<div class="uk-card-body">
					    <a class="uk-link-reset uk-position-cover" href="https://kolzom.com/category/Babies--Toys-FwsYt"></a>
						<div class="uk-flex uk-flex-center">
							<span class="uk-icon default"><i class="far fa-comment-dots fa-3x"></i></span>
							<span class="uk-icon hover"><i class="far fa-comment-dots fa-3x"></i></span>
						</div>
						<h3 class="uk-card-title"><img src="https://kolzom.com/public/uploads/all/yYnQbVbsAXnmuOScI7rmTo6l0nEtMW34XWyGqSrj.png" style="height:100px;width:200px;"></h3>
                        <p>Babies & Toy</p>
					</div>
					
			
				</div>
			</div>
			<!-- UIkit CARD 5 -->
			<div class="uk-visible-toggle" tabindex="-1" style="width:13.8%;margin:2px;">
			    <div class="uk-margin uk-card uk-card-default uk-card-hover">
				    <!-- UIkit CARD BODY -->
					<div class="uk-card-body">
					    <a class="uk-link-reset uk-position-cover" href="https://kolzom.com/category/Groceries--Pets-FbTb6"></a>
						<div class="uk-flex uk-flex-center">
							<span class="uk-icon default"><i class="fas fa-code fa-3x"></i></span>
							<span class="uk-icon hover"><i class="fas fa-code fa-3x"></i></span>
						</div>
						<h3 class="uk-card-title"><img src="https://kolzom.com/public/uploads/all/VqR2ozSZqVXwvBewji3F1bczFa9BvRBpPz4Cztu0.png" style="height:100px;width:200px;"></h3>
                        <p>Groceries & Pets</p>
					</div>
				</div>
			</div>
			<!-- UIkit CARD 6 -->
			<div class="uk-visible-toggle" tabindex="-1" style="width:13.8%;margin:2px;">
			    <div class="uk-margin uk-card uk-card-default uk-card-hover">
				    <!-- UIkit CARD BODY -->
					<div class="uk-card-body">
					    <a class="uk-link-reset uk-position-cover" href="https://kolzom.com/category/electronic-accessories-jph6e"></a>
						<div class="uk-flex uk-flex-center">
							<span class="uk-icon default"><i class="fas fa-cogs fa-3x"></i></span>
							<span class="uk-icon hover"><i class="fas fa-cogs fa-3x"></i></span>
						</div>
						<h3 class="uk-card-title"><img src="https://kolzom.com/public/uploads/all/raizcQPdwwAwgYvfnEbmxwpdMWDiVHXqn80omUgQ.png" style="height:100px;width:200px;"></h3>
                        <p>Electronic Accessories</p>
					</div>
					
			
				</div>
			</div>
			<!-- UIkit CARD 7 -->
			<div class="uk-visible-toggle" tabindex="-1" style="width:13.8%;margin:2px;">
			    <div class="uk-margin uk-card uk-card-default uk-card-hover">
				    <!-- UIkit CARD BODY -->
					<div class="uk-card-body">
					    <a class="uk-link-reset uk-position-cover" href="https://kolzom.com/category/TV--Home-Appliances-2Y7XN"></a>
						<div class="uk-flex uk-flex-center">
							<span class="uk-icon default"><i class="fas fa-server fa-3x"></i></span>
							<span class="uk-icon hover"><i class="fas fa-server fa-3x"></i></span>
						</div>
						<h3 class="uk-card-title"><img src="https://kolzom.com/public/uploads/all/8t1vb4QdRCUppVeZ0nsAcwgqKNPzrjRbgIGKANw5.png" style="height:100px;width:200px;"></h3>
                        <p>TV & Home Appliances</p>
					</div>
				
				
				</div>
			</div>
			<!-- UIkit CARD 8 -->
			<div class="uk-visible-toggle" tabindex="-1" style="width:13.8%;margin:2px;">
			    <div class="uk-margin uk-card uk-card-default uk-card-hover">
				    <!-- UIkit CARD BODY -->
					<div class="uk-card-body">
					    <a class="uk-link-reset uk-position-cover" href="https://kolzom.com/category/Electronic-Devices-BQdoW"></a>
						<div class="uk-flex uk-flex-center">
							<span class="uk-icon default"><i class="fas fa-film fa-3x"></i></span>
							<span class="uk-icon hover"><i class="fas fa-film fa-3x"></i></span>
						</div>
						<h3 class="uk-card-title"><img src="https://kolzom.com/public/uploads/all/E952tY4Ek1W4vZe96VQnTeZLKYUTJYaLnJhhSisd.png" style="height:100px;width:200px;"></h3>
                        <p>Electronic Devices</p>
					</div>
					
				</div>
			</div>
          
          	<!-- UIkit CARD 9 -->
			<div class="uk-visible-toggle" tabindex="-1" style="width:13.8%;margin:2px;">
			    <div class="uk-margin uk-card uk-card-default uk-card-hover">
				    <!-- UIkit CARD BODY -->
					<div class="uk-card-body">
					    <a class="uk-link-reset uk-position-cover" href="https://kolzom.com/category/Electronic-Devices-BQdoW"></a>
						<div class="uk-flex uk-flex-center">
							<span class="uk-icon default"><i class="fas fa-film fa-3x"></i></span>
							<span class="uk-icon hover"><i class="fas fa-film fa-3x"></i></span>
						</div>
						<h3 class="uk-card-title"><img src="https://kolzom.com/public/uploads/all/E952tY4Ek1W4vZe96VQnTeZLKYUTJYaLnJhhSisd.png" style="height:100px;width:200px;"></h3>
                        <p>Electronic Devices</p>
					</div>
              
				</div>
			</div>
          
          	<!-- UIkit CARD 10 -->
			<div class="uk-visible-toggle" tabindex="-1" style="width:13.8%;margin:2px;">
			    <div class="uk-margin uk-card uk-card-default uk-card-hover">
				    <!-- UIkit CARD BODY -->
					<div class="uk-card-body">
					    <a class="uk-link-reset uk-position-cover" href="https://kolzom.com/category/Electronic-Devices-BQdoW"></a>
						<div class="uk-flex uk-flex-center">
							<span class="uk-icon default"><i class="fas fa-film fa-3x"></i></span>
							<span class="uk-icon hover"><i class="fas fa-film fa-3x"></i></span>
						</div>
						<h3 class="uk-card-title"><img src="https://kolzom.com/public/uploads/all/E952tY4Ek1W4vZe96VQnTeZLKYUTJYaLnJhhSisd.png" style="height:100px;width:200px;"></h3>
                        <p>Electronic Devices</p>
					</div>
					
				</div>
			</div>
            	<!-- UIkit CARD 11 -->
			<div class="uk-visible-toggle" tabindex="-1" style="width:13.8%;margin:2px;">
			    <div class="uk-margin uk-card uk-card-default uk-card-hover">
				    <!-- UIkit CARD BODY -->
					<div class="uk-card-body">
					    <a class="uk-link-reset uk-position-cover" href="https://kolzom.com/category/Electronic-Devices-BQdoW"></a>
						<div class="uk-flex uk-flex-center">
							<span class="uk-icon default"><i class="fas fa-film fa-3x"></i></span>
							<span class="uk-icon hover"><i class="fas fa-film fa-3x"></i></span>
						</div>
						<h3 class="uk-card-title"><img src="https://kolzom.com/public/uploads/all/E952tY4Ek1W4vZe96VQnTeZLKYUTJYaLnJhhSisd.png" style="height:100px;width:200px;"></h3>
                        <p>Electronic Devices</p>
					</div>
					
				</div>
			</div>
            	<!-- UIkit CARD 12 -->
			<div class="uk-visible-toggle" tabindex="-1" style="width:13.8%;margin:2px;">
			    <div class="uk-margin uk-card uk-card-default uk-card-hover">
				    <!-- UIkit CARD BODY -->
					<div class="uk-card-body">
					    <a class="uk-link-reset uk-position-cover" href="https://kolzom.com/category/Electronic-Devices-BQdoW"></a>
						<div class="uk-flex uk-flex-center">
							<span class="uk-icon default"><i class="fas fa-film fa-3x"></i></span>
							<span class="uk-icon hover"><i class="fas fa-film fa-3x"></i></span>
						</div>
						<h3 class="uk-card-title"><img src="https://kolzom.com/public/uploads/all/E952tY4Ek1W4vZe96VQnTeZLKYUTJYaLnJhhSisd.png" style="height:100px;width:200px;"></h3>
                        <p>Electronic Devices</p>
					</div>
					
				</div>
			</div>
            	<!-- UIkit CARD 13 -->
			<div class="uk-visible-toggle" tabindex="-1" style="width:13.8%;margin:2px;">
			    <div class="uk-margin uk-card uk-card-default uk-card-hover">
				    <!-- UIkit CARD BODY -->
					<div class="uk-card-body">
					    <a class="uk-link-reset uk-position-cover" href="https://kolzom.com/category/Electronic-Devices-BQdoW"></a>
						<div class="uk-flex uk-flex-center">
							<span class="uk-icon default"><i class="fas fa-film fa-3x"></i></span>
							<span class="uk-icon hover"><i class="fas fa-film fa-3x"></i></span>
						</div>
						<h3 class="uk-card-title"><img src="https://kolzom.com/public/uploads/all/E952tY4Ek1W4vZe96VQnTeZLKYUTJYaLnJhhSisd.png" style="height:100px;width:200px;"></h3>
                        <p>Electronic Devices</p>
					</div>
					
				</div>
			</div>
            	<!-- UIkit CARD 14 -->
			<div class="uk-visible-toggle" tabindex="-1" style="width:13.8%;margin:2px;">
			    <div class="uk-margin uk-card uk-card-default uk-card-hover">
				    <!-- UIkit CARD BODY -->
					<div class="uk-card-body">
					    <a class="uk-link-reset uk-position-cover" href="https://kolzom.com/category/Electronic-Devices-BQdoW"></a>
						<div class="uk-flex uk-flex-center">
							<span class="uk-icon default"><i class="fas fa-film fa-3x"></i></span>
							<span class="uk-icon hover"><i class="fas fa-film fa-3x"></i></span>
						</div>
						<h3 class="uk-card-title"><img src="https://kolzom.com/public/uploads/all/E952tY4Ek1W4vZe96VQnTeZLKYUTJYaLnJhhSisd.png" style="height:100px;width:200px;"></h3>
                        <p>Electronic Devices</p>
					</div>
					
				</div>
			</div>
				<div class="uk-visible-toggle" tabindex="-1" style="width:13.8%;margin:2px;">
			    <div class="uk-margin uk-card uk-card-default uk-card-hover">
				    <!-- UIkit CARD BODY -->
					<div class="uk-card-body">
					    <a class="uk-link-reset uk-position-cover" href="https://kolzom.com/category/Electronic-Devices-BQdoW"></a>
						<div class="uk-flex uk-flex-center">
							<span class="uk-icon default"><i class="fas fa-film fa-3x"></i></span>
							<span class="uk-icon hover"><i class="fas fa-film fa-3x"></i></span>
						</div>
						<h3 class="uk-card-title"><img src="https://kolzom.com/public/uploads/all/E952tY4Ek1W4vZe96VQnTeZLKYUTJYaLnJhhSisd.png" style="height:100px;width:200px;"></h3>
                        <p>Electronic Devices</p>
					</div>
					
				</div>
			</div>
		
					
		</div>
	</div>
</div>
                  
                  
                 
             
            </div>
        </section> 

<style>
  .uk-visible-toggle{
    width:11.9% !important
  }
.uk-card-default.uk-card-hover:hover {
    box-shadow: 0 2px 2px rgba(0, 0, 0, 0.5) !important;
    z-index: 1;
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
}


  @media (min-width: 600px) {
    .uk-card-body {
	    padding: 10px 10px !important;
	}
}
  @media (min-width: 600px) {
    .uk-card-footer {
	    padding: 15px 15px !important;
	}
}
    @media (min-width: 600px) {
    .uk-visible-toggle {
	    width:100%;
	}
}
</style>

    @endif
    <!-- Banner Section 2 -->
    @if (get_setting('home_banner2_images') != null)
    <div class="mb-2 mb-md-3 mt-2 mt-md-3">
        <div class="container">
            @php
                $banner_2_imags = json_decode(get_setting('home_banner2_images'));
                $data_md = count($banner_2_imags) >= 1 ? 2 : 1;
                
            @endphp
            <div class="aiz-carousel gutters-16 overflow-hidden arrow-inactive-none arrow-dark arrow-x-15" data-items="{{ count($banner_2_imags) }}" data-xxl-items="{{ count($banner_2_imags) }}" data-xl-items="{{ count($banner_2_imags) }}" data-lg-items="{{ $data_md }}" data-md-items="{{ $data_md }}" data-sm-items="1" data-xs-items="1" data-arrows="true" data-dots="false">
                @foreach ($banner_2_imags as $key => $value)
                    <div class="carousel-box overflow-hidden">
                        <a href="{{ json_decode(get_setting('home_banner2_links'), true)[$key] }}" class="d-block text-reset overflow-hidden">
                            <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ uploaded_asset($value) }}" 
                            alt="{{ env('APP_NAME') }} promo" class="img-fluid lazyload w-100 has-transition" onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif

    <!-- Best Selling  -->
    <div id="section_best_selling">
      
    </div>

    <!-- New Products -->
    <div id="section_newest">
       
    </div>

  <!--@if (count($featured_categories) > 0)-->
  <!--      <section class="mb-2 mb-md-3 mt-2 mt-md-3">-->
  <!--          <div class="container">-->
             
  <!--              <div class="bg-white">-->
                    <!-- Top Section -->
  <!--                  <div class="d-flex mb-2 mb-md-3 align-items-baseline justify-content-between" style="background-color:#EEEEEE;">-->
                        <!-- Title -->
  <!--                      <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0" style="margin-left:-2.5rem;margin-top:-1rem;">-->
  <!--                          <span class="">{{ translate('Just For You') }}</span>-->
  <!--                      </h3>-->
                        <!-- Links -->
                    
                        
  <!--                  </div>-->
  <!--              </div>-->
                <!-- Categories -->
  <!--              <div class="bg-white px-sm-3" style="margin-left:-2.5rem;margin-top:1rem;margin-right:-3.6rem;">-->
  <!--                  <div class="aiz-carousel sm-gutters-17" data-items="8" data-xxl-items="8" data-xl-items="6" data-lg-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2"  data-infinite="true">-->
  <!--                      @foreach ($featured_categories as $key => $category)-->
  <!--                          <div class=" position-relative text-center has-transition hov-scale-img  border-right border-top border-bottom  @if($key == 0) border-left @endif">-->
  <!--                              <a href="{{ route('products.category', $category->slug) }}" class="d-block">-->
  <!--                                  <img src="{{ uploaded_asset($category->banner) }}" class="lazyload h-130px mx-auto has-transition p-2 p-sm-4 mw-100"-->
  <!--                                      alt="{{ $category->getTranslation('name') }}" onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">-->
  <!--                              </a>-->
  <!--                              <h6 class="text-dark mb-3 h-40px text-truncate-2">-->
  <!--                                  <a class="text-reset fw-700 fs-14 hov-text-black" href="{{ route('products.category', $category->slug) }}" title="{{  $category->getTranslation('name')  }}">{{ $category->getTranslation('name') }}</a><br />-->
  <!--                            <span class="fw-700 text-black">{{ single_price($category->unit_price) }}</span> -->
  <!--                            </h6>-->
  <!--<div class="rate">-->
  <!--  <input type="radio" id="star5" name="rate" value="5" />-->
  <!--  <label for="star5" title="text">5 stars</label>-->
  <!--  <input type="radio" id="star4" name="rate" value="4" />-->
  <!--  <label for="star4" title="text">4 stars</label>-->
  <!--  <input type="radio" id="star3" name="rate" value="3" />-->
  <!--  <label for="star3" title="text">3 stars</label>-->
  <!--  <input type="radio" id="star2" name="rate" value="2" />-->
  <!--  <label for="star2" title="text">2 stars</label>-->
  <!--  <input type="radio" id="star1" name="rate" value="1" />-->
  <!--  <label for="star1" title="text">1 star</label>-->
  <!--  <p class="rv">( 0 )</p>-->
  <!--</div>-->
   
  <!--                            <div class="fs-15 mt-2">-->
                                            
  <!--                                      </div>-->
  <!--                          </div>-->
  <!--                      @endforeach-->
  <!--                  </div>-->
  <!--              </div>-->
  <!--          </div>-->
  <!--      </section>   -->
  <!--  @endif-->
<style>
  .rv{
    color:black;
    display:flex;
    position:absolute;
  }
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:20px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #2898ff;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #2898ff;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}


</style>

    <!-- Banner Section 3 -->


    <!-- Auction Product -->
    @if(addon_is_activated('auction'))
        <div id="auction_products">

        </div>
    @endif

   

@endsection

@section('script')
<script>
   // Select all elements with the "i" tag and store them in a NodeList called "stars"
const stars = document.querySelectorAll(".stars i");

// Loop through the "stars" NodeList
stars.forEach((star, index1) => {
  // Add an event listener that runs a function when the "click" event is triggered
  star.addEventListener("click", () => {
    // Loop through the "stars" NodeList Again
    stars.forEach((star, index2) => {
      // Add the "active" class to the clicked star and any stars with a lower index
      // and remove the "active" class from any stars with a higher index
      index1 >= index2 ? star.classList.add("active") : star.classList.remove("active");
    });
  });
});
</script>
    <script>
        $(document).ready(function(){
            $.post('{{ route('home.section.featured') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_featured').html(data);
                AIZ.plugins.slickCarousel();
            });

            $.post('{{ route('home.section.todays_deal') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#todays_deal').html(data);
                AIZ.plugins.slickCarousel();
            });

            $.post('{{ route('home.section.best_selling') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_best_selling').html(data);
                AIZ.plugins.slickCarousel();
            });

            $.post('{{ route('home.section.newest_products') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_newest').html(data);
                AIZ.plugins.slickCarousel();
            });

            $.post('{{ route('home.section.auction_products') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#auction_products').html(data);
                AIZ.plugins.slickCarousel();
            });

            $.post('{{ route('home.section.home_categories') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_home_categories').html(data);
                AIZ.plugins.slickCarousel();
            });
            
            $.post('{{ route('home.section.best_sellers') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_best_sellers').html(data);
                AIZ.plugins.slickCarousel();
            });
        });
    </script>

<script>
function getTimeRemaining(endtime) {
  const total = Date.parse(endtime) - Date.parse(new Date());
  const seconds = Math.floor((total / 1000) % 60);
  const minutes = Math.floor((total / 1000 / 60) % 60);
  const hours = Math.floor((total / (1000 * 60 * 60)) % 24);
  const days = Math.floor(total / (1000 * 60 * 60 * 24));
  
  return {
    total,
    days,
    hours,
    minutes,
    seconds
  };
}

function initializeClock(id, endtime) {
  const clock = document.getElementById(id);
  const daysSpan = clock.querySelector('.days');
  const hoursSpan = clock.querySelector('.hours');
  const minutesSpan = clock.querySelector('.minutes');
  const secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    const t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  const timeinterval = setInterval(updateClock, 1000);
}

const deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
initializeClock('clockdiv', deadline);
</script>


@endsection
