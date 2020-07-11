
    @extends('layout')

    @section('content')
    <tabela :titulos="['Endereço', 'Bairro', 'Cidade', 'Modalidade', 'Preço', 'Valor de Avaliacao', 'Desconto']"
    :itens="[['casa', '2', '3', '4', '1', '6', '7'],['predio', '2', '3', '4', '2', '6', '7'],['1', '2', '3', 'iou', '3', '6', '7']]"
    ordem="desc" ordemcol="4"
    ></tabela>
      
    @endsection