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
                            Desenvolva uma página web de uma atividade de programação
                        </h1>
                        <p class="t text-lg text-gray-300 mb-8 will-change-transform	box">
                            Criei um formulário simples de cadastro de contato usando a biblioteca de componentes de
                            design
                            Material Tailwind e a aplicação do Laravel.
                        </p>

                    </div>
                    <div class="w-50 lg:w-1/2 flex justify-center ">
                        <img class="rounded-lg" src="/img/img.svg" alt="Hero Image" width="100%">
                    </div>
                </div>
            </div>
        </section>
        <div
            class="container bg-black mx-auto px-4 lg:px-8 my-16 flex justify-center flex-col items-center transition duration-300">
            <div class="w-3/4 bg-black rounded-lg  p-6">
                <h1 class="text-3xl font-bold text-white ">Formulário</h1>
                <form action="/formulario" method="post" class="space-y-6">
                    @csrf
                    <div class="flex flex-col space-y-2 box">
                        <label for="Nome" class="text-white font-semibold">Nome</label>
                        <input type="text" id="Nome" name="Nome"
                            class="bg-zinc-900 text-white px-3 py-2 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-300 ease-in-out"
                            required>
                    </div>
                    <div class="flex flex-col space-y-2 box">
                        <label for="phone" class="text-white font-semibold">Telefone</label>
                        <input type="tel" id="phone" name="Telefone"
                            class="bg-zinc-900 text-white px-3 py-2 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-300 ease-in-out"
                            required>
                    </div>
                    <div class="flex flex-col space-y-2 box">
                        <label for="address" class="text-white font-semibold">Endereço</label>
                        <input type="text" id="address" name="Endereço"
                            class="bg-zinc-900 text-white px-3 py-2 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-300 ease-in-out"
                            required>
                    </div>
                    <div class="flex flex-col space-y-2 box">
                        <label for="gender" class="text-white font-semibold">Gênero</label>
                        <select name="Gênero" id="gender"
                            class="bg-zinc-900 text-white px-3 py-2 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-300 ease-in-out"
                            required>
                            <option value="">Selecione</option>
                            <option value="Homem">Masculino</option>
                            <option value="Feminino">Feminino</option>
                            <option value="Outro">Outro</option>
                        </select>
                    </div>
                    <div class="box">
                        <button type="submit"
                            class="bg-purple-700 hover:bg-purple-500 text-white font-bold py-2 px-4 rounded-md transition duration-300 ease-in-out">
                            Enviar
                        </button>
                    </div>

                </form>
                @if(isset($data))
                    <div class="mt-6 bg-purple-700 p-4 rounded-lg text-white box">
                        <h2 class="text-xl font-bold mb-4">Dados enviados:</h2>
                        <ul>
                            @foreach($data as $key => $value)
                                @if($key !== '_token') <!-- Verifica se a chave não é o token CSRF -->
                                    <li><strong>{{ $key }}:</strong> {{ $value }}</li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
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