<?php include 'include/header.inc.html'; ?>
<title>Preview | PhantFashion</title>
</head>
<body id="product" class="lang-en country-us currency-eur layout-full-width page-product tax-display-disabled product-id-4 product-lorem-ipsum-has- product-id-category-12 product-id-manufacturer-1 product-id-supplier-1 product-available-for-order fullwidth">
<?php include 'include/navigation.inc.html'; ?>
<section id="wrapper" class="active_grid">
    <div class="container">
        <div id="content-wrapper">
            <section id="main">
                <div class="row">
                    <div class="col-md-6 product-left">
                        <section class="page-content horizontal_mode" id="content">
                            <div class="images-container">
                                <div class="total1 js-qv-mask mask">
                                    <div class="product-images ">
                                        <div class="carousel1">
                                            <ul id="carousel" class="ul-product-images">
                                                <li class="vertical-thumb">
                                                    <img
                                                    class="thumb js-thumb selected"
                                                    data-image-large-src="images/products/36-large_default/printed-dress.jpg"
                                                    src="images/products/36-small_default/printed-dress.jpg"
                                                    alt=""
                                                    title=""
                                                    width="100"
                                                    itemprop="image" />
                                                </li>
                                                <li class="vertical-thumb">
                                                    <img
                                                    class="thumb js-thumb"
                                                    data-image-large-src="images/products/37-large_default/printed-dress.jpg"
                                                    src="images/products/37-small_default/printed-dress.jpg"
                                                    alt=""
                                                    title=""
                                                    width="100"
                                                    itemprop="image"
                                                    />
                                                </li>
                                                <li class="vertical-thumb">
                                                    <img
                                                    class="thumb js-thumb"
                                                    data-image-large-src="images/products/38-large_default/printed-dress.jpg"
                                                    src="images/products/38-small_default/printed-dress.jpg"
                                                    alt=""
                                                    title=""
                                                    width="100"
                                                    itemprop="image"
                                                    />
                                                </li>
                                                <li class="vertical-thumb">
                                                    <img
                                                    class="thumb js-thumb"
                                                    data-image-large-src="images/products/39-large_default/printed-dress.jpg"
                                                    src="images/products/39-small_default/printed-dress.jpg"
                                                    alt=""
                                                    title=""
                                                    width="100"
                                                    itemprop="image"
                                                    />
                                                </li>
                                            </ul>
                                            <span class="vertical-up"><i class="fa fa-chevron-up" aria-hidden="true"></i></span>
                                            <span class="vertical-down"><i class="fa fa-chevron-down" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
 
 <script type="text/javascript">
    $(document).ready(function(){
        var height=131+15;
        var width=104;
        var wrapper = $('.carousel1');
        var items = 3;
        if( $(window).width() < 420 ){
            items = 2;
        } else if( $(window).width() < 768 ){
            items = 3;
        } else if( $(window).width() < 992 ){
            items = 3;
        } else{
            items = items;
        }

        if ($('#left-sidebar').length > 0 || $('#right-sidebar').length > 0) {
            items = 3;
        }
        if ($('#left-sidebar').length > 0 && $('#right-sidebar').length > 0) {
            items = 4;
        }
        var _slider_data = {
            items: items,
            direction: 'up',
            width: 'auto',
            height: '150px',
            infinite: true,
            prev: wrapper.find('.vertical-up').selector,
            next: wrapper.find('.vertical-down').selector,
            auto: {
                play: true,
                timeoutDuration: 5000,
                duration: 800,
                delay: 3000,
                items: 1,
                pauseOnHover: true
            },
            scroll: {
                items: 1
            },
            swipe: {
                onTouch: true,
                onMouse: true
            },
            onCreate: function () {
                wrapper.addClass('loaded').removeClass('loading');
            }
        };
        wrapper.find('#carousel').carouFredSel(_slider_data);
        $(window).bind('load', function () {
            $(window).trigger('resize');
        });
        $('.caroufredsel_wrapper').css('min-height', height*items + 'px');
        $('.caroufredsel_wrapper').css('min-width', width + 'px');
    });
</script>
                                <div class="product-cover">
            <div class="conditions-box">
                                 
                </div> 
      <img class="js-qv-product-cover img-responsive" src="images/products/36-large_default/printed-dress.jpg" alt="" title="" style="max-width:100%; height:auto" width="450" height="567">
    </div>
<script type="text/javascript">
    var zoom_type = 'window';
    var zoom_fade_in = 400;
    var zoom_fade_out = 550;
    var zoom_cursor_type = 'default';
    var zoom_window_pos = 1;
    var zoom_scroll = true;
    var zoom_easing = true;
    var zoom_tint = true;
    var zoom_tint_color = '#333';
    var zoom_tint_opacity = 0.4;
    var zoom_lens_shape = 'round';
    var zoom_lens_size  = 345;
