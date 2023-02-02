<section class="section-padding mb-30">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                <h4 class="section-title style-1 mb-30 animated animated">Hot Deals</h4>
                <div class="product-list-small animated animated">
                    @foreach($hot_deals as $deal)
                    <article class="row align-items-center hover-up">
                        <figure class="col-md-4 mb-0">
                            <a href="{{url('product/details/'.$deal->id.'/'.$deal->product_slug)}}"><img src="{{asset($deal->product_thumbnail)}}" alt="" /></a>
                        </figure>
                        <div class="col-md-8 mb-0">
                            <h6>
                                <a href="{{url('product/details/'.$deal->id.'/'.$deal->product_slug)}}">{{$deal->product_name}}</a>
                            </h6>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            @if($deal->discount_price == NULL)
                                    <div class="product-price">
                                        <span>${{$deal->selling_price}}</span>
                                    </div>
                                    @else
                                    <div class="product-price">
                                        <span>${{$deal->discount_price}}</span>
                                        <span class="old-price">${{$deal->selling_price}}</span>
                                    </div>
                                    @endif
                        </div>
                    </article>
                   @endforeach
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-md-0 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                <h4 class="section-title style-1 mb-30 animated animated">Special Offer</h4>
                <div class="product-list-small animated animated">
                    @foreach($special_offer as $offer)
                    <article class="row align-items-center hover-up">
                        <figure class="col-md-4 mb-0">
                            <a href="{{url('product/details/'.$offer->id.'/'.$offer->product_slug)}}"><img src="{{asset($offer->product_thumbnail)}}" alt="" /></a>
                        </figure>
                        <div class="col-md-8 mb-0">
                            <h6>
                                <a href="{{url('product/details/'.$offer->id.'/'.$offer->product_slug)}}">{{$offer->product_name}}</a>
                            </h6>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            @if($offer->discount_price == NULL)
                                    <div class="product-price">
                                        <span>${{$offer->selling_price}}</span>
                                    </div>
                                    @else
                                    <div class="product-price">
                                        <span>${{$offer->discount_price}}</span>
                                        <span class="old-price">${{$offer->selling_price}}</span>
                                    </div>
                                    @endif
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 d-none d-lg-block wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                <h4 class="section-title style-1 mb-30 animated animated">Recently added</h4>
                <div class="product-list-small animated animated">
                    @foreach($new as $recent)
                    <article class="row align-items-center hover-up">
                        <figure class="col-md-4 mb-0">
                            <a href="{{url('product/details/'.$recent->id.'/'.$recent->product_slug)}}"><img src="{{asset($recent->product_thumbnail)}}" alt="" /></a>
                        </figure>
                        <div class="col-md-8 mb-0">
                            <h6>
                                <a href="{{url('product/details/'.$recent->id.'/'.$recent->product_slug)}}">{{$recent->product_name}}</a>
                            </h6>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            @if($recent->discount_price == NULL)
                                    <div class="product-price">
                                        <span>${{$recent->selling_price}}</span>
                                    </div>
                                    @else
                                    <div class="product-price">
                                        <span>${{$recent->discount_price}}</span>
                                        <span class="old-price">${{$recent->selling_price}}</span>
                                    </div>
                                    @endif
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 d-none d-xl-block wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                <h4 class="section-title style-1 mb-30 animated animated">Special Deals</h4>
                <div class="product-list-small animated animated">
                    @foreach($special_deals as $special)
                    <article class="row align-items-center hover-up">
                        <figure class="col-md-4 mb-0">
                            <a href="{{url('product/details/'.$special->id.'/'.$special->product_slug)}}"><img src="{{asset($special->product_thumbnail)}}" alt="" /></a>
                        </figure>
                        <div class="col-md-8 mb-0">
                            <h6>
                                <a href="{{url('product/details/'.$special->id.'/'.$special->product_slug)}}">{{$special->product_name}}</a>
                            </h6>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            @if($recent->discount_price == NULL)
                                    <div class="product-price">
                                        <span>${{$special->selling_price}}</span>
                                    </div>
                                    @else
                                    <div class="product-price">
                                        <span>${{$special->discount_price}}</span>
                                        <span class="old-price">${{$special->selling_price}}</span>
                                    </div>
                                    @endif
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>