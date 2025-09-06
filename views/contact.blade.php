@extends('app')

@section('title', 'Prepa Morfín | Contacto')

@section('content')
<section class="py-5">
    <div class="container">
      <h1 class="fw-bold text-primary mb-4">Contáctanos</h1>
      <p class="lead mb-5">
        ¿Tienes dudas sobre nuestros programas o procesos de admisión? ¡Escríbenos
        y con gusto te atenderemos!
      </p>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <form class="row g-3">
            <div class="col-md-6">
              <label for="name" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="name" placeholder="Tu nombre" required />
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="tu@correo.com" required />
            </div>
            <div class="col-12">
              <label for="message" class="form-label">Mensaje</label>
              <textarea id="message" class="form-control" rows="5" placeholder="Escribe tu mensaje" required></textarea>
            </div>
            <div class="col-12 text-end mt-3">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</section>
@endsection
