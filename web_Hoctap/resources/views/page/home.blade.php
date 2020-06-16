@extends('master')
@section('content')
    <div class="fullwidthbanner-container">
        <div class="fullwidthbanner">
            <div class="bannercontainer" >
                <div class="banner" >
                    <ul>
                        <!-- THE FIRST SLIDE -->
                        <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                                <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/assets/dest/images/thumbs/ht1.jpg" data-src="source/assets/dest/images/thumbs/ht1.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/assets/dest/images/thumbs/ht1.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                </div>
                            </div>

                        </li>
                        <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                                <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/assets/dest/images/thumbs/ht1.jpg" data-src="source/assets/dest/images/thumbs/ht1.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/assets/dest/images/thumbs/ht1.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                </div>
                            </div>

                        <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                                <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/assets/dest/images/thumbs/ht1.jpg" data-src="source/assets/dest/images/thumbs/ht1.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/assets/dest/images/thumbs/ht1.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                </div>
                            </div>

                        </li>

                        <li data-transition="boxfade" data-slotamount="20" class="active-revslide current-sr-slide-visible" style="width: 100%; height: 100%; overflow: hidden; visibility: inherit; opacity: 1; z-index: 20;">
                            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                                <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/assets/dest/images/thumbs/ht1.jpg" data-src="source/assets/dest/images/thumbs/ht1.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/assets/dest/images/thumbs/ht1.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>

            <div class="tp-bannertimer"></div>
        </div>
    </div>
    <div class="container">
        {{--<div id="content" class="space-top-none">--}}
            {{--<div class="main-content">--}}
                {{--<div class="space60">&nbsp;</div>--}}
                {{--<div class="row">--}}
                    {{--<div class="col-sm-12">--}}
                        {{--<div class="beta-products-list">--}}
                            {{--<h4>New Products</h4>--}}
                            {{--<div class="beta-products-details">--}}
                                {{--<p class="pull-left">438 styles found</p>--}}
                                {{--<div class="clearfix"></div>--}}
                            {{--</div>--}}

                            {{--<div class="row">--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="single-item">--}}
                                        {{--<div class="single-item-header">--}}
                                            {{--<a href="product.html"><img src="source/assets/dest/images/products/1.jpg" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="single-item-body">--}}
                                            {{--<p class="single-item-title">Sample Woman Top</p>--}}
                                            {{--<p class="single-item-price">--}}
                                                {{--<span>$34.55</span>--}}
                                            {{--</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="single-item-caption">--}}
                                            {{--<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>--}}
                                            {{--<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>--}}
                                            {{--<div class="clearfix"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="single-item">--}}
                                        {{--<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>--}}

                                        {{--<div class="single-item-header">--}}
                                            {{--<a href="product.html"><img src="source/assets/dest/images/products/2.jpg" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="single-item-body">--}}
                                            {{--<p class="single-item-title">Sample Woman Top</p>--}}
                                            {{--<p class="single-item-price">--}}
                                                {{--<span class="flash-del">$34.55</span>--}}
                                                {{--<span class="flash-sale">$33.55</span>--}}
                                            {{--</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="single-item-caption">--}}
                                            {{--<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>--}}
                                            {{--<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>--}}
                                            {{--<div class="clearfix"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="single-item">--}}
                                        {{--<div class="single-item-header">--}}
                                            {{--<a href="product.html"><img src="source/assets/dest/images/products/3.jpg" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="single-item-body">--}}
                                            {{--<p class="single-item-title">Sample Woman Top</p>--}}
                                            {{--<p class="single-item-price">--}}
                                                {{--<span>$34.55</span>--}}
                                            {{--</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="single-item-caption">--}}
                                            {{--<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>--}}
                                            {{--<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>--}}
                                            {{--<div class="clearfix"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="single-item">--}}
                                        {{--<div class="single-item-header">--}}
                                            {{--<a href="product.html"><img src="source/assets/dest/images/products/3.jpg" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="single-item-body">--}}
                                            {{--<p class="single-item-title">Sample Woman Top</p>--}}
                                            {{--<p class="single-item-price">--}}
                                                {{--<span>$34.55</span>--}}
                                            {{--</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="single-item-caption">--}}
                                            {{--<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>--}}
                                            {{--<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>--}}
                                            {{--<div class="clearfix"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div> <!-- .beta-products-list -->--}}

                        {{--<div class="space50">&nbsp;</div>--}}

                        {{--<div class="beta-products-list">--}}
                            {{--<h4>Top Products</h4>--}}
                            {{--<div class="beta-products-details">--}}
                                {{--<p class="pull-left">438 styles found</p>--}}
                                {{--<div class="clearfix"></div>--}}
                            {{--</div>--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="single-item">--}}
                                        {{--<div class="single-item-header">--}}
                                            {{--<a href="product.html"><img src="source/assets/dest/images/products/1.jpg" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="single-item-body">--}}
                                            {{--<p class="single-item-title">Sample Woman Top</p>--}}
                                            {{--<p class="single-item-price">--}}
                                                {{--<span>$34.55</span>--}}
                                            {{--</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="single-item-caption">--}}
                                            {{--<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>--}}
                                            {{--<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>--}}
                                            {{--<div class="clearfix"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="single-item">--}}
                                        {{--<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>--}}

                                        {{--<div class="single-item-header">--}}
                                            {{--<a href="product.html"><img src="source/assets/dest/images/products/2.jpg" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="single-item-body">--}}
                                            {{--<p class="single-item-title">Sample Woman Top</p>--}}
                                            {{--<p class="single-item-price">--}}
                                                {{--<span class="flash-del">$34.55</span>--}}
                                                {{--<span class="flash-sale">$33.55</span>--}}
                                            {{--</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="single-item-caption">--}}
                                            {{--<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>--}}
                                            {{--<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>--}}
                                            {{--<div class="clearfix"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="single-item">--}}
                                        {{--<div class="single-item-header">--}}
                                            {{--<a href="product.html"><img src="source/assets/dest/images/products/3.jpg" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="single-item-body">--}}
                                            {{--<p class="single-item-title">Sample Woman Top</p>--}}
                                            {{--<p class="single-item-price">--}}
                                                {{--<span>$34.55</span>--}}
                                            {{--</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="single-item-caption">--}}
                                            {{--<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>--}}
                                            {{--<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>--}}
                                            {{--<div class="clearfix"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="single-item">--}}
                                        {{--<div class="single-item-header">--}}
                                            {{--<a href="product.html"><img src="source/assets/dest/images/products/3.jpg" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="single-item-body">--}}
                                            {{--<p class="single-item-title">Sample Woman Top</p>--}}
                                            {{--<p class="single-item-price">--}}
                                                {{--<span>$34.55</span>--}}
                                            {{--</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="single-item-caption">--}}
                                            {{--<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>--}}
                                            {{--<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>--}}
                                            {{--<div class="clearfix"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="space40">&nbsp;</div>--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="single-item">--}}
                                        {{--<div class="single-item-header">--}}
                                            {{--<a href="product.html"><img src="source/assets/dest/images/products/1.jpg" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="single-item-body">--}}
                                            {{--<p class="single-item-title">Sample Woman Top</p>--}}
                                            {{--<p class="single-item-price">--}}
                                                {{--<span>$34.55</span>--}}
                                            {{--</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="single-item-caption">--}}
                                            {{--<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>--}}
                                            {{--<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>--}}
                                            {{--<div class="clearfix"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="single-item">--}}
                                        {{--<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>--}}

                                        {{--<div class="single-item-header">--}}
                                            {{--<a href="product.html"><img src="source/assets/dest/images/products/2.jpg" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="single-item-body">--}}
                                            {{--<p class="single-item-title">Sample Woman Top</p>--}}
                                            {{--<p class="single-item-price">--}}
                                                {{--<span class="flash-del">$34.55</span>--}}
                                                {{--<span class="flash-sale">$33.55</span>--}}
                                            {{--</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="single-item-caption">--}}
                                            {{--<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>--}}
                                            {{--<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>--}}
                                            {{--<div class="clearfix"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="single-item">--}}
                                        {{--<div class="single-item-header">--}}
                                            {{--<a href="product.html"><img src="source/assets/dest/images/products/3.jpg" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="single-item-body">--}}
                                            {{--<p class="single-item-title">Sample Woman Top</p>--}}
                                            {{--<p class="single-item-price">--}}
                                                {{--<span>$34.55</span>--}}
                                            {{--</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="single-item-caption">--}}
                                            {{--<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>--}}
                                            {{--<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>--}}
                                            {{--<div class="clearfix"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="single-item">--}}
                                        {{--<div class="single-item-header">--}}
                                            {{--<a href="product.html"><img src="source/assets/dest/images/products/3.jpg" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="single-item-body">--}}
                                            {{--<p class="single-item-title">Sample Woman Top</p>--}}
                                            {{--<p class="single-item-price">--}}
                                                {{--<span>$34.55</span>--}}
                                            {{--</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="single-item-caption">--}}
                                            {{--<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>--}}
                                            {{--<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>--}}
                                            {{--<div class="clearfix"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div> <!-- .beta-products-list -->--}}
                    {{--</div>--}}
                {{--</div> <!-- end section with sidebar and main content -->--}}


            {{--</div> <!-- .main-content -->--}}
        {{--</div> <!-- #content -->--}}
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">Khóa học mới nhất <span class="pull-right" style="font-size: 14px; color: #999; text-decoration: none; height: 42px;
    line-height: 42px;font-size: 12px; font-weight: 600;"><a style="color: #333; text-decoration: none;" href="">Xem thêm</a></span></div>
            </div>
            <div class="panel-body">
                <div class="list-course row">
                    <div class="col-md-3 col-xs-12">
                        <div class="item">
                            <a href="http://salty-chamber-02216.herokuapp.com/chi-tiet-khoa-hoc">
                                <div class="img">
                                    <img width="100%" src="http://salty-chamber-02216.herokuapp.com/layout/image/main20image-15524693621081389677771-crop-15524693718131899353495.jpg" alt="">
                                    <div class="star-count-student">
                                        <div class="star">4.6 <i class="fa fa-star" aria-hidden="true"></i></div>
                                        <div class="count-student"><i class="fa fa-user" aria-hidden="true"></i> 10 Học viên</div>
                                    </div>
                                </div>
                                <div class="time-course">
                                    <div class="video"><i class="fa fa-youtube-play" aria-hidden="true"></i> Khóa học qua Video</div>
                                    <div class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> 24 giờ</div>
                                </div>

                                <div class="intro">
                                    <div class="title">
                                        <h1 title="Thiết kế giao diện website với Bootstrap, HTML , CSS ">Thiết kế giao diện website với Bootstrap, HTML , CSS , Thiết kế giao diện website với Bootstrap, HTML , CSS</h1>
                                    </div>
                                    <div class="author">
                                        <div class="name">Nguyễn Duy Quang</div>
                                    </div>
                                </div>
                                <div class="price">Miễn phí</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="item">
                            <a href="http://salty-chamber-02216.herokuapp.com/chi-tiet-khoa-hoc">
                                <div class="img">
                                    <img width="100%" src="http://salty-chamber-02216.herokuapp.com/layout/image/main20image-15524693621081389677771-crop-15524693718131899353495.jpg" alt="">
                                    <div class="star-count-student">
                                        <div class="star">4.6 <i class="fa fa-star" aria-hidden="true"></i></div>
                                        <div class="count-student"><i class="fa fa-user" aria-hidden="true"></i> 10 Học viên</div>
                                    </div>
                                </div>
                                <div class="time-course">
                                    <div class="video"><i class="fa fa-youtube-play" aria-hidden="true"></i> Khóa học qua Video</div>
                                    <div class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> 24 giờ</div>
                                </div>

                                <div class="intro">
                                    <div class="title">
                                        <h1>Thiết kế giao diện website với Bootstrap, HTML , CSS</h1>
                                    </div>
                                    <div class="author">
                                        <div class="name">Nguyễn Duy Quang</div>
                                    </div>
                                </div>
                                <div class="price">Miễn phí</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="item">
                            <a href="http://salty-chamber-02216.herokuapp.com/chi-tiet-khoa-hoc">
                                <div class="img">
                                    <img width="100%" src="http://salty-chamber-02216.herokuapp.com/layout/image/main20image-15524693621081389677771-crop-15524693718131899353495.jpg" alt="">
                                    <div class="star-count-student">
                                        <div class="star">4.6 <i class="fa fa-star" aria-hidden="true"></i></div>
                                        <div class="count-student"><i class="fa fa-user" aria-hidden="true"></i> 10 Học viên</div>
                                    </div>
                                </div>
                                <div class="time-course">
                                    <div class="video"><i class="fa fa-youtube-play" aria-hidden="true"></i> Khóa học qua Video</div>
                                    <div class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> 24 giờ</div>
                                </div>

                                <div class="intro">
                                    <div class="title">
                                        <h1>Thiết kế giao diện website với Bootstrap, HTML , CSS</h1>
                                    </div>
                                    <div class="author">
                                        <div class="name">Nguyễn Duy Quang</div>
                                    </div>
                                </div>
                                <div class="price">Miễn phí</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="item">
                            <a href="http://salty-chamber-02216.herokuapp.com/chi-tiet-khoa-hoc">
                                <div class="img">
                                    <img width="100%" src="http://salty-chamber-02216.herokuapp.com/layout/image/main20image-15524693621081389677771-crop-15524693718131899353495.jpg" alt="">
                                    <div class="star-count-student">
                                        <div class="star">4.6 <i class="fa fa-star" aria-hidden="true"></i></div>
                                        <div class="count-student"><i class="fa fa-user" aria-hidden="true"></i> 10 Học viên</div>
                                    </div>
                                </div>
                                <div class="time-course">
                                    <div class="video"><i class="fa fa-youtube-play" aria-hidden="true"></i> Khóa học qua Video</div>
                                    <div class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> 24 giờ</div>
                                </div>

                                <div class="intro">
                                    <div class="title">
                                        <h1>Thiết kế giao diện website với Bootstrap, HTML , CSS</h1>
                                    </div>
                                    <div class="author">
                                        <div class="name">Nguyễn Duy Quang</div>
                                    </div>
                                </div>
                                <div class="price">Miễn phí</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="item">
                            <a href="http://salty-chamber-02216.herokuapp.com/chi-tiet-khoa-hoc">
                                <div class="img">
                                    <img width="100%" src="http://salty-chamber-02216.herokuapp.com/layout/image/main20image-15524693621081389677771-crop-15524693718131899353495.jpg" alt="">
                                    <div class="star-count-student">
                                        <div class="star">4.6 <i class="fa fa-star" aria-hidden="true"></i></div>
                                        <div class="count-student"><i class="fa fa-user" aria-hidden="true"></i> 10 Học viên</div>
                                    </div>
                                </div>
                                <div class="time-course">
                                    <div class="video"><i class="fa fa-youtube-play" aria-hidden="true"></i> Khóa học qua Video</div>
                                    <div class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> 24 giờ</div>
                                </div>

                                <div class="intro">
                                    <div class="title">
                                        <h1>Thiết kế giao diện website với Bootstrap, HTML , CSS</h1>
                                    </div>
                                    <div class="author">
                                        <div class="name">Nguyễn Duy Quang</div>
                                    </div>
                                </div>
                                <div class="price">Miễn phí</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="item">
                            <a href="http://salty-chamber-02216.herokuapp.com/chi-tiet-khoa-hoc">
                                <div class="img">
                                    <img width="100%" src="http://salty-chamber-02216.herokuapp.com/layout/image/main20image-15524693621081389677771-crop-15524693718131899353495.jpg" alt="">
                                    <div class="star-count-student">
                                        <div class="star">4.6 <i class="fa fa-star" aria-hidden="true"></i></div>
                                        <div class="count-student"><i class="fa fa-user" aria-hidden="true"></i> 10 Học viên</div>
                                    </div>
                                </div>
                                <div class="time-course">
                                    <div class="video"><i class="fa fa-youtube-play" aria-hidden="true"></i> Khóa học qua Video</div>
                                    <div class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> 24 giờ</div>
                                </div>

                                <div class="intro">
                                    <div class="title">
                                        <h1>Thiết kế giao diện website với Bootstrap, HTML , CSS</h1>
                                    </div>
                                    <div class="author">
                                        <div class="name">Nguyễn Duy Quang</div>
                                    </div>
                                </div>
                                <div class="price">Miễn phí</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="item">
                            <a href="http://salty-chamber-02216.herokuapp.com/chi-tiet-khoa-hoc">
                                <div class="img">
                                    <img width="100%" src="http://salty-chamber-02216.herokuapp.com/layout/image/main20image-15524693621081389677771-crop-15524693718131899353495.jpg" alt="">
                                    <div class="star-count-student">
                                        <div class="star">4.6 <i class="fa fa-star" aria-hidden="true"></i></div>
                                        <div class="count-student"><i class="fa fa-user" aria-hidden="true"></i> 10 Học viên</div>
                                    </div>
                                </div>
                                <div class="time-course">
                                    <div class="video"><i class="fa fa-youtube-play" aria-hidden="true"></i> Khóa học qua Video</div>
                                    <div class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> 24 giờ</div>
                                </div>

                                <div class="intro">
                                    <div class="title">
                                        <h1>Thiết kế giao diện website với Bootstrap, HTML , CSS</h1>
                                    </div>
                                    <div class="author">
                                        <div class="name">Nguyễn Duy Quang</div>
                                    </div>
                                </div>
                                <div class="price">Miễn phí</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="item">
                            <a href="http://salty-chamber-02216.herokuapp.com/chi-tiet-khoa-hoc">
                                <div class="img">
                                    <img width="100%" src="http://salty-chamber-02216.herokuapp.com/layout/image/main20image-15524693621081389677771-crop-15524693718131899353495.jpg" alt="">
                                    <div class="star-count-student">
                                        <div class="star">4.6 <i class="fa fa-star" aria-hidden="true"></i></div>
                                        <div class="count-student"><i class="fa fa-user" aria-hidden="true"></i> 10 Học viên</div>
                                    </div>
                                </div>
                                <div class="time-course">
                                    <div class="video"><i class="fa fa-youtube-play" aria-hidden="true"></i> Khóa học qua Video</div>
                                    <div class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> 24 giờ</div>
                                </div>

                                <div class="intro">
                                    <div class="title">
                                        <h1>Thiết kế giao diện website với Bootstrap, HTML , CSS</h1>
                                    </div>
                                    <div class="author">
                                        <div class="name">Nguyễn Duy Quang</div>
                                    </div>
                                </div>
                                <div class="price">Miễn phí</div>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div> <!-- .container -->
@endsection