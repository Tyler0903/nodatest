---
layout: default
title: Contact Us
jumbotron-text: Contact Us
---
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <p><img src="/images/logo-scp-color.png"></p>
            <h4>Our Headquarters is located at</h4>
            <p>109 Northpark Blvd</p>
            <p>Covington, LA 70433</p>
            <hr />
            <h4>Talk to us</h4>
            <p>Phone: 985.892.5521</p>
            <p>Fax: 985.801.5716</p>
        </div>
        <div class="col-lg-6">
            <?php if( $_GET['invalid'] == 'recaptcha' ): ?>
            <p style="color: #af0101;">Invalid recaptcha. Please try again.</p>
            <?php elseif( $_GET['invalid'] ): ?>
            <p style="color: #af0101;">We're sorry, but there was a problem with the information that was provided. Please fully fill out the form and try again.</p>
            <?php elseif( $_GET['error'] ): ?>
            <p style="color: #af0101;">We're sorry, but there was a problem processing your request. Please try again later.</p>
            <?php endif; ?>
            <form id="contact_us" action="submit.php" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" value="<?php echo $_GET['name']; ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $_GET['email']; ?>">
                </div>
                <label for="subject">Subject</label>
                <select class="form-control form-group" id="subject" name="subject">
                    <option disabled selected="selected">Choose...</option>
                    <option value="Locate a Sales Center">Locate a Sales Center</option>
                    <option value="Become a Customer">Become a Customer</option>
                    <option value="Become a Vendor">Become a Vendor</option>
                    <option value="Employment Opportunities">Employment Opportunities</option>
                    <option value="Investor Inquiry">Investor Inquiry</option>
                    <option value="General Information">General Information</option>
                </select>
                <label for="message">Your Message</label>
                <textarea class="form-control form-group" id="message" name="message" rows="3"><?php echo $_GET['message']; ?></textarea>
                <div class="g-recaptcha" data-sitekey="6LeEH0YUAAAAAGPO4IoFe4M5E3HugQbrZpBm_B2P"></div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</div>
<script async src='https://www.google.com/recaptcha/api.js'></script>
<script defer src="/js/contact.js"></script>