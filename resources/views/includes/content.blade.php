@extends('main')
@section('home')
    <div id="servicos">
        <div class="header">
            <div>
                <h1>Nossos Diferenciais</h1> 
                <h2>Somos o provedor que mais cresce na região</h2>
            </div>
                <a href=""><h3><span>Vem ser</span> <span> Cliente</span></h3></a>
        </div>
        <div id="ContentServicos">
        @for ($i = 0; $i < 6; $i++)
            <section class="servicos col-12 col-sm-3 col-md-3 col-lg-3">
                <header>
                    <i class="fa fa-spinner" aria-hidden="true"></i>
                    <h3>  Velocidade e Estabilidade</h3>
                    <p> Navegue nas suas redes sociais preferidas e muito mais sem interferencia de velocidade </p>
                </header>
                <!-- <a href="">Saiba mais...</a> -->
            </section>
            @endfor
        </div>
    </div>
    <div id="planos">
        <!-- <figure>
            <img src="{{ asset('images/banner_1.jpg') }}" alt="">
        </figure> -->
        <div class="header">
            <div>
                <a href=""><h3><span>Assine</span> <span>Agora</span></h3></a>
            </div>
            <div>
                <h1>Nossos Planos</h1>
                <h2>Ultra velocidade a um click de você</h2>
            </div>
        </div>
        <div id="ContentPlanos">

            @for ($i = 0; $i < 6; $i++)
            <section class="planos col-12 col-sm-3 col-md-3 col-lg-3">
                <header>
                    <p> 600 </p>
                    <p> mega </p>
                </header>
                <article>
                    <p>
                        <!-- Por apenas -->
                        <span class="valor_plano"> R$55,00</span>/mes
                    </p>
                    <ul>
                        <li>Instalacao 50,00 *</li>
                        <li>Roteador</li>
                        <li>100% fibra optica</li>
                    </ul>
                    
                    <a href="">Assinar</a>
                    
                </article>
                
            </section>
            @endfor
        </div>
    </div>
    <div id="PorqueContratar">
        gostaiaasdfaosdf
    </div>
@endsection
