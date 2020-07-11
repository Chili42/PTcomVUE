
    @extends('layout')

    @section('content')
    <tabela :titulos="['Endereço', 'Bairro', 'Cidade', 'Modalidade', 'Preço', 'Valor de Avaliacao', 'Desconto']"
    :itens="[['casa', '2', '3', '4', '5', '6', '7'],['predio', '2', '3', '4', 'oi', '6', '7'],['1', '2', '3', 'iou', '5', '6', '7']]"
    ></tabela>
      
    @endsection