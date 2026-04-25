<section id="ubicacion" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-dark-blue text-4xl font-bold">Ubicación y Horarios</h2>
            <div class="w-20 h-1.5 bg-golden mx-auto mt-4 rounded-full"></div>
            <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Visítanos en nuestras instalaciones. Estamos listos para recibirte y brindarte la mejor atención.</p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-stretch">
            <!-- Info Column -->
            <div class="flex flex-col justify-center space-y-10 bg-gray-50 p-8 md:p-12 rounded-3xl border-l-4 border-dark-blue shadow-sm">
                
                <div>
                    <div class="flex items-center mb-6 text-dark-blue">
                        <div class="flex items-center justify-center w-14 h-14 rounded-full bg-light-blue/10 mr-4">
                            <i class="fas fa-clock text-2xl text-light-blue"></i>
                        </div>
                        <h3 class="text-2xl font-bold">Horarios de Atención</h3>
                    </div>
                    <ul class="space-y-4 text-gray-600 ml-18 sm:ml-18 pl-1">
                        <li class="flex justify-between items-center border-b border-gray-200 pb-3">
                            <span class="font-semibold text-gray-800">Lunes - Viernes</span>
                            <span class="bg-white px-3 py-1 rounded-md text-sm shadow-sm border border-gray-100">2:00 PM - 8:00 PM</span>
                        </li>
                        {{-- <li class="flex justify-between items-center border-b border-gray-200 pb-3">
                            <span class="font-semibold text-gray-800">Sábados</span>
                            <span class="bg-white px-3 py-1 rounded-md text-sm shadow-sm border border-gray-100">9:00 AM - 2:00 PM</span>
                        </li> --}}
                        <li class="flex justify-between items-center text-gray-400">
                            <span class="font-medium">Sábados y Domingos</span>
                            <span class="text-sm">Cerrado</span>
                        </li>
                    </ul>
                </div>

                <div class="pt-4">
                    <div class="flex items-center mb-6 text-dark-blue">
                        <div class="flex items-center justify-center w-14 h-14 rounded-full bg-light-blue/10 mr-4">
                            <i class="fas fa-map-marker-alt text-2xl text-light-blue"></i>
                        </div>
                        <h3 class="text-2xl font-bold">Nuestra Dirección</h3>
                    </div>
                    <div class="text-gray-600 ml-18 sm:ml-18 pl-1 leading-relaxed">
                        {{-- <p class="font-medium text-gray-800 mb-1">Plantel Principal</p> --}}
                        <p>Francisco I. Madero #48,</p>
                        <p>Centro,</p>
                        <p>C.P. 9700, Altotonga, Veracruz, México.</p>
                    </div>
                </div>
            </div>

            <!-- Map Column -->
            <div class="h-[450px] lg:h-auto rounded-3xl overflow-hidden shadow-lg border border-gray-100 relative group">
                <div class="absolute inset-0 bg-dark-blue/5 pointer-events-none group-hover:bg-transparent transition-colors duration-300 z-10"></div>
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d394.6718461406535!2d-97.24734459319909!3d19.76483608161731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85dadd237355220f%3A0xb599d582e1aaf8a4!2sEscuela%20Preparatoria%20Federal%20Dr.%20Luis%20Morf%C3%ADn%20Alvarez!5e0!3m2!1ses!2smx!4v1777148076764!5m2!1ses!2smx" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                    class="w-full h-full relative z-0"
                >
                </iframe>
            </div>
        </div>
    </div>
</section>
