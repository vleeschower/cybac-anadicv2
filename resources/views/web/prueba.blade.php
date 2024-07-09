@extends('layouts.web')

@section('main')
<section id="title" class="page-section">
    <div class="container">
        <h1>HOLA MUNDO</h1>
        {{-- <div class="container">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d112061.09262729759!2d77.208022!3d28.632485!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x644e33bc3def0667!2sIndior+Tours+Pvt+Ltd.!5e0!3m2!1sen!2sus!4v1527779731123" width="100%" height="650px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            
            <div class="">
                <div class="hr">
                    <hr>
                </div>
                <h1 className='' class="title">Prueba Bootstrap V5.3</h1>
            </div>

            <div>
                <div class="hr">
                    <hr>
                </div>
                <h2 class="subtitle">Forms</h2>
            </div>

            <form action="">
                <div class="panel panel-success">
                    <div class="panel-body">

                        <div class="field-border-bottom">
                            <label for="">Nombre</label>
                            <input type="text" name="nombre" id="" class="form-control" placeholder="Introduzca su nombre completo">
                        </div>

                        <div class="field-border-bottom">
                            <label for="">Telefono</label>
                            <input type="text" name="telefono" id="" class="form-control" placeholder="Introduzca su numero telefonico">
                        </div>

                        <div class="field-border-bottom">
                            <label for="">Correo Electronico</label>
                            <input type="text" name="email" id="" class="form-control" placeholder="Introduzca su correo electronico">
                        </div>
                    
                        <div class="form-group">
                            <label for="">Mensaje</label>
                            <textarea class="form-control form-control-sm" name="" id="" cols="20" rows="10"></textarea>
                        </div>

                    </div>
                    <a href="" class="button"></a>
                </div>
            </form>

        </div> --}}
        
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Accordion Item #1
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Accordion Item #2
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  Accordion Item #3
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
              </div>
            </div>
          </div>


    </div>
</section>
@endsection