<?php

use Illuminate\Database\Seeder;
use App\Planta;
use App\Bioma;
use App\Estado;

class PlantaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $planta = Planta::create(
			//https://ferramentas.sibbr.gov.br/ficha/bin/view/especie/attalea_phalerata
			//http://reflora.jbrj.gov.br/reflora/listaBrasil/FichaPublicaTaxonUC/FichaPublicaTaxonUC.do?id=FB15684
			//http://www.almanaquedocampo.com.br/verbete/exibir/414
			//https://www.webambiente.gov.br/
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
		
		$planta = Planta::create(
			//https://ferramentas.sibbr.gov.br/ficha/bin/view/especie/attalea_phalerata
			//http://reflora.jbrj.gov.br/reflora/listaBrasil/FichaPublicaTaxonUC/FichaPublicaTaxonUC.do?id=FB15684
			//http://www.almanaquedocampo.com.br/verbete/exibir/414
			//https://www.webambiente.gov.br/
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

		$planta = Planta::create(
			//https://ferramentas.sibbr.gov.br/ficha/bin/view/especie/attalea_phalerata
			//http://reflora.jbrj.gov.br/reflora/listaBrasil/FichaPublicaTaxonUC/FichaPublicaTaxonUC.do?id=FB15684
			//http://www.almanaquedocampo.com.br/verbete/exibir/414
			//https://www.webambiente.gov.br/
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

		$planta = Planta::create(
			//https://ferramentas.sibbr.gov.br/ficha/bin/view/especie/attalea_phalerata
			//http://reflora.jbrj.gov.br/reflora/listaBrasil/FichaPublicaTaxonUC/FichaPublicaTaxonUC.do?id=FB15684
			//http://www.almanaquedocampo.com.br/verbete/exibir/414
			//https://www.webambiente.gov.br/
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

		$planta = Planta::create(
			//https://ferramentas.sibbr.gov.br/ficha/bin/view/especie/attalea_phalerata
			//http://reflora.jbrj.gov.br/reflora/listaBrasil/FichaPublicaTaxonUC/FichaPublicaTaxonUC.do?id=FB15684
			//http://www.almanaquedocampo.com.br/verbete/exibir/414
			//https://www.webambiente.gov.br/
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

		$planta = Planta::create(
			//https://ferramentas.sibbr.gov.br/ficha/bin/view/especie/attalea_phalerata
			//http://reflora.jbrj.gov.br/reflora/listaBrasil/FichaPublicaTaxonUC/FichaPublicaTaxonUC.do?id=FB15684
			//http://www.almanaquedocampo.com.br/verbete/exibir/414
			//https://www.webambiente.gov.br/
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

		$planta = Planta::create(
			//https://ferramentas.sibbr.gov.br/ficha/bin/view/especie/attalea_phalerata
			//http://reflora.jbrj.gov.br/reflora/listaBrasil/FichaPublicaTaxonUC/FichaPublicaTaxonUC.do?id=FB15684
			//http://www.almanaquedocampo.com.br/verbete/exibir/414
			//https://www.webambiente.gov.br/
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

		$planta = Planta::create(
			//https://ferramentas.sibbr.gov.br/ficha/bin/view/especie/attalea_phalerata
			//http://reflora.jbrj.gov.br/reflora/listaBrasil/FichaPublicaTaxonUC/FichaPublicaTaxonUC.do?id=FB15684
			//http://www.almanaquedocampo.com.br/verbete/exibir/414
			//https://www.webambiente.gov.br/
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

		$planta = Planta::create(
			//https://ferramentas.sibbr.gov.br/ficha/bin/view/especie/attalea_phalerata
			//http://reflora.jbrj.gov.br/reflora/listaBrasil/FichaPublicaTaxonUC/FichaPublicaTaxonUC.do?id=FB15684
			//http://www.almanaquedocampo.com.br/verbete/exibir/414
			//https://www.webambiente.gov.br/
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

		$planta = Planta::create(
			//https://ferramentas.sibbr.gov.br/ficha/bin/view/especie/attalea_phalerata
			//http://reflora.jbrj.gov.br/reflora/listaBrasil/FichaPublicaTaxonUC/FichaPublicaTaxonUC.do?id=FB15684
			//http://www.almanaquedocampo.com.br/verbete/exibir/414
			//https://www.webambiente.gov.br/
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

		$planta = Planta::create(
			//https://ferramentas.sibbr.gov.br/ficha/bin/view/especie/attalea_phalerata
			//http://reflora.jbrj.gov.br/reflora/listaBrasil/FichaPublicaTaxonUC/FichaPublicaTaxonUC.do?id=FB15684
			//http://www.almanaquedocampo.com.br/verbete/exibir/414
			//https://www.webambiente.gov.br/
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

		$planta = Planta::create(
			//https://ferramentas.sibbr.gov.br/ficha/bin/view/especie/attalea_phalerata
			//http://reflora.jbrj.gov.br/reflora/listaBrasil/FichaPublicaTaxonUC/FichaPublicaTaxonUC.do?id=FB15684
			//http://www.almanaquedocampo.com.br/verbete/exibir/414
			//https://www.webambiente.gov.br/
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

		$planta = Planta::create(
			//https://ferramentas.sibbr.gov.br/ficha/bin/view/especie/attalea_phalerata
			//http://reflora.jbrj.gov.br/reflora/listaBrasil/FichaPublicaTaxonUC/FichaPublicaTaxonUC.do?id=FB15684
			//http://www.almanaquedocampo.com.br/verbete/exibir/414
			//https://www.webambiente.gov.br/
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

		$planta = Planta::create(
			//https://ferramentas.sibbr.gov.br/ficha/bin/view/especie/attalea_phalerata
			//http://reflora.jbrj.gov.br/reflora/listaBrasil/FichaPublicaTaxonUC/FichaPublicaTaxonUC.do?id=FB15684
			//http://www.almanaquedocampo.com.br/verbete/exibir/414
			//https://www.webambiente.gov.br/
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

		$planta = Planta::create(
			//https://ferramentas.sibbr.gov.br/ficha/bin/view/especie/attalea_phalerata
			//http://reflora.jbrj.gov.br/reflora/listaBrasil/FichaPublicaTaxonUC/FichaPublicaTaxonUC.do?id=FB15684
			//http://www.almanaquedocampo.com.br/verbete/exibir/414
			//https://www.webambiente.gov.br/
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
  }
}
