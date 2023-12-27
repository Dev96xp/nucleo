<x-app-layout>

    {{-- DONE --}}

    <!-- Navbar (sit on top) -->
    {{-- <div class="w3-top">

        <div class="w3-bar" id="myNavbar">

            <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right"
                href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
                <i class="fa fa-bars"></i>
            </a>

            <a href="#home" class="px-4 py-2 float-left hover:bg-gray-300">HOME</a>
            <a href="#about" class="px-4 py-2 float-left hover:bg-gray-300"><i class="fa fa-user"></i> ABOUT</a>
            <a href="#portfolio" class="px-4 py-2 float-left hover:bg-gray-300"><i class="fa fa-th"></i> PORTFOLIO</a>
            <a href="#shop" class="px-4 py-2 float-left hover:bg-gray-300"><i class="fa fa-shopping-bag"></i> SHOP</a>
            <a href="#contact" class="px-4 py-2 float-left hover:bg-gray-300"><i class="fa fa-envelope"></i> CONTACT</a>

            <a href="#" class="px-4 py-2 float-right hover:bg-red-500">
                <i class="fa fa-search"></i>
            </a>

        </div>

    </div> --}}



    {{-- PARALLAX IMAGE 1 --}}
    {{-- MASTER CLASS - PARALLAX EFFECT - (bg-fixed bg-center bg-no-repeat bg-cover)
                                         (min-h-screen - OCUPA TODA LA ALTURA DE PANTALLA) --}}
    {{-- PARALLAX IMAGE 1 --}}
    <div class="w-full mx-auto text-gray-100 min-h-screen opacity-75 px-4 sm:px-6 lg:px-64 relative bg-fixed bg-center bg-no-repeat bg-cover"
        style="background-image: url('{{ asset('img/quince_01.jpg') }}'); font-family: Montserrat; height: 100%">
        {{-- MASTER CLASS - Excelente metodo para centrar texto sobre una imagen --}}
        <div class="absolute bottom-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 whitespace-nowrap">
            {{-- main titulo --}}
            <span class="px-6 py-2 bg-slate-900 text-2xl md:text-4xl lg:text-7xl tracking-widest opacity-75">THE
                PALACE <span class="ml-3"> IMPORIUM</span>
            </span>
        </div>
    </div>

    {{-- Agenda --}}
    <div>
        @livewire('admin.agenda.edit-agenda')
    </div>


    <!-- Container (About Section) -->
    <section class="mb-6">
        <div class="text-center p-4 text-lg tracking-widest">
            THE PALACE
        </div>

        <div class="mx-auto px-4 sm:px-6 lg:px-0 lg:max-w-5xl mb-6">
            <p class="text-center mb-2"><em>Me encantan nuestras tradiciones...,pero mas en espeacial !!!</em></p>
            <p class="text-justify ">Aqui donde convergen los estados de toda la nacion, en el corazon del pais, se
                reunen
                todos los estilos
                texturas, telas, diseños y bordados de la mas grande collection de vestidos de quinceañera, los mas
                espectaculares diseños de nuestras collectiones, siempre respetando nuestras tradiciones,
                nuestros vestidos ahora mas cercas de ti, listos para provartelos en cualquiera
                de nuestras tiendas, el PALACIO DE LA QUINCEAÑERA es considerado como lo mejor de lo mejor del midwest
                en
                vestidos de quinceañeras, y accesorios
                nuestro equipo de trabajo rapido y ordenado siempre te asistiran con tus ordenes y tus pruebas,
                con experiancia por mas de 20 años en eventos y competencias, siempre al vanguardia y listos
                para asistirte en tu mas preciado dia, ven con toda tu familia, disfruta, pruebate el vestido
                de preferencia. Estamos a tus ordenes en varias localidades
                ven y visitanos, llama u ordena en linea atravez de esta plataforma.

                Bienvedida Princesa para hacer tu sueño una realidad "El Palacio de la quinceañera".
            </p>
        </div>

        <div class="mx-auto px-4 grid grid-cols-1 lg:grid-cols-2 gap-x-4 lg:max-w-5xl">
            <div>
                <p class="text-center"><b><i class="fa fa-user"></i>THE PALACE</b></p><br>
                <img src="{{ asset('img/quince_23.jpg') }}" class="opacity-75 hover:opacity-100 rounded-md"
                    alt="Photo of Me" width="500" height="333">
            </div>
            <div class="mt-8">
                <p class="text-justify">Welcome to my website. I am lorem ipsum consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure
                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                    sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                    consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </section>


    <section class="mb-8">
        {{-- Determina el tamaño del contenedor --}}
        <div class="mx-auto px-4 sm:px-6 lg:px-0 lg:max-w-5xl">

            <div class="text-center p-4 text-lg tracking-widest">
                We are really good at
            </div>

            <p class="tracking-widest"><i class="fa fa-camera"></i>Quinceañera dresses collections</p>

            <div class="text-gray-200">
                <div class="bg-neutral-600 text-center p-1" style="width:100%">100%</div>
            </div>


            <p class="tracking-widest"><i class="fa fa-laptop"></i>Accesories</p>
            <div class="text-gray-200">
                <div class="bg-neutral-600 text-center p-1" style="width:97%">97%</div>
            </div>


            <p class="tracking-widest"><i class="fa fa-photo"></i>Hall decoration</p>
            <div class="text-gray-200">
                <div class="bg-neutral-600 text-center p-1" style="width:95%">95%</div>
            </div>


        </div>
    </section>


    <div class="bg-neutral-600">
        <div class="grid grid-cols-4 gap-x-4 mx-auto py-8 text-center">
            <div class="text-gray-200">
                <span class="text-3xl">14+</span><br>
                Partners
            </div>
            <div class="text-gray-200">
                <span class="text-3xl">55+</span><br>
                Projects Done
            </div>
            <div class="text-gray-200">
                <span class="text-3xl">3789+</span><br>
                Happy Clients
            </div>
            <div class="text-gray-200">
                <span class="text-3xl">150+</span><br>
                Meetings
            </div>
        </div>

    </div>


    {{-- THIRD PARALLAX IMAGE --}}
    {{-- MASTER CLASS - PARALLAX EFFECT - (bg-fixed bg-center bg-no-repeat bg-cover)
                                         min-h-screen - OCUPA TODA LA ALTURA DE PANTALLA
                                         hover:opacity-100 - Elimina el opacity --}}
    <div class="w-full mx-auto text-gray-100 h-96 opacity-75 px-4 sm:px-6 lg:px-64 relative bg-fixed bg-center bg-no-repeat bg-cover hover:opacity-100"
        style="background-image: url('{{ asset('img/quince_17.jpg') }}'); font-family: Montserrat">
        {{-- MASTER CLASS - Excelente metodo para centrar texto sobre una imagen --}}
        <div class="absolute bottom-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
            <span class="text-center font-bold px-6 py-2 text-3xl md:text-4xl lg:text-7xl tracking-widest opacity-75">
                PORFOLIO
            </span>
        </div>
    </div>



    {{-- SECCTION 2 - Contenido --}}
    <section class="mt-4">
        <h1 class="text-gray-800 text-center text-3xl mb-6 font-bold"
            style="font-family: proxima-nova, sans-serif;font-weight: 800;font-style: normal">CONTENT</h1>
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    {{-- image --}}
                    <a href="#"><img class="rounded-lg lg:h-40 w-full object-cover opacity-75 hover:opacity-100"
                            src="{{ asset('img/home/pexels-daniel-smyth-8956313.jpg') }}" onclick="onClick(this)"
                            alt=""></a>

                    {{-- titulo --}}
                    <header class="mt-2">
                        <a href="#">
                            <h1 class="text-center text-xl text-gray-700">CNC Machining</h1>
                        </a>
                    </header>
                    {{-- description --}}
                    <a href="#" class="mt-2">
                        <p>CNC, or computer numerical control machining, is a widely used manufacturing process that
                            uses automated,
                            high-speed cutting tools to form designs from metal or plastic stock.</p>
                    </a>

                </figure>
            </article>

            <article>
                <figure>
                    {{-- image --}}
                    <img class="rounded-lg h-40 w-full object-cover opacity-75 hover:opacity-100"
                        src="{{ asset('img/home/pexels-pixabay-50691.jpg') }}" onclick="onClick(this)" alt="">
                    {{-- titulo --}}
                    <header class="mt-2">
                        <a href="#">
                            <h1 class="text-center text-xl text-gray-700">CAD</h1>
                        </a>
                    </header>

                    <a href="#" class="mt-2">
                        <p>Skilled machinists operate a CNC machine by programming tool paths based on the geometry of
                            the final
                            machined parts. The part geometry information is provided by a
                            CAD (computer-aided design) model.</p>
                    </a>

                </figure>
            </article>

            <article>
                <figure>
                    <img class="rounded-lg h-40 w-full object-cover opacity-75 hover:opacity-100"
                        src="{{ asset('img/home/pexels-daniel-smyth-8865187.jpg') }}" onclick="onClick(this)"
                        alt="">
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">Applications</h1>
                    </header>
                    <p>CNC machining is widely used across industries. It is common in aerospace, automotive, consumer
                        electronics,
                        robotics, agriculture, and other fields that frequently use metal parts.</p>
                </figure>
            </article>

            <article>
                <figure>
                    <img class="rounded-lg h-40 w-full object-cover opacity-75 hover:opacity-100"
                        src="{{ asset('img/home/pexels-pixabay-159298.jpg') }}" onclick="onClick(this)" alt="">
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">Materials</h1>
                    </header>
                    <p>Because CNC machining can cut a high variety of fully dense, durable materials like aluminum 5052
                        and
                        stainless steel, it is perfect for creating fixtures or molds.</p>
                </figure>
            </article>


        </div>
    </section>



    <h1 class="text-center text-gray-700 text-3xl mt-16">THE PALACE COLLECTION</h1>

    <div class="flex justify-center mt-4 mb-8">
        <a href="" class="bg-pink-400 hover:bg-pink-300 text-white font-bold py-2 px-4 rounded">
            Catalagos de Vestidos
        </a>
    </div>


    <!-- Modal -->
    <div class="bg-gray-800 relative">
        <div id="modal01" class="z-50 fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 my-auto"
            onclick="this.style.display='none'">
            {{-- <span class="btn border-t-neutral-200 px-2 bg-gray-200 absolute top-0 right-0 rounded-md" title="Close Modal Image"><i
                    class="fa fa-remove"></i></span> --}}
            <img id="img01" src="" alt="" class="rounded-md">
            <p id="caption" class="w3-opacity w3-large"></p>
        </div>
    </div>


    {{-- THIRD PARALLAX IMAGE --}}
    {{-- MASTER CLASS - PARALLAX EFFECT - (bg-fixed bg-center bg-no-repeat bg-cover)
                                         min-h-screen - OCUPA TODA LA ALTURA DE PANTALLA
                                         hover:opacity-100 - Elimina el opacity --}}
    <div class="w-full mx-auto text-gray-100 h-96 opacity-75 px-4 sm:px-6 lg:px-64 relative bg-fixed bg-center bg-no-repeat bg-cover"
        style="background-image: url('{{ asset('img/quince_02.jpg') }}'); font-family: Montserrat">
        {{-- MASTER CLASS - Excelente metodo para centrar texto sobre una imagen --}}
        <div class="absolute bottom-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
            <span class="text-center font-bold px-6 py-2 text-3xl md:text-4xl lg:text-7xl tracking-widest opacity-75">
                CONTACT
            </span>
        </div>
    </div>


    <!-- Container (Contact Section) -->
    <section class="mt-12">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-x-6 gap-y-8">

            <div class="col-span-1 mt-12 opacity-75 hover:opacity-100">
                <img src="{{ asset('img/quince_02.jpg') }}" class="rounded-md" style="width:100%">
            </div>

            <div class="col-span-2">
                <div class="ml-24">
                    <h3 class="">WHERE I WORK</h3>
                    <p class=""><em>I'd love your feedback!</em></p>
                </div>
                <i class="fa fa-map-marker fa-fw hover:text-neutral-800 text-3xl mr-6"></i>
                Chicago, Nebraska, Iowa, Kansas, Missouri, Miami, South Dakota, US.<br>

                <i class="fa fa-phone fa-fw hover:text-neutral-800 text-3xl mr-6"></i> Phone: +00
                308.746.4108<br>

                <i class="fa fa-envelope fa-fw hover:text-neutral-800 text-3xl mr-6 mb-4"></i> Email:
                thepalace15@gmail.com<br>

                <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note:</p>
                <form action="/action_page.php" target="_blank">
                    <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" placeholder="Name" required
                                name="Name">
                        </div>
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" placeholder="Email" required
                                name="Email">
                        </div>
                    </div>
                    <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
                    <button class="w3-button w3-black w3-right w3-section" type="submit">
                        <i class="fa fa-paper-plane"></i> SEND MESSAGE
                    </button>
                </form>

            </div>

        </div>

    </section>


    <!-- Footer -->
    <footer class="bg-neutral-600 hover:bg-neutral-900 text-gray-200 text-center py-6">
        <div class="center">
            <a href="" class="bg-neutral-200 text-gray-600 border-neutral-500 py-2 px-4"><i
                    class="fa fa-arrow-up mr-4"></i>To the
                top</a>

            <div class="justify-center my-8 text-2xl">
                <i class="fa fa-facebook-official hover:opacity-100"></i>
                <i class="fa fa-instagram hover:opacity-100"></i>
                <i class="fa fa-snapchat hover:opacity-100"></i>
                <i class="fa fa-pinterest-p hover:opacity-100"></i>
                <i class="fa fa-twitter hover:opacity-100"></i>
                <i class="fa fa-linkedin hover:opacity-100"></i>
            </div>
            <p>Powered by nucleus technologies 2023</p>
        </div>
    </footer>

</x-app-layout>


<script>
    // Modal Image Gallery
    function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
        var captionText = document.getElementById("caption");
        captionText.innerHTML = element.alt;
    }

    // Change style of navbar on scroll
    window.onscroll = function() {
        myFunction()
    };

    function myFunction() {
        var navbar = document.getElementById("myNavbar");
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
        } else {
            navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
        }
    }

    // Used to toggle the menu on small screens when clicking on the menu button
    function toggleFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>
