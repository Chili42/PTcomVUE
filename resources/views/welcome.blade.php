
    @extends('layout')

    @section('content')
    
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <painel titulo="Dashboard">
                    <div class="row">
                        <div class="col-md-4">
                            <caixa-readme qtd="Leia-me" titulo="(Readme)"  cor="#f5c156" icone="fas fa-book-reader"></caixa-readme>
                            <modal nome="meuModal" titulo="AVISO"></modal>
                        </div>
                        <div class="col-md-4">
                            <caixa qtd="10" titulo="Tabela Exemplo" url="/tabela-exemplo" cor="#3ea1d6" icone="fas fa-bars"></caixa>
                        </div>
                        <div class="col-md-4">
                            <caixa qtd="2074" titulo="Tabela Json" url="/tabela" cor="#35ca20" icone="fas fa-chart-pie"></caixa>
                        </div>
                    </div>
                    </painel>
                </div>
            </div>
        </div>

    @endsection
