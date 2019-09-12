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
  public function run(){
    //ACURI
    //https://ferramentas.sibbr.gov.br/ficha/bin/view/especie/attalea_phalerata
    //http://servicos.jbrj.gov.br/flora/search/attalea_phalerata
    //http://reflora.jbrj.gov.br/reflora/listaBrasil/FichaPublicaTaxonUC/FichaPublicaTaxonUC.do?id=FB15684
    //https://www.webambiente.gov.br/
    $planta = Planta::create(
      [
        'nome_popular' => 'acuri,aricuri,bacuri,uricuri,uricurí-vermelho',
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


  //BOCAIUVA
  //https://ferramentas.sibbr.gov.br/ficha/bin/view/especie/acrocomia_aculeata
  //http://servicos.jbrj.gov.br/flora/search/acrocomia_aculeata
  //http://reflora.jbrj.gov.br/reflora/listaBrasil/FichaPublicaTaxonUC/FichaPublicaTaxonUC.do?id=FB15663
  //https://www.webambiente.gov.br/
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
  Imagem::create(['url' => 'https://i.ibb.co/THfGKf0/01-acrocomia-aculeata-individuo.jpg', 'autor' => 'Iria Ishii', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
  Imagem::create(['url' => 'https://i.ibb.co/R2RqdVL/02-acrocomia-aculeata-tronco.jpg', 'autor' => 'Roberto Ogata', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
  Imagem::create(['url' => 'https://i.ibb.co/MBxVt4g/03-acrocomia-aculeata-muda.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
  Imagem::create(['url' => 'https://i.ibb.co/sVJBdXY/04-acrocomia-aculeata-flor.jpg', 'autor' => 'Roberto Ogata', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
  Imagem::create(['url' => 'https://i.ibb.co/R07WG7Y/05-acrocomia-aculeata-fruto.jpg', 'autor' => 'Roberto Ogata', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);
  Imagem::create(['url' => 'https://i.ibb.co/6Yrzn2V/06-acrocomia-aculeata-semente.jpg', 'autor' => 'Bruno Nonato', 'fonte' => 'Web Ambiente', 'planta_id' => $planta->id]);


  //ANGICO
  //https://ferramentas.sibbr.gov.br/ficha/bin/view/especie/albizia_niopoides
  //http://servicos.jbrj.gov.br/flora/search/albizia_niopoides
  //http://reflora.jbrj.gov.br/reflora/listaBrasil/FichaPublicaTaxonUC/FichaPublicaTaxonUC.do?id=FB82616
  //https://www.webambiente.gov.br/
    $planta = Planta::create(
      [
        'nome_popular' => 'angico-branco,farinha-seca,mulateira,frango-assado,canela-de-corvo,coxa-de-frango,farinha-seca-de-mico,manga-do-mato,pé-de-frango',
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
  //https://ferramentas.sibbr.gov.br/ficha/bin/view/especie/myracrodruon_urundeuva
  //http://servicos.jbrj.gov.br/flora/search/myracrodruon_urundeuva
  //http://reflora.jbrj.gov.br/reflora/listaBrasil/FichaPublicaTaxonUC/FichaPublicaTaxonUC.do?id=FB4394
  //https://www.webambiente.gov.br/
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


  //CARANDA
  //https://ferramentas.sibbr.gov.br/ficha/bin/view/especie/copernicia_alba
  //http://servicos.jbrj.gov.br/flora/search/copernicia_alba
  //http://reflora.jbrj.gov.br/reflora/listaBrasil/FichaPublicaTaxonUC/FichaPublicaTaxonUC.do?id=FB34032
  //https://www.webambiente.gov.br/
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


  //CAJUZINHO
  //https://ferramentas.sibbr.gov.br/ficha/bin/view/especie/anacardium_humile
  //http://servicos.jbrj.gov.br/flora/search/anacardium_humile
  //http://reflora.jbrj.gov.br/reflora/listaBrasil/FichaPublicaTaxonUC/FichaPublicaTaxonUC.do?id=FB15463
  //https://www.webambiente.gov.br/
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


  //PASSARINHO
  //https://ferramentas.sibbr.gov.br/ficha/bin/view/especie/pterogyne_nitens
  //http://servicos.jbrj.gov.br/flora/search/pterogyne_nitens
  //http://reflora.jbrj.gov.br/reflora/listaBrasil/FichaPublicaTaxonUC/FichaPublicaTaxonUC.do?id=FB28161
  //https://www.webambiente.gov.br/
    $planta = Planta::create(
      [
        'nome_popular' => 'pau-amendoim,amendoim-bravo,amendoim,madeira-nova,viraró,pau-de-fava,óleo-branco,madeira-nova,carne-de-vaca,bálsamo,bassourinha,sucupira,vilão,bálsamo,bálsamo-do-pantanal,bálsamo-bravo,passarinho',
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


  //IPE-VERDE
  //https://ferramentas.sibbr.gov.br/ficha/bin/view/especie/cybistax_antisyphilitica
  //http://servicos.jbrj.gov.br/flora/search/cybistax_antisyphilitica
  //http://reflora.jbrj.gov.br/reflora/listaBrasil/FichaPublicaTaxonUC/FichaPublicaTaxonUC.do?id=FB114028
  //https://www.webambiente.gov.br/
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


  //IPE-BRANCO
  //https://ferramentas.sibbr.gov.br/ficha/bin/view/especie/tabebuia_roseoalba
  //http://servicos.jbrj.gov.br/flora/search/tabebuia_roseoalba
  //http://reflora.jbrj.gov.br/reflora/listaBrasil/FichaPublicaTaxonUC/FichaPublicaTaxonUC.do?id=FB114338
  //https://www.webambiente.gov.br/
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


  //IPE-AMARELO
  //https://ferramentas.sibbr.gov.br/ficha/bin/view/especie/tabebuia_aurea
  //http://servicos.jbrj.gov.br/flora/search/tabebuia_aurea
  //http://reflora.jbrj.gov.br/reflora/listaBrasil/FichaPublicaTaxonUC/FichaPublicaTaxonUC.do?id=FB114257
  //https://www.webambiente.gov.br/
    $planta = Planta::create(
      [
        'nome_popular' => 'ipê-caraíba,caraíba,caraíba-do-cerrado,carobeira,claraíba,crabeira,caraúba,ipê-do-cerrado,carnaúba,ipê,paratudo,piúva-amarela,pratudinho,craibeira,para-tudo-do-campo,craíba,ipê-do-campo,pau-d’arco-do-campo,ipê-amarelo-do-cerrado',
        'autoria' => '(Silva Manso) Benth. & Hook. F ex S. Moore',
        'nome_cientifico' => 'Tabebuia aurea',
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
  }
  
}