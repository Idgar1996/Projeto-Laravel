@extends('base')

@section('title', 'Alusim')

@section('styles')
        @vite(['resources/css/servicos.css'])
@endsection

@section('content')
        <main class="main">
            <section class="container-servicos">
                <h1>Nossos Serviços</h1>
                <h2>Alguns trabalhos realizados pela Alusim.</h2>
                <div class="container-imagens">
                    <div class="card-servico">
                        <img src="{{ Vite::asset('resources/assets/img/servicos/JC.webp') }}" alt="Imagem de teste">
                        <h3>Janela de correr</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ Vite::asset('resources/assets/img/servicos/PC.webp') }}" alt="Imagem de teste">
                        <h3>Porta janela</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ Vite::asset('resources/assets/img/servicos/PG.webp') }}" alt="Imagem de teste">
                        <h3>Porta de giro</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ Vite::asset('resources/assets/img/servicos/PP.webp') }}" alt="Imagem de teste">
                        <h3>Porta pivotante</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ Vite::asset('resources/assets/img/servicos/MA.webp') }}" alt="Imagem de teste">
                        <h3>Janela maxim-ar</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ Vite::asset('resources/assets/img/servicos/PS.webp') }}" alt="Imagem de teste">
                        <h3>Persiana</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ Vite::asset('resources/assets/img/servicos/VZ.webp') }}" alt="Imagem de teste">
                        <h3>Sanfonada</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ Vite::asset('resources/assets/img/servicos/PT.webp') }}" alt="Imagem de teste">
                        <h3>Portão</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ Vite::asset('resources/assets/img/servicos/GC.webp') }}" alt="Imagem de teste">
                        <h3>Guarda corpo</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ Vite::asset('resources/assets/img/servicos/FC.webp') }}" alt="Imagem de teste">
                        <h3>Fachada</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ Vite::asset('resources/assets/img/servicos/PL.webp') }}" alt="Imagem de teste">
                        <h3>Pergolado</h3>
                    </div>
                    <div class="card-servico">
                        <img src="{{ Vite::asset('resources/assets/img/servicos/CR.webp') }}" alt="Imagem de teste">
                        <h3>Corrimão</h3>
                    </div>
                </div>
                <div class="card-go-message">
                    <div class="container-texto">
                        <h3>Precisando de esquadrias <br> para a sua obra?</h3>
                        <p>Entre em contato e solicite um orçamento sem compromisso.</p>
                    </div>
                    <a href="{{ route('mensagem') }}" class="link-bottom">Solicitar orçamento</a>
                </div>
            </section>
        </main>
@endsection