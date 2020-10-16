<?php include_once('../includes/header.php'); ?>

<?php include_once('../includes/nav.php'); ?>

<?php require_once('../products/db/products.php'); ?>

<?php if ( isset($_GET['product'])) : ?>
<?php
    $id = (int) $_GET['product'];
    $single = json_decode(find($id), true);
    // echo $_GET['product'];
?>

<main role="main">
    <div id="shopify-section-product-template" class="shopify-section">
        <div class="main-content-wrap section-ptb product-details-page product-details">
            <div class="container">
                <div class="row">

                    <div class="col-xl-6 col-lg-7 col-md-6">
                        <div class="product-details-images">
                            <div class="product_details_container">
                                <div class="product_big_images-right">
                                    <div class="portfolio-full-image tab-content">
                                        <div class="featured-image">
                                            <div class="" id="ProductPhoto"><img id="ProductPhotoImg"
                                                    class="product-zoom"
                                                    src="<?php echo $single['featured_image'] ?>"
                                                    alt="<?php echo $single['title'] ?>"
                                                    data-zoom-image="<?php echo $single['featured_image'] ?>">
                                            </div>

                                            <div class="product-badge"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div id="ProductThumbs"
                                    class="product_small_images-left vartical-product-active slick-initialized slick-slider slick-vertical">
                                    <i class="icon-arrow-top arrow-prv slick-arrow" style="display: inline;"></i>

                                    <div class="slick-list draggable" style="height: 500px;">
                                        <div class="slick-track"
                                            style="opacity: 1; height: 1750px; transform: translate3d(0px, -500px, 0px);">
                                            <a class="product-single__thumbnail  slick-slide slick-cloned"
                                                href="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068706_1024x1024.jpg?v=1571716652"
                                                data-image="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068706_1024x1024.jpg?v=1571716652"
                                                data-zoom-image="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068706_1024x1024.jpg?v=1571716652"
                                                data-image-id="7140564533330" data-slick-index="-4" aria-hidden="true"
                                                style="width: 115px;" tabindex="-1">
                                                <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068706_120x138.jpg?v=1571716652"
                                                    alt="Gooby Adjustable Dog Raincoat - Yellow">
                                            </a><a class="product-single__thumbnail  slick-slide slick-cloned"
                                                href="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068707_1024x1024.jpg?v=1571716652"
                                                data-image="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068707_1024x1024.jpg?v=1571716652"
                                                data-zoom-image="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068707_1024x1024.jpg?v=1571716652"
                                                data-image-id="7140564566098" data-slick-index="-3" aria-hidden="true"
                                                style="width: 115px;" tabindex="-1">
                                                <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068707_120x138.jpg?v=1571716652"
                                                    alt="Gooby Adjustable Dog Raincoat - Yellow">
                                            </a><a class="product-single__thumbnail  slick-slide slick-cloned"
                                                href="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068708_1024x1024.jpg?v=1571716652"
                                                data-image="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068708_1024x1024.jpg?v=1571716652"
                                                data-zoom-image="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068708_1024x1024.jpg?v=1571716652"
                                                data-image-id="7140564598866" data-slick-index="-2" aria-hidden="true"
                                                style="width: 115px;" tabindex="-1">
                                                <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068708_120x138.jpg?v=1571716652"
                                                    alt="Gooby Adjustable Dog Raincoat - Yellow">
                                            </a><a class="product-single__thumbnail  slick-slide slick-cloned"
                                                href="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068709_1024x1024.jpg?v=1571716652"
                                                data-image="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068709_1024x1024.jpg?v=1571716652"
                                                data-zoom-image="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068709_1024x1024.jpg?v=1571716652"
                                                data-image-id="7140564631634" data-slick-index="-1" aria-hidden="true"
                                                style="width: 115px;" tabindex="-1">
                                                <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068709_120x138.jpg?v=1571716652"
                                                    alt="Gooby Adjustable Dog Raincoat - Yellow">
                                            </a><a
                                                class="product-single__thumbnail  slick-slide slick-current slick-active"
                                                href="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_1024x1024.jpg?v=1571716652"
                                                data-image="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_1024x1024.jpg?v=1571716652"
                                                data-zoom-image="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_1024x1024.jpg?v=1571716652"
                                                data-image-id="7140564500562" data-slick-index="0" aria-hidden="false"
                                                style="width: 115px;" tabindex="0">
                                                <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_120x138.jpg?v=1571716652"
                                                    alt="Gooby Adjustable Dog Raincoat - Yellow">
                                            </a><a class="product-single__thumbnail  slick-slide slick-active"
                                                href="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068706_1024x1024.jpg?v=1571716652"
                                                data-image="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068706_1024x1024.jpg?v=1571716652"
                                                data-zoom-image="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068706_1024x1024.jpg?v=1571716652"
                                                data-image-id="7140564533330" data-slick-index="1" aria-hidden="false"
                                                style="width: 115px;" tabindex="0">
                                                <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068706_120x138.jpg?v=1571716652"
                                                    alt="Gooby Adjustable Dog Raincoat - Yellow">
                                            </a><a class="product-single__thumbnail  slick-slide slick-active"
                                                href="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068707_1024x1024.jpg?v=1571716652"
                                                data-image="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068707_1024x1024.jpg?v=1571716652"
                                                data-zoom-image="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068707_1024x1024.jpg?v=1571716652"
                                                data-image-id="7140564566098" data-slick-index="2" aria-hidden="false"
                                                style="width: 115px;" tabindex="0">
                                                <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068707_120x138.jpg?v=1571716652"
                                                    alt="Gooby Adjustable Dog Raincoat - Yellow">
                                            </a><a class="product-single__thumbnail  slick-slide slick-active"
                                                href="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068708_1024x1024.jpg?v=1571716652"
                                                data-image="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068708_1024x1024.jpg?v=1571716652"
                                                data-zoom-image="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068708_1024x1024.jpg?v=1571716652"
                                                data-image-id="7140564598866" data-slick-index="3" aria-hidden="false"
                                                style="width: 115px;" tabindex="0">
                                                <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068708_120x138.jpg?v=1571716652"
                                                    alt="Gooby Adjustable Dog Raincoat - Yellow">
                                            </a><a class="product-single__thumbnail  slick-slide"
                                                href="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068709_1024x1024.jpg?v=1571716652"
                                                data-image="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068709_1024x1024.jpg?v=1571716652"
                                                data-zoom-image="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068709_1024x1024.jpg?v=1571716652"
                                                data-image-id="7140564631634" data-slick-index="4" aria-hidden="true"
                                                style="width: 115px;" tabindex="-1">
                                                <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068709_120x138.jpg?v=1571716652"
                                                    alt="Gooby Adjustable Dog Raincoat - Yellow">
                                            </a><a class="product-single__thumbnail  slick-slide slick-cloned"
                                                href="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_1024x1024.jpg?v=1571716652"
                                                data-image="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_1024x1024.jpg?v=1571716652"
                                                data-zoom-image="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_1024x1024.jpg?v=1571716652"
                                                data-image-id="7140564500562" data-slick-index="5" aria-hidden="true"
                                                style="width: 115px;" tabindex="-1">
                                                <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_120x138.jpg?v=1571716652"
                                                    alt="Gooby Adjustable Dog Raincoat - Yellow">
                                            </a><a class="product-single__thumbnail  slick-slide slick-cloned"
                                                href="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068706_1024x1024.jpg?v=1571716652"
                                                data-image="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068706_1024x1024.jpg?v=1571716652"
                                                data-zoom-image="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068706_1024x1024.jpg?v=1571716652"
                                                data-image-id="7140564533330" data-slick-index="6" aria-hidden="true"
                                                style="width: 115px;" tabindex="-1">
                                                <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068706_120x138.jpg?v=1571716652"
                                                    alt="Gooby Adjustable Dog Raincoat - Yellow">
                                            </a><a class="product-single__thumbnail  slick-slide slick-cloned"
                                                href="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068707_1024x1024.jpg?v=1571716652"
                                                data-image="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068707_1024x1024.jpg?v=1571716652"
                                                data-zoom-image="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068707_1024x1024.jpg?v=1571716652"
                                                data-image-id="7140564566098" data-slick-index="7" aria-hidden="true"
                                                style="width: 115px;" tabindex="-1">
                                                <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068707_120x138.jpg?v=1571716652"
                                                    alt="Gooby Adjustable Dog Raincoat - Yellow">
                                            </a><a class="product-single__thumbnail  slick-slide slick-cloned"
                                                href="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068708_1024x1024.jpg?v=1571716652"
                                                data-image="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068708_1024x1024.jpg?v=1571716652"
                                                data-zoom-image="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068708_1024x1024.jpg?v=1571716652"
                                                data-image-id="7140564598866" data-slick-index="8" aria-hidden="true"
                                                style="width: 115px;" tabindex="-1">
                                                <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068708_120x138.jpg?v=1571716652"
                                                    alt="Gooby Adjustable Dog Raincoat - Yellow">
                                            </a><a class="product-single__thumbnail  slick-slide slick-cloned"
                                                href="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068709_1024x1024.jpg?v=1571716652"
                                                data-image="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068709_1024x1024.jpg?v=1571716652"
                                                data-zoom-image="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068709_1024x1024.jpg?v=1571716652"
                                                data-image-id="7140564631634" data-slick-index="9" aria-hidden="true"
                                                style="width: 115px;" tabindex="-1">
                                                <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_16068709_120x138.jpg?v=1571716652"
                                                    alt="Gooby Adjustable Dog Raincoat - Yellow">
                                            </a></div>
                                    </div>

                                    <i class="icon-arrow-bottom arrow-next slick-arrow" style="display: inline;"></i>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-5 col-md-6">
                        <form action="/cart/add" method="post" enctype="multipart/form-data" id="add-item-form">
                            <div class="product_details_info">
                                <h2><?php echo $single['title'] ?></h2>
                                <div class="product-sku">SKU: <span class="variant-sku">S576-GBY-76000-YLW-3XL</span>
                                </div>
                                <div class="product-ratting">
                                    <span class="shopify-product-reviews-badge" data-id="2403990274130"></span>
                                </div>
                                <ul class="pro_dtl_prize product-price">
                                    <li><span class="money" data-currency-usd="<?php echo $single['price'] ?> USD" data-currency="USD"><?php echo $single['price'] ?>
                                            USD</span></li>
                                </ul>
                                <div class="product-description pro_details">Size: 3X-LargeSplash out the rain and the
                                    wet dog with the Gooby Adjustable Dog Raincoat in Yellow! Wire framed hood Clear
                                    hooded visor Drawstring harness hole Harness function Reflective stripes down back
                                    Why We Love...
                                </div>
                                <div class="product-variant-option">
                                    <div class="selector-wrapper" style="display: none;"><select
                                            class="single-option-selector" data-option="option1"
                                            id="productSelect-option-0">
                                            <option value="Default Title">Default Title</option>
                                        </select></div><select name="id" id="productSelect"
                                        class="product-single__variants" style="display:none;">


                                        <option selected="selected" data-sku="S576-GBY-76000-YLW-3XL"
                                            value="21486261895250">Default Title - <?php echo $single['price'] ?> USD</option>


                                    </select>
                                    <script>
                                    jQuery(function() {
                                        jQuery('.swatch :radio').change(function() {
                                            var optionIndex = jQuery(this).closest('.swatch').attr(
                                                'data-option-index');
                                            var optionValue = jQuery(this).val();
                                            jQuery(this)
                                                .closest('form')
                                                .find('.single-option-selector')
                                                .eq(optionIndex)
                                                .val(optionValue)
                                                .trigger('change');
                                        });
                                    });
                                    </script>
                                </div>
                                <style>
                                .product-variant-option .selector-wrapper {
                                    display: none;
                                }
                                </style>
                                <div class="product-actions">
                                    <div class="product-quantity-action">
                                        <div class="prodict-statas"><span>Quantity :</span></div>
                                        <div class="product-quantity">

                                            <div class="product-quantity">
                                                <div class="cart-plus-minus">
                                                    <div class="dec qtybutton">-</div>
                                                    <input name="quantity" value="1" type="number">
                                                    <div class="inc qtybutton">+</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="cart-and-wishlist-btn">
                                        <div class="product-cart-action pro_dtl_btn">

                                            <button type="submit" class="ajax-spin-cart" id="AddToCart">
                                                <span>
                                                    <span class="cart-title" id="AddToCartText">Add To Cart</span>
                                                    <span class="cart-loading">Wait..</span>
                                                    <span class="cart-added">Added</span>
                                                    <span class="cart-unavailable">Uavailable</span>
                                                </span>
                                            </button>
                                            <script>
                                            jQuery('#AddToCart').click(function(e) {
                                                e.preventDefault();
                                                Shopify.addItemFromFormStart('add-item-form', 2403990274130);
                                            });
                                            </script>

                                        </div>

                                        <div class="wishlist-action">

                                            <a class="wishlist" href="/account/login" title="Wishlist">
                                                <span class="add-wishlist"><i class="icon-heart"></i></span>
                                            </a>


                                        </div>
                                    </div>
                                </div>


                                <!-- Share -->
                                <div class="share-icons section fix pro_social_share d-flex">





                                    <h2 class="title_2">Share:</h2>
                                    <ul class="pro_social_link">
                                        <li><a target="_blank"
                                                href="//www.facebook.com/sharer.php?u=https://pr-petsworld.myshopify.com/products/s576-gby76000ylw3xl-gooby-adjustable-dog-raincoat-yellow"
                                                title="Share on Facebook" tabindex="0"><i
                                                    class="ion-social-facebook"></i></a></li>
                                        <li><a target="_blank"
                                                href="//twitter.com/share?text=Gooby%20Adjustable%20Dog%20Raincoat%20-%20Yellow&amp;url=https://pr-petsworld.myshopify.com/products/s576-gby76000ylw3xl-gooby-adjustable-dog-raincoat-yellow;source=webclient"
                                                title="Share on Twitter" tabindex="0"><i
                                                    class="ion-social-twitter"></i></a></li>
                                        <li><a target="_blank"
                                                href="//plus.google.com/share?url=https://pr-petsworld.myshopify.com/products/s576-gby76000ylw3xl-gooby-adjustable-dog-raincoat-yellow"
                                                title="Share on Google+" tabindex="0"><i
                                                    class="ion-social-googleplus"></i></a></li>

                                        <li><a target="_blank"
                                                href="//pinterest.com/pin/create/button/?url=https://pr-petsworld.myshopify.com/products/s576-gby76000ylw3xl-gooby-adjustable-dog-raincoat-yellow&amp;media=http://cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-YLW-3XL_1024x1024.jpg?v=1571716652&amp;description=Gooby%20Adjustable%20Dog%20Raincoat%20-%20Yellow"
                                                title="Share on Pinterest" tabindex="0"><i
                                                    class="ion-social-pinterest"></i></a></li>

                                    </ul>
                                </div>


                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>





        <script>
        var selectCallback = function(variant, selector) {
            timber.productPage({
                money_format: "<span class=money>${{amount}} USD</span>",
                variant: variant,
                selector: selector
            });

            if (variant) {

                // Current variant select+
                var form = jQuery('#' + selector.domIdPrefix).closest('form');
                for (var i = 0, length = variant.options.length; i < length; i++) {
                    var val = variant.options[i].replace(/'/g, "&#039;");
                    var radioButton = form.find(".swatch[data-option-index='" + i + "'] :radio[value='" + val +
                        "']");
                    if (radioButton.size()) {
                        radioButton.get(0).checked = true;
                    }
                }

                // Current sku pass
                $('.variant-sku').text(variant.sku);
            } else {
                $('.variant-sku').empty();
            } // product image zoom with variant
            if (variant && variant.featured_image) {
                jQuery('#ProductThumbs a[data-image-id="' + variant.featured_image.id + '"]').trigger('click');
            }
        };
        jQuery(function($) {
            new Shopify.OptionSelectors('productSelect', {
                product: {
                    "id": 2403990274130,
                    "title": "Gooby Adjustable Dog Raincoat - Yellow",
                    "handle": "s576-gby76000ylw3xl-gooby-adjustable-dog-raincoat-yellow",
                    "description": "Size: 3X-Large\u003cbr\u003e\u003cp\u003e\u003c\/p\u003e\u003cp\u003eSplash out the rain and the wet dog with the Gooby Adjustable Dog Raincoat in Yellow!\u003c\/p\u003e\u003cul\u003e\n\u003cli\u003eWire framed hood\u003c\/li\u003e\n\u003cli\u003eClear hooded visor\u003c\/li\u003e\n\u003cli\u003eDrawstring harness hole\u003c\/li\u003e\n\u003cli\u003eHarness function\u003c\/li\u003e\n\u003cli\u003eReflective stripes down back\u003c\/li\u003e\n\u003c\/ul\u003e\u003cp\u003eWhy We Love It:\u003c\/p\u003e\u003cp\u003eKeep your dow away from the wetness. Unlikely other rain the Gooby Adjustable Dog Raincoat has a full functioning hood to cover the rain without blocking your dog's eyesight. With Malleable hoodie it can be reshaped to your preference.\u003c\/p\u003e ",
                    "published_at": "2019-02-28T08:33:44-05:00",
                    "created_at": "2019-02-28T08:33:47-05:00",
                    "vendor": "Gooby Pet Fashions",
                    "type": "Dog Clothes",
                    "tags": ["dogclothes"],
                    "price": 5550,
                    "price_min": 5550,
                    "price_max": 5550,
                    "available": true,
                    "price_varies": false,
                    "compare_at_price": 0,
                    "compare_at_price_min": 0,
                    "compare_at_price_max": 0,
                    "compare_at_price_varies": false,
                    "variants": [{
                        "id": 21486261895250,
                        "title": "Default Title",
                        "option1": "Default Title",
                        "option2": null,
                        "option3": null,
                        "sku": "S576-GBY-76000-YLW-3XL",
                        "requires_shipping": true,
                        "taxable": true,
                        "featured_image": null,
                        "available": true,
                        "name": "Gooby Adjustable Dog Raincoat - Yellow",
                        "public_title": null,
                        "options": ["Default Title"],
                        "price": 5550,
                        "weight": 454,
                        "compare_at_price": 0,
                        "inventory_management": "shopify",
                        "barcode": "841186115528"
                    }],
                    "images": [
                        "\/\/cdn.shopify.com\/s\/files\/1\/0059\/6620\/0914\/products\/GBY-76000-YLW-3XL.jpg?v=1571716652",
                        "\/\/cdn.shopify.com\/s\/files\/1\/0059\/6620\/0914\/products\/GBY-76000-YLW-3XL_16068706.jpg?v=1571716652",
                        "\/\/cdn.shopify.com\/s\/files\/1\/0059\/6620\/0914\/products\/GBY-76000-YLW-3XL_16068707.jpg?v=1571716652",
                        "\/\/cdn.shopify.com\/s\/files\/1\/0059\/6620\/0914\/products\/GBY-76000-YLW-3XL_16068708.jpg?v=1571716652",
                        "\/\/cdn.shopify.com\/s\/files\/1\/0059\/6620\/0914\/products\/GBY-76000-YLW-3XL_16068709.jpg?v=1571716652"
                    ],
                    "featured_image": "\/\/cdn.shopify.com\/s\/files\/1\/0059\/6620\/0914\/products\/GBY-76000-YLW-3XL.jpg?v=1571716652",
                    "options": ["Title"],
                    "media": [{
                        "alt": null,
                        "id": 1357651050578,
                        "position": 1,
                        "preview_image": {
                            "aspect_ratio": 1.0,
                            "height": 500,
                            "width": 500,
                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0059\/6620\/0914\/products\/GBY-76000-YLW-3XL.jpg?v=1569166950"
                        },
                        "aspect_ratio": 1.0,
                        "height": 500,
                        "media_type": "image",
                        "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0059\/6620\/0914\/products\/GBY-76000-YLW-3XL.jpg?v=1569166950",
                        "width": 500
                    }, {
                        "alt": null,
                        "id": 1357651083346,
                        "position": 2,
                        "preview_image": {
                            "aspect_ratio": 1.0,
                            "height": 500,
                            "width": 500,
                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0059\/6620\/0914\/products\/GBY-76000-YLW-3XL_16068706.jpg?v=1569166950"
                        },
                        "aspect_ratio": 1.0,
                        "height": 500,
                        "media_type": "image",
                        "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0059\/6620\/0914\/products\/GBY-76000-YLW-3XL_16068706.jpg?v=1569166950",
                        "width": 500
                    }, {
                        "alt": null,
                        "id": 1357651116114,
                        "position": 3,
                        "preview_image": {
                            "aspect_ratio": 1.0,
                            "height": 500,
                            "width": 500,
                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0059\/6620\/0914\/products\/GBY-76000-YLW-3XL_16068707.jpg?v=1569166950"
                        },
                        "aspect_ratio": 1.0,
                        "height": 500,
                        "media_type": "image",
                        "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0059\/6620\/0914\/products\/GBY-76000-YLW-3XL_16068707.jpg?v=1569166950",
                        "width": 500
                    }, {
                        "alt": null,
                        "id": 1357651148882,
                        "position": 4,
                        "preview_image": {
                            "aspect_ratio": 1.0,
                            "height": 500,
                            "width": 500,
                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0059\/6620\/0914\/products\/GBY-76000-YLW-3XL_16068708.jpg?v=1569166950"
                        },
                        "aspect_ratio": 1.0,
                        "height": 500,
                        "media_type": "image",
                        "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0059\/6620\/0914\/products\/GBY-76000-YLW-3XL_16068708.jpg?v=1569166950",
                        "width": 500
                    }, {
                        "alt": null,
                        "id": 1357651181650,
                        "position": 5,
                        "preview_image": {
                            "aspect_ratio": 1.0,
                            "height": 500,
                            "width": 500,
                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0059\/6620\/0914\/products\/GBY-76000-YLW-3XL_16068709.jpg?v=1569166950"
                        },
                        "aspect_ratio": 1.0,
                        "height": 500,
                        "media_type": "image",
                        "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0059\/6620\/0914\/products\/GBY-76000-YLW-3XL_16068709.jpg?v=1569166950",
                        "width": 500
                    }],
                    "content": "Size: 3X-Large\u003cbr\u003e\u003cp\u003e\u003c\/p\u003e\u003cp\u003eSplash out the rain and the wet dog with the Gooby Adjustable Dog Raincoat in Yellow!\u003c\/p\u003e\u003cul\u003e\n\u003cli\u003eWire framed hood\u003c\/li\u003e\n\u003cli\u003eClear hooded visor\u003c\/li\u003e\n\u003cli\u003eDrawstring harness hole\u003c\/li\u003e\n\u003cli\u003eHarness function\u003c\/li\u003e\n\u003cli\u003eReflective stripes down back\u003c\/li\u003e\n\u003c\/ul\u003e\u003cp\u003eWhy We Love It:\u003c\/p\u003e\u003cp\u003eKeep your dow away from the wetness. Unlikely other rain the Gooby Adjustable Dog Raincoat has a full functioning hood to cover the rain without blocking your dog's eyesight. With Malleable hoodie it can be reshaped to your preference.\u003c\/p\u003e "
                },
                onVariantSelected: selectCallback,
                enableHistoryState: true
            });

            // Add label if only one product option and it isn't 'Title'. Could be 'Size'.


            // Hide selectors if we only have 1 variant and its title contains 'Default'.

            $('.selector-wrapper').hide();

        });

        function productZoom() {
            $(".product-zoom").elevateZoom({
                gallery: 'ProductThumbs',
                galleryActiveClass: "active",
                zoomType: "inner",
                cursor: "crosshair"
            });
        };

        function productZoomDisable() {
            if ($(window).width() < 767) {
                $('.zoomContainer').remove();
                $(".product-zoom").removeData('elevateZoom');
                $(".product-zoom").removeData('zoomImage');
            } else {
                productZoom();
            }
        };

        productZoomDisable();

        $(window).resize(function() {
            productZoomDisable();
        });
        </script>
    </div>
    <div id="shopify-section-single-product-tab" class="shopify-section">
        <div class="product-description-review-area pb-120">
            <div class="container">
                <div class="product-description-review">
                    <div class="description-review-title nav" role="tablist">
                        <a class="active" href="#pro-dec" data-toggle="tab" role="tab" aria-selected="true">
                            Description
                        </a>






                    </div>


                    <div class="description-review-text tab-content">
                        <div class="tab-pane active" id="pro-dec" role="tabpanel">Size: 3X-Large<br>
                            <p></p>
                            <p>Splash out the rain and the wet dog with the Gooby Adjustable Dog Raincoat in Yellow!</p>
                            <ul>
                                <li>Wire framed hood</li>
                                <li>Clear hooded visor</li>
                                <li>Drawstring harness hole</li>
                                <li>Harness function</li>
                                <li>Reflective stripes down back</li>
                            </ul>
                            <p>Why We Love It:</p>
                            <p>Keep your dow away from the wetness. Unlikely other rain the Gooby Adjustable Dog
                                Raincoat has a full functioning hood to cover the rain without blocking your dog's
                                eyesight. With Malleable hoodie it can be reshaped to your preference.</p>
                        </div>







                    </div>

                </div>
            </div>
        </div>











    </div>
    <div id="shopify-section-related-product" class="shopify-section">
        <!-- PRODUCT SECTION START -->






        <div class="related-product">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section-title start -->
                        <div class="section-title">

                            <h2>Related Product</h2>


                            <p>You may like these products</p>

                        </div>
                        <!-- section-title end -->
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="product-slider row slick-initialized slick-slider">





                    <div class="slick-list draggable">
                        <div class="slick-track"
                            style="opacity: 1; width: 6000px; transform: translate3d(-1200px, 0px, 0px);">
                            <div class="col slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true"
                                style="width: 300px;" tabindex="-1">

                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <div class="product-item-badge">





                                        </div>
                                        <a href="/products/single.php?product=1"
                                            tabindex="-1">
                                            <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-BLU-XS_270X320_crop_center.jpg?v=1571716652"
                                                alt="">
                                        </a>
                                        <div class="product-action">


                                            <a class="wishlist" href="/account/login" title="Wishlist" tabindex="-1">
                                                <span class="add-wishlist"><i class="icon-heart"></i></span>
                                            </a>





                                            <a href="javascript:void(0);"
                                                onclick="Shopify.addItem(21486255734866, 1); return false;"
                                                class="add-to-cart ajax-spin-cart" tabindex="-1">
                                                <span>
                                                    <span class="cart-title"><i class="icon-handbag"></i></span>
                                                    <span class="cart-loading animated infinite rotateOut"><i
                                                            class="ion-load-a"></i></span>
                                                    <span class="cart-added"><i class="ion-android-done"></i></span>
                                                    <span class="cart-unavailable"><i
                                                            class="ion-android-alert"></i></span>
                                                </span>
                                            </a>



                                            <a href="javascript:void(0);"
                                                onclick="quiqview('s576-gby76000bluxs-gooby-adjustable-dog-raincoat-blue')"
                                                class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"
                                                tabindex="-1"><i class="icon-magnifier-add"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="/products/single.php?product=5"
                                                tabindex="-1">Gooby Adjustable Dog Raincoat - Blue</a></h3>
                                        <div class="price-box">

                                            <span class="new-price"><span class="money" data-currency-usd="$51.45 USD"
                                                    data-currency="USD">$51.45 USD</span></span>

                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->


                            </div>
                            <div class="col slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true"
                                style="width: 300px;" tabindex="-1">

                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <div class="product-item-badge">





                                        </div>
                                        <a href="/products/single.php?product=6"
                                            tabindex="-1">
                                            <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-BLU-XL_270X320_crop_center.jpg?v=1571716652"
                                                alt="">
                                        </a>
                                        <div class="product-action">


                                            <a class="wishlist" href="/account/login" title="Wishlist" tabindex="-1">
                                                <span class="add-wishlist"><i class="icon-heart"></i></span>
                                            </a>





                                            <a href="javascript:void(0);"
                                                onclick="Shopify.addItem(21486255702098, 1); return false;"
                                                class="add-to-cart ajax-spin-cart" tabindex="-1">
                                                <span>
                                                    <span class="cart-title"><i class="icon-handbag"></i></span>
                                                    <span class="cart-loading animated infinite rotateOut"><i
                                                            class="ion-load-a"></i></span>
                                                    <span class="cart-added"><i class="ion-android-done"></i></span>
                                                    <span class="cart-unavailable"><i
                                                            class="ion-android-alert"></i></span>
                                                </span>
                                            </a>



                                            <a href="javascript:void(0);"
                                                onclick="quiqview('s576-gby76000bluxl-gooby-adjustable-dog-raincoat-blue')"
                                                class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"
                                                tabindex="-1"><i class="icon-magnifier-add"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="/products/single.php?product=6"
                                                tabindex="-1">Gooby Adjustable Dog Raincoat - Blue</a></h3>
                                        <div class="price-box">

                                            <span class="new-price"><span class="money" data-currency-usd="$55.50 USD"
                                                    data-currency="USD">$55.50 USD</span></span>

                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->


                            </div>
                            <div class="col slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true"
                                style="width: 300px;" tabindex="-1">

                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <div class="product-item-badge">





                                        </div>
                                        <a href="/products/single.php?product=7"
                                            tabindex="-1">
                                            <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-BLU-M_270X320_crop_center.jpg?v=1571716652"
                                                alt="">
                                        </a>
                                        <div class="product-action">


                                            <a class="wishlist" href="/account/login" title="Wishlist" tabindex="-1">
                                                <span class="add-wishlist"><i class="icon-heart"></i></span>
                                            </a>





                                            <a href="javascript:void(0);"
                                                onclick="Shopify.addItem(21486253015122, 1); return false;"
                                                class="add-to-cart ajax-spin-cart" tabindex="-1">
                                                <span>
                                                    <span class="cart-title"><i class="icon-handbag"></i></span>
                                                    <span class="cart-loading animated infinite rotateOut"><i
                                                            class="ion-load-a"></i></span>
                                                    <span class="cart-added"><i class="ion-android-done"></i></span>
                                                    <span class="cart-unavailable"><i
                                                            class="ion-android-alert"></i></span>
                                                </span>
                                            </a>



                                            <a href="javascript:void(0);"
                                                onclick="quiqview('s576-gby76000blum-gooby-adjustable-dog-raincoat-blue')"
                                                class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"
                                                tabindex="-1"><i class="icon-magnifier-add"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="/products/single.php?product=7"
                                                tabindex="-1">Gooby Adjustable Dog Raincoat - Blue</a></h3>
                                        <div class="price-box">

                                            <span class="new-price"><span class="money" data-currency-usd="$52.80 USD"
                                                    data-currency="USD">$52.80 USD</span></span>

                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->


                            </div>
                            <div class="col slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true"
                                style="width: 300px;" tabindex="-1">

                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <div class="product-item-badge">





                                        </div>
                                        <a href="/products/single.php?product=8"
                                            tabindex="-1">
                                            <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-BLU-3XL_270X320_crop_center.jpg?v=1571716652"
                                                alt="">
                                        </a>
                                        <div class="product-action">


                                            <a class="wishlist" href="/account/login" title="Wishlist" tabindex="-1">
                                                <span class="add-wishlist"><i class="icon-heart"></i></span>
                                            </a>





                                            <a href="javascript:void(0);"
                                                onclick="Shopify.addItem(21486251769938, 1); return false;"
                                                class="add-to-cart ajax-spin-cart" tabindex="-1">
                                                <span>
                                                    <span class="cart-title"><i class="icon-handbag"></i></span>
                                                    <span class="cart-loading animated infinite rotateOut"><i
                                                            class="ion-load-a"></i></span>
                                                    <span class="cart-added"><i class="ion-android-done"></i></span>
                                                    <span class="cart-unavailable"><i
                                                            class="ion-android-alert"></i></span>
                                                </span>
                                            </a>



                                            <a href="javascript:void(0);"
                                                onclick="quiqview('s576-gby76000blu3xl-gooby-adjustable-dog-raincoat-blue')"
                                                class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"
                                                tabindex="-1"><i class="icon-magnifier-add"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="/products/single.php?product=8"
                                                tabindex="-1">Gooby Adjustable Dog Raincoat - Blue</a></h3>
                                        <div class="price-box">

                                            <span class="new-price"><span class="money" data-currency-usd="$55.50 USD"
                                                    data-currency="USD">$55.50 USD</span></span>

                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->


                            </div>
                            <div class="col slick-slide slick-current slick-active" data-slick-index="0"
                                aria-hidden="false" style="width: 300px;" tabindex="0">

                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <div class="product-item-badge">





                                        </div>
                                        <a href="/products/single.php?product=9"
                                            tabindex="0">
                                            <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/KJK040-XL_270X320_crop_center.jpg?v=1571716653"
                                                alt="">
                                        </a>
                                        <div class="product-action">


                                            <a class="wishlist" href="/account/login" title="Wishlist" tabindex="0">
                                                <span class="add-wishlist"><i class="icon-heart"></i></span>
                                            </a>





                                            <a href="javascript:void(0);"
                                                onclick="Shopify.addItem(21486265794642, 1); return false;"
                                                class="add-to-cart ajax-spin-cart" tabindex="0">
                                                <span>
                                                    <span class="cart-title"><i class="icon-handbag"></i></span>
                                                    <span class="cart-loading animated infinite rotateOut"><i
                                                            class="ion-load-a"></i></span>
                                                    <span class="cart-added"><i class="ion-android-done"></i></span>
                                                    <span class="cart-unavailable"><i
                                                            class="ion-android-alert"></i></span>
                                                </span>
                                            </a>



                                            <a href="javascript:void(0);"
                                                onclick="quiqview('s576-kjk040xl-got-bones-padded-dog-coat-with-removable-hoodie-by-klippo')"
                                                class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"
                                                tabindex="0"><i class="icon-magnifier-add"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="/products/single.php?product=9"
                                                tabindex="0">Got Bones? Padded Dog Coat with Removable Hoodie by
                                                Klippo</a></h3>
                                        <div class="price-box">

                                            <span class="new-price"><span class="money" data-currency-usd="$58.20 USD"
                                                    data-currency="USD">$58.20 USD</span></span>

                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->


                            </div>
                            <div class="col slick-slide slick-active" data-slick-index="1" aria-hidden="false"
                                style="width: 300px;" tabindex="0">

                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <div class="product-item-badge">





                                        </div>
                                        <a href="/products/single.php?product=10"
                                            tabindex="0">
                                            <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-RED-M_270X320_crop_center.jpg?v=1571716652"
                                                alt="">
                                        </a>
                                        <div class="product-action">


                                            <a class="wishlist" href="/account/login" title="Wishlist" tabindex="0">
                                                <span class="add-wishlist"><i class="icon-heart"></i></span>
                                            </a>





                                            <a href="javascript:void(0);"
                                                onclick="Shopify.addItem(21486259765330, 1); return false;"
                                                class="add-to-cart ajax-spin-cart" tabindex="0">
                                                <span>
                                                    <span class="cart-title"><i class="icon-handbag"></i></span>
                                                    <span class="cart-loading animated infinite rotateOut"><i
                                                            class="ion-load-a"></i></span>
                                                    <span class="cart-added"><i class="ion-android-done"></i></span>
                                                    <span class="cart-unavailable"><i
                                                            class="ion-android-alert"></i></span>
                                                </span>
                                            </a>



                                            <a href="javascript:void(0);"
                                                onclick="quiqview('s576-gby76000redm-gooby-adjustable-dog-raincoat-red')"
                                                class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"
                                                tabindex="0"><i class="icon-magnifier-add"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="/products/single.php?product=10"
                                                tabindex="0">Gooby Adjustable Dog Raincoat - Red</a></h3>
                                        <div class="price-box">

                                            <span class="new-price"><span class="money" data-currency-usd="$52.80 USD"
                                                    data-currency="USD">$52.80 USD</span></span>

                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->


                            </div>
                            <div class="col slick-slide slick-active" data-slick-index="2" aria-hidden="false"
                                style="width: 300px;" tabindex="0">

                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <div class="product-item-badge">





                                        </div>
                                        <a href="/products/single.php?product=11"
                                            tabindex="0">
                                            <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-RED-L_270X320_crop_center.jpg?v=1571716652"
                                                alt="">
                                        </a>
                                        <div class="product-action">


                                            <a class="wishlist" href="/account/login" title="Wishlist" tabindex="0">
                                                <span class="add-wishlist"><i class="icon-heart"></i></span>
                                            </a>





                                            <a href="javascript:void(0);"
                                                onclick="Shopify.addItem(21486256357458, 1); return false;"
                                                class="add-to-cart ajax-spin-cart" tabindex="0">
                                                <span>
                                                    <span class="cart-title"><i class="icon-handbag"></i></span>
                                                    <span class="cart-loading animated infinite rotateOut"><i
                                                            class="ion-load-a"></i></span>
                                                    <span class="cart-added"><i class="ion-android-done"></i></span>
                                                    <span class="cart-unavailable"><i
                                                            class="ion-android-alert"></i></span>
                                                </span>
                                            </a>



                                            <a href="javascript:void(0);"
                                                onclick="quiqview('s576-gby76000redl-gooby-adjustable-dog-raincoat-red')"
                                                class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"
                                                tabindex="0"><i class="icon-magnifier-add"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="/products/single.php?product=11"
                                                tabindex="0">Gooby Adjustable Dog Raincoat - Red</a></h3>
                                        <div class="price-box">

                                            <span class="new-price"><span class="money" data-currency-usd="$52.80 USD"
                                                    data-currency="USD">$52.80 USD</span></span>

                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->


                            </div>
                            <div class="col slick-slide slick-active" data-slick-index="3" aria-hidden="false"
                                style="width: 300px;" tabindex="0">

                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <div class="product-item-badge">





                                        </div>
                                        <a href="/products/single.php?product=12"
                                            tabindex="0">
                                            <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-BLU-XXL_270X320_crop_center.jpg?v=1571716652"
                                                alt="">
                                        </a>
                                        <div class="product-action">


                                            <a class="wishlist" href="/account/login" title="Wishlist" tabindex="0">
                                                <span class="add-wishlist"><i class="icon-heart"></i></span>
                                            </a>





                                            <a href="javascript:void(0);"
                                                onclick="Shopify.addItem(21486256062546, 1); return false;"
                                                class="add-to-cart ajax-spin-cart" tabindex="0">
                                                <span>
                                                    <span class="cart-title"><i class="icon-handbag"></i></span>
                                                    <span class="cart-loading animated infinite rotateOut"><i
                                                            class="ion-load-a"></i></span>
                                                    <span class="cart-added"><i class="ion-android-done"></i></span>
                                                    <span class="cart-unavailable"><i
                                                            class="ion-android-alert"></i></span>
                                                </span>
                                            </a>



                                            <a href="javascript:void(0);"
                                                onclick="quiqview('s576-gby76000bluxxl-gooby-adjustable-dog-raincoat-blue')"
                                                class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"
                                                tabindex="0"><i class="icon-magnifier-add"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="/products/single.php?product=12"
                                                tabindex="0">Gooby Adjustable Dog Raincoat - Blue</a></h3>
                                        <div class="price-box">

                                            <span class="new-price"><span class="money" data-currency-usd="$55.50 USD"
                                                    data-currency="USD">$55.50 USD</span></span>

                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->


                            </div>
                            <div class="col slick-slide" data-slick-index="4" aria-hidden="true" style="width: 300px;"
                                tabindex="-1">

                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <div class="product-item-badge">





                                        </div>
                                        <a href="/products/single.php?product=5"
                                            tabindex="-1">
                                            <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-BLU-XS_270X320_crop_center.jpg?v=1571716652"
                                                alt="">
                                        </a>
                                        <div class="product-action">


                                            <a class="wishlist" href="/account/login" title="Wishlist" tabindex="-1">
                                                <span class="add-wishlist"><i class="icon-heart"></i></span>
                                            </a>





                                            <a href="javascript:void(0);"
                                                onclick="Shopify.addItem(21486255734866, 1); return false;"
                                                class="add-to-cart ajax-spin-cart" tabindex="-1">
                                                <span>
                                                    <span class="cart-title"><i class="icon-handbag"></i></span>
                                                    <span class="cart-loading animated infinite rotateOut"><i
                                                            class="ion-load-a"></i></span>
                                                    <span class="cart-added"><i class="ion-android-done"></i></span>
                                                    <span class="cart-unavailable"><i
                                                            class="ion-android-alert"></i></span>
                                                </span>
                                            </a>



                                            <a href="javascript:void(0);"
                                                onclick="quiqview('s576-gby76000bluxs-gooby-adjustable-dog-raincoat-blue')"
                                                class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"
                                                tabindex="-1"><i class="icon-magnifier-add"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="/products/single.php?product=5"
                                                tabindex="-1">Gooby Adjustable Dog Raincoat - Blue</a></h3>
                                        <div class="price-box">

                                            <span class="new-price"><span class="money" data-currency-usd="$51.45 USD"
                                                    data-currency="USD">$51.45 USD</span></span>

                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->


                            </div>
                            <div class="col slick-slide" data-slick-index="5" aria-hidden="true" style="width: 300px;"
                                tabindex="-1">

                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <div class="product-item-badge">





                                        </div>
                                        <a href="/products/single.php?product=6"
                                            tabindex="-1">
                                            <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-BLU-XL_270X320_crop_center.jpg?v=1571716652"
                                                alt="">
                                        </a>
                                        <div class="product-action">


                                            <a class="wishlist" href="/account/login" title="Wishlist" tabindex="-1">
                                                <span class="add-wishlist"><i class="icon-heart"></i></span>
                                            </a>





                                            <a href="javascript:void(0);"
                                                onclick="Shopify.addItem(21486255702098, 1); return false;"
                                                class="add-to-cart ajax-spin-cart" tabindex="-1">
                                                <span>
                                                    <span class="cart-title"><i class="icon-handbag"></i></span>
                                                    <span class="cart-loading animated infinite rotateOut"><i
                                                            class="ion-load-a"></i></span>
                                                    <span class="cart-added"><i class="ion-android-done"></i></span>
                                                    <span class="cart-unavailable"><i
                                                            class="ion-android-alert"></i></span>
                                                </span>
                                            </a>



                                            <a href="javascript:void(0);"
                                                onclick="quiqview('s576-gby76000bluxl-gooby-adjustable-dog-raincoat-blue')"
                                                class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"
                                                tabindex="-1"><i class="icon-magnifier-add"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="/products/single.php?product=6"
                                                tabindex="-1">Gooby Adjustable Dog Raincoat - Blue</a></h3>
                                        <div class="price-box">

                                            <span class="new-price"><span class="money" data-currency-usd="$55.50 USD"
                                                    data-currency="USD">$55.50 USD</span></span>

                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->


                            </div>
                            <div class="col slick-slide" data-slick-index="6" aria-hidden="true" style="width: 300px;"
                                tabindex="-1">

                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <div class="product-item-badge">





                                        </div>
                                        <a href="/products/single.php?product=7"
                                            tabindex="-1">
                                            <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-BLU-M_270X320_crop_center.jpg?v=1571716652"
                                                alt="">
                                        </a>
                                        <div class="product-action">


                                            <a class="wishlist" href="/account/login" title="Wishlist" tabindex="-1">
                                                <span class="add-wishlist"><i class="icon-heart"></i></span>
                                            </a>





                                            <a href="javascript:void(0);"
                                                onclick="Shopify.addItem(21486253015122, 1); return false;"
                                                class="add-to-cart ajax-spin-cart" tabindex="-1">
                                                <span>
                                                    <span class="cart-title"><i class="icon-handbag"></i></span>
                                                    <span class="cart-loading animated infinite rotateOut"><i
                                                            class="ion-load-a"></i></span>
                                                    <span class="cart-added"><i class="ion-android-done"></i></span>
                                                    <span class="cart-unavailable"><i
                                                            class="ion-android-alert"></i></span>
                                                </span>
                                            </a>



                                            <a href="javascript:void(0);"
                                                onclick="quiqview('s576-gby76000blum-gooby-adjustable-dog-raincoat-blue')"
                                                class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"
                                                tabindex="-1"><i class="icon-magnifier-add"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="/products/single.php?product=7"
                                                tabindex="-1">Gooby Adjustable Dog Raincoat - Blue</a></h3>
                                        <div class="price-box">

                                            <span class="new-price"><span class="money" data-currency-usd="$52.80 USD"
                                                    data-currency="USD">$52.80 USD</span></span>

                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->


                            </div>
                            <div class="col slick-slide" data-slick-index="7" aria-hidden="true" style="width: 300px;"
                                tabindex="-1">

                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <div class="product-item-badge">





                                        </div>
                                        <a href="/products/single.php?product=8"
                                            tabindex="-1">
                                            <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-BLU-3XL_270X320_crop_center.jpg?v=1571716652"
                                                alt="">
                                        </a>
                                        <div class="product-action">


                                            <a class="wishlist" href="/account/login" title="Wishlist" tabindex="-1">
                                                <span class="add-wishlist"><i class="icon-heart"></i></span>
                                            </a>





                                            <a href="javascript:void(0);"
                                                onclick="Shopify.addItem(21486251769938, 1); return false;"
                                                class="add-to-cart ajax-spin-cart" tabindex="-1">
                                                <span>
                                                    <span class="cart-title"><i class="icon-handbag"></i></span>
                                                    <span class="cart-loading animated infinite rotateOut"><i
                                                            class="ion-load-a"></i></span>
                                                    <span class="cart-added"><i class="ion-android-done"></i></span>
                                                    <span class="cart-unavailable"><i
                                                            class="ion-android-alert"></i></span>
                                                </span>
                                            </a>



                                            <a href="javascript:void(0);"
                                                onclick="quiqview('s576-gby76000blu3xl-gooby-adjustable-dog-raincoat-blue')"
                                                class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"
                                                tabindex="-1"><i class="icon-magnifier-add"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="/products/single.php?product=8"
                                                tabindex="-1">Gooby Adjustable Dog Raincoat - Blue</a></h3>
                                        <div class="price-box">

                                            <span class="new-price"><span class="money" data-currency-usd="$55.50 USD"
                                                    data-currency="USD">$55.50 USD</span></span>

                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->


                            </div>
                            <div class="col slick-slide slick-cloned" data-slick-index="8" aria-hidden="true"
                                style="width: 300px;" tabindex="-1">

                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <div class="product-item-badge">





                                        </div>
                                        <a href="/products/single.php?product=9"
                                            tabindex="-1">
                                            <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/KJK040-XL_270X320_crop_center.jpg?v=1571716653"
                                                alt="">
                                        </a>
                                        <div class="product-action">


                                            <a class="wishlist" href="/account/login" title="Wishlist" tabindex="-1">
                                                <span class="add-wishlist"><i class="icon-heart"></i></span>
                                            </a>





                                            <a href="javascript:void(0);"
                                                onclick="Shopify.addItem(21486265794642, 1); return false;"
                                                class="add-to-cart ajax-spin-cart" tabindex="-1">
                                                <span>
                                                    <span class="cart-title"><i class="icon-handbag"></i></span>
                                                    <span class="cart-loading animated infinite rotateOut"><i
                                                            class="ion-load-a"></i></span>
                                                    <span class="cart-added"><i class="ion-android-done"></i></span>
                                                    <span class="cart-unavailable"><i
                                                            class="ion-android-alert"></i></span>
                                                </span>
                                            </a>



                                            <a href="javascript:void(0);"
                                                onclick="quiqview('s576-kjk040xl-got-bones-padded-dog-coat-with-removable-hoodie-by-klippo')"
                                                class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"
                                                tabindex="-1"><i class="icon-magnifier-add"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="/products/single.php?product=9"
                                                tabindex="-1">Got Bones? Padded Dog Coat with Removable Hoodie by
                                                Klippo</a></h3>
                                        <div class="price-box">

                                            <span class="new-price"><span class="money" data-currency-usd="$58.20 USD"
                                                    data-currency="USD">$58.20 USD</span></span>

                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->


                            </div>
                            <div class="col slick-slide slick-cloned" data-slick-index="9" aria-hidden="true"
                                style="width: 300px;" tabindex="-1">

                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <div class="product-item-badge">





                                        </div>
                                        <a href="/products/single.php?product=10"
                                            tabindex="-1">
                                            <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-RED-M_270X320_crop_center.jpg?v=1571716652"
                                                alt="">
                                        </a>
                                        <div class="product-action">


                                            <a class="wishlist" href="/account/login" title="Wishlist" tabindex="-1">
                                                <span class="add-wishlist"><i class="icon-heart"></i></span>
                                            </a>





                                            <a href="javascript:void(0);"
                                                onclick="Shopify.addItem(21486259765330, 1); return false;"
                                                class="add-to-cart ajax-spin-cart" tabindex="-1">
                                                <span>
                                                    <span class="cart-title"><i class="icon-handbag"></i></span>
                                                    <span class="cart-loading animated infinite rotateOut"><i
                                                            class="ion-load-a"></i></span>
                                                    <span class="cart-added"><i class="ion-android-done"></i></span>
                                                    <span class="cart-unavailable"><i
                                                            class="ion-android-alert"></i></span>
                                                </span>
                                            </a>



                                            <a href="javascript:void(0);"
                                                onclick="quiqview('s576-gby76000redm-gooby-adjustable-dog-raincoat-red')"
                                                class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"
                                                tabindex="-1"><i class="icon-magnifier-add"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="/products/single.php?product=10"
                                                tabindex="-1">Gooby Adjustable Dog Raincoat - Red</a></h3>
                                        <div class="price-box">

                                            <span class="new-price"><span class="money" data-currency-usd="$52.80 USD"
                                                    data-currency="USD">$52.80 USD</span></span>

                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->


                            </div>
                            <div class="col slick-slide slick-cloned" data-slick-index="10" aria-hidden="true"
                                style="width: 300px;" tabindex="-1">

                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <div class="product-item-badge">





                                        </div>
                                        <a href="/products/single.php?product=11"
                                            tabindex="-1">
                                            <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-RED-L_270X320_crop_center.jpg?v=1571716652"
                                                alt="">
                                        </a>
                                        <div class="product-action">


                                            <a class="wishlist" href="/account/login" title="Wishlist" tabindex="-1">
                                                <span class="add-wishlist"><i class="icon-heart"></i></span>
                                            </a>





                                            <a href="javascript:void(0);"
                                                onclick="Shopify.addItem(21486256357458, 1); return false;"
                                                class="add-to-cart ajax-spin-cart" tabindex="-1">
                                                <span>
                                                    <span class="cart-title"><i class="icon-handbag"></i></span>
                                                    <span class="cart-loading animated infinite rotateOut"><i
                                                            class="ion-load-a"></i></span>
                                                    <span class="cart-added"><i class="ion-android-done"></i></span>
                                                    <span class="cart-unavailable"><i
                                                            class="ion-android-alert"></i></span>
                                                </span>
                                            </a>



                                            <a href="javascript:void(0);"
                                                onclick="quiqview('s576-gby76000redl-gooby-adjustable-dog-raincoat-red')"
                                                class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"
                                                tabindex="-1"><i class="icon-magnifier-add"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="/products/single.php?product=11"
                                                tabindex="-1">Gooby Adjustable Dog Raincoat - Red</a></h3>
                                        <div class="price-box">

                                            <span class="new-price"><span class="money" data-currency-usd="$52.80 USD"
                                                    data-currency="USD">$52.80 USD</span></span>

                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->


                            </div>
                            <div class="col slick-slide slick-cloned" data-slick-index="11" aria-hidden="true"
                                style="width: 300px;" tabindex="-1">

                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <div class="product-item-badge">





                                        </div>
                                        <a href="/products/single.php?product=12"
                                            tabindex="-1">
                                            <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-BLU-XXL_270X320_crop_center.jpg?v=1571716652"
                                                alt="">
                                        </a>
                                        <div class="product-action">


                                            <a class="wishlist" href="/account/login" title="Wishlist" tabindex="-1">
                                                <span class="add-wishlist"><i class="icon-heart"></i></span>
                                            </a>





                                            <a href="javascript:void(0);"
                                                onclick="Shopify.addItem(21486256062546, 1); return false;"
                                                class="add-to-cart ajax-spin-cart" tabindex="-1">
                                                <span>
                                                    <span class="cart-title"><i class="icon-handbag"></i></span>
                                                    <span class="cart-loading animated infinite rotateOut"><i
                                                            class="ion-load-a"></i></span>
                                                    <span class="cart-added"><i class="ion-android-done"></i></span>
                                                    <span class="cart-unavailable"><i
                                                            class="ion-android-alert"></i></span>
                                                </span>
                                            </a>



                                            <a href="javascript:void(0);"
                                                onclick="quiqview('s576-gby76000bluxxl-gooby-adjustable-dog-raincoat-blue')"
                                                class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"
                                                tabindex="-1"><i class="icon-magnifier-add"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="/products/single.php?product=12"
                                                tabindex="-1">Gooby Adjustable Dog Raincoat - Blue</a></h3>
                                        <div class="price-box">

                                            <span class="new-price"><span class="money" data-currency-usd="$55.50 USD"
                                                    data-currency="USD">$55.50 USD</span></span>

                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->


                            </div>
                            <div class="col slick-slide slick-cloned" data-slick-index="12" aria-hidden="true"
                                style="width: 300px;" tabindex="-1">

                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <div class="product-item-badge">





                                        </div>
                                        <a href="/products/single.php?product=5"
                                            tabindex="-1">
                                            <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-BLU-XS_270X320_crop_center.jpg?v=1571716652"
                                                alt="">
                                        </a>
                                        <div class="product-action">


                                            <a class="wishlist" href="/account/login" title="Wishlist" tabindex="-1">
                                                <span class="add-wishlist"><i class="icon-heart"></i></span>
                                            </a>





                                            <a href="javascript:void(0);"
                                                onclick="Shopify.addItem(21486255734866, 1); return false;"
                                                class="add-to-cart ajax-spin-cart" tabindex="-1">
                                                <span>
                                                    <span class="cart-title"><i class="icon-handbag"></i></span>
                                                    <span class="cart-loading animated infinite rotateOut"><i
                                                            class="ion-load-a"></i></span>
                                                    <span class="cart-added"><i class="ion-android-done"></i></span>
                                                    <span class="cart-unavailable"><i
                                                            class="ion-android-alert"></i></span>
                                                </span>
                                            </a>



                                            <a href="javascript:void(0);"
                                                onclick="quiqview('s576-gby76000bluxs-gooby-adjustable-dog-raincoat-blue')"
                                                class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"
                                                tabindex="-1"><i class="icon-magnifier-add"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="/products/single.php?product=5"
                                                tabindex="-1">Gooby Adjustable Dog Raincoat - Blue</a></h3>
                                        <div class="price-box">

                                            <span class="new-price"><span class="money" data-currency-usd="$51.45 USD"
                                                    data-currency="USD">$51.45 USD</span></span>

                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->


                            </div>
                            <div class="col slick-slide slick-cloned" data-slick-index="13" aria-hidden="true"
                                style="width: 300px;" tabindex="-1">

                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <div class="product-item-badge">





                                        </div>
                                        <a href="/products/single.php?product=6"
                                            tabindex="-1">
                                            <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-BLU-XL_270X320_crop_center.jpg?v=1571716652"
                                                alt="">
                                        </a>
                                        <div class="product-action">


                                            <a class="wishlist" href="/account/login" title="Wishlist" tabindex="-1">
                                                <span class="add-wishlist"><i class="icon-heart"></i></span>
                                            </a>





                                            <a href="javascript:void(0);"
                                                onclick="Shopify.addItem(21486255702098, 1); return false;"
                                                class="add-to-cart ajax-spin-cart" tabindex="-1">
                                                <span>
                                                    <span class="cart-title"><i class="icon-handbag"></i></span>
                                                    <span class="cart-loading animated infinite rotateOut"><i
                                                            class="ion-load-a"></i></span>
                                                    <span class="cart-added"><i class="ion-android-done"></i></span>
                                                    <span class="cart-unavailable"><i
                                                            class="ion-android-alert"></i></span>
                                                </span>
                                            </a>



                                            <a href="javascript:void(0);"
                                                onclick="quiqview('s576-gby76000bluxl-gooby-adjustable-dog-raincoat-blue')"
                                                class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"
                                                tabindex="-1"><i class="icon-magnifier-add"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="/products/single.php?product=6"
                                                tabindex="-1">Gooby Adjustable Dog Raincoat - Blue</a></h3>
                                        <div class="price-box">

                                            <span class="new-price"><span class="money" data-currency-usd="$55.50 USD"
                                                    data-currency="USD">$55.50 USD</span></span>

                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->


                            </div>
                            <div class="col slick-slide slick-cloned" data-slick-index="14" aria-hidden="true"
                                style="width: 300px;" tabindex="-1">

                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <div class="product-item-badge">





                                        </div>
                                        <a href="/products/single.php?product=7"
                                            tabindex="-1">
                                            <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-BLU-M_270X320_crop_center.jpg?v=1571716652"
                                                alt="">
                                        </a>
                                        <div class="product-action">


                                            <a class="wishlist" href="/account/login" title="Wishlist" tabindex="-1">
                                                <span class="add-wishlist"><i class="icon-heart"></i></span>
                                            </a>





                                            <a href="javascript:void(0);"
                                                onclick="Shopify.addItem(21486253015122, 1); return false;"
                                                class="add-to-cart ajax-spin-cart" tabindex="-1">
                                                <span>
                                                    <span class="cart-title"><i class="icon-handbag"></i></span>
                                                    <span class="cart-loading animated infinite rotateOut"><i
                                                            class="ion-load-a"></i></span>
                                                    <span class="cart-added"><i class="ion-android-done"></i></span>
                                                    <span class="cart-unavailable"><i
                                                            class="ion-android-alert"></i></span>
                                                </span>
                                            </a>



                                            <a href="javascript:void(0);"
                                                onclick="quiqview('s576-gby76000blum-gooby-adjustable-dog-raincoat-blue')"
                                                class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"
                                                tabindex="-1"><i class="icon-magnifier-add"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="/products/single.php?product=7"
                                                tabindex="-1">Gooby Adjustable Dog Raincoat - Blue</a></h3>
                                        <div class="price-box">

                                            <span class="new-price"><span class="money" data-currency-usd="$52.80 USD"
                                                    data-currency="USD">$52.80 USD</span></span>

                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->


                            </div>
                            <div class="col slick-slide slick-cloned" data-slick-index="15" aria-hidden="true"
                                style="width: 300px;" tabindex="-1">

                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <div class="product-item-badge">





                                        </div>
                                        <a href="/products/single.php?product=8"
                                            tabindex="-1">
                                            <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/GBY-76000-BLU-3XL_270X320_crop_center.jpg?v=1571716652"
                                                alt="">
                                        </a>
                                        <div class="product-action">


                                            <a class="wishlist" href="/account/login" title="Wishlist" tabindex="-1">
                                                <span class="add-wishlist"><i class="icon-heart"></i></span>
                                            </a>





                                            <a href="javascript:void(0);"
                                                onclick="Shopify.addItem(21486251769938, 1); return false;"
                                                class="add-to-cart ajax-spin-cart" tabindex="-1">
                                                <span>
                                                    <span class="cart-title"><i class="icon-handbag"></i></span>
                                                    <span class="cart-loading animated infinite rotateOut"><i
                                                            class="ion-load-a"></i></span>
                                                    <span class="cart-added"><i class="ion-android-done"></i></span>
                                                    <span class="cart-unavailable"><i
                                                            class="ion-android-alert"></i></span>
                                                </span>
                                            </a>



                                            <a href="javascript:void(0);"
                                                onclick="quiqview('s576-gby76000blu3xl-gooby-adjustable-dog-raincoat-blue')"
                                                class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"
                                                tabindex="-1"><i class="icon-magnifier-add"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="/products/single.php?product=8"
                                                tabindex="-1">Gooby Adjustable Dog Raincoat - Blue</a></h3>
                                        <div class="price-box">

                                            <span class="new-price"><span class="money" data-currency-usd="$55.50 USD"
                                                    data-currency="USD">$55.50 USD</span></span>

                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->


                            </div>
                        </div>
                    </div>

















































                </div>
            </div>
        </div>

        <!-- PRODUCT SECTION END -->

        <script>
        /*--
	Product Slider
        -----------------------------------*/
        $('.product-slider').slick({
            dots: false,
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: false,
            prevArrow: false,
            nextArrow: false,
            responsive: [{
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 479,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
        </script>






    </div>




</main>

<?php endif; ?>

<?php include_once('../includes/footer.php'); ?>