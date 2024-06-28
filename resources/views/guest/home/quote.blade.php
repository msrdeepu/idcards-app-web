<!-- Quote Start -->
<div class="quote">
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">

                    <h1 class="display-5 mb-4">Need Our Help? We're Here!</h1>
                    <p>Get in touch with us for all your ID cards, NFC cards, Google review cards, and accessory needs.
                        Our friendly team is here to assist you with inquiries, orders, and custom solutions. Reach out
                        via phone, email, or visit our office. We look forward to serving you!. </p>
                    <p>This concise and informative description invites customers to connect with your business and
                        emphasizes your readiness to assist with their needs.</p>
                    <a class="d-inline-flex align-items-center rounded overflow-hidden border border-success"
                        href="">
                        <span class="btn-lg-square bg-success" style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </span>
                        <span class="fs-5 fw-medium mx-4 text-success">+012 345 6789</span>
                    </a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h2 class="mb-4">Let Us Connect</h2>
                    <div class="row g-3">
                        <form method="POST" action="{{ route('contact.createcontact') }}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" required name="name" class="form-control"
                                            id="name" placeholder="Your Name">
                                        <label for="name">* Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="number" required name="phone" class="form-control"
                                            id="phone" placeholder="Your Email">
                                        <label for="phone">* Your Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="subject" id="subject"
                                            placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea name="message" class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn custom-button-design-two rounded py-3 px-5" type="submit">Send
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quote Start -->
