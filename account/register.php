<?php include_once('../includes/header.php'); ?>

<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
    <div class="gf-menu-device-wrapper">
        <div class="close-menu">x</div>
        <div class="gf-menu-device-container"></div>
    </div>
</nav>

<body id="pr-kidswear" class="template-index">
    <div class="wrapper-container">
        <?php include_once('../includes/nav.php'); ?>

        <nav class="breadcrumb" aria-label="breadcrumbs">
            <div class="bread-left">
                <a href="/" title="Back to the frontpage">Home</a>

                <span aria-hidden="true" class="breadcrumb__sep">/</span>

                <span>Boys Tops &amp; T-shirt</span>
            </div>
        </nav>


        <div class="dt-sc-hr-invisible-large"></div>


        <main class="main-content ">


            <div class="wrapper">

                <div class="grid__item">
                    <div class="container">
                        <div class="grid">

                            <div class="grid__item small--text-center">


                                <div class="register-form">

                                    <form method="post" action="/account" id="create_customer" accept-charset="UTF-8">
                                        <input type="hidden" name="form_type" value="create_customer"><input
                                            type="hidden" name="utf8" value="✓">



                                        <label for="FirstName" class="label--hidden">First Name</label>
                                        <input type="text" name="customer[first_name]" id="FirstName"
                                            placeholder="First Name" autocapitalize="words" autofocus="">

                                        <label for="LastName" class="label--hidden">Last Name</label>
                                        <input type="text" name="customer[last_name]" id="LastName"
                                            placeholder="Last Name" autocapitalize="words">

                                        <label for="Email" class="label--hidden">Email</label>
                                        <input type="email" name="customer[email]" id="Email" placeholder="Email"
                                            autocorrect="off" autocapitalize="off">

                                        <label for="CreatePassword" class="label--hidden">Password</label>
                                        <input type="password" name="customer[password]" id="CreatePassword"
                                            placeholder="Password">

                                        <p>
                                            <input type="submit" value="Create" class="btn">
                                        </p>
                                        <a href="https://pr-kidswear.myshopify.com">Return to Store</a>

                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="dt-sc-hr-invisible-large"></div>

            <div class="dt-sc-hr-invisible-large"></div>
        </main>
    </div>

    <?php include_once('../includes/footer.php'); ?>

    <?php //include_once('../includes/modals.php'); ?>