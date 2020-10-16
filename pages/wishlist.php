<?php include_once('../includes/header.php'); ?>

<?php include_once('../includes/nav.php'); ?>

<div class="page-container drawer-page-content" id="PageContainer">
    <main class="main-content js-focus-hidden" id="MainContent" role="main" tabindex="-1">
        <div class="page-width">
            <div class="grid">
                <div class="grid__item medium-up--five-sixths medium-up--push-one-twelfth">
                    <div class="section-header text-center">
                        <h1>Contact Us</h1>
                    </div>



                    <div class="contact-form form-vertical">
                        <form method="post" action="/contact#ContactForm" id="ContactForm" accept-charset="UTF-8"
                            class="contact-form"><input type="hidden" name="form_type" value="contact"><input
                                type="hidden" name="utf8" value="✓">





                            <div class="grid grid--half-gutters">
                                <div class="grid__item medium-up--one-half">
                                    <label for="ContactForm-name">Name</label>
                                    <input type="text" id="ContactForm-name" name="contact[Name]" value="">
                                </div>
                                <div class="grid__item medium-up--one-half">
                                    <label for="ContactForm-email">Email <span aria-hidden="true">*</span></label>
                                    <input type="email" id="ContactForm-email" name="contact[email]" autocorrect="off"
                                        autocapitalize="off" value="" aria-required="true">
                                </div>
                            </div>

                            <label for="ContactForm-phone">Phone Number</label>
                            <input type="tel" id="ContactForm-phone" name="contact[Phone Number]" pattern="[0-9\-]*"
                                value="">

                            <label for="ContactForm-message">Message</label>
                            <textarea rows="10" id="ContactForm-message" name="contact[Message]"></textarea>

                            <input type="submit" class="btn" value="Send">

                            <input name="recaptcha-v3-token" type="hidden"
                                value="03AGdBq27OrpLnkDS_8wUr5NirtPuOGt0QiV2tMo2vg_gk1iVR147vOXRr4ZlM3PK-85TX6SHwe77-77YupiU8mC6vcZj03bhaxm_kA67OblwJYCU0jSqmBPbAhW2YMMbMDe_hb0RtiK9yg9Si-fL3DNSE857dz3CVUSW0duNCz75gJNDXI9RrMAvtztOxvG1wpBIdlSogItdvdeaVirdNKDkEWuuMoHwXs7RMVZHp67KrSFpMONyn4q6AHubR79JX0bf3OXZ8cBMvEgcRTprsSQwpK2IXoQrm6tPPDSoqv5ZWTv6slpDJUCbPf8tsV3Ojzx6bQWvjPimPTAE9hX7Fd5lAVqEoj2fTc60cpLYxbO1RSpgWynvaNjwY0oK97LsiI30z2XoDfkpsA3a4skKaCcz3sHFLf7Za63K-34fH0dk8BNPfwQn0OccgRA9mqwtR9AGVfts-LBlv">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <?php include_once('../includes/footer.php'); ?>
</div>

<?php include_once('../includes/modals.php'); ?>