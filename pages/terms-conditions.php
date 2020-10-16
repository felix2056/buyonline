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
                <h2 class="breadcrumb-title">about us</h2>
                <!-- breadcrumb-list start -->

                <nav class="" role="navigation" aria-label="breadcrumbs">
                    <ul class="breadcrumb-list">

                        <li class="breadcrumb-item">
                            <a href="/" title="Back to the home page">Home</a>
                        </li>
                        <li class="breadcrumb-item">



                            <span>about us</span>


                        </li>
                    </ul>
                </nav>


                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>

<main role="main">
    <div class="create-page">
        <div class="container">
            <p>Pets Store&nbsp;is an online store that strives to bring you the best in clothes and accessories for
                your&nbsp;pets.<br><br>Quality has been our hallmark and we are very careful in selecting our
                manufacturers &amp; suppliers to ensure our customers are always satisfied with the quality of our
                products.</p>
            <p><br>For us our customers have always come first and our customer support team is a gang of fanatics ready
                to go any length to ensure smile on our customers face. Even if that means discontinuing a line of
                products in light of complaints about quality.</p>
        </div>
    </div>
</main>

<?php include_once('../includes/footer.php'); ?>