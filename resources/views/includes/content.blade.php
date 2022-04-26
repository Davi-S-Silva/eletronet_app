@extends('main')
@section('home')
    <div id="servicos">
        <h1>servicos</h1>
    </div>
    <div id="planos">
        @for ($i = 0; $i < 6; $i++)
            <section class="planos col-3">
                <header>
                    <p> 60 </p>
                    <p> mega </p>
                </header>
                <article>
                    <p>

                        por apenas
                        R$ 55,00/mes
                        instalacao 50,00 *
                        Roteador
                        100% fibra optica
                    </p>

                    <a href="">Assinar</a>

                </article>

            </section>
        @endfor
    </div>
@endsection
