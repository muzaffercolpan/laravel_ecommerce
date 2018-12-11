@extends('layouts.front')

@section('meta_title',$product->meta_title)



@section('content')

    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content bg padding-y-sm">
        <div class="container">
            <nav class="mb-3">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    @foreach($product->categories as $category)
                    <li class="breadcrumb-item"><a href="{{url('/category/'.$category->slug)}}">{{$category->name}}</a></li>
                    @endforeach
                        <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-xl-10 col-md-9 col-sm-12">


                    <main class="card">
                        <div class="row no-gutters">
                            <aside class="col-sm-6 border-right">
                                <article class="gallery-wrap">
                                    <div class="img-big-wrap">
                                        <div> <a href="{{URL::to('/') }}/uploads/products/{{$product['image_1']}}" data-fancybox=""><img src="{{URL::to('/') }}/uploads/products/{{$product['image_1']}}"></a></div>
                                    </div> <!-- slider-product.// -->
                                    <div class="img-small-wrap">
                                        <div class="item-gallery"> <img src="images/items/1.jpg"></div>
                                        <div class="item-gallery"> <img src="images/items/2.jpg"></div>
                                        <div class="item-gallery"> <img src="images/items/3.jpg"></div>
                                        <div class="item-gallery"> <img src="images/items/4.jpg"></div>
                                    </div> <!-- slider-nav.// -->
                                </article> <!-- gallery-wrap .end// -->
                            </aside>
                            <aside class="col-sm-6">
                                <article class="card-body">
                                    <!-- short-info-wrap -->
                                    <h3 class="title mb-3">{{$product->name}}</h3>

                                    <div class="mb-3">
                                        <var class="price h3 text-warning">
                                            <span class="currency">$</span><span class="num">{{$product->price}}</span>
                                        </var>
                                        {{--<span>/per kg</span>--}}
                                    </div> <!-- price-detail-wrap .// -->
                                    <dl>
                                        <dt>Description</dt>
                                        <dd>{!! $product->body_short !!}</dd>
                                    </dl>
                                    <dl class="row">
                                        <dt class="col-sm-3">Model#</dt>
                                        <dd class="col-sm-9">12345611</dd>

                                        <dt class="col-sm-3">Color</dt>
                                        <dd class="col-sm-9">Black and white </dd>

                                        <dt class="col-sm-3">Delivery</dt>
                                        <dd class="col-sm-9">Russia, USA, and Europe </dd>
                                    </dl>
                                    <div class="rating-wrap">

                                        <ul class="rating-stars">
                                            <li style="width:80%" class="stars-active">
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </li>
                                        </ul>
                                        <div class="label-rating">132 reviews</div>
                                        <div class="label-rating">154 orders </div>
                                    </div> <!-- rating-wrap.// -->
                                    <hr>
                                    {!! Form::open(['method'=>'POST', 'action'=>'CartController@add']) !!}
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <dl class="dlist-inline">
                                                <dt>Quantity: </dt>
                                                <dd>

                                                    <select class="form-control form-control-sm" style="width:70px;" name="quantity">
                                                        @for($i=1;$i<1000;$i++)
                                                            <option value="{{$i}}">{{$i}}</option>
                                                        @endfor
                                                    </select>
                                                </dd>
                                            </dl>  <!-- item-property .// -->
                                        </div> <!-- col.// -->
                                        <div class="col-sm-7">
                                            <dl class="dlist-inline">
                                                <dt>Size: </dt>
                                                <dd>
                                                    <label class="form-check form-check-inline">
                                                        <input class="form-check-input" name="inlineRadioOptions" id="inlineRadio2" value="option2" type="radio">
                                                        <span class="form-check-label">SM</span>
                                                    </label>
                                                    <label class="form-check form-check-inline">
                                                        <input class="form-check-input" name="inlineRadioOptions" id="inlineRadio2" value="option2" type="radio">
                                                        <span class="form-check-label">MD</span>
                                                    </label>
                                                    <label class="form-check form-check-inline">
                                                        <input class="form-check-input" name="inlineRadioOptions" id="inlineRadio2" value="option2" type="radio">
                                                        <span class="form-check-label">XXL</span>
                                                    </label>
                                                </dd>
                                            </dl>  <!-- item-property .// -->
                                        </div> <!-- col.// -->
                                    </div> <!-- row.// -->
                                    <hr>


                                        <div class="form-group">
                                            {!! Form::hidden('id', $product->id ) !!}
                                        </div>

                                        <div class="form-group">
                                            {!! Form::submit('ADD TO CART', ['class'=>'btn btn-warning']) !!}
                                        </div>

                                        {!! Form::close() !!}
                                    {{--<a href="#" class="btn  btn-warning"> <i class="fa fa-cart-plus"></i> ADD TO CART </a>--}}
                                    <!-- short-info-wrap .// -->
                                </article> <!-- card-body.// -->
                            </aside> <!-- col.// -->
                        </div> <!-- row.// -->
                    </main> <!-- card.// -->

                    <!-- PRODUCT DETAIL -->
                    <article class="card mt-3">
                        <div class="card-body">
                            {!! $product->body !!}
                        </div> <!-- card-body.// -->
                    </article> <!-- card.// -->

                    <!-- PRODUCT DETAIL .// -->

                </div> <!-- col // -->
                <aside class="col-xl-2 col-md-3 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            Trade Assurance
                        </div>
                        <div class="card-body small">
                            <span>China | Trading Company</span>
                            <hr>
                            Transaction Level: Good <br>
                            Supplier Assessments: Best
                            <hr>
                            11 Transactions $330,000+
                            <hr>
                            Response Time 24h <br>
                            Response Rate: 94%  <br>
                            <hr>
                            <a href="">Visit pofile</a>

                        </div> <!-- card-body.// -->
                    </div> <!-- card.// -->
                    <div class="card mt-3">
                        <div class="card-header">
                            You may like
                        </div>
                        <div class="card-body row">
                            <div class="col-md-12 col-sm-3">
                                <figure class="item border-bottom mb-3">
                                    <a href="#" class="img-wrap"> <img src="images/items/2.jpg" class="img-md"></a>
                                    <figcaption class="info-wrap">
                                        <a href="#" class="title">The name of product</a>
                                        <div class="price-wrap mb-3">
                                            <span class="price-new">$280</span> <del class="price-old">$280</del>
                                        </div> <!-- price-wrap.// -->
                                    </figcaption>
                                </figure> <!-- card-product // -->
                            </div> <!-- col.// -->
                            <div class="col-md-12 col-sm-3">
                                <figure class="item border-bottom mb-3">
                                    <a class="img-wrap"> <img src="images/items/3.jpg" class="img-md"></a>
                                    <figcaption class="info-wrap">
                                        <a href="#" href="#" class="title">The name of product</a>
                                        <div class="price-wrap mb-3">
                                            <span class="price-new">$280</span>
                                        </div> <!-- price-wrap.// -->
                                    </figcaption>
                                </figure> <!-- card-product // -->
                            </div> <!-- col.// -->
                            <div class="col-md-12 col-sm-3">
                                <figure class="item border-bottom mb-3">
                                    <a href="#" class="img-wrap"> <img src="images/items/4.jpg" class="img-md"></a>
                                    <figcaption class="info-wrap">
                                        <a href="#" class="title">The name of product</a>
                                        <div class="price-wrap mb-3">
                                            <span class="price-new">$280</span>
                                        </div> <!-- price-wrap.// -->
                                    </figcaption>
                                </figure> <!-- card-product // -->
                            </div> <!-- col.// -->
                        </div> <!-- card-body.// -->
                    </div> <!-- card.// -->
                </aside> <!-- col // -->
            </div> <!-- row.// -->



        </div><!-- container // -->
    </section>
    <!-- ========================= SECTION CONTENT .END// ========================= -->

@endsection