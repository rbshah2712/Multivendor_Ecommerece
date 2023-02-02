@php
$vendors = App\Models\User::where('status','active')->where('role','vendor')->orderBy('id','DESC')->limit(4)->get(); 
 @endphp
<section class="section-padding mb-30">
    <div class="container">
    <div class="section-title wow animate__animated animate__fadeIn" data-wow-delay="0">
        <h3 class="">Vendor</h3>
        <a class="show-all" href="{{route('vendor.all')}}">
            All Vendors
            <i class="fi-rs-angle-right"></i>
        </a>
    </div>
    <div class="row vendor-grid">
        @foreach($vendors as $item)
        <div class="col-lg-3 col-md-6 col-12 col-sm-6">
            <div class="vendor-wrap mb-40">
                <div class="vendor-img-action-wrap">
                    <div class="vendor-img">
                        <a href="{{url('vendor/details/'.$item->id)}}">
                            <img class="default-img" src="{{!empty($item->photo)? url('upload/vendor_images/'.$item->photo) : url('upload/no-image.png')}}" alt="" />
                        </a>
                    </div>
                    <div class="product-badges product-badges-position product-badges-mrg">
                        <span class="hot">Mall</span>
                    </div>
                </div>
                <div class="vendor-content-wrap">
                    <div class="d-flex justify-content-between align-items-end mb-30">
                        <div>
                            <div class="product-category">
                                <span class="text-muted">Since {{$item->vendor_join}}</span>
                            </div>
                            <h4 class="mb-5"><a href="{{url('vendor/details/'.$item->id)}}">{{$item->name}}</a></h4>
                            <div class="product-rate-cover">
                                @php
                                    $products = App\Models\Product::where('vendor_id',$item->id)->get(); 
                                @endphp
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                        </div>
                        <div class="mb-10">
                            <span class="font-small total-product">{{count($products)}} products</span>
                        </div>
                    </div>
                    <div class="vendor-info mb-30">
                        <ul class="contact-infor text-muted">
                            
                            <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us:</strong><span>{{$item->phone}}</span></li>
                        </ul>
                    </div>
                    <a href="{{url('vendor/details/'.$item->id)}}" class="btn btn-xs">Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                </div>
            </div>
        </div>
        @endforeach
        <!--end vendor card-->
    </div>
    </div>
</section>