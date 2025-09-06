@extends('app')

@section('title', 'Prepa Morfín')

@section('content')
<section class="hero d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="container">
      <h1>Formando el Futuro con Educación de Calidad</h1>
      <p>Un espacio para aprender, crecer y transformar el mañana.</p>
      <a href="#programas" class="btn btn-secondary btn-lg mt-3">Conoce Más</a>
    </div>
  </section>
  <section class="about-preview py-5 bg-light" id="about">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h2 class="fw-bold text-primary">¿Quiénes Somos?</h2>
          <p class="lead">Con más de 60 años de experiencia, la Preparatoria Morfín se dedica a formar estudiantes íntegros y competitivos, preparados para los retos universitarios y profesionales.</p>
          <a href="/about" class="btn btn-primary">Conoce nuestra historia</a>
        </div>
        <div class="col-md-6 text-center mt-4 mt-md-0">
          <img src="https://images.unsplash.com/photo-1596495577886-d920f1fb7238?auto=format&fit=crop&w=600&q=80" alt="Alumnos en clase" class="img-fluid rounded shadow" />
        </div>
      </div>
    </div>
  </section>
  <section class="offer-preview py-5" id="programas">
    <div class="container text-center">
      <h2 class="fw-bold mb-4 text-primary">Oferta Educativa</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow">
            <div class="card-body">
              <h5 class="card-title text-secondary">Preparatoria Federal Por Cooperación</h5>
              <p class="card-text">Nuestra institución es una Preparatoria Federal por Cooperación, enfocada en ofrecer una educación media superior de calidad, basada en el compromiso académico, la responsabilidad social y la formación integral de cada estudiante.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow">
            <div class="card-body">
              <h5 class="card-title text-secondary">Capacitaciones para el Trabajo</h5>
              <p class="card-text">Contamos con 5 capacitaciones para el trabajo, orientadas a proporcionar a los jóvenes las herramientas prácticas y conocimientos necesarios para enfrentar los retos del ámbito profesional, impulsando su preparación para la vida laboral y universitaria.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow">
            <div class="card-body">
              <h5 class="card-title text-secondary">Paraescolares</h5>
              <p class="card-text">Ofrecemos 4 paraescolares que enriquecen la formación de nuestros alumnos mediante actividades culturales, deportivas y artísticas, fortaleciendo habilidades sociales, trabajo en equipo y creatividad.</p>
            </div>
          </div>
        </div>
      </div>
      <a href="/offer" class="btn btn-secondary mt-4">Ver todos los programas</a>
    </div>
  </section>
@endsection