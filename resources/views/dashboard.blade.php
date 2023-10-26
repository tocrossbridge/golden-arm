<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white">
                <div class="p-6 text-gray-900">
                    <h2>Localizar hemocentros mais proxímos com base em seu endereço</h2>

                    <div class="mb-3">
                        <label for="localInput" class="form-label">Localização</label>
                        <input type="text" id="localInput" class="form-control" placeholder="Digite o endereço"
                            onclick="obterLocalizacao()">
                    </div>
                    <input type="checkbox" id="pesquisarCheckbox" class="d-none">
                    <label for="pesquisarCheckbox" class="btn btn-danger">Pesquisar</label> <!--colcoar cidade-->
                    <div class="conteudo-oculto">
                        <br>
                        <p>Os mais proximos:</p>
                        <br>
                        <div class="row row-cols-1 row-cols-md-2 g-4">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Hemocentro A</h5>
                                        <p><strong>Nome:</strong> Hemocentro A</p>
                                        <p><strong>Endereço:</strong> Rua de teste, 1244, Água Verde</p>
                                        <p><strong>Telefone:</strong> 41 00000-0000</p>
                                        <p><strong>CEP:</strong> xxxxx-xxx</p>
                                        <p><strong>e-mail:</strong> teste@email.com</p>
                                        <p><strong>Horário de funcionamento:</strong> Segunda a sábado, das 9h às
                                            17h</p>
                                        <button type="submit" class="btn btn-danger" onclick="alerta()">Agendar
                                            doação</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Hemocentro B</h5>
                                        <p><strong>Nome:</strong> Hemocentro B</p>
                                        <p><strong>Endereço:</strong> Rua de teste, 1244, Centro</p>
                                        <p><strong>Telefone:</strong> 41 00000-0000</p>
                                        <p><strong>CEP:</strong> xxxxx-xxx</p>
                                        <p><strong>e-mail:</strong> teste@email.com</p>
                                        <p><strong>Horário de funcionamento:</strong> Segunda a sexta-feira, das 9h
                                            às 18h</p>
                                        <button type="submit" class="btn btn-danger" onclick="alerta()">Agendar
                                            doação</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <script>
            function alerta () {
                alert("Doação agendada com sucesso!");
            };


            function obterLocalizacao () {

                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(exibirLocalizacao);
                } else {
                    alert("Geolocalização não suportada pelo navegador.");
                }
            }

            function exibirLocalizacao (posicao) {
                var latitude = posicao.coords.latitude;
                var longitude = posicao.coords.longitude;

                var url = `https://nominatim.openstreetmap.org/reverse?format=json&lat=${latitude}&lon=${longitude}`;
                //url que acessa a api

                fetch(url)
                    .then(response => response.json())
                    .then(data => {
                        var endereco = data.display_name;

                        // Preenche o valor do input com o endereço
                        document.getElementById("localInput").value = endereco;
                    })
                    .catch(error => {
                        console.error(error);
                        alert("Erro ao processar a requisição.");
                    });
            }
        </script>
</x-app-layout>
