<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'common/config.php'; ?>
    <?php include 'common/head.php'; ?>
    <?php include 'common/plugins.php'; ?>
</head>

<body>
    <?php include 'common/header.php'; ?>
    <!-- ========================================================== -->
    <style>
        .contact-breadcrumb {
            background: black;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 80px 0;
        }

        .contact-breadcrumb h1 {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            font-size: 70px;
        }

        @media screen and (max-width: 768px) {
            .contact-breadcrumb h1 {
                font-size: 50px;
            }
        }

        .contact-breadcrumb a {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .contact-breadcrumb .active {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="contact-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Schedule a Meeting</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?= $base_url?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Schedule a Meeting</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ========================================= -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <style>
        .schedule-meeting {
            background: #f4f6fb;
            padding: 60px 0;
            font-family: "Poppins", sans-serif;
        }

        .head-title h2 {
            font-weight: 700;
            color: #333;
        }

        /* Calendar Box */
        .calendar-box {
            background: #fff;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .flatpickr-calendar {
            width: 100% !important;
            background: #fff !important;
            border-radius: 12px !important;
            box-shadow: none !important;
        }

        .flatpickr-months {
            background: #0066cc;
            color: #fff;
            border-radius: 10px 10px 0 0;
        }

        .flatpickr-day {
            border-radius: 8px;
            transition: all 0.2s;
        }

        .flatpickr-day:hover {
            background: #0066cc;
            color: #fff;
        }

        .flatpickr-day.today {
            background: var(--secondary-color);
            color: #fff;
            font-weight: bold;
        }

        .flatpickr-day.disabled {
            opacity: 0.3;
            cursor: not-allowed;
        }

        /* Time Slots */
        .time-slots {
            background: #fff;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            max-height: 350px;
            overflow-y: auto;
        }

        .time-btn {
            display: block;
            width: 100%;
            margin-bottom: 12px;
            padding: 12px;
            background: var(--secondary-color);
            color: #fff;
            border: none;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .time-btn:hover {
            background: var(--primary-color);
            transform: translateY(-2px);
        }

        /* Form */
        #booking-form {
            background: #fff;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
        }

        #booking-form h4 {
            margin-bottom: 20px;
            color: #333;
        }

        #booking-form input,
        #booking-form select {
            border-radius: 8px;
            padding: 10px;
        }

        #booking-form button {
            background: #0066cc;
            border: none;
            border-radius: 8px;
            padding: 12px 20px;
            font-weight: 600;
        }

        #booking-form button:hover {
            background: #004a99;
        }

        .flatpickr-current-month {

            color: var(--tertiary-color);
            background-color: #004a99;
        }

        .flatpickr-current-month .flatpickr-monthDropdown-months .flatpickr-monthDropdown-month {
            background-color: var(--primary-color);
            outline: none;
            padding: 0;
        }

        .flatpickr-rContainer {
            display: inline-block;
            padding: 0;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            /* width: 50%; */
        }

        .flatpickr-day.flatpickr-disabled,
        .flatpickr-day.flatpickr-disabled:hover {
            cursor: not-allowed;
            color: #5c5a5aff;
        }
    </style>

    <section class="schedule-meeting">
        <div class="container">
            <div class="head-title text-center mb-5">
                <h2>Free Digital Marketing Consultation</h2>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Calendar -->
                <div class="col-md-4">
                    <div class="calendar-box">
                        <input type="text" id="calendar" class="form-control" placeholder="Select Date">
                    </div>
                </div>

                <!-- Time Slots -->
                <div class="col-md-6">
                    <div class="time-slots">
                        <h5 class="mb-3">Select a Time Slot</h5>
                        <button type="button" class="time-btn">10:00 AM</button>
                        <button type="button" class="time-btn">10:30 AM</button>
                        <button type="button" class="time-btn">11:00 AM</button>
                        <button type="button" class="time-btn">11:30 AM</button>
                        <button type="button" class="time-btn">12:00 PM</button>
                        <button type="button" class="time-btn">12:30 PM</button>
                        <button type="button" class="time-btn">01:00 PM</button>
                        <button type="button" class="time-btn">01:30 PM</button>
                        <button type="button" class="time-btn">02:00 PM</button>
                        <button type="button" class="time-btn">02:30 PM</button>
                        <button type="button" class="time-btn">03:00 PM</button>
                        <button type="button" class="time-btn">03:30 PM</button>
                        <button type="button" class="time-btn">04:00 PM</button>
                        <button type="button" class="time-btn">04:30 PM</button>
                        <button type="button" class="time-btn">05:00 PM</button>
                        <button type="button" class="time-btn">05:30 PM</button>
                        <button type="button" class="time-btn">06:00 PM</button>
                        <button type="button" class="time-btn">06:30 PM</button>
                        <button type="button" class="time-btn">07:00 PM</button>
                        <button type="button" class="time-btn">07:30 PM</button>
                        <button type="button" class="time-btn">08:00 PM</button>
                        <button type="button" class="time-btn">08:30 PM</button>
                        <button type="button" class="time-btn">09:00 PM</button>
                        <button type="button" class="time-btn">09:30 PM</button>
                        <button type="button" class="time-btn">10:00 PM</button>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <!-- Hidden Form -->
                    <div id="booking-form" class="mt-5" style="display:none;">
                        <h4>Enter Your Details</h4>
                        <form id="consultation-form" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="meeting_name" class="form-label">Name</label>
                                <input type="text" id="meeting_name" name="name" placeholder="Enter your name" class="form-control"
                                    required>
                                <div class="invalid-feedback">Please enter your name.</div>
                            </div>
                            <div class="mb-3">
                                <label for="meeting_business" class="form-label">Business Name</label>
                                <input type="text" id="meeting_business" name="business_name" placeholder="Enter your Business Name" class="form-control"
                                    required>
                                <div class="invalid-feedback">Please enter Business Name.</div>
                            </div>
                            <div class="mb-3">
                                <label for="meeting_phone" class="form-label">Number</label>
                                <input type="tel" id="meeting_phone" name="phone" placeholder="Enter your phone number"
                                    class="form-control" required>
                                <div class="invalid-feedback">Please enter your phone number.</div>
                            </div>
                            <div class="mb-3">
                                <label for="meeting_service" class="form-label">Service</label>
                                <select id="meeting_service" name="service" class="form-control" required>
                                    <option value="" disabled selected>-- Select Service --</option>
                                    <option value="website_design">Website Design & Development Services</option>
                                    <option value="ecommerce_website">E-commerce Website Design Services</option>
                                    <option value="mobile_app">Mobile App Development Services</option>
                                    <option value="software_development">Software Development Services</option>
                                    <option value="digital_marketing">Digital Marketing Services – SEO, PPC, SMM, GMB</option>
                                    <option value="meta_ads">Meta Ads – Facebook & Instagram</option>
                                    <option value="website_seo">Website SEO Services</option>
                                    <option value="google_ads">Google Ads – PPC</option>
                                    <option value="social_media_marketing">Social Media Marketing – SMM</option>
                                    <option value="gmb_seo">Google Business Profile (GMB) SEO</option>
                                    <option value="real_estate_website">Real Estate Website Development Services</option>
                                    <option value="restaurant_hotel_website">Restaurant & Hotel Website Development Services</option>
                                    <option value="landing_page">Landing Page Design Services</option>
                                    <option value="management_software">School / College / Coaching / Hospital Management Software Development Services</option>
                                </select>
                                <div class="invalid-feedback">Please select a service.</div>
                            </div>
                            <button type="submit" class="btn btn-primary" id="quote-request-btn-meeting">Book Meeting</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        let selectedDate = "";
        let selectedTime = "";

        // Calendar
        flatpickr("#calendar", {
            inline: true,
            minDate: "today",
            onChange: function (selectedDates, dateStr) {
                selectedDate = dateStr;
            }
        });

        // Time slot selection
        document.querySelectorAll(".time-btn").forEach(btn => {
            btn.addEventListener("click", () => {
                selectedTime = btn.textContent;
                document.getElementById("booking-form").style.display = "block";
                window.scrollTo({
                    top: document.getElementById("booking-form").offsetTop - 100,
                    behavior: "smooth"
                });
            });
        });

        // Bootstrap 5 validation + WhatsApp send
        (function () {
            'use strict'
            const form = document.getElementById('consultation-form');
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity() || !selectedDate || !selectedTime) {
                    event.preventDefault()
                    event.stopPropagation()
                    if (!selectedDate) alert("Please select a date.");
                    if (!selectedTime) alert("Please select a time slot.");
                } else {
                    event.preventDefault();

                    const name = form.querySelector('[name="name"]').value;
                    const business_name = form.querySelector('[name="business_name"]').value;
                    const phone = form.querySelector('[name="phone"]').value;
                    const service = form.querySelector('[name="service"]').value;

                    const message = `Hello, I want to book a consultation.%0A
📅 Date: ${selectedDate}%0A
⏰ Time: ${selectedTime}%0A
👤 Name: ${name}%0A
🏠 Business Name: ${business_name}%0A
📞 Phone: ${phone}%0A
🛠 Service: ${service}`;

                    const whatsappNumber = "919117741984"; // 👉 apna number yaha daalo (country code ke sath)

                    window.dataLayer = window.dataLayer || [];
                    window.dataLayer.push({
                        'event': 'form_submit_success',
                        'form_name': 'Schedule Meeting Form',
                        'page_path': window.location.pathname
                    });

                    window.open(`https://wa.me/${whatsappNumber}?text=${message}`, "_blank");
                }
                form.classList.add('was-validated')
            }, false)
        })()
    </script>


    <!-- =========================================== -->

    <!-- ============================================== -->
    <section class="coral-process py-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2>How Coral Web Technology Consultation Works?</h2>
            </div>

            <!-- Step 1 -->
            <div class="row align-items-center mb-2">
                <div class="col-md-6">
                    <h1 class="step-number">01</h1>
                    <h4>Book a Free Call</h4>
                    <p>Schedule your free consultation with our experts. We’ll connect with you within 24 hours and
                        share the joining details.</p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="assets/images/others/arrow-1.png" class="arrow-1 img-fluid" alt="arrow">
                </div>
            </div>

            <!-- Step 2 -->
            <div class="row align-items-center mb-2 flex-row-reverse">
                <div class="col-md-6">
                    <h1 class="step-number">02</h1>
                    <h4>Discuss Your Needs</h4>
                    <p>Share your business challenges, goals, and vision. The more we know, the better we can create a
                        custom solution for you.</p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="assets/images/others/arrow-2.png" class="arrow-2 img-fluid" alt="arrow">
                </div>
            </div>

            <!-- Step 3 -->
            <div class="row align-items-center mb-2">
                <div class="col-md-6">
                    <h1 class="step-number">03</h1>
                    <h4>Business Analysis</h4>
                    <p>We analyze your current process, digital presence, and target audience to identify opportunities
                        and gaps.</p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="assets/images/others/arrow-1.png" class="arrow-1 img-fluid" alt="arrow ">
                </div>
            </div>

            <!-- Step 4 -->
            <div class="row align-items-center mb-2 flex-row-reverse">
                <div class="col-md-6">
                    <h1 class="step-number">04</h1>
                    <h4>Custom Strategy</h4>
                    <p>Our team builds a roadmap tailored to your business, including project timelines, services
                        breakdown, and budget estimation.</p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="assets/images/others/arrow-2.png" class="arrow-2 img-fluid" alt="arrow">
                </div>
            </div>

            <!-- Step 5 -->
            <div class="row align-items-center mb-2">
                <div class="col-md-6">
                    <h1 class="step-number">05</h1>
                    <h4>Plan Implementation</h4>
                    <p>Once approved, we start executing the strategies with full transparency and regular progress
                        updates.</p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="assets/images/others/arrow-1.png" class="arrow-1 img-fluid" alt="arrow">
                </div>
            </div>

            <!-- Step 6 -->
            <div class="row align-items-center justify-content-end">
                <div class="col-md-6">
                    <h1 class="step-number">06</h1>
                    <h4>Continuous Support</h4>
                    <p>We stay with you even after project completion. Our team provides ongoing support, updates, and
                        improvements.</p>
                </div>
            </div>

        </div>
    </section>

    <style>
        .step-number {
            font-size: 60px;
            font-weight: bold;
            color: #ff5722;
            /* Coral color */
        }

        .arrow-1 {
            /* width: 100%; */
            opacity: 0.8;
            rotate: 10deg;
        }

        .arrow-2 {
            /* width: 100%; */
            opacity: 0.8;
            rotate: 70deg;
        }

        /* .rotate {
            transform: rotate(180deg);
        } */

       
        .coral-process p {
            font-size: 16px;
            color: #555;
        }
    </style>


    <!-- ============================================ -->
    <?php include 'common/footer.php'; ?>
</body>


</html>