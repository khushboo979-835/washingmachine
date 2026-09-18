<!-- Enhanced Modal CSS -->
<style>
    .modal-body, .modal-content {
        background: url('assets/images/about/background.avif') no-repeat center center;
        background-size: cover;
        padding: 30px;
        border-radius: 0 0 8px 8px;
    }

    .modal-content {
        border-radius: 10px;
        overflow: hidden;
        border: none;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
    }


    .btn-primary:hover {
        background-color: #157347;
    }

    .btn-close {
        background-color: white;
        border-radius: 50%;
        opacity: 1;
    }
</style>

<!-- Enhanced Modal HTML -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title fs-5" id="exampleModalLabel" data-lang-key="quick_enquiry">Quick Enquiry</span>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" class="whatsapp-form needs-validation" novalidate>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label"><span data-lang-key="form_name">Name</span> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control name-field" placeholder="Enter your name" id="name"
                                name="name" required data-lang-key="form_name">
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label"><span data-lang-key="form_number">Number</span> <span class="text-danger">*</span></label>
                            <input type="tel" class="form-control phone-field" placeholder="Enter your number"
                                id="phone" name="phone" required data-lang-key="form_number">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label" data-lang-key="form_email">Email</label>
                            <input type="email" class="form-control email-field" placeholder="Enter your email"
                                id="email" name="email" data-lang-key="form_email">
                        </div>
                        <div class="col-md-6">
                            <label for="address" class="form-label" data-lang-key="form_address">Address</label>
                            <input type="text" class="form-control address-field" placeholder="Enter your address"
                                id="address" name="address" data-lang-key="form_address">
                        </div>
                        <div class="col-12">
                            <label for="message" class="form-label" data-lang-key="form_message">Your Message</label>
                            <textarea class="form-control message-field" id="message" name="message"
                                placeholder="Enter your message" rows="4" data-lang-key="form_message"></textarea>
                        </div>
                    </div>
                    <div class="text-end mt-4">
                        <button type="button" class="btn btn-primary px-4 send-to-whatsapp" data-lang-key="form_send_btn">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>