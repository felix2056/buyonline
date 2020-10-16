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


                                <div class="note form-success" id="ResetSuccess" style="display:none;">
                                    We've sent you an email with a link to update your password.
                                </div>

                                <div id="CustomerLoginForm">
                                    <form method="post" action="/account/login" id="customer_login"
                                        accept-charset="UTF-8"><input type="hidden" name="form_type"
                                            value="customer_login"><input type="hidden" name="utf8" value="✓">





                                        <label for="CustomerEmail" class="label--hidden">Email</label>
                                        <input type="email" name="customer[email]" id="CustomerEmail"
                                            placeholder="Email" autocorrect="off" autocapitalize="off" autofocus="">



                                        <label for="CustomerPassword" class="label--hidden">Password</label>
                                        <input type="password" value="" name="customer[password]" id="CustomerPassword"
                                            placeholder="Password">

                                        <p>
                                            <a href="#" onclick="showRecoverPasswordForm();return false;">Forgot your
                                                password?</a>
                                        </p>



                                        <p>
                                            <input type="submit" class="btn" value="Sign In">
                                        </p>

                                        <p>
                                            <a href="/account/register" id="customer_register_link">Create account</a>
                                        </p>

                                        <a href="https://pr-kidswear.myshopify.com">Return to Store</a>

                                    </form>
                                </div>


                                <div id="RecoverPasswordForm" style="display: none;">

                                    <div class="section-header section-header--small">
                                        <h2 class="section-header__title">Reset your password</h2>
                                    </div>
                                    <p>We will send you an email to reset your password.</p>


                                    <form method="post" action="/account/recover" accept-charset="UTF-8"><input
                                            type="hidden" name="form_type" value="recover_customer_password"><input
                                            type="hidden" name="utf8" value="✓">






                                        <label for="RecoverEmail" class="label--hidden">Email</label>
                                        <input type="email" value="" name="email" id="RecoverEmail" placeholder="Email"
                                            autocorrect="off" autocapitalize="off">

                                        <p>
                                            <input type="submit" class="btn" value="Submit">
                                        </p>
                                        <a href="#" onclick="hideRecoverPasswordForm();return false;">Cancel</a>
                                    </form>

                                </div>




                            </div>

                        </div>

                        <script>
                        /*
    Show/hide the recover password form when requested.
  */
                        function showRecoverPasswordForm() {
                            document.getElementById('RecoverPasswordForm').style.display = 'block';
                            document.getElementById('CustomerLoginForm').style.display = 'none';
                        }

                        function hideRecoverPasswordForm() {
                            document.getElementById('RecoverPasswordForm').style.display = 'none';
                            document.getElementById('CustomerLoginForm').style.display = 'block';
                        }

                        // Allow deep linking to the recover password form
                        if (window.location.hash == '#recover') {
                            showRecoverPasswordForm()
                        }

                        // reset_success is only true when the reset form is
                        </script>
                    </div>
                </div>

            </div>


            <div class="dt-sc-hr-invisible-large"></div>

            <div class="dt-sc-hr-invisible-large"></div>
        </main>
    </div>

    <?php include_once('../includes/footer.php'); ?>

    <?php //include_once('../includes/modals.php'); ?>