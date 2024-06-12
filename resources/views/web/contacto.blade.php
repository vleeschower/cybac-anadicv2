@extends('layouts.web')
@section('main')
<section id="title" class="page-section">
    <div class="container">
        <h1>Contacto</h1>
        <div class="container">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d112061.09262729759!2d77.208022!3d28.632485!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x644e33bc3def0667!2sIndior+Tours+Pvt+Ltd.!5e0!3m2!1sen!2sus!4v1527779731123" width="100%" height="650px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="">
                <div class="hr1">
                    <hr>
                </div>
                <h1 className='' class="title">Contactanos</h1>
            </div>

            <div>
                <div class="hr2">
                    <hr>
                </div>
                <h2 class="subtitle">Envianos los siguientes datos:</h2>
            </div>

            <div class="contact-form">
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
    <style>
        hr{

        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>


</section>
@endsection