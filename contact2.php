<?php include 'header.php'; ?>

<head>
        <link rel="stylesheet" href="./assets_innerpage/css/inner_pages.css">
    <link rel="stylesheet" href="./ostyle/own_style.css">
</head>


<div id="smooth-wrapper">


    <div id="smooth-content">

        <main>



            <!-- ==================== Start Header ==================== -->

            <header class="contact-hed section-padding pb-0 pt-100">
                <div class="container">
                    <div class="caption mb-80 text-center">
                        <h1>Contact Us</h1>
                    </div>
                </div>
                <!--<div class="container-fluid">-->
                <!--    <div class="google-map">-->
                <!--        <iframe id="gmap_canvas"-->
                <!--            src="https://maps.google.com/maps?q=hollwood&t=&z=11&ie=UTF8&iwloc=&output=embed">-->
                <!--        </iframe>-->
                <!--    </div>-->
                <!--</div>-->
            </header>

            <!-- ==================== End Header ==================== -->



            <!-- ==================== Start Contact ==================== -->

            <section class="contact-pg section-padding pb-0 pt-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 valign">
                            <div class="full-width md-mb80">
                                <div class="sec-head md-mb80">
                                    <h2 class="text-u">
                                        Get in touch<br> with our team<span class="fw-200">.</span>
                                    </h2>
                                    <p class="mt-20 mb-20">If you've got a story idea, questions, concerns, or just want to contact, reach out!</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="morinfo mt-30">
                                                <h6 class="mb-15">Address</h6>
                                                <p>Besòs 1, 08174 Sant Cugat del Vallès, Barcelona</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="morinfo mt-30">
                                                <h6 class="mb-15">Email</h6>
                                                <p>work@nainammedia.com</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="phone fz-30 fw-600 mt-30 underline main-color">
                                        <a href="#0">+91 9090909090</a>
                                    </div>
                                </div>
                                <ul class="rest social-text d-flex mt-60 fz-16">
                                    <!--<li class="mr-30">-->
                                    <!--    <a href="#0">-->
                                    <!--        <i class="fa-brands fa-facebook bi bi-house fs-3"></i>-->
                                    <!--    </a>-->
                                    <!--</li>-->
                                    <!--<li class="mr-30">-->
                                    <!--    <a href="#0">-->
                                    <!--        <i class="fa-brands fa-x-twitter bi bi-house fs-3"></i>-->
                                    <!--    </a>-->
                                    <!--</li>-->
                                    <li class="mr-30">
                                        <a href="https://www.linkedin.com/in/nainam-media-6b7943340/0" target="_blank">
                                            <i class="fa-brands fa-linkedin bi bi-house fs-3"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/nainammedia/" target="_blank">
                                            <i class="fa-brands fa-instagram bi bi-house fs-3"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-1 valign">
                            <div class="full-width">
                                <div class="sec-head mb-50">
                                    <h6 class="sub-head">Send a <span class="fw-200">message</span></h6>
                                </div>
                                <form id="contact-form" method="post" action="contact.php">

                                    <div class="messages"></div>

                                    <div class="controls row">

                                        <div class="col-lg-6">
                                            <div class="form-group mb-30">
                                                <input id="form_name" type="text" name="name" placeholder="Name"
                                                    required="required">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group mb-30">
                                                <input id="form_email" type="email" name="email" placeholder="Email"
                                                    required="required">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group mb-30">
                                                <input id="phone" type="tel" name="phone" placeholder="Phone No." oninput="validatePhone()">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea id="form_message" name="message" placeholder="Project Details"
                                                    rows="4" required="required"></textarea>
                                            </div>
                                            <div class="mt-30">
                                                <button type="submit" class="butn butn-md butn-bord butn-rounded">
                                                    <div class="d-flex align-items-center">
                                                        <span>Submit</span>
                                                        <span class="icon ml-10">
                                                            <img src="../common/imgs/icons/arrow-top-right.svg"
                                                                alt="">
                                                        </span>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==================== End Contact ==================== -->
            
            
            
            
               <header class="contact-hed section-padding pb-0 pt-100">
                <div class="container-fluid">
                    <div class="google-map">
                        <iframe id="gmap_canvas"
                            src="https://maps.google.com/maps?q=hollwood&t=&z=11&ie=UTF8&iwloc=&output=embed">
                        </iframe>
                    </div>
                </div>
            </header>


        </main>

        <?php include 'footer.php'; ?>

        <!-- jQuery -->
        <script src="./common/js/lib/jquery-3.6.0.min.js"></script>
        <script src="./common/js/lib/jquery-migrate-3.4.0.min.js"></script>

        <!-- plugins -->
        <script src="./common/js/lib/plugins.js"></script>

        <!-- GSAP -->
        <script src="./common/js/gsap_lib/gsap.min.js"></script>
        <script src="./common/js/gsap_lib/ScrollSmoother.min.js"></script>
        <script src="./common/js/gsap_lib/ScrollTrigger.min.js"></script>
        <script src="./common/js/gsap_lib/SplitText.min.js"></script>
        <script src="./common/js/gsap_lib/matter.js"></script>
        <script src="./common/js/gsap_lib/throwable.js"></script>

        <!-- common scripts -->
        <script src="./common/js/common_scripts.js"></script>

        <!-- custom scripts -->
        <script src="./assets-inner-page/js/inner_pages.js"></script>

        <script>
// JavaScript validation for the contact form
document.getElementById('contact-form').addEventListener('submit', function (e) {
    const nameField = document.getElementById('form_name');
    const emailField = document.getElementById('form_email');
    const phoneField = document.getElementById('phone');
    const messageField = document.getElementById('form_message');

    const name = nameField.value.trim();
    const email = emailField.value.trim();
    const phone = phoneField.value.trim();
    const message = messageField.value.trim();

    let isValid = true;

    // Clear previous error messages
    document.querySelectorAll('.error-message').forEach(msg => msg.remove());

    // Helper function to show error messages
    function showError(field, message) {
        const error = document.createElement('span');
        error.className = 'error-message';
        error.style.color = 'red';
        error.style.fontSize = '12px';
        error.textContent = message;
        field.parentElement.appendChild(error);
    }

    // Validate name
    if (name === '') {
        isValid = false;
        showError(nameField, 'Name is required.');
    }

    // Validate email
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === '' || !emailPattern.test(email)) {
        isValid = false;
        showError(emailField, 'Please enter a valid email address.');
    }

    // Validate phone (must be exactly 10 digits)
    const phonePattern = /^\d{10}$/;
    if (phone !== '' && !phonePattern.test(phone)) {
        isValid = false;
        showError(phoneField, 'Please enter a valid phone number (exactly 10 digits).');
    }

    // Validate message (optional)
    if (message === '') {
        // Message is optional, no error shown
    }

    // Prevent form submission if invalid
    if (!isValid) {
        e.preventDefault();
    } else {
        // Clear form fields on successful submission
        nameField.value = '';
        emailField.value = '';
        phoneField.value = '';
        messageField.value = '';
    }
});
</script>
