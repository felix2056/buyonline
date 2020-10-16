<?php include_once('../includes/header.php'); ?>

<?php include_once('../includes/nav.php'); ?>

<div class="main-search-active">
    <div class="sidebar-search-icon">
        <button class="search-close"><span class="icon-close"></span></button>
    </div>
    <div class="sidebar-search-input">
        <form action="/search" method="get" class="search-bar" role="search">
            <div class="form-search">
                <input type="search" name="q" value="" placeholder="Search our store" id="search" class="input-text"
                    aria-label="Search our store">
                <button class="search-btn" type="submit">
                    <i class="icon-magnifier"></i>
                </button>
            </div>
        </form>
    </div>
</div>

<div class="breadcrumb-area section-ptb">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="breadcrumb-title">shipping policy</h2>
                <!-- breadcrumb-list start -->

                <nav class="" role="navigation" aria-label="breadcrumbs">
                    <ul class="breadcrumb-list">

                        <li class="breadcrumb-item">
                            <a href="/" title="Back to the home page">Home</a>
                        </li>
                        <li class="breadcrumb-item">



                            <span>shipping policy</span>


                        </li>
                    </ul>
                </nav>


                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>

<main role="main">
    <div id="shopify-section-cart-template" class="shopify-section"><!-- PAGE SECTION START -->
<div class="cart-page theme-default-margin">
  <div class="container"><div class="row">
      <div class="col-lg-12 col-12">
        <div class="empty-cart-page">
          <h2>Shopping Cart</h2>
          <h3>Your cart is currently empty!</h3>
          <p>Continue browsing <a href="/collections/all">here</a></p>
        </div>
      </div>
    </div></div>
</div>
<!-- PAGE SECTION END -->





</div>



<script>
  $('.product-quantity').append('<span class="dec qtybtn"> (-) </span><span class="inc qtybtn"> (+) </span>');
  $('.qtybtn').on('click', function() {
    var $button = $(this);
    var oldValue = $button.parent().find('input').val();
    if ($button.hasClass('inc')) {
      var newVal = parseFloat(oldValue) + 1;
    } else {
      // Don't allow decrementing below zero
      if (oldValue > 0) {
        var newVal = parseFloat(oldValue) - 1;
      } else {
        newVal = 0;
      }
    }
    $button.parent().find('input').val(newVal);
  });
</script>
  </main>

<?php include_once('../includes/footer.php'); ?>