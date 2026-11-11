@extends('base')

@section('title', 'Alusim')

@section('styles')
        @vite(['resources/css/contact.css'])
@endsection

@section('content')
        <main class="main">
            <section class="container">
                <h1>Entre em contato conosco</h1>
                <h2>Para entrar em contato conosco, acesse os links abaixo para nos enviar uma mensagem, ou se preferir, confira a nossa localização para nos visitar pessoalmente.</h2>
                <section class="container-contatos">
                    <div class="card-contato">
                        <img src="{{ Vite::asset('resources/assets/img/icones/icone-fone.webp') }}" alt="icone telefone" class="">
                        <div class="text-card">
                            <h2>Telefone:</h2>
                            <a href="https://wa.me/5551995944991" target="_blank" class="link">(51) 99594-4991</a>
                        </div>
                    </div>
                    <div class="card-contato">
                        <img src="{{ Vite::asset('resources/assets/img/icones/icone-email.webp') }}" alt="icone e-mail" class="">
                        <div class="text-card">
                            <h2>E-mail:</h2>
                            <a href="mailto:alusimesquadrias@gmail.com" target="_blank" class="link">alusimesquadrias@gmail.com</a>
                        </div>
                    </div>
                    <div  class="card-contato">
                        <img src="{{ Vite::asset('resources/assets/img/icones/icone-location.webp') }}" alt="icone localização" class="">
                        <div class="text-card">
                            <h2>Localização</h2>
                            <a href="https://www.google.com/maps/place/Alusim+Esquadrias/@-29.4987323,-51.3538944,17.6z/data=!4m6!3m5!1s0x951bfff8fdbbc1f7:0x344e646a0ed3b3c1!8m2!3d-29.4986158!4d-51.3544233!16s%2Fg%2F11c2l13pcm?entry=ttu&g_ep=EgoyMDI1MTIwMi4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="link">Rua Irmão Weibert, 144 - Centro - Bom Princípio -RS</a>
                        </div>
                    </div>
                </section>
            </section>
        </main>
@endsection