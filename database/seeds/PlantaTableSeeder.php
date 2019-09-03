<?php

use Illuminate\Database\Seeder;
use App\Planta;
use App\Bioma;
use App\Estado;
use Faker\Provider\Image;
use App\Imagem;

class PlantaTableSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
   
	//ACURI
	$planta = Planta::create(
	//https://ferramentas.sibbr.gov.br/ficha/bin/view/especie/attalea_phalerata
	//http://reflora.jbrj.gov.br/reflora/listaBrasil/FichaPublicaTaxonUC/FichaPublicaTaxonUC.do?id=FB15684
	//http://www.almanaquedocampo.com.br/verbete/exibir/414   //https://www.webambiente.gov.br/
      [
        'nome_popular' => 'acuri,aricuri,bacuri,uricuri,uricurí vermelho',
        'autoria' => 'Mart. ex Spreng.',
        'nome_cientifico' => 'Attalea phalerata',
        'e_panc' => 1,
        'ep_floracao_inicio' => 'ago',
        'ep_floracao_fim' => 'set',
        'grau_ameaca_iucn' => 'lc',
        'descricao' => 'Attalea phalerata Mart. ex Spreng, conhecido popularmente como acuri, urucuri, ouricuri, aricuri, alicuri, aricuí, iricuri, uricuri, licuri, urucuriiba, licurizeiro e nicuri, é uma palmeira que atinge mais de trinta metros de altura. É encontrada no Brasil, Bolívia, Paraguai e Peru.',
      ]
    );
    $planta->biomas()->attach(Bioma::whereIn('cod', ['pampa', 'pantanal', 'cerrado'])->get('id')->pluck('id')->toArray());
    $planta->dist_geografica()->attach(Estado::whereIn('sigla', ['AC', 'DF', 'GO', 'MG', 'MS', 'MT', 'PA', 'RO', 'SP', 'TO'])->get('id')->pluck('id')->toArray());
	Imagem::create(['url' => 'https://uploaddeimagens.com.br/images/002/295/780/full/imagem01.jpg', 'autor' => 'Renata C. Martins', 'fonte' => 'Sistema de Informação sobre a Biodiversidade Brasileira (SiBBr)', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://uploaddeimagens.com.br/images/002/295/811/full/imagem02.jpg', 'autor' => 'Renata C. Martins', 'fonte' => 'Sistema de Informação sobre a Biodiversidade Brasileira (SiBBr)', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://uploaddeimagens.com.br/images/002/295/815/full/imagem03.jpg', 'autor' => 'Renata C. Martins', 'fonte' => 'Sistema de Informação sobre a Biodiversidade Brasileira (SiBBr)', 'planta_id' => $planta->id]);
    Imagem::create(['url' => 'https://uploaddeimagens.com.br/images/002/295/817/full/imagem04.jpg', 'autor' => 'Renata C. Martins', 'fonte' => 'Sistema de Informação sobre a Biodiversidade Brasileira (SiBBr)', 'planta_id' => $planta->id]);
    Imagem::create(['url' => 'https://uploaddeimagens.com.br/images/002/295/819/full/imagem05.jpg', 'autor' => 'Renata C. Martins', 'fonte' => 'Sistema de Informação sobre a Biodiversidade Brasileira (SiBBr)', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://uploaddeimagens.com.br/images/002/295/821/full/imagem06.jpg', 'autor' => 'Renata C. Martins', 'fonte' => 'Sistema de Informação sobre a Biodiversidade Brasileira (SiBBr)', 'planta_id' => $planta->id]);


	//AMBURANA
    $planta = Planta::create(
      [
        'nome_popular' => 'cumaru,amburana,amburana-de-cheiro,angelim,baru',
        'autoria' => '(Allemão) A.C.Sm',
        'nome_cientifico' => 'Amburana cearensis',
        'e_panc' => 0,
        'ep_floracao_inicio' => 'mar',
        'ep_floracao_fim' => 'jun',
        'grau_ameaca_iucn' => 'nt',
        'descricao' => '',
      ]
    );
    $planta->biomas()->attach(Bioma::whereIn('cod', ['pampa', 'pantanal', 'cerrado'])->get('id')->pluck('id')->toArray());
    $planta->dist_geografica()->attach(Estado::whereIn('sigla', ['AL', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MG', 'MS', 'PB', 'PE', 'PI', 'RN', 'SE', 'SP', 'TO'])->get('id')->pluck('id')->toArray());
	Imagem::create(['url' => 'https://i.ibb.co/YbhxGWb/Folha.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/M6fgv6c/fruto.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/KjwZ7bD/tronco.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/stT8LQK/semente.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);


	//ANGICO
    $planta = Planta::create(
      [
        'nome_popular' => 'angico-branco,farinha-secamulateira,frango-assado,canela-de-corvo,coxa-de-frango,farinha-seca-de-mico,manga-do-mato,pé-de-frango',
        'autoria' => '(Spruce ex Benth.) Burkart.',
        'nome_cientifico' => 'Albizia niopoides',
        'e_panc' => 0,
        'ep_floracao_inicio' => 'out',
        'ep_floracao_fim' => 'jan',
        'grau_ameaca_iucn' => 'lc',
        'descricao' => '',
      ]
    );
    $planta->biomas()->attach(Bioma::whereIn('cod', ['cerrado', 'pantanal', 'cerrado'])->get('id')->pluck('id')->toArray());
    $planta->dist_geografica()->attach(Estado::whereIn('sigla', ['AM', 'BA', 'ES', 'GO', 'MA', 'MG', 'MS', 'MT', 'PA', 'PE', 'PR', 'RS', 'SC', 'SP'])->get('id')->pluck('id')->toArray());
	Imagem::create(['url' => 'https://i.ibb.co/vPkc2L3/muda.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/TvZ2r1N/fruto.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/k3XCNtc/img1.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/NscRKvh/img2.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/YcLqMQ7/plantula.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
  

	//AROEIRA
    $planta = Planta::create(
      [
        'nome_popular' => 'aroeira,urundeúva,aroeira-do-sertão,aroeira-do-campo,aroeira-da-serra,urindeúva,arindeúva, arendiúva,aroeira-preta',
        'autoria' => 'Allemão.',
        'nome_cientifico' => 'Myracrodruon urundeuva',
        'e_panc' => 0,
        'ep_floracao_inicio' => 'ago',
        'ep_floracao_fim' => 'set',
        'grau_ameaca_iucn' => 'lc',
        'descricao' => '',
      ]
    );
    $planta->biomas()->attach(Bioma::whereIn('cod', ['caatinga', 'mata_atlantica', 'pantanal', 'cerrado'])->get('id')->pluck('id')->toArray());
    $planta->dist_geografica()->attach(Estado::whereIn('sigla', ['AC', 'DF', 'GO', 'MG', 'MS', 'MT', 'PA', 'RO', 'SP', 'TO'])->get('id')->pluck('id')->toArray());
	Imagem::create(['url' => 'https://i.ibb.co/jrZcvg6/individuo.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/BV6BC2N/fruto.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/RQNTCLC/tronco.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/YDzjDKh/muda.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/F5F8C7p/semente.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/zNY8L2R/flor.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);

	
	//CAJA
    $planta = Planta::create(
      [
        'nome_popular' => 'taperebá,cajá,cajazeira,taperebá-de-anta,taperebá-de-veado,cajazeira-brava,cajá-da-mata,acaiá,caiá,cajá-miúdo,cajazeiro-miúdo,cajarana,cajá-mirim,cajá-pequeno',
        'autoria' => 'L.',
        'nome_cientifico' => 'Spondias mombin',
        'e_panc' => 1,
        'ep_floracao_inicio' => 'ago',
        'ep_floracao_fim' => 'set',
        'grau_ameaca_iucn' => 'lc',
        'descricao' => '',
      ]
    );
    $planta->biomas()->attach(Bioma::whereIn('cod', ['amazonia', 'cerrado','mata_atlantica','pantanal', 'cerrado'])->get('id')->pluck('id')->toArray());
    $planta->dist_geografica()->attach(Estado::whereIn('sigla', ['AC', 'AL', 'AM', 'AP', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA','MS','MT','PA','PB','PI','RJ','RN','RO','RS','SP','TO'])->get('id')->pluck('id')->toArray());
	Imagem::create(['url' => 'https://i.ibb.co/wh2Dwhg/muda.jpg', 'autor' => 'Marcelo Kuhlmann', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/TwhPfHS/fruto.jpg', 'autor' => 'Iria Ishii', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/5r3yMcP/tronco.jpg', 'autor' => 'Iria Ishii', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/N733G5y/individuo.jpg', 'autor' => 'Iria Ishii', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/NLkBpc9/folha.jpg', 'autor' => 'Iria Ishii', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/NyGQHxr/flor.jpg', 'autor' => 'Iria Ishii', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
    
	
	//CAJU
    $planta = Planta::create(
      [
        'nome_popular' => 'cajuzinho,caju,caju-do-cerrado,cajuzinho-do-campo,cajuí',
        'autoria' => 'A.St.-Hil.',
        'nome_cientifico' => 'Anacardium humile',
        'e_panc' => 0,
        'ep_floracao_inicio' => 'ago',
        'ep_floracao_fim' => 'nov',
        'grau_ameaca_iucn' => 'lc',
        'descricao' => '',
      ]
    );
	$planta->biomas()->attach(Bioma::whereIn('cod',['cerrado','pantanal'])->get('id')->pluck('id')->toArray());
    $planta->dist_geografica()->attach(Estado::whereIn('sigla', ['BA', 'DF', 'GO', 'MG', 'MS', 'MT', 'PR', 'RO', 'SP', 'TO'])->get('id')->pluck('id')->toArray());
	Imagem::create(['url' => 'https://i.ibb.co/N133LJT/folha.jpg', 'autor' => 'Iria Ishii', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/YLhp4Fz/muda.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/YtKpM31/fruto.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/n1RBjfy/tronco.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/JqxGLQV/semente.jpg', 'autor' => 'Marcelo Kuhlmann', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/7Jjh4nT/flor.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
   
	
	//CARANDA
    $planta = Planta::create(
      [
        'nome_popular' => 'carandá,carandeiro,carandaí',
        'autoria' => 'Morong ex Morong & Britton.',
        'nome_cientifico' => 'Copernicia alba',
        'e_panc' => 0,
        'ep_floracao_inicio' => 'jul',
        'ep_floracao_fim' => 'dez',
        'grau_ameaca_iucn' => 'ne',
        'descricao' => '',
      ]
    );
    $planta->biomas()->attach(Bioma::whereIn('cod', [ 'pantanal'])->get('id')->pluck('id')->toArray());
	$planta->dist_geografica()->attach(Estado::whereIn('sigla',['MS','MT'])->get('id')->pluck('id')->toArray());
	Imagem::create(['url' => 'https://i.ibb.co/RhbGyQF/muda.jpg', 'autor' => 'Catia Urbanetz', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/JK7RXzs/fruto.jpg', 'autor' => 'Catia Urbanetz', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/8NBBKw5/folha.jpg', 'autor' => 'Catia Urbanetz', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/0F1SYpV/semente.jpg', 'autor' => 'Catia Urbanetz', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/Bfcnn0m/individuo.jpg', 'autor' => 'Catia Urbanetz', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);

	
	//GONCALO
    $planta = Planta::create(
      [
        'nome_popular' => 'jequira,pau-gonçalves,ponçalave,gonçalo-alves,aroeira,gonçalo,arueira-brava,arueira-da-mata,gonçaleiro,garapeiro,aroeira-do-campo,gonçalves,chibatã,ubatã,sete-cascas,birito,aroeira-mole,aroeira-vermelha,angelim',
        'autoria' => 'Schott.',
        'nome_cientifico' => 'Astronium fraxinifolium',
        'e_panc' => 1,
        'ep_floracao_inicio' => 'jul',
        'ep_floracao_fim' => 'set',
        'grau_ameaca_iucn' => 'lc',
        'descricao' =>'',
      ]
    );
    $planta->biomas()->attach(Bioma::whereIn('cod', ['cerrado', 'pantanal', 'mata_atlantica'])->get('id')->pluck('id')->toArray());
    $planta->dist_geografica()->attach(Estado::whereIn('sigla', ['AL', 'AP','BA','CE', 'DF','GO','MA','MG','MS', 'MT', 'PA', 'PB','PI','RJ','RN', 'SP', 'TO'])->get('id')->pluck('id')->toArray());
	Imagem::create(['url' => 'https://i.ibb.co/p2Gy7Dy/folha.jpg', 'autor' => 'Manoel Cláudio', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/SQgRYX9/fruto.jpg', 'autor' => 'Roberto Ogata', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/wQtvsLb/tronco.jpg', 'autor' => 'Manoel Cláudio', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/YtMKVfQ/plantula.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/JHKyPYb/muda.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/Bcwc88w/flor.jpg', 'autor' => 'Manoel Cláudio', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);


	//IPE-AMARELO
    $planta = Planta::create(
      [
        'nome_popular' => 'ipê-caraíba,caraíba,caraíba-do-cerrado,carobeira,claraíba,crabeira,caraúba,ipê-do-cerrado,carnaúba,ipê,paratudo,piúva-amarela,pratudinho,craibeira,para-tudo-do-campo,craíba,ipê-do-campo,pau-d’arco-do-campo,ipê-amarelo-do-cerrado',
        'autoria' => '(Silva Manso) Benth. & Hook. F ex S. Moore',
        'nome_cientifico' => 'Tabebuiua aurea',
        'e_panc' => 0,
        'ep_floracao_inicio' => 'ago',
        'ep_floracao_fim' => 'out',
        'grau_ameaca_iucn' => 'ne',
        'descricao' => '',
      ]
    );
    $planta->biomas()->attach(Bioma::whereIn('cod', ['caatinga', 'cerrado', 'pantanal'])->get('id')->pluck('id')->toArray());
    $planta->dist_geografica()->attach(Estado::whereIn('sigla', ['AL', 'AM', 'AP', 'BA', 'CE', 'DF', 'GO', 'MA', 'MG', 'MS', 'MT', 'PB', 'PE', 'PI', 'PR', 'RN', 'SE', 'SP', 'TO'])->get('id')->pluck('id')->toArray());
	Imagem::create(['url' => 'https://i.ibb.co/X3Fcv0p/individuo.jpg', 'autor' => 'Iria Ishii', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/ZWqwD5J/fruto.jpg', 'autor' => 'Iria Ishii', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/jRvMrJV/plantula.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/0QFBWC6/flor.jpg', 'autor' => 'Iria Ishii', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/Tw8bdGy/muda.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/7tvRCSb/semente.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
   

	//IPE-BRANCO
    $planta = Planta::create(
      [
        'nome_popular' => 'ipê-branco,piuxinga,piruxinga,pertinga,piúva-branca,ipê-do-cerrado',
        'autoria' => '(Ridl.) Sandwith',
        'nome_cientifico' => 'Tabebuia roseoalba',
        'e_panc' => 0,
        'ep_floracao_inicio' => 'ago',
        'ep_floracao_fim' => 'dez',
        'grau_ameaca_iucn' => 'ne',
        'descricao' => '',
      ]
    );
    $planta->biomas()->attach(Bioma::whereIn('cod', ['mata_atlantica', 'pantanal', 'cerrado'])->get('id')->pluck('id')->toArray());
    $planta->dist_geografica()->attach(Estado::whereIn('sigla', ['GO', 'MG', 'MS', 'SP'])->get('id')->pluck('id')->toArray());
	Imagem::create(['url' => 'https://i.ibb.co/7yMm7Ct/individuo.jpg', 'autor' => 'Agroicone-ISA-TNC-Baobá', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/CVqTGH8/fruto.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/B4RpH7V/tronco.jpg', 'autor' => 'Agroicone-ISA-TNC-Baobá', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/FVt6TbD/fruto2.jpg', 'autor' => 'Agroicone-ISA-TNC-Baobá', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/YdnDMjC/flor.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/4VTYT1B/muda.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);


	//IPE-VERDE
    $planta = Planta::create(
      [
        'nome_popular' => 'ipê-verde,caroba-de-flor-verde',
        'autoria' => '(Mart) Mart',
        'nome_cientifico' => 'Cybistax antisyphilitica',
        'e_panc' => 0,
        'ep_floracao_inicio' => 'ago',
        'ep_floracao_fim' => 'mar',
        'grau_ameaca_iucn' => 'ne',
        'descricao' => '',
      ]
    );
    $planta->biomas()->attach(Bioma::whereIn('cod', ['mata_atlantica', 'pantanal', 'cerrado'])->get('id')->pluck('id')->toArray());
    $planta->dist_geografica()->attach(Estado::whereIn('sigla', ['BA', 'CE',  'DF', 'ES', 'GO', 'MA', 'MG', 'MS', 'MT', 'PA', 'PI', 'PR', 'RJ', 'RS', 'SC', 'SP', 'TO'])->get('id')->pluck('id')->toArray());
	Imagem::create(['url' => 'https://i.ibb.co/Bf9DnBh/fruto.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/VwkZBH3/tronco.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/4mfMCvw/semente.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/cXXTz6P/plantula.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/W23KXSj/flor.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/KLgk3Jn/muda.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
   

	//LOURO PRETO
    $planta = Planta::create(
      [
        'nome_popular' => 'peteribi,claraíba,louro-preto,piquana-negra,claraibeira,louro-de-mato-grosso,louro-branco',
        'autoria' => '(Mart.) A.DC',
        'nome_cientifico' => 'Cordia glabrata',
        'e_panc' => 0,
        'ep_floracao_inicio' => 'ago',
        'ep_floracao_fim' => 'out',
        'grau_ameaca_iucn' => 'ne',
        'descricao' => '',
      ]
    );
    $planta->biomas()->attach(Bioma::whereIn('cod', ['pantanal', 'cerrado'])->get('id')->pluck('id')->toArray());
    $planta->dist_geografica()->attach(Estado::whereIn('sigla', ['BA', 'GO', 'MG', 'MS', 'MT', 'PA', 'PI'])->get('id')->pluck('id')->toArray());
	Imagem::create(['url' => 'https://i.ibb.co/bN4HZ9b/individuo.jpg', 'autor' => 'Iria Ishii', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/XVk2YVh/Fruto.jpg', 'autor' => 'Catia Urbanetz', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/hKB5sxv/tronco.jpg', 'autor' => 'Iria Ishii', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/8P9fKKm/folha.jpg', 'autor' => 'Suzana Salis', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/qppzC1p/flor.jpg', 'autor' => 'Iria Ishii', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/7z4KLTY/muda.jpg', 'autor' => 'Catia Urbanetz', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
   

	//PASSARINHO
    $planta = Planta::create(
      [
        'nome_popular' => 'pau-amendoim,amendoim-bravo,amendoim,madeira-nova,viraró,pau-de-fava,óleo-branco,madeira-nova,carne-de-vaca,bálsamo,bassourinha,sucupira,vilão,bálsamo,bálsamo-do-pantanal,bálsamo-bravo, passarinho',
        'autoria' => 'Tul',
        'nome_cientifico' => 'Pterogyne nitens',
        'e_panc' => 0,
        'ep_floracao_inicio' => 'fev',
        'ep_floracao_fim' => 'ago',
        'grau_ameaca_iucn' => 'lc',
        'descricao' => '',
      ]
    );
    $planta->biomas()->attach(Bioma::whereIn('cod', ['mata_atlantica', 'pantanal', 'cerrado'])->get('id')->pluck('id')->toArray());
    $planta->dist_geografica()->attach(Estado::whereIn('sigla', ['AL', 'AM', 'BA', 'CE', 'ES', 'MA', 'MG', 'MS', 'MT', 'PB', 'PR', 'RJ', 'RN', 'SP'])->get('id')->pluck('id')->toArray());
	Imagem::create(['url' => 'https://i.ibb.co/5hzG6N9/individuo.jpg', 'autor' => 'Agroicone-ISA-TNC-Baobá', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/gjzBndg/fruto.jpg', 'autor' => 'Agroicone-ISA-TNC-Baobá', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/yyNBJSb/tronco.jpg', 'autor' => 'Agroicone-ISA-TNC-Baobá', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
    
	
	//PATA-DE-VACA
    $planta = Planta::create(
      [
        'nome_popular' => 'pé-de-boi,pata-de-vaca,pé-de-vaca,unha-de-vaca',
        'autoria' => '(Bong.) Steud.',
        'nome_cientifico' => 'Bauhinia rufa',
        'e_panc' => 0,
        'ep_floracao_inicio' => 'mai',
        'ep_floracao_fim' => 'nov',
        'grau_ameaca_iucn' => 'ne',
        'descricao' => '',
      ]
    );
    $planta->biomas()->attach(Bioma::whereIn('cod', ['pantanal', 'cerrado'])->get('id')->pluck('id')->toArray());
    $planta->dist_geografica()->attach(Estado::whereIn('sigla', ['AC', 'AM', 'DF', 'GO', 'MA', 'MG', 'MS', 'MT', 'PA', 'RO', 'SP', 'TO'])->get('id')->pluck('id')->toArray());
	Imagem::create(['url' => 'https://i.ibb.co/h9sd3nD/flor.jpg', 'autor' => 'Marcelo Kuhlmann', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
    
	
	//SUCUPIRA
    $planta = Planta::create(
      [
        'nome_popular' => 'sucupira-preta,sucupira-do-campo,sepifirme,paricarana,sucupira,sucupira-mirim,sucupira-verdadeira,sapupura-do-campo,sucupira-amarela,sucupira-branca,sucupira-parda,sucupira-roxa,sucupiruçu-branco,sucupira-do-cerrado,macanaíba,macanaíba-parda,macanaíba-pele-de-sapo',
        'autoria' => 'Kunth',
        'nome_cientifico' => 'Bowdichia virgilioides',
        'e_panc' => 0,
        'ep_floracao_inicio' => 'jun',
        'ep_floracao_fim' => 'ago',
        'grau_ameaca_iucn' => 'nt',
        'descricao' => '',
      ]
    );
    $planta->biomas()->attach(Bioma::whereIn('cod', ['pantanal', 'cerrado'])->get('id')->pluck('id')->toArray());
    $planta->dist_geografica()->attach(Estado::whereIn('sigla', ['AL', 'AM', 'AP', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MG', 'MS', 'MT', 'PA', 'PB', 'PE', 'PI', 'PR', 'RJ', 'RN', 'RO', 'RR', 'SE', 'SP', 'TO'])->get('id')->pluck('id')->toArray());
    Imagem::create(['url' => 'https://i.ibb.co/1qPpcpc/individuo.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
    Imagem::create(['url' => 'https://i.ibb.co/zmjgH2F/fruto.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
    Imagem::create(['url' => 'https://i.ibb.co/t4C0kF2/semente.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
    Imagem::create(['url' => 'https://i.ibb.co/sWtpB9g/flor.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/R22Vhvc/muda.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	
	
	//TARUMÃ
    $planta = Planta::create(
      [
        'nome_popular' => 'tarumã,azeitona do mato,tarumã do brejo,pau de flor,tarumeiro',
        'autoria' => 'Bertero ex Spreng.',
        'nome_cientifico' => 'Vitex cymosa',
        'e_panc' => 0,
        'ep_floracao_inicio' => 'set',
        'ep_floracao_fim' => 'nov',
        'grau_ameaca_iucn' => 'ne',
        'descricao' => '',
      ]
    );
    $planta->biomas()->attach(Bioma::whereIn('cod', ['pantanal'])->get('id')->pluck('id')->toArray());
    $planta->dist_geografica()->attach(Estado::whereIn('sigla', ['AM', 'BA', 'DF', 'MA', 'MG', 'MS', 'MT', 'PA', 'PI', 'PR', 'RO', 'SP'])->get('id')->pluck('id')->toArray());
	Imagem::create(['url' => 'https://i.ibb.co/C9SB5Xf/individuo.jpg', 'autor' => 'Iria Ishii', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/jbn34Vb/fruto.jpg', 'autor' => 'Catia Urbanetz', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/Ldddtmk/flor.jpg', 'autor' => 'Iria Ishii', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
	Imagem::create(['url' => 'https://i.ibb.co/R6TkxqV/muda.jpg', 'autor' => 'Catia Urbanetz', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
   
   
   //XIMBUVA
    $planta = Planta::create(
      [
        'nome_popular' => 'tamboril,timburi,timbaúva,orelha-de-negro,tambori,pau-de-sabão,timbaíba,orelha-de-preto,ximbó,ximbuva,ximbuveira,arariba,arvore-das-patacas,cambanambi,chimbo,chimbuva,flor-de-algodao,morango,orelha-de-macaco,orelha-de-onca,tamboi,tambuvi,timbouba,timbuva,orelha-de-preto,pacara,timboril,ximbiuva,tambori,tamboril,timbauva-branca,timbaúva-preta',
        'autoria' => '(Vell.) Morong',
        'nome_cientifico' => 'Enterolobium contortisiliquum',
        'e_panc' => 0,
        'ep_floracao_inicio' => 'set',
        'ep_floracao_fim' => 'nov',
        'grau_ameaca_iucn' => 'ne',
        'descricao' => '',
      ]
    );
    $planta->biomas()->attach(Bioma::whereIn('cod', ['caatinga', 'mata_atlantica', 'pampa', 'pantanal', 'cerrado'])->get('id')->pluck('id')->toArray());
    $planta->dist_geografica()->attach(Estado::whereIn('sigla', ['AC', 'DF', 'GO', 'MG', 'MS', 'MT', 'PA', 'RO', 'SP', 'TO'])->get('id')->pluck('id')->toArray());
	
	
	//BOCAIUVA
    $planta = Planta::create(
      [
        'nome_popular' => 'bocaiuva,macaúba,coco-babão,coco-babosa,coco-macaúba,coqueiro-de-espinho,macajuba,macaibeira,palmeira-macaúva,coquinho',
        'autoria' => 'Mart. ex Spreng.',
        'nome_cientifico' => 'Acrocomia aculeata',
        'e_panc' => 0,
        'ep_floracao_inicio' => 'out',
        'ep_floracao_fim' => 'fev',
        'grau_ameaca_iucn' => 'ne',
        'descricao' => '',
      ]
    );
    $planta->biomas()->attach(Bioma::whereIn('cod', ['amozonia', 'cerrado',  'pantanal', 'cerrado'])->get('id')->pluck('id')->toArray());
    $planta->dist_geografica()->attach(Estado::whereIn('sigla', ['AM',' CE', 'DF', 'GO', 'MA', 'MG', 'MS', 'MT', 'PA', 'PI', 'PE', 'PR', 'RJ', 'RR', 'SP', 'TO'])->get('id')->pluck('id')->toArray());
	
	
	//CAQUI DO CERRADO
    $planta = Planta::create(
      [
        'nome_popular' => 'caquizeiro-do-mato,fruta-de-boi,fruta-de-jacu-fêmea,caqui-do-cerrado,bacupari-bravo,olho-de-boi',
        'autoria' => ' A.DC.',
        'nome_cientifico' => 'Diospyros hispida',
        'e_panc' => 0,
        'ep_floracao_inicio' => 'ago',
        'ep_floracao_fim' => 'nov',
        'grau_ameaca_iucn' => 'lc',
        'descricao' => '',
      ]
    );
    $planta->biomas()->attach(Bioma::whereIn('cod',['cerrado','pantanal'])->get('id')->pluck('id')->toArray());
    $planta->dist_geografica()->attach(Estado::whereIn('sigla', ['AL', 'CE', 'DF', 'ES', 'GO','MA','MG','MS', 'MT', 'PA', 'PB','PI','PR','RJ','RO', 'SP', 'TO'])->get('id')->pluck('id')->toArray());
	
	
	//JENIPAPO
    $planta = Planta::create(
      [
        'nome_popular' => 'jenipapo,jenipapeiro',
        'autoria' => 'L.',
        'nome_cientifico' => 'Genipa americana',
        'e_panc' => 0,
        'ep_floracao_inicio' => 'set',
        'ep_floracao_fim' => 'dez',
        'grau_ameaca_iucn' => 'lc',
        'descricao' => '',
      ]
    );
    $planta->biomas()->attach(Bioma::whereIn('cod', ['amazônia', 'caatinga', 'mata_atlantica', 'pantanal', 'cerrado'])->get('id')->pluck('id')->toArray());
    $planta->dist_geografica()->attach(Estado::whereIn('sigla', ['AC', 'AL', 'AM', 'AP', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MG', 'MS', 'MT', 'PA', 'PB', 'PE', 'PI', 'PR', 'RJ', 'RN', 'RO', 'RR', 'RS', 'SC', 'SE', 'SP', 'TO'])->get('id')->pluck('id')->toArray());
 }
}