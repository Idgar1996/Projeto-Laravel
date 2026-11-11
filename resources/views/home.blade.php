@extends('base')

@section('title', 'Alusim')

@section('styles')
        @vite(['resources/css/home.css'])
@endsection

@section('content')
        <main class="main">
            <section class="banner1">
                <picture>
                    <source media="(min-width: 1200px)" srcset="{{ Vite::asset('resources/assets/img/apresentacao/desktop.webp') }}">
                    <source media="(min-width: 992px)" srcset="{{ Vite::asset('resources/assets/img/apresentacao/laptop.webp') }}">
                    <source media="(min-width: 768px)" srcset="{{ Vite::asset('resources/assets/img/apresentacao/tablet.webp') }}">
                    <img src="{{ Vite::asset('resources/assets/img/apresentacao/mobile.webp') }}" alt="Imagem de apresentação de porta janela sanfonada" class="img-banner" fetchptiority="high" width="600" height="400">

                </picture>
                <div class="texto-banner">
                    <h1>Esquadrias de alumínio <br> sob medida</h1>
                    <p>Qualidade, durabilidade e acabamento profissional.</p>
                    <div>
                        <a href="{{ route('mensagem')}}" class="link-orcamento">Solicitar orçamento</a>
                        <a href="https://wa.me/5551995944991?text=Ol%C3%A1!%20Gostaria%20de%20solicitar%20um%20or%C3%A7amento." class="link-orcamento link-secundario" target="_blank" rel="noopener">Falar no WhatsApp</a>
                    </div>
                </div>
            </section>
            <section class="banner2">
                <div class="container-skill">
                    <img src="{{ Vite::asset('resources/assets/img/icones/precisao-ajustado.webp')}}" alt="Icone 'Sob medida'">
                    <h2>Sob medida</h2>
                    <p>Fabricação própria e sob medida</p>
                </div>
                <div class="container-skill">
                    <img src="{{ Vite::asset('resources/assets/img/icones/profissionais-ajustado.webp')}}" alt="Icone 'Instalação profissional'">
                    <h2>Instalação profissional</h2>
                </div>
                <div class="container-skill">
                    <img src="{{ Vite::asset('resources/assets/img/icones/acabamento-ajustado.webp')}}" alt="Icone 'Acabamento premium'">
                    <h2>Acabamento premium</h2>
                </div>
                <div class="container-skill">
                    <img src="{{ Vite::asset('resources/assets/img/icones/experiancia-ajustado.webp')}}" alt="Icone 'Anos de experiência'">
                    <h2>Anos de experiência</h2>
                </div>
            </section>
            <section class="banner3">
                <h1>Serviços</h1>
                <div class="container-servicos">
                    <div class="card-servico">
                        <img src="{{ Vite::asset('resources/assets/img/img-home/jc4f.webp') }}" alt="Imagem de janela de correr 4 folhas">
                        <div class="card-text">
                            <h2>Janelas de correr</h2>
                            <p>Janelas de correr com diversas opções de cores, folhas e modelos.</p>
                        </div>
                    </div>
                    <div class="card-servico">
                        <img src="{{ Vite::asset('resources/assets/img/img-home/pj3f.webp') }}" alt="Imagem de porta de correr 3 folhas sequencial">
                        <div class="card-text">
                            <h2>Porta janela de correr</h2>
                            <p>Porta janela dos mais diversos modelos e tamanhos.</p>
                        </div>
                    </div>
                    <div class="card-servico">
                        <img src="{{ Vite::asset('resources/assets/img/img-home/fachada.webp') }}" alt="Imagem de uma fachada">
                        <div class="card-text">
                            <h2>Fachada</h2>
                            <p>Fachadas trazem sofisticação e  estilo para sua obra.</p>
                        </div>
                    </div>
                    <div class="card-servico">
                        <img src="{{ Vite::asset('resources/assets/img/img-home/mx.webp') }}" alt="Imagem de uma maxim-ar">
                        <div class="card-text">
                            <h2>Maxim-ar</h2>
                            <p>Janelas para banheiro e áreas de serviço, trazendo praticidade e segurança.</p>
                        </div>
                    </div>
                    <div class="card-servico">
                        <img src="{{ Vite::asset('resources/assets/img/img-home/portao.webp') }}" alt="Imagem de um portão">
                        <div class="card-text">
                            <h2>Portões</h2>
                            <p>Os mais diversos modelos de portões, do basculante ao de correr.</p>
                        </div>
                    </div>
                    <div class="card-servico">
                        <img src="{{ Vite::asset('resources/assets/img/img-home/gp.webp') }}" alt="Imagem de uma guarda corpo de vidro temperado">
                        <div class="card-text">
                            <h2>Guarda corpo</h2>
                            <p>Além de segurança, os guarda corpos possuem relevância quando se fala em estética residencial.</p>
                        </div>
                    </div>
                </div>
                <a href="{{ route('mensagem') }}" class="link-orcamento">Enviar mensagem</a>
            </section>
        </main>
@endsection