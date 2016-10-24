<?php

/*
    |--------------------------------------------------------------------------
    | Enums usados globalmente na aplicação
    |--------------------------------------------------------------------------
    |
    | Aqui são adicionados os ENUMs que queres usar na aplicação, basta seguir o 
    | modelo abaixo.
    | Estes podem ser chamdos nas views e formulários usando o formhelper
    |
    |
    */

return [

    /* enum do tipo de escola*/

    'escola_tipo' => [
        
        '' => "",
        'ESCOLA' => "ESCOLA",
        'EMEI' => "EMEI",
        'EXTENSÃO' => "EXTENSÃO",
    ],

    'sim_nao' => [
        
        '' => "",
        'SIM' => "SIM",
        'NÃO' => "NÃO",
    ],

    'distrito' => [
        
        '' => "",
    'ABÓBORA' => "ABÓBORA",
 	'ITAMOTINGA' => "ITAMOTINGA",
 	'JUNCO' => "JUNCO",
 	'JUREMAL' => "JUREMAL",
 	'MANDACARU' => "MANDACARU",
 	'MANIÇOBA' => "MANIÇOBA",
 	'MASSAROCA' => "MASSAROCA",
 	'PINHÕES' => "PINHÕES",
 	'SEDE' => "SEDE",



    ],


    'tipo_internet' => [
        
        '' => "",

    'NENHUMA' => "NENHUMA",
    'CLARO' => "CLARO",
    'PROJETO BANDA LARGA NAS ESCOLAS' => "PROJETO BANDA LARGA NAS ESCOLAS",
 	'GSAT' => "GSAT",
 	'OUTRO' => "OUTRO",
 	'RÁDIO' => "RÁDIO",
 	'TIM' => "TIM",
    'VELOX' => "VELOX",
 	'VIVO' => "VIVO",

    ],


 'status_ativo' => [
        
        'ATIVO' => "ATIVO",

    'INATIVO' => "INATIVO",
 	
    ],


 'tipo_sala' => [
        
        '' => "",

    'NÃO POSSUI' => "NÃO POSSUI",
 	'SALA PRÓPRIA' => "SALA PRÓPRIA",
 	'SALA DE AULA COMPARTILHADA' => "SALA DE AULA COMPARTILHADA",
 	

    ],    


 'switch' => [
        
    '' => "",

    'NÃO POSSUI' => "NÃO POSSUI",
    '8 PORTAS' => "8 PORTAS",
 	'16 PORTAS' => "16 PORTAS",
 	'24 PORTAS' => "24 PORTAS",
 	'32 PORTAS' => "32 PORTAS",
 	'48 PORTAS' => "48 PORTAS",
    '+48 PORTAS' => "+48 PORTAS",

    ],


    'pregao' => [
        
        '' => "",

    '38.2006' => "38.2006",
 	'25.2007' => "25.2007",
 	'45.2007' => "45.2007",
 	'83.2008' => "83.2008",
 	'69.2008' => "69.2008",
    '68.2009' => "68.2009",
 	'71.2010' => "71.2010",
 	'OUTRO' => "OUTRO",

    ],    


    'status_vazio' => [
        
        '' => "",

    'ATIVO' => "ATIVO",
    'INATIVO' => "INATIVO",
 	
    ],



    'vinculo' => [
        
        '' => "",

    'CONTRATO' => "CONTRATO",
    'EFETIVO' => "EFETIVO",
    'ESTÁGIO' => "ESTÁGIO",
 	'CONCURSADO' => "CONCURSADO",
 	'TEMPORÁRIO' => "TEMPORÁRIO",
 	

    ],


    'usuario' => [

'' => "",
'100' => "02 DE JULHO",
'101' => "15 DE JULHO",    
'102' => "25 DE JULHO",
'103' => "AMERICO TANURI - JUNCO",
'105' => "AMÉRICO TANURY - ABÓBORA",
'104' => "AMERICO TANURY - MANIÇOBA",
'106' => "ANÁLIA BARBOSA DE SOUZA",
'107' => "ANTONIO FRANCISCO DE OLIVEIRA",
'210' => "ARGEMIRO JOSE DA CRUZ ",
'108' => "BOLIVAR SANT'ANNA",
'109' => "BOM JESUS - BARAUNA",
'110' => "BOM JESUS - NH1",
'111' => "CAIC - MISAEL AGUILAR",
'113' => "CAXANGA",
'114' => "CELSO CAVALCANTI DE CARVALHO",
'209' => "CENTRO SOCIAL URBANO - CSU",
'116' => "CORAÇÃO DE JESUS - JUREMA VERMALHA",
'115' => "CORAÇÃO DE JESUS - SERRA DA MADEIRA",
'117' => "DEPUTADO RAIMUNDO DA CUNHA LEITE",
'215' => "DOM JOSE RODRIGUES",
'118' => "DOUTOR EDSON RIBEIRO",
'120' => "DOUTOR JOSE ARAUJO DE SOUZA",
'119' => "DURVAL BARBOSA DA CUNHA",
'129' => "E.M.E.I ABÓBORA",
'130' => "E.M.E.I AMELIA DUARTE",
'231' => "E.M.E.I AMÉLIA DUARTE - EXT",
'131' => "E.M.E.I ANA MARIA MORGADO CHAVES",
'214' => "E.M.E.I ANDRÉ LUIZ",
'127' => "E.M.E.I ANNA HILDA LEITE FARIAS",
'121' => "E.M.E.I ANTONIO GUILERMINO",
'207' => "E.M.E.I ARCENIO JOSE DA SILVA",
'202' => "E.M.E.I BOM JESUS DOS NAVEGANTES",
'124' => "E.M.E.I CAIC MISAEL AGUILAR",
'122' => "E.M.E.I DILMA CALMON DE OLIVEIRA",
'206' => "E.M.E.I FUNDAÇÃO LAR FELIZ",
'132' => "E.M.E.I GENTIL DAMASIO DO NASCIMENTO",
'211' => "E.M.E.I HELOÍSA HELENA BENEVIDES FARIAS",
'123' => "E.M.E.I LUZINETE DE OLIVEIRA",
'133' => "E.M.E.I MANOEL ALVES DA MOTA",
'128' => "E.M.E.I MARIA HOZANA NUNES",
'235' => "E.M.E.I MARIA JULIA RODRIGUES TANURI",
'134' => "E.M.E.I MARIA SUELY MEDRADO ARAÚJO",
'135' => "E.M.E.I MARIA VIANA TANURI",
'125' => "E.M.E.I NAILDE DE SOUZA COSTA",
'136' => "E.M.E.I NATALIA RODRIGUES",
'212' => "E.M.E.I NOSSO SENHOR DOS AFLITOS",
'208' => "E.M.E.I PRIMAVERA",
'137' => "E.M.E.I SEMENTE DO AMANHA",
'213' => "EDUCANDÁRIO JOÃO XXIII",
'223' => "ELEOTÉRIO SOARES FONSÊCA",
'229' => "ELISEU SANTOS",
'232' => "ELISEU SANTOS - ZUMBI DOS PALMARES",
'191' => "ERUM - RURAL DA MASSAROCA",
'138' => "EURÍDICE RIBEIRO VIANA",
'139' => "FAMILIA UNIDA",
'142' => "HELENA ARAUJO PINHEIRO",
'143' => "HERBET MOUZE RODRIGUES",
'230' => "I.F.B. PROFª CRISTIANA DA COSTA BRAGA",
'145' => "JATOBA",
'146' => "JOANA RAMOS",
'203' => "JOAO DIAS FERREIRA",
'204' => "JOAO DIAS FERREIRA - EXT",
'147' => "JOAO NEVES DE ALMEIDA",
'148' => "JOCA DE SOUZA OLIVEIRA",
'149' => "JOSÉ DE AMORIM",
'150' => "JOSE PADILHA DE SOUZA",
'151' => "JUDITE LEAL COSTA",
'153' => "LINDAURA MARIA DE JESUS",
'216' => "LUCIA CARMEM SOBREIRA",
'154' => "LUDGERO DE SOUZA COSTA",
'155' => "MANDACARU",
'156' => "MANOEL DE SOUZA BONFIM",
'158' => "MANOEL GOMES MARTINS",
'159' => "MANOEL LUIZ DA SILVA",
'160' => "MANOEL NUNES AMORIM",
'217' => "MARIA AMÉLIA DE SOUZA OLIVEIRA",
'162' => "MARIA DO CARMO SA NOGUEIRA",
'163' => "MARIA MONTEIRO BACELAR",
'205' => "MARIANO RODRIGUES DE SOUZA",
'218' => "MIGUEL ÂNGELO DE SOUZA",
'165' => "NOSSA SENHORA DAS GROTAS - BOQUEIRAO",
'166' => "NOSSA SENHORA DAS GROTAS - CARNAÍBA",
'226' => "NOSSA SENHORA DAS GROTAS-SEDE",
'167' => "NOSSA SENHORA RAINHA DOS SANJOS",
'169' => "OSORIO TELES DE MENEZES",
'170' => "PASSAGEM DO SARGENTO",
'140' => "PAULO VI",
'157' => "PEDRO CORIOLANO",
'171' => "PEDRO DIAS",
'172' => "PONTAL",
'174' => "PREFEITO APRÍGIO DUARTE",
'199' => "PRESIDENTE TANCREDO NEVES",
'173' => "PROFª ANTONILA DA FRANÇA CARDOSO",
'175' => "PROFª ATANILHA LUZ ARAUJO",
'176' => "PROFª BERNADETE BRAGA",
'177' => "PROFª CARMEM COSTA SANTOS",
'178' => "PROFª CRENILDES LUIS BRANDÃO",
'179' => "PROFª DINORAH ALBERNAZ MELO DA SILVA",
'144' => "PROFª EDUALDINA DAMASIO",
'181' => "PROFª GRACIOSA XAVIER RAMOS GOMES",
'182' => "PROFª GUIOMAR LUSTOSA RODRIGUES",
'183' => "PROFª HAYDÉE FONSECA FALCÃO",
'201' => "PROFª IRACEMA DA PAIXAO",
'225' => "PROFª IRACY NUNES DA SILVA",
'152' => "PROFª LEOPOLDINA LEAL",
'161' => "PROFª MARIA DE LOURDES DUARTE",
'222' => "PROFª MARIA FRANCA PIRES",
'184' => "PROFª MARIA JOSÉ LIMA DA ROCHA",
'185' => "PROFª MARIA JOSÉ LIMA DA ROCHA - EXT 1",
'186' => "PROFª MARIA JOSÉ LIMA DA ROCHA - EXT 2",
'164' => "PROFª MATILDE COSTA MEDRADO",
'168' => "PROFª OSCARLINA TANURI",
'188' => "PROFª TEREZINHA FERREIRA DE OLIVEIRA",
'112' => "PROFº CARLOS DA COSTA SILVA",
'126' => "PROFº JOSÉ PEREIRA DA SILVA",
'187' => "PROFº LUIZ CURSINO DA FRANÇA CARDOSO",
'189' => "PROMENOR",
'224' => "RAIMUNDO CLEMENTINO DE SOUZA",
'190' => "RAIMUNDO MEDRADO PRIMO",
'192' => "SANTA INÊS",
'193' => "SANTA TEREZINHA",
'194' => "SANTO ANTÔNIO",
'195' => "SÃO FRANCISCO DE ASSIS - MULUNGU",
'196' => "SÃO FRANCISCO DE ASSIS - NH2",
'219' => "SÃO FRANCISCO DE ASSIS - PINHÕES",
'197' => "SÃO JOSE",
'198' => "SÃO SEBASTIÃO",
'227' => "VEREADOR AMADEUS DAMASIO",
'228' => "VEREADOR AMADEUS DAMASIO - PAULO FREIRE",
'Admin' => "Administrador",

    ] 
    
    





];