</script>
<script type="text/javascript">
function applyElevateZoom(){
    var bigimage = $('.js-qv-product-cover').attr('src').replace('large', 'field_zoom'); 
    $('.js-qv-product-cover').elevateZoom({
        zoomType: zoom_type,
        cursor: zoom_cursor_type,
        zoomWindowFadeIn: zoom_fade_in,
        zoomWindowFadeOut: zoom_fade_out,
        zoomWindowPosition: zoom_window_pos,
        scrollZoom: zoom_scroll,
        easing: zoom_easing,
        tint: zoom_tint,
        tintColour: zoom_tint_color,
        tintOpacity: zoom_tint_opacity,
        lensShape: zoom_lens_shape,
        lensSize: zoom_lens_size,
        zoomImage: bigimage,
        borderSize:0,borderColour:'', zoomWindowWidth:600, zoomWindowHeight:600, zoomLevel:0.6,lensBorderSize:0
    });
}
$(document).ready(function(e) {
    if($(".zoomContainer").length){
    $(".zoomContainer").remove();   
    }
    applyElevateZoom();
    $(document).on('click','.input-color',function(e) {
        restartElevateZoom();
    });
    $(document).on('click','.js-qv-mask img.thumb',function(e) {
        restartElevateZoom();
    });
}); 

function restartElevateZoom(){
    $(".zoomContainer").remove();
    applyElevateZoom();
}

