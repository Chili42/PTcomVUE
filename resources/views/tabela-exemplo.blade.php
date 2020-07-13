@extends('layout') 

    @section('content')
    <migalhas paginaanterior="Home" paginaatual="Exemplo"></migalhas><br><br>
    <exemplo :titulos="['Endereço' , 'Bairro', 'Cidade', 'Modalidade', 'Preço', 'Avaliação', 'Desconto']"
    :itens="[['RUA 24, N. 526', 'SAO JOSE DO ALBERTOPOLIS', 'PANORAMA', '2º Leilão SFI', '80.104,00', '17.200,00', '53'],
    ['R. PAULO MENDES,1506', '', 'SAO CARLOS', '1º Leilão SFI', '74.700,05', '15.500,00', '51'],
    ['RUA PEDRO GONZAGA, 133', 'CIDADE ARACY ', 'CHARQUEADA', '2º Leilão SFI', '323.452,00', '239.354,48', '26'],
    ['RUA LUIZ DANIEL, N. 105','', 'ITANHAEM', 'VENDA ONLINE', '138.869,27', '93.042,42', '43'],
    ['TIMOTEO GARCIA LAMAS,CASA 2', '', 'SAO PAULO', 'VENDA DIRETA ONLINE', '863.225,28', '776.902,50', '10'],
    ['ARTUR FRANCO, N. 16', 'GUAIANAZES ', 'BOM JESUS DOS PERDOES', '1º Leilão SFI', '308.080,82', '236.985,25', '30'],
    ['R TRES, LT 04', '', 'GUAIRA', 'VENDA ONLINE', '136.123.85', '100.731,65', '26'],
    ['ESTD ÁGUA CHATA,3009', 'AGUA CHATA', 'GUARULHOS', 'VENDA ONLINE', '98.078,58', '85.328,36', '13'],
    ['ESTR MUN. DO CUPIM,S/N', '', 'IBIUNA', 'VENDA ONLINE', '111.235,78', '92.325,67', '17'],
    ['RUA BERITIBA, N. 3101', 'Centro', 'ITANHAEM', 'VENDA DIRETA ONLINE', '128.500,25', '74.530,15', '42']]"
    ></exemplo>
<br><br>    
@endsection 