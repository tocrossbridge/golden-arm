<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Doe de Sangue</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand">Doador Online</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
                    aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                    <span class="material-symbols-outlined">
                        bloodtype
                    </span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                    aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/home">Página Inicial</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/login">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/register">Cadastre-se</a>
                            </li>
                    </div>
                </div>
            </div>
        </nav>

        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


            <div class="container-md mt-5" id="cont-index">
                <h1>Seja bem-vindo à nossa plataforma!</h1>
                <div class="text-center">
                    <img src="./img/donation.jpg" class="img-fluid rounded mx-auto d-block div-image"
                        alt="representação da doação" />
                </div>

                <!-- TODO: component this stuff :P -->
                <section>

                    <!-- Intro  -->
                    <div>
                        <p>
                            Bem-vindo ao nosso site de localização de hemocentros para doação de sangue. Aqui você pode
                            encontrar facilmente hemocentros disponíveis na cidade de <strong>Curitiba</strong> próximos a você e se
                            tornar um doador de sangue regular para ajudar a salvar vidas.
                        </p>
                        <p>
                            A doação de sangue é um ato de solidariedade que pode ajudar a salvar vidas. Infelizmente, muitos
                            hemocentros têm dificuldades para encontrar doadores suficientes para atender às necessidades
                            daqueles que precisam de doações, é por isso que criamos esta plataforma, para facilitar a conexão entre
                            doadores de sangue e hemocentros.
                        </p>
                        <div class="text-center">
                            <img src="./img/pessoas.jpeg" class="img-fluid rounded mx-auto d-block"
                                alt="pessoas realizando doações" />
                        </div>
                    </div>

                    <!-- About us -->
                    <div>
                        <h2>Quem somos</h2>
                        <p>
                            Nossa plataforma conecta doadores de sangue a hospitais e bancos de sangue que precisam de doações.
                            Através deste site, os doadores podem se cadastrar, agendar doações e encontrar informações sobre os
                            requisitos para doação de sangue, tais como idade, peso, histórico de saúde e medicações que possam
                            afetar a doação.
                        </p>
                        <p>
                            Através deste site, a doação de sangue torna-se mais acessível e conveniente, ajudando a salvar vidas
                            e melhorar a saúde das pessoas. Com a ajuda desta plataforma, a doação de sangue pode ser feita com
                            maior frequência e eficiência, aumentando assim o número de vidas salvas.
                        </p>
                    </div>

                    <!--
                        FAQ
                        TODO: rest of FAQ section
                    -->
                    <div>
                        <h2>Perguntas frequentes</h2>

                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Quem pode doar sangue ?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>
                                            Qualquer pessoa saudável com idade entre<strong> 16 e 69 anos</strong> e que
                                            pese mais de 50 kg pode
                                            doar
                                            sangue. Mas existem algumas outras condições que precisam ser consideradas, como
                                            histórico de doenças
                                            e uso de
                                            alguns remédios. É importante verificar as regras para doar sangue no seu país
                                            ou região.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Como doar sangue ?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <P>
                                            Para doar sangue, você precisa responder algumas perguntas sobre a sua saúde
                                            e viagens, ter seus
                                            sinais
                                            vitais checados, ter sua hemoglobina avaliada e dar uma amostra de sangue
                                            para ser testada. A coleta
                                            em si
                                            costuma durar cerca de 10 minutos.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        O que é preciso para doar sangue?
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>
                                            Os requisitos para doar sangue podem mudar de lugar para lugar, mas
                                            geralmente incluem ter entre
                                            16 e 69
                                            anos, pesar no mínimo 50 kg, estar saudável e não ter tomado certos
                                            remédios recentemente.
                                            Verifique as
                                            regras específicas para doar sangue no seu país ou região.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFour" aria-expanded="false"
                                        aria-controls="flush-collapseFour">
                                        Quanto tempo demora para doar sangue?
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <P>
                                            A coleta de sangue em si dura cerca de 10 minutos, mas todo o
                                            processo, desde a triagem até a
                                            coleta,
                                            pode levar de 30 minutos a uma hora e meia.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFive" aria-expanded="false"
                                        aria-controls="flush-collapseFive">
                                        Como me preparo para doar sangue?
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>
                                            Para se preparar para doar sangue, é bom comer uma refeição
                                            saudável antes, beber bastante
                                            água,
                                            evitar alimentos gordurosos e bebidas alcoólicas nas 24 horas
                                            anteriores e descansar bem na
                                            noite
                                            anterior.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                        Quais são os riscos de doar sangue?
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>
                                            Os riscos são baixos e incluem tontura, náusea, desmaio e
                                            infecções, mas a equipe de doação
                                            monitora
                                            de perto para tratar qualquer reação imediatamente.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                        aria-controls="flush-collapseSeven">
                                        Como é feita a coleta de sangue?
                                    </button>
                                </h2>
                                <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>
                                            A coleta de sangue é feita com uma agulha inserida em
                                            uma veia do braço. A quantidade de
                                            sangue
                                            coletada depende da finalidade da doação e dura cerca de
                                            10 minutos.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseEight" aria-expanded="false"
                                        aria-controls="flush-collapseEight">
                                        O que acontece com o sangue doado?
                                    </button>
                                </h2>
                                <div id="flush-collapseEight" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>
                                            O sangue doado é testado para garantir que seja
                                            seguro e adequado para uso. Em seguida,
                                            é
                                            processado em componentes sanguíneos, como glóbulos
                                            vermelhos, plasma e plaquetas. Esses
                                            componentes são usados para tratar uma variedade de
                                            condições médicas.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseNine" aria-expanded="false"
                                        aria-controls="flush-collapseNine">
                                        Quantas vezes posso doar sangue em um ano?
                                    </button>
                                </h2>
                                <div id="flush-collapseNine" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>
                                            No Brasil, segundo as normas da Agência Nacional
                                            de Vigilância Sanitária (Anvisa),
                                            homens
                                            podem doar sangue até quatro vezes por ano, com
                                            um intervalo mínimo de 60 dias entre
                                            cada
                                            doação. Já as mulheres podem doar até três vezes
                                            por ano, com um intervalo mínimo de
                                            90 dias
                                            entre cada doação.
                                        </p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseTen" aria-expanded="false"
                                            aria-controls="flush-collapseTen">
                                            Posso doar sangue mesmo tomando medicamentos?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTen" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>
                                                Isso depende do medicamento que você está
                                                tomando, alguns medicamentos podem afetar
                                                a doação
                                                de sangue, enquanto outros não. É importante
                                                perguntar para a instituição de doação
                                                de
                                                sangue se o seu remédio é permitido antes de
                                                doar sangue.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="/" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="/" class="nav-link px-2 text-muted">Sobre nós</a></li>
            <li class="nav-item"><a href="/" class="nav-link px-2 text-muted">FAQ</a></li>
            </ul>
            <p class="text-center text-muted">© 2023 Doação de Sangue</p>
            <p class="text-center text-muted">
                Em caso de dúvidas, entre em contato com
                <a href="mailto:doadoronlineopet@gmail.com">
                    <strong>este</strong> email
                </a>
            </p>
            <p class="text-center text-muted">Email: doadoronlineopet@gmail.com</p>
        </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
