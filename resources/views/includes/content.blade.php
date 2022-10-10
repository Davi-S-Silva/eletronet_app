@extends('main')
@section('home')
    <div id="servicos">
        <div class="header">
            <div>
                <h1>Nossos Diferenciais</h1>
                <h2>Somos o provedor que mais cresce na região</h2>
            </div>
            <a href="">
                <h3><span>Vem ser</span> <span> Cliente</span></h3>
            </a>
        </div>
        <div id="ContentServicos">
            @for ($i = 0; $i < 6; $i++)
                <section class="servicos col-12 col-sm-3 col-md-3 col-lg-3">
                    <header>
                        <i class="fa fa-spinner" aria-hidden="true"></i>
                        <h3> Velocidade e Estabilidade</h3>
                        <p> Navegue nas suas redes sociais preferidas e muito mais sem interferencia de velocidade </p>
                    </header>
                    <!-- <a href="">Saiba mais...</a> -->
                </section>
            @endfor
        </div>
    </div>
    <!--servicos-->
    <div id="planos">
        <!-- <figure> <img src="{{ asset('images/banner_1.jpg') }}" alt="">  </figure> -->
        <div class="header">
            <div>
                <a href="">
                    <h3><span>Assine</span> <span>Agora</span></h3>
                </a>
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
                            <li>Instalacao R$50,00 *</li>
                            <li>Roteador</li>
                            <li>100% fibra optica</li>
                        </ul>

                        <a href="">Assinar</a>

                    </article>

                </section>
            @endfor
        </div>
    </div>
    <!--#planos-->
    <div id="PorqueContratar" class="col-12">
        <div class="header">
            <div>
                <h1>Porque contratar a Eletronet?</h1>
                <h2>Nós temos a melhor qualidade de serviço pra você!</h2>
            </div>
            <a href="">
                <h3><span>Contratar</span> <span> Serviços</span></h3>
            </a>
        </div>
        <div id="PorqueContratarContent">
            <div class="col-5">
                <article>
                    <p> A Eletronet Socorro vem trazendo diariamente para nossos clientes
                        o que há de mais novo em tecnologia, equipamentos de ultima geração,
                        links de qualidade, técnicos treinados e aptos para solução de problemas.
                        Prezamos pelo mais importante que é a satisfação de nossos clientes
                        com nossos serviços.</p>
                </article>
            </div>
            <div class="col-5">
                <ul>
                    <li>
                        <article>
                            <header>Planos que cabem no seu bolso</header>
                            <p>Planos a partir de R$50,00 mensais</p>
                        </article>
                    </li>
                    <li>
                        <article>
                            <header>Internet 100% fibra óptica</header>
                            <p>Fibra desde o provedor à sua residência</p>
                        </article>
                    </li>
                    <li>
                        <article>
                            <header>Instalação rápida</header>
                            <p>Após a chegada dos técnicos em alguns minutos já está tudo pronto. *</p>
                        </article>
                    </li>
                    <article>
                        <header>Pagamento facilitado</header>
                        <p>Pagamento via pix, crédito, débito, boleto bancário para pagamentos em bancos e aplicativos
                            bancários</p>
                    </article>
                    </li>
                    <li>
                        <article>
                            <header>Facilidade de atendimento</header>
                            <p>Atendimento via WhatsApp, Chat do Instagram ou do Site e Ligação telefônica</p>
                        </article>
                    </li>
                </ul>
            </div>
        </div><!-- PorqueContratarContent-->
    </div>
    <!--PorqueContratar-->
@endsection
