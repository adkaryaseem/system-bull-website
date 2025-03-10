@extends("frontend.layouts.main")

@push("title")
    <title>Contact Us</title>
@endpush
@push("css")
<link rel="stylesheet" href={{ asset("frontend/css/contact-us-style.css") }}>
@endpush

@section('main-content')
<main>
    <div class="container-1">
        <div class="cntnr-title">
            <p>
                Contact Us
                </p>
        </div>
    </div>
    <div class="main-container">
        <div class="side-content">
        <ul>
            <li>
        <div class="contact-box">
            <div class="contact-icon">
                <i class="fa-solid fa-envelope-open-text"></i>
            </div>
            <div class="contact-info">
                <span>Email Us</span>
                <p>info@systembull.edu.np</p>
            </div>
        </div>
        </li>
        <li>
            <div class="contact-box">
                <div class="contact-icon">
                    <i class="fa-solid fa-phone-volume"></i>
                </div>
                <div class="contact-info">
                    <span>Call Us</span>
                    <p>01-5922111</p>
                </div>
            </div>
        </li>
        <li>
            <div class="contact-box">
                <div class="contact-icon">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="contact-info">
                    <span>Address</span>
                    <p>Teku-12, Mayalbari, Kathmandu</p>
                </div>
            </div>
        </li>
        <li>
            <div class="contact-box">
                <div class="contact-icon">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <div class="contact-info">
                    <span>Opening Time</span>
                    <p>7:00 A.M to 3:00 P.M</p>
                </div>
            </div>
        </li>
        </ul>
    </div>
    <div class="section">
                    <div class="form-title">
                        <span>
                            Drop us a message for any query
                        </span>
                    </div>
            <div class="inquiry-form">
                <div class="text-box">
                    <input type="text" name="name" placeholder="Your name">
                    <input type="text" name="email" placeholder="Your Email">
                </div>
                <div class="text-box">
                    <input type="text" name="phone" placeholder="Your Phone Number">
                    <input type="text" name="subject" placeholder="Your Subject">
                </div>
                <div class="text-box">
                    <textarea name="message-box" cols="102" rows="7" placeholder="Your Message"></textarea>
                </div>
                <div class="cntr-btn">
                    <button type="submit">Send Message</button>
                </div>
            </div>
        </div>
    </div>
        <div class="map-frame">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.6835780769957!2d85.30022857602123!3d27.696173025983292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19b0640a6cfb%3A0x6ebd5a7482da3f00!2sSystem%20Bull%20information%20and%20communication%20technology%20college!5e0!3m2!1sen!2snp!4v1733923170126!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </main>
    @endsection

    @push("js")
        <script>
            // alert('hello');
        </script>
    @endpush