<?php include_once('../includes/header.php'); ?>

<?php include_once('../includes/nav.php'); ?>

<?php require_once('../products/db/products.php'); ?>

<div class="page-container drawer-page-content" id="PageContainer">
    <?php if ( isset($_GET['product'])) : ?>
    <?php
        $id = (int) $_GET['product'];
        $single = json_decode(find($id), true);
        // echo $_GET['product'];
    ?>

    <main class="main-content js-focus-hidden" id="MainContent" role="main" tabindex="-1">


        <div id="shopify-section-product-template" class="shopify-section">
            <div class="product-template__container page-width" id="ProductSection-product-template"
                data-section-id="product-template" data-section-type="product" data-enable-history-state="true"
                data-ajax-enabled="true">

                
                <div class="grid product-single">
                    <div class="grid__item product-single__media-group medium-up--one-half"
                        data-product-single-media-group="">






                        <div id="FeaturedMedia-product-template-11448214978710-wrapper"
                            class="product-single__media-wrapper js" data-product-single-media-wrapper=""
                            data-media-id="product-template-11448214978710" tabindex="-1">


                            <style>
                            #FeaturedMedia-product-template-11448214978710 {
                                max-width: 549.0px;
                                max-height: 423px;
                            }

                            #FeaturedMedia-product-template-11448214978710-wrapper {
                                max-width: 549.0px;
                            }
                            </style>

                            <div id="ImageZoom-product-template-11448214978710"
                                style="padding-top: 77.0492%; position: relative; overflow: hidden;"
                                class="product-single__media product-single__media--has-thumbnails js-zoom-enabled"
                                data-image-zoom-wrapper=""
                                data-zoom="<?php echo $single['featured_image'] ?>">
                                <img id="FeaturedMedia-product-template-11448214978710"
                                    class="feature-row__image product-featured-media lazyautosizes lazyloaded"
                                    data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                    data-aspectratio="1.297872340425532" data-sizes="auto" data-image-zoom=""
                                    alt="<?php echo $single['title'] ?>"
                                    onload="window.performance.mark('debut:product:image_visible');"
                                    data-srcset="<?php echo $single['featured_image'] ?> 2048w"
                                    sizes="530px"
                                    srcset="<?php echo $single['featured_image'] ?> 2048w">
                                <img role="presentation" data-image-zoom-target="true" class="zoomImg"
                                    src="<?php echo $single['featured_image'] ?>"
                                    style="width: 549px; height: 423px; position: absolute; max-width: none; max-height: none; opacity: 1; border: none; left: -17.9066px; top: -1.80147px;">
                            </div>

                        </div>

                        <div id="FeaturedMedia-product-template-11448215011478-wrapper"
                            class="product-single__media-wrapper js hide" data-product-single-media-wrapper=""
                            data-media-id="product-template-11448215011478" tabindex="-1">


                            <style>
                            #FeaturedMedia-product-template-11448215011478 {
                                max-width: 550.0px;
                                max-height: 428px;
                            }

                            #FeaturedMedia-product-template-11448215011478-wrapper {
                                max-width: 550.0px;
                            }
                            </style>

                            <div id="ImageZoom-product-template-11448215011478"
                                style="padding-top: 77.8182%; position: relative; overflow: hidden;"
                                class="product-single__media product-single__media--has-thumbnails js-zoom-enabled"
                                data-image-zoom-wrapper="" data-zoom="<?php echo $single['featured_image'] ?>">
                                <img id="FeaturedMedia-product-template-11448215011478"
                                    class="feature-row__image product-featured-media lazypreload lazyautosizes lazyloaded"
                                    data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                    data-aspectratio="1.2850467289719627" data-sizes="auto" data-image-zoom=""
                                    alt="<?php echo $single['title'] ?>"
                                    data-srcset="<?php echo $single['featured_image'] ?> 2048w" sizes="560px"
                                    srcset="<?php echo $single['featured_image'] ?> 2048w">
                                <img role="presentation" data-image-zoom-target="true" class="zoomImg"
                                    src="<?php echo $single['featured_image'] ?>"
                                    style="width: 550px; height: 428px; position: absolute; max-width: none; max-height: none; opacity: 0; border: none; left: 0px; top: 0px;">
                            </div>

                        </div>

                        <div id="FeaturedMedia-product-template-11448215044246-wrapper"
                            class="product-single__media-wrapper js hide" data-product-single-media-wrapper=""
                            data-media-id="product-template-11448215044246" tabindex="-1">


                            <style>
                            #FeaturedMedia-product-template-11448215044246 {
                                max-width: 549.0px;
                                max-height: 425px;
                            }

                            #FeaturedMedia-product-template-11448215044246-wrapper {
                                max-width: 549.0px;
                            }
                            </style>

                            <div id="ImageZoom-product-template-11448215044246"
                                style="padding-top: 77.4135%; position: relative; overflow: hidden;"
                                class="product-single__media product-single__media--has-thumbnails js-zoom-enabled"
                                data-image-zoom-wrapper=""
                                data-zoom="//cdn.shopify.com/s/files/1/0498/7122/4982/products/434b3605-fdff-4412-8482-21a366fa8892_2000x_c0c32338-db11-4558-beee-9e65a7afb51f_1024x1024@2x.png?v=1601418400">
                                <img id="FeaturedMedia-product-template-11448215044246"
                                    class="feature-row__image product-featured-media lazypreload lazyautosizes lazyloaded"
                                    data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                    data-aspectratio="1.291764705882353" data-sizes="auto" data-image-zoom=""
                                    alt="<?php echo $single['title'] ?>"
                                    data-srcset="<?php echo $single['featured_image'] ?> 2048w"
                                    sizes="560px"
                                    srcset="<?php echo $single['featured_image'] ?> 2048w">
                                <img role="presentation" data-image-zoom-target="true" class="zoomImg"
                                    src="//cdn.shopify.com/s/files/1/0498/7122/4982/products/434b3605-fdff-4412-8482-21a366fa8892_2000x_c0c32338-db11-4558-beee-9e65a7afb51f_1024x1024@2x.png?v=1601418400"
                                    style="width: 549px; height: 425px; position: absolute; max-width: none; max-height: none; opacity: 0; border: none; left: 0px; top: 0px;">
                            </div>

                        </div>


                        <div id="FeaturedMedia-product-template-11448215077014-wrapper"
                            class="product-single__media-wrapper js hide" data-product-single-media-wrapper=""
                            data-media-id="product-template-11448215077014" tabindex="-1">


                            <style>
                            #FeaturedMedia-product-template-11448215077014 {
                                max-width: 706.0738255033556px;
                                max-height: 530px;
                            }

                            #FeaturedMedia-product-template-11448215077014-wrapper {
                                max-width: 706.0738255033556px;
                            }
                            </style>

                            <div id="ImageZoom-product-template-11448215077014"
                                style="padding-top: 75.063%; position: relative; overflow: hidden;"
                                class="product-single__media product-single__media--has-thumbnails js-zoom-enabled"
                                data-image-zoom-wrapper=""
                                data-zoom="<?php echo $single['featured_image']; ?>">
                                <img id="FeaturedMedia-product-template-11448215077014"
                                    class="feature-row__image product-featured-media lazypreload lazyautosizes lazyloaded"
                                    data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                    data-aspectratio="1.332214765100671" data-sizes="auto" data-image-zoom=""
                                    alt="<?php echo $single['title']; ?>"
                                    data-srcset="<?php echo $single['featured_image']; ?> 2048w"
                                    sizes="560px"
                                    srcset="<?php echo $single['featured_image']; ?> 2048w">
                                <img role="presentation" data-image-zoom-target="true" class="zoomImg"
                                    src="<?php echo $single['featured_image']; ?>"
                                    style="width: 794px; height: 596px; position: absolute; max-width: none; max-height: none; opacity: 0; border: none; left: 0px; top: 0px;">
                            </div>

                        </div>

                        <noscript>

                            <img src="//cdn.shopify.com/s/files/1/0498/7122/4982/products/daa4afa0-89e8-4f21-82ec-24cae6a0ef6c_2000x_6cdd0abc-bde9-469c-baed-e5ec1674852d_530x@2x.png?v=1601418400"
                                alt="<?php echo $single['title'] ?>" id="FeaturedMedia-product-template"
                                class="product-featured-media" style="max-width: 530px;">
                        </noscript>





                        <div data-thumbnail-slider="">
                            <div class="thumbnails-wrapper" data-slider="">

                            <?php if ( count($single['images']) > 0) : ?>
                                <ul class="product-single__thumbnails product-single__thumbnails-product-template"
                                    data-slider-container="">
                                    <?php foreach ($single['images'] as $image) : ?>
                                    <li
                                        class="product-single__thumbnails-item product-single__thumbnails-item--medium  js">
                                        <a href="<?php echo $image ?>"
                                            class="text-link product-single__thumbnail product-single__thumbnail--product-template active-thumb"
                                            data-thumbnail-id="product-template-11448214978710"
                                            data-zoom="<?php echo $image ?>"
                                            aria-current="true" aria-describedby="a11y-external-message">
                                            <img
                                                class="product-single__thumbnail-image"
                                                src="<?php echo $image ?>"
                                                alt="<?php echo $single['title'] ?>">
                                            </a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php endif; ?>

                            </div>
                        </div>

                    </div>

                    <div class="grid__item medium-up--one-half">
                        <div class="product-single__meta">

                            <h1 class="product-single__title"><?php echo $single['title']; ?></h1>
                            <script>
                            window.performance.mark('debut:product:title_visible');
                            </script>

                            <div class="product__price">

                                <dl class="price
        
                        price--on-sale 
                        " data-price="">


                                    <div class="price__pricing-group">
                                        <div class="price__regular">
                                            <dt>
                                                <span class="visually-hidden visually-hidden--inline">Regular
                                                    price</span>
                                            </dt>
                                            <dd>
                                                <span class="price-item price-item--regular" data-regular-price="">
                                                    <span class="money notranslate"><?php echo $single['price']; ?></span>
                                                </span>
                                            </dd>
                                        </div>
                                        <div class="price__sale">
                                            <dt>
                                                <span class="visually-hidden visually-hidden--inline">Sale price</span>
                                            </dt>
                                            <dd>
                                                <span class="price-item price-item--sale" data-sale-price="">
                                                    <span class="money notranslate"><?php echo $single['sale_price']; ?></span>
                                                </span>
                                            </dd>
                                            <dt>
                                                <span class="visually-hidden visually-hidden--inline">Regular
                                                    price</span>
                                            </dt>
                                            <dd>
                                                <s class="price-item price-item--regular" data-regular-price="">
                                                    <span class="money notranslate"><?php echo $single['price']; ?></span>
                                                </s>
                                            </dd>
                                        </div>
                                        <div class="price__badges">
                                            <span class="price__badge price__badge--sale" aria-hidden="true">
                                                <span>Sale</span>
                                            </span>
                                            <span class="price__badge price__badge--sold-out">
                                                <span>Sold out</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="price__unit">
                                        <dt>
                                            <span class="visually-hidden visually-hidden--inline">Unit price</span>
                                        </dt>
                                        <dd class="price-unit-price"><span data-unit-price=""></span><span
                                                aria-hidden="true">/</span><span
                                                class="visually-hidden">per&nbsp;</span><span
                                                data-unit-price-base-unit=""></span></dd>
                                    </div>
                                </dl>

                            </div>
                            <div class="product__policies rte" data-product-policies="">

                            </div>

                            <div id="vitals-countdown-holder" style="display: none;">
                                <span><img class="li-before" alt=""
                                        src="https://appsolve.io/asset/apps/vitals/img/countdown/timer.svg"><span
                                        id="ubundle_countdown_message">Sale ending in</span>
                                </span>
                                <div id="ubundle_discount_countdown">-1:-1:-1</div>
                            </div>
                            <form method="post" action="/cart/add" id="product_form_5778909134998"
                                accept-charset="UTF-8" class="product-form product-form-product-template
                        " enctype="multipart/form-data" novalidate="novalidate" data-product-form=""><input
                                    type="hidden" name="form_type" value="product"><input type="hidden" name="utf8"
                                    value="✓">

                                <div class="product-form__controls-group">

                                    <div class="selector-wrapper js product-form__item">
                                        <label for="SingleOptionSelector-0">
                                            Color
                                        </label>
                                        <select
                                            class="single-option-selector single-option-selector-product-template product-form__input"
                                            id="SingleOptionSelector-0" data-index="option1">

                                            <option value="Red" selected="selected">Red</option>

                                            <option value="Blue">Blue</option>

                                            <option value="Black">Black</option>

                                        </select>
                                    </div>

                                </div>


                                <select name="id" id="ProductSelect-product-template"
                                    class="product-form__variants no-js">

                                    <option value="36538015088790" selected="selected">
                                        Red
                                    </option>

                                    <option value="36538015154326">
                                        Blue
                                    </option>

                                    <option value="36538015219862">
                                        Black
                                    </option>

                                </select>



                                <div class="product-form__error-message-wrapper product-form__error-message-wrapper--hidden"
                                    data-error-message-wrapper="" role="alert">
                                    <span class="visually-hidden">Error </span>
                                    <svg aria-hidden="true" focusable="false" role="presentation"
                                        class="icon icon-error" viewBox="0 0 14 14">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M7 0a7 7 0 0 1 7 7 7 7 0 1 1-7-7z"></path>
                                            <path class="icon-error__symbol"
                                                d="M6.328 8.396l-.252-5.4h1.836l-.24 5.4H6.328zM6.04 10.16c0-.528.432-.972.96-.972s.972.444.972.972c0 .516-.444.96-.972.96a.97.97 0 0 1-.96-.96z">
                                            </path>
                                        </g>
                                    </svg>
                                    <span class="product-form__error-message" data-error-message="">Quantity must be 1
                                        or more</span>
                                </div>

                                <div class="product-form__controls-group product-form__controls-group--submit">
                                    <div class="product-form__item product-form__item--submit">
                                        <button type="submit" name="add" aria-label="Add to cart"
                                            class="btn product-form__cart-submit" aria-haspopup="dialog"
                                            data-add-to-cart="">
                                            <span data-add-to-cart-text="">

                                                Add to cart

                                            </span>
                                            <span class="hide" data-loader="">
                                                <svg aria-hidden="true" focusable="false" role="presentation"
                                                    class="icon icon-spinner" viewBox="0 0 20 20">
                                                    <path
                                                        d="M7.229 1.173a9.25 9.25 0 1 0 11.655 11.412 1.25 1.25 0 1 0-2.4-.698 6.75 6.75 0 1 1-8.506-8.329 1.25 1.25 0 1 0-.75-2.385z"
                                                        fill="#919EAB"></path>
                                                </svg>
                                            </span>
                                        </button>

                                    </div>
                                </div>
                                <input type="hidden" name="quantity" value="1">
                            </form>
                            <div class="vtl-vd-widget">
                                <div class="vtl-vd-widget__content">
                                    <div class="vtl-vd-table-widget__wrapper">
                                        <table class="vtl-vd-table-widget__table">
                                            <thead>
                                                <tr>
                                                    <th class="vtl-vd-table-widget__table-header-cell"
                                                        style=" background-color: #FFFFFF !important; color: #000000 !important; "
                                                        colspan="2"> Buy more, save more! </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="vtl-vd-table-widget__table-cell"> <a href="#"
                                                            class="vtl-vd-widget__item" data-qty="2"> Buy 2 </a> </td>
                                                    <td class="vtl-vd-table-widget__table-cell">20% off</td>
                                                </tr>
                                                <tr>
                                                    <td class="vtl-vd-table-widget__table-cell"> <a href="#"
                                                            class="vtl-vd-widget__item" data-qty="3"> Buy 3 </a> </td>
                                                    <td class="vtl-vd-table-widget__table-cell">25% off</td>
                                                </tr>
                                                <tr>
                                                    <td class="vtl-vd-table-widget__table-cell"> <a href="#"
                                                            class="vtl-vd-widget__item" data-qty="4"> Buy 4 </a> </td>
                                                    <td class="vtl-vd-table-widget__table-cell">30% off</td>
                                                </tr>
                                                <tr>
                                                    <td class="vtl-vd-table-widget__table-cell"> <a href="#"
                                                            class="vtl-vd-widget__item" data-qty="5"> Buy 5+ </a> </td>
                                                    <td class="vtl-vd-table-widget__table-cell">35% off</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="vtl-vd-widget__loading-area"></div>
                            </div>
                        </div>
                        <p class="visually-hidden" data-product-status="" aria-live="polite" role="status"></p>
                        <p class="visually-hidden" data-loader-status="" aria-live="assertive" role="alert"
                            aria-hidden="true">Adding product to your cart</p>

                        <div class="product-single__description rte">
                            <h4 class="zn_text_box eluid2d3bb4db zn_text_box-light element-scheme--light"
                                data-mce-fragment="1">
                                <span style="color: #ff2a00;">Cycle your way around the town by just walking on the
                                    treadmill!</span><br><br>The wheels automatically balance themselves and have
                                safeguards to stay static even whilst you are not walking. The wheels are powered via
                                electric using kinetic energy generated by you walking on the treadmill.
                            </h4>
                            <p class="zn_text_box eluid2d3bb4db zn_text_box-light element-scheme--light"
                                data-mce-fragment="1"><img
                                    src="<?php echo $single['featured_image'] ?>">
                            </p>
                            <p class="zn_text_box eluid2d3bb4db zn_text_box-light element-scheme--light"
                                data-mce-fragment="1">This bike is an innovative and a totally new way of moving and
                                exercising. The bike is propelled by a 350W motor by a 48V 20 Ah Lithium-Ion battery
                                which turns into the treadmill while you walk. The battery will generate power for a
                                typical rider to get 30 to 50+ miles per charge making the bike a viable form of local
                                commuter transportation.</p>
                            <p class="zn_text_box eluid2d22d4dd zn_text_box-light element-scheme--light"
                                data-mce-fragment="1">The electric assist in combination with the adjustable multi-speed
                                gears boosts the riders walking pace to speeds equal to or greater than a regular bike.
                                The rider chooses the gear/speed they want which allows them to reach speeds of 3 to 20
                                MPH. It also provides fantastic low physical impact high cardio high-calorie burn
                                exercise while riding down the bike path with the breeze in your hair and the sun on
                                your face.</p>
                            <p class="zn_text_box eluid2d22d4dd zn_text_box-light element-scheme--light"
                                data-mce-fragment="1">Holds Up To 350 lbs.</p>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </main>

    <?php endif; ?>

    <?php include_once('../includes/footer.php'); ?>
</div>

<?php include_once('../includes/modals.php'); ?>