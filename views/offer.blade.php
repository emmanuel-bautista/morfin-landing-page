@extends('app')

@section('title', 'Prepa Morfín | Oferta Educativa')

@section('content')
<section class="container px-3 mt-5 section">
    <h1 class="text-primary fw-bold">Capacitaciones para el trabajo</h1>
    <div class="row my-5">
      <div class="col-12 card card-body p-4 shadow-sm offer-academic-card">
        <div class="row h-100 align-items-center">
          <div class="col-12 col-lg-4 d-flex flex-column align-items-center mb-3">
            <img src="/img/offer/tecnolgias_informacion.png" alt="Tecnologías de la información y comunicación" />
            <p class="mt-3 fw-bold text-secondary text-center text-uppercase fs-4"> Tecnologías de la información y comunicación</p>
          </div>
          <div class="col-12 col-lg-8">
            <p class="text-justify fs-17" style="line-height: unset!important;">
              ¡Potencia tu habilidad para comunicarte en la era digital! Únete a nuestra capacitación en Comunicación y
              Tecnologías de la Información y descubre cómo aprovechar al máximo las herramientas tecnológicas para mejorar
              tus habilidades de comunicación. Aprende a utilizar plataformas digitales, redes sociales y software especializado
              para transmitir tu mensaje de manera efectiva en el mundo moderno. Con sesiones dinámicas y prácticas, esta capacitación
              te brindará las herramientas necesarias para destacarte en un entorno digitalmente conectado. ¡Inscríbete ahora y prepárate para brillar en la comunicación del siglo XXI!
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 card card-body p-4 mt-4 shadow-sm offer-academic-card">
        <div class="row h-100 align-items-center">
          <div class="col-12 col-lg-4 mb-3 d-flex flex-column align-items-center">
            <img src="/img/offer/contabilidad.png" alt="Contabilidad" />
            <p class="mt-3 fw-bold text-secondary text-center text-uppercase fs-4">Contabilidad</p>
          </div>
          <div class="col-12 col-lg-8 text-justify fs-17">
            Aprende los fundamentos de la contabilidad y fortalece tus habilidades financieras.
            Descubre cómo interpretar estados financieros, realizar registros contables y tomar decisiones financieras informadas.
            Con sesiones prácticas y ejemplos del mundo real, esta capacitación te proporcionará las herramientas necesarias para entender y
            aplicar los principios contables en cualquier entorno profesional. ¡Inscríbete ahora y da el primer paso hacia una carrera sólida en el mundo de las finanzas!
          </div>
        </div>
      </div>
      <div class="col-12 card card-body p-4 mt-4 shadow-sm offer-academic-card">
        <div class="row h-100 align-items-center">
          <div class="col-12 col-lg-4 mb-3 d-flex flex-column align-items-center">
            <img src="/img/offer/comunicacion.png" alt="Comunicación" />
            <p class="mt-3 fw-bold text-secondary text-center text-uppercase fs-4">Comunicación</p>
          </div>
          <div class="col-12 col-lg-8 text-justify fs-17">
            Mejora tus habilidades de comunicación y destaca en cualquier situación con nuestra capacitación especializada. Aprende técnicas efectivas de expresión oral
            y escrita, así como estrategias para comunicarte de manera clara, persuasiva y empática. Con ejercicios prácticos y dinámicos, esta capacitación te ayudará a
            ganar confianza y a dominar el arte de la comunicación en cualquier entorno personal y profesional. ¡Inscríbete ahora y prepárate para destacarte en tu carrera y relaciones interpersonales!
          </div>
        </div>
      </div>
      <div class="col-12 card card-body p-4 mt-4 shadow-sm offer-academic-card">
        <div class="row h-100 align-items-center">
          <div class="col-12 col-lg-4 mb-3 d-flex flex-column align-items-center">
            <img src="/img/offer/diseno_grafico.png" alt="Diseño gráfico" />
            <p class="mt-3 fw-bold text-secondary text-center text-uppercase fs-4">Diseño gráfico</p>
          </div>
          <div class="col-12 col-lg-8 text-justify fs-17">
            Despierta tu creatividad y domina el arte del diseño gráfico con nuestra capacitación especializada. Aprende a utilizar herramientas digitales de última generación para crear diseños impactantes
            y profesionales. Desde la composición y el color hasta la tipografía y la imagen, esta capacitación te brindará las habilidades y conocimientos necesarios para destacarte en el mundo del diseño.
            Con proyectos prácticos y tutoriales guiados, estarás listo para dar vida a tus ideas y marcar la diferencia visualmente. ¡Inscríbete ahora y haz realidad tu pasión por el diseño!
          </div>
        </div>
      </div>
      <div class="col-12 card card-body p-4 mt-4 shadow-sm offer-academic-card">
        <div class="row h-100 align-items-center">
          <div class="col-12 col-lg-4 mb-3 d-flex flex-column align-items-center">
            <img src="/img/offer/salud.png" alt="Higiene y salud comunitaria" />
            <p class="mt-3 fw-bold text-secondary text-center text-uppercase fs-4">Higiene y salud comunitaria</p>
          </div>
          <div class="col-12 col-lg-8 text-justify fs-17">
            Únete a nuestra capacitación en Higiene y Salud Comunitaria y haz una diferencia positiva en tu comunidad. Aprende prácticas fundamentales de higiene y prevención de enfermedades,
            así como estrategias para promover estilos de vida saludables en tu entorno. Con enfoque en la prevención y el bienestar colectivo, esta capacitación te brindará las herramientas y
            conocimientos necesarios para promover la salud y el bienestar en tu comunidad. ¡Inscríbete ahora y contribuye al cuidado y desarrollo de tu entorno!
          </div>
        </div>
      </div>
      <div class="col-12 card card-body p-4 mt-4 shadow-sm offer-academic-card">
        <div class="row h-100 align-items-center">
          <div class="col-12 col-lg-4 mb-3 d-flex flex-column align-items-center">
            <img src="/img/offer/quimica.png" alt="Laboratorista químico" />
            <p class="mt-3 fw-bold text-secondary text-center text-uppercase fs-4">Laboratorista químico</p>
          </div>
          <div class="col-12 col-lg-8 text-justify fs-17">
            Descubre el fascinante mundo de la química y conviértete en un experto en nuestro programa de capacitación para Laboratorista Químico. Aprende técnicas de análisis, manipulación de
            sustancias químicas y procedimientos de laboratorio bajo la guía de profesionales experimentados. Con un enfoque en la precisión y la seguridad, esta capacitación te proporcionará las habilidades
            y conocimientos necesarios para realizar análisis químicos con precisión y confianza. ¡Inscríbete ahora y prepárate para una carrera emocionante en el campo de la química!
          </div>
        </div>
      </div>
    </div>
</section>
@endsection