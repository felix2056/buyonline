<?php include_once('../includes/header.php'); ?>

<?php include_once('../includes/nav.php'); ?>

<?php require_once('../products/db/products.php'); ?>

<?php
    $products = json_decode(getAllProducts(), true);
?>

<div class="page-container drawer-page-content" id="PageContainer">
    <main class="main-content js-focus-hidden" id="MainContent" role="main" tabindex="-1">
        <div id="shopify-section-collection-template" class="shopify-section">
            <div data-section-id="collection-template" data-section-type="collection-template">
                <header class="collection-header">
                    <div class="page-width">
                        <div class="section-header text-center">
                            <h1>
                                <span class="visually-hidden">Collection: </span>
                                Products
                            </h1>
                        </div>
                    </div>


                    <div class="filters-toolbar-wrapper">
                        <div class="page-width">
                            <div class="filters-toolbar">
                                <div class="filters-toolbar__item-wrapper">
                                    <div class="filters-toolbar__item-child"><label
                                            class="filters-toolbar__label select-label" for="SortBy">Sort by</label>
                                        <div class="filters-toolbar__input-wrapper select-group">
                                            <select name="sort_by" id="SortBy" class="filters-toolbar__input"
                                                aria-describedby="a11y-refresh-page-message a11y-selection-message"
                                                data-default-sortby="title-ascending" data-select-input=""
                                                style="width: 180px;">
                                                <option value="manual">Featured</option>
                                                <option value="best-selling">Best selling</option>
                                                <option value="title-ascending" selected="selected">Alphabetically, A-Z
                                                </option>
                                                <option value="title-descending">Alphabetically, Z-A</option>
                                                <option value="price-ascending">Price, low to high</option>
                                                <option value="price-descending">Price, high to low</option>
                                                <option value="created-ascending">Date, old to new</option>
                                                <option value="created-descending">Date, new to old</option>
                                            </select>
                                            <svg aria-hidden="true" focusable="false" role="presentation"
                                                class="icon icon-chevron-down" viewBox="0 0 9 9">
                                                <path
                                                    d="M8.542 2.558a.625.625 0 0 1 0 .884l-3.6 3.6a.626.626 0 0 1-.884 0l-3.6-3.6a.625.625 0 1 1 .884-.884L4.5 5.716l3.158-3.158a.625.625 0 0 1 .884 0z"
                                                    fill="#fff"></path>
                                            </svg>
                                        </div>
                                    </div>

                                </div>

                                <div class="filters-toolbar__item filters-toolbar__item--count">
                                    <span class="filters-toolbar__product-count">45 products</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </header>

                <div class="page-width" id="Collection">
                    <?php if (count($products) > 0) : ?>
                    <ul class="grid grid--uniform grid--view-items">
                        <?php foreach ($products as $product) : ?>
                        <li class="grid__item grid__item--collection-template small--one-half medium-up--one-quarter">

                            <div class="grid-view-item product-card">
                                <a class="grid-view-item__link grid-view-item__image-container full-width-link"
                                    href="/products/single.php?product=<?php echo $product['id'] ?>">
                                    <span class="visually-hidden"><?php echo $product['title'] ?></span>
                                </a>

                                <style>
                                #ProductCardImage-collection-template-5778904383638 {
                                    max-width: 250.0px;
                                    max-height: 250px;
                                }

                                #ProductCardImageWrapper-collection-template-5778904383638 {
                                    max-width: 250.0px;
                                }
                                </style>



                                <div class="product-card__image-with-placeholder-wrapper">
                                    <div id="ProductCardImageWrapper-collection-template-5778904383638"
                                        class="grid-view-item__image-wrapper product-card__image-wrapper js">
                                        <div style="padding-top:100.0%;">
                                            <img id="ProductCardImage-collection-template-5778904383638"
                                                class="grid-view-item__image lazyautosizes ls-is-cached lazyloaded"
                                                alt="<?php echo $product['title'] ?>"
                                                data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                                data-aspectratio="1.0" data-sizes="auto" data-image=""
                                                data-srcset="<?php echo $product['featured_image'] ?>"
                                                sizes="250px"
                                                srcset="<?php echo $product['featured_image'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <noscript>

                                    <img class="grid-view-item__image"
                                        src="//cdn.shopify.com/s/files/1/0498/7122/4982/products/product-image-1327382911_799x799_74b719d7-e667-47c7-a73e-57df6190ce8b_250x250@2x.jpg?v=1601418354"
                                        alt="" style="max-width: 250.0px;">
                                </noscript>

                                <div class="h4 grid-view-item__title product-card__title" aria-hidden="true"><?php echo $product['title'] ?>r</div>


                                <dl class="price price--listing price--on-sale ">

                                    <div class="price__regular">
                                        <dt>
                                            <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                        </dt>
                                        <dd>
                                            <span class="price-item price-item--regular"><span
                                                    class="money notranslate"><?php echo $product['price'] ?></span>
                                            </span>
                                        </dd>
                                    </div>
                                    <div class="price__sale">
                                        <dt>
                                            <span class="visually-hidden visually-hidden--inline">Sale price</span>
                                        </dt>
                                        <dd>
                                            <span class="price-item price-item--sale"><span
                                                    class="money notranslate"><?php echo $product['sale_price'] ?></span>
                                            </span>
                                        </dd>
                                        <div class="price__compare">
                                            <dt>
                                                <span class="visually-hidden visually-hidden--inline">Regular
                                                    price</span>
                                            </dt>
                                            <dd>
                                                <s class="price-item price-item--regular">
                                                    <span class="money notranslate"><?php echo $product['price'] ?></span>
                                                </s>
                                            </dd>
                                        </div>
                                    </div>
                                    <div class="price__unit">
                                        <dt>
                                            <span class="visually-hidden visually-hidden--inline">Unit price</span>
                                        </dt>
                                        <dd class="price-unit-price"><span></span><span aria-hidden="true">/</span><span
                                                class="visually-hidden">per&nbsp;</span><span></span></dd>
                                    </div>
                                    <div class="price__badges price__badges--listing">
                                        <span class="price__badge price__badge--sale" aria-hidden="true">
                                            <span>Sale</span>
                                        </span>
                                        <span class="price__badge price__badge--sold-out">
                                            <span>Sold out</span>
                                        </span>
                                    </div>
                                </dl>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>

    <?php include_once('../includes/footer.php'); ?>
</div>

<?php include_once('../includes/modals.php'); ?>