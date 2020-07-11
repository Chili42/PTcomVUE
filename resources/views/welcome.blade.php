
    @extends('layout')

    @section('content')
    <div id="app">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <painel titulo="Dashboard">
                    
                    <div class="row">
                        <div class="col-md-4">
                            <caixa qtd="80" titulo="Readme" url="/readme" cor="#f5c156" icone="fas fa-book-reader"></caixa>
                        </div>
                        <div class="col-md-4">
                            <caixa qtd="80" titulo="Tabela" url="/tabela" cor="#3ea1d6" icone="fas fa-bars"></caixa>
                        </div>
                        <div class="col-md-4">
                            <caixa qtd="80" titulo="Gráfico" url="#" cor="#35ca20" icone="fas fa-chart-pie"></caixa>
                        </div>
                    </div>
                    </painel>
                </div>
            </div>
        </div>
    </div>
 
    <script src="{{asset('js/app.js')}}"></script>

    @endsection
 