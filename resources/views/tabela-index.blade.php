
    @extends('layout')
   
    @section('content')
    <migalhas paginaanterior="Home" paginaatual="Tabela"></migalhas><br><br>
    <tabela :titulos="['Endereço', 'Bairro', 'Cidade', 'Modalidade', 'Preço', 'Avaliação', 'Porcetagem']"
    :itens="{{ $listaImoveis }}"
    ></tabela><br><br>
      
    @endsection
