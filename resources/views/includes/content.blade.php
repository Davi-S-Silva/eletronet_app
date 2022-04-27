@extends('main')
@section('home')
    <div id="servicos">
        {{-- <h1>servicos</h1> --}}
    </div>
    <div id="planos">
        <figure>
            <img src="{{ asset('images/banner_1.jpg') }}" alt="">
        </figure>
        @for ($i = 0; $i < 6; $i++)
            <section class="planos col-12 col-sm-3 col-md-3 col-lg-3">
                <header>
                    <p> 60 </p>
                    <p> mega </p>
                </header>
                <article>
                    <p>
                        Por apenas
                        R$55,00/mes
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
@endsection
