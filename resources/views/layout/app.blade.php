<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prepa Morfín</title>
    <link rel="icon" href="/img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-800 font-sans">
    <nav class="fixed w-full z-50 bg-white/90 backdrop-blur-md shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center gap-3">
                    <img src="/img/halcon.png" alt="Logo" class="h-14 w-auto object-contain">
                    <span class="text-dark-blue font-bold text-xl tracking-tight hidden md:block">PREPA MORFÍN</span>
                </div>
                <div class="hidden md:flex space-x-8 font-medium">
                    <a href="#inicio" class="text-dark-blue hover:text-light-blue transition-colors">Inicio</a>
                    <a href="#nosotros" class="text-dark-blue hover:text-light-blue transition-colors">Nosotros</a>
                    <a href="#oferta" class="text-dark-blue hover:text-light-blue transition-colors">Oferta
                        Educativa</a>
                    <a href="#contacto" class="text-dark-blue hover:text-light-blue transition-colors">Contacto</a>
                </div>
                {{-- <a href="#contacto"
                    class="bg-light-blue text-white px-6 py-2 rounded-full font-semibold hover:bg-dark-blue transition-all transform hover:scale-105 shadow-md">
                    Inscribirse
                </a> --}}
            </div>
        </div>
    </nav>
    @yield('content')
    {{-- Cambiar clases de boostrap por tailwind para el footer --}}
    <footer class="bg-dark-blue text-white py-10">
        <div class="p-5">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="flex flex-col justify-center items-center mb-3">
                        <img src="/img/halcon.png" alt="halcon" class="img-fluid" />
                    </div>
                    <div class="mb-3">
                        <h3 class="font-bold text-lg">Contáctanos</h3>
                        <ul class="mb-3">
                            <li class="mb-2">
                                <i class="bi bi-geo-alt-fill"></i>
                                Calle Francisco I. Madero #48, Col. Centro, Altotonga, Ver.
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-envelope-at-fill mt-1"></i>
                                <span>luismorfin_229@hotmail.com</span>
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-telephone-fill mt-1"></i>
                                (226) 316-03-51
                            </li>
                        </ul>

                        <!-- Redes sociales -->
                        <div class="footer-social flex items-center">
                            <a href="https://www.facebook.com/prepamorfin?locale=es_LA" target="_blank"
                                aria-label="Facebook" class="text-white mr-3"><i class="bi bi-facebook"
                                    style="font-size: 24px;"></i></a>
                            <a href="https://www.instagram.com/prefeco_morfinoficial" target="_blank"
                                aria-label="Instagram" class="text-white mx-3"><i class="bi bi-instagram"
                                    style="font-size: 25px;"></i></a>
                            <a href="https://wa.me/+522261084550/?text=Quiero más informacion" target="_blank"
                                aria-label="WhatsApp" class="text-white"><i class="bi bi-whatsapp"
                                    style="font-size: 24px;"></i></a>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg">Menús</h3>
                        <ul>
                            <li><a href="#inicio" class="text-white text-decoration-none"> Inicio</a>
                            </li>
                            <li><a href="#nosotros" class="text-white text-decoration-none">Nosotros</a></li>
                            <li><a href="#oferta" class="text-white text-decoration-none">Oferta Educativa</a></li>
                            <li><a href="#contacto" class="text-white text-decoration-none">Contacto</a></li>
                        </ul>
                    </div>
                    <div class="flex flex-col justify-center items-center mb-3">
                        <img src="/img/sep.png" alt="Logo SEP" class="img-fluid" />
                        <img src="/img/dgb.png" alt="Logo DGB" class="mt-5 img-fluid" />
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full text-center text-gray-300">
            <div class="">
                <div class="">
                    <div class="mt-2">
                        <p>© {{ date('Y') }} Todos los derechos reservados.<a href="/"> Escuela Preparatoria Federal Por
                                Cooperación Dr. Luis Morfín Álvarez</a></p>

                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