</script>

          
        
                        </section>
                    </div>
                    <div class="col-md-6 product-right">
                        <h1 class="h1" itemprop="name">Standard dummy .</h1>
                        <div class="product-prices">
                            <div class="product-price h5 has-discount">
                                <div class="current-price">
                                    <span>₦32.89</span>
                                    <div class="product-discount">
                                        <span class="regular-price">₦36.54</span>
                                    </div>
                                    <span class="discount discount-percentage">Save 10%</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-information">
                            <div id="product-description-short-2">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem portul indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  exercitation ullamco laboris nisi ut aliquip.</p>
                            </div>
                            <div class="product-actions">
                                <form action="" method="post" id="add-to-cart-or-refresh">
                                    <div class="product-variants">
                                        <div class="clearfix product-variants-item">
                                            <span class="control-label">Standard Size</span>
                                            <select id="group_1">
                                                <option value="1" title="S" selected="selected">S</option>
                                                <option value="2" title="M">M</option>
                                                <option value="3" title="L">L</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
                                      <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="heading_collar_type">
                                          <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_collar_type" aria-expanded="true" aria-controls="collapse_collar_type">
                                              Collar type
                                            </a>
                                          </h4>
                                        </div>
                                        <div id="collapse_collar_type" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_collar_type">
                                          <div class="panel-body">
                                            Panel body
                                          </div>
                                        </div>
                                      </div>
                                      <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="heading_cuff_button">
                                          <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_cuff_button" aria-expanded="false" aria-controls="collapse_cuff_button">
                                              Cuff button
                                            </a>
                                          </h4>
                                        </div>
                                        <div id="collapse_cuff_button" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_cuff_button">
                                          <div class="panel-body">
                                            Anim p
                                          </div>
                                        </div>
                                      </div>
                                      <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="heading_pocket">
                                          <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_pocket" aria-expanded="false" aria-controls="collapse_pocket">
                                              Pocket
                                            </a>
                                          </h4>
                                        </div>
                                        <div id="collapse_pocket" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_pocket">
                                          <div class="panel-body">
                                            Anim pa
                                          </div>
                                        </div>
                                      </div>
                                      <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="heading_buttons_color">
                                          <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_buttons_color" aria-expanded="false" aria-controls="collapse_buttons_color">
                                              Buttons color
                                            </a>
                                          </h4>
                                        </div>
                                        <div id="collapse_buttons_color" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_buttons_color">
                                          <div class="panel-body">
                                            Anim pa
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="product-add-to-cart">
                                        <div class="product-quantity">
                                            <div class="qty">
                                                <span class="control-label">Quantity</span>
                                                <input
                                                    type="text"
                                                    name="qty"
                                                    id="quantity_wanted"
                                                    value="1"
                                                    class="input-group"
                                                    min="1"
                                                />
                                            </div>
                                            <div class="add">
                                                <button class="btn btn-primary add-to-cart" type="submit">
                                                    <i class="fa fa-shopping-cart shopping-cart"></i>
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="social-sharing">
                                        <span>SHARE THIS ON:</span>
                                        <ul>
                                            <li class="facebook icon-gray">
                                                <a href="http://www.facebook.com/sharer.php?u=http://demo.fieldthemes.com/ps_modo/home1/en/tabletop/2-blouse.html" class="text-hide" title="Share" target="_blank">Share</a>
                                            </li>
                                            <li class="twitter icon-gray">
                                                <a href="https://twitter.com/intent/tweet?text=Standard%20dummy%20.%20http://demo.fieldthemes.com/ps_modo/home1/en/tabletop/2-blouse.html" class="text-hide" title="Tweet" target="_blank">Tweet</a>
                                            </li>
                                            <li class="googleplus icon-gray">
                                                <a href="https://plus.google.com/share?url=http://demo.fieldthemes.com/ps_modo/home1/en/tabletop/2-blouse.html" class="text-hide" title="Google+" target="_blank">Google+</a>
                                            </li>
                                            <li class="pinterest icon-gray">
                                                <a href="http://www.pinterest.com/pin/create/button/?media=http://demo.fieldthemes.com/ps_modo/home1/32/blouse.jpg&amp;url=http://demo.fieldthemes.com/ps_modo/home1/en/tabletop/2-blouse.html" class="text-hide" title="Pinterest" target="_blank">Pinterest</a>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabs">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#description">Description</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="tab-content">
                        <div class="tab-pane fade in active" id="description">
                            <div class="product-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <p></p>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                <p>- Lorem ipsum dolor sit amet, consectetur product</p>
                                <p>- Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
                                <p>- Excepteur sinted occaecat cupidatat non proident products</p>
                                <p>- Voluptate velit esse cillum.</p>
                            </div>
                        </div>
                    </div>
                </div>

    <div id="field_productcates" class="block horizontal_mode">
        <h4 class="title_block title_font">
            <span class="title_text">related products</span>
             <span class="content-title">Integer vitae libero ac risus egestas placerat.</span>
        </h4>
        
                <div class="row">
        <div id="productCates" class="carousel-grid owl-carousel">
                                              
           <div class="item">
              <div class="item-inner">
                <div class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1" itemscope itemtype="http://schema.org/Product">
                  <div class="left-product">
                    <a href="shop/1-1-faded-short-sleeves-tshirt.html#/1-size-s/13-color-orange" class="thumbnail product-thumbnail">
                      <span class="cover_image">
                        <img
                          src = "images/products/faded-short-sleeves-tshirt-main.jpg"
                          data-full-size-image-url = "images/products/faded-short-sleeves-tshirt-main.jpg"
                          alt=""
                          width="270"
                          height="340"
                        >
                      </span>
                      <span class="hover_image">
                        <img 
                          src = "images/products/faded-short-sleeves-tshirt.jpg"
                          data-full-size-image-url = "images/products/faded-short-sleeves-tshirt.jpg"
                          alt=""
                          width="270"
                          height="340" 
                        > 
                      </span>
                    </a>
                    <div class="conditions-box">
                      <span class="new_product">New</span>
                    </div>
                  </div>
                  <div class="right-product">
                    <div class="product-description">
                      <div class="product_name"><a href="shop/1-1-faded-short-sleeves-tshirt.html#/1-size-s/13-color-orange">Dummy text of the.</a></div> 
                      <div class="product-price-and-shipping">
                        <span class="regular-price">$16.51</span>
                        <span class="price">$14.86</span>
                        <span class="price-percent-reduction">-10%</span>
                      </div>
                    </div>
                    <div class="product-description-hover">
                      <div class="button-cart">
                        <form action="http://demo.fieldthemes.com/ps_modo/home1/en/cart" method="post">
                          <input type="hidden" name="token" value="c3df35d24553202fcc213bcb53ba145f">
                          <input type="hidden" name="id_product" value="1">
                          <button class="add-to-cart" data-button-action="add-to-cart" type="submit" >
                            <span class="text">Add to cart</span>
                          </button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
$(window).load(function() {
    $('#productCates').owlCarousel({
        itemsCustom: [ [0, 1], [320, 1], [480, 2], [568, 3], [992, 4], [1200, 4] ],
        responsiveRefreshRate: 50,
        slideSpeed: 200,
        paginationSpeed: 500,
        rewindSpeed: 600,
        autoPlay: false,
        stopOnHover: false,
        rewindNav: true,
        pagination: false,
        navigation: false,
        navigationText: ['<div class="carousel-previous disable-select"><span class="fa fa-angle-left"></span></div>', '<div class="carousel-next disable-select"><span class="fa fa-angle-right"></span></div>']
    });
    });
</script>
    </div>

            </section>
        </div>
    </div>
</section>

<div class="space-50"></div>

<?php include 'include/footer.inc.html'; ?>