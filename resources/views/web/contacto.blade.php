@extends('layouts.web')
@section('main')
<section id="title" class="page-section">
    <div class="container">
        <h1>Contacto</h1>
        <div class="container">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d112061.09262729759!2d77.208022!3d28.632485!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x644e33bc3def0667!2sIndior+Tours+Pvt+Ltd.!5e0!3m2!1sen!2sus!4v1527779731123" width="100%" height="650px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="contact-form">
                <h1 class="title">Contact Us</h1>
                <h2 class="subtitle">We are here assist you.</h2>
                <form action="">
                    <input type="text" name="name" placeholder="Your Name" />
                    <input type="email" name="e-mail" placeholder="Your E-mail Adress" />
                    <input type="tel" name="phone" placeholder="Your Phone Number"/>
                    <textarea name="text" id="" rows="8" placeholder="Your Message"></textarea>
                    <button class="btn-send">Get a Call Back</button>
                </form>
            </div>
        </div>

    </div>

</section>
@endsection