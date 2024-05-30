<!doctype html>

<body>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
    </head>

    <body class="bg-black">
        <nav class="bg-gradient-to-r from-purple-700 to-violet-700 shadow-lg">
            <div class="mx-auto px-4  sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <a href="#" class="text-white text-lg font-semibold">Victor</a>
                        </div>
                        <div class="hidden sm:block sm:ml-6">
                            <div class="flex space-x-4">
                                <a href="{{ route('index') }}"
                                    class=" text-white group hover:bg-purple-400 hover:text-black px-3 py-2 rounded-md text-sm font-normal transition duration-300 ease-in-out">
                                    Home
                                </a>
                                <a href="{{ route('sobrenos') }}"
                                    class=" text-white group hover:bg-purple-400 hover:text-black px-3 py-2 rounded-md text-sm font-normal transition duration-300 ease-in-out">
                                    Sobre Nós
                                </a>
                                <a href="{{ route('contato') }}"
                                    class="text-white group hover:bg-purple-400 hover:text-black px-3 py-2 rounded-md text-sm font-normal transition duration-300 ease-in-out">
                                    Contato
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="block sm:hidden">
                        <button
                            class="text-white hover:text-black px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out"
                            onclick="toggleNav()">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
        <section class="bg-gradient-to-r from-purple-700 to-violet-700 py-24 lg:py-32">
            <div class="container mx-auto px-4 lg:px-8">
                <div class="flex flex-wrap items-center justify-between ">
                    <div class="w-50 lg:w-1/2 box">
                        <h1 class="quote text-4xl font-bold text-white leading-tight mb-4 will-change-transform	box">
                            Sobre Nós
                        </h1>
                        <p class="t text-lg text-gray-300 mb-8 will-change-transform	box">
                            Criamos este exemplo de página "Sobre Nós" para demonstrar como podemos usar a biblioteca de componentes de design
                            Material Tailwind para criar um design moderno e atraente. Além disso, usamos a aplicação do Laravel para criar um formulário simples de cadastro de contato.
                        </p>

                    </div>
                    <div class="w-50 lg:w-1/2 flex justify-center ">
                        <img class="rounded-lg" src="/img/img.svg" alt="Hero Image" width="100%">
                    </div>
                </div>
            </div>
        </section>
        <footer class="bg-black p-4 text-white">
            <div class="flex justify-between items-center max-w-7xl mx-auto">
                <div class="flex items-center">
                    <h1>Footer</h1>
                </div>

                <div class="flex space-x-4">
                    <p class="text-white text-xs">Terms</p>
                    <p class="text-white text-xs">Privacy</p>
                    <p class="text-white text-xs">Ad Choices</p>
                </div>
            </div>
        </footer>

    </body>

    </html>


    <script>
        function toggleNav() {
            var navBar = document.querySelector('.nav-bar');
            navBar.classList.toggle('hidden');
        }

       

        gsap.defaults({ ease: "power3" });
        gsap.set(".box", { y: 100 });

        ScrollTrigger.batch(".box", {
            //interval: 0.1, // time window (in seconds) for batching to occur. 
            //batchMax: 3,   // maximum batch size (targets)
            onEnter: batch => gsap.to(batch, { opacity: 1, y: 0, stagger: { each: 0.15, grid: [1, 3] }, overwrite: true }),
            onLeave: batch => gsap.set(batch, { opacity: 0, y: -100, overwrite: true }),
            onEnterBack: batch => gsap.to(batch, { opacity: 1, y: 0, stagger: 0.15, overwrite: true }),
            onLeaveBack: batch => gsap.set(batch, { opacity: 0, y: 100, overwrite: true })
            // you can also define things like start, end, etc.
        });
    </script>