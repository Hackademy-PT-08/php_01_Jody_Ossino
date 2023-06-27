<?php

// Traccia 1:

// Definisci 4 variabili:

//     - Integer 
//     - Float 
//     - String 
//     - Boolean

// A schermo, fai comparire il tipo di dato delle varie variabili.
// Trasforma quelle variabili in costanti, utilizzando le best practice viste a lezione.

$numberInteger = 11;
$numberFloat = 10.10;
$string = "Hi, im Jody!";
$yes = true;

var_dump($number_Integer);
var_dump($number_Float);
var_dump($string);
var_dump($yes);

const NUMBERINTEGER = 11;
const NUMBERFLOAT = 10.10;
const STRING = "Hi, im Jody!";
const YES = true;


// - Traccia 2:

// Date le seguenti variabili:

//     $1text = "Marco";
//     $text2 = "hai";
//     $text.3 = "sete";
//     $text4 = "?";
//     @text5 = "Perchè";
//     $te-xt6 = '$text2';
//     $text 7 = 'bevuto';
//     $text8 = "tutto"

// correggi eventuali errori e stampa correttamente a terminale la stringa: “Marco Hai sete? Perche' hai bevuto tutto.“


// $1text = "Marco"; //! errore
$text1 = "Marco"; //? corretto

// $text.3 = "sete"; //! errore
$text3 = "sete"; //? corretto

// @text5 = "Perchè"; //! errore
$text5 = "Perchè"; //? corretto

// $te-xt6 = '$text2'; //! errore
$text6_ = '$text2'; //? corretto

// $text 7 = 'bevuto'; //! errore
$text7 = 'bevuto'; //? corretto

var_dump($text1 + $text2 + $text3 + $text4 + $text5 + $text6_ + $text7);





// - Traccia 3:

// Dati i seguenti array:

    $words1 = [
      'una',
      67,
      'vita',
      'colle',
      'mi',
      'rosso',
      [
        'oscura',
        'era',
        89,
        [
          'mezzo',
          [
            'cammin',
            'Nel',
            [
              'selva',
              'la',
              [
                'via',
                'una',
                true,
              ]
            ],
          ]
        ],
        'ritrovai',
        'per'
      ],
      'diritta'
    ];
    
    $words2 = [
      'elemento1' => 25.89,
      'elemento2' => 'nostra',
      'elemento3' => [
        'Virgilio',
        'smarrita',
        'ché'
      ]
    ];

// Crea una variabile di tipo Stringa chiamata $results che stampi a terminale il seguente testo, attraverso l’accesso agli array sopra: “Nel mezzo del cammin di nostra vita mi ritrovai per una selva oscura, ché la diritta via era smarrita“.
// HINT:
// Non tutti gli elementi all’interno dell’array sono utili, e alcuni elementi mancano proprio. Scegli come risolvere il problema nel modo più opportuno: nuove variabili, concatenamenti, ecc ecc.


$words1 = [
  'una',
  67,
  'vita',
  'colle',
  'mi',
  'rosso',
  [
    'oscura',
    'era',
    89,
    [
      'mezzo',
      [
        'cammin',
        'Nel',
        [
          'selva',
          'la',
          [
            'via',
            'una',
            true,
          ]
        ],
      ]
    ],
    'ritrovai',
    'per'
  ],
  'diritta'
];

$words2 = [
  'elemento1' => 25.89,
  'elemento2' => 'nostra',
  'elemento3' => [
    'Virgilio',
    'smarrita',
    'ché'
  ]
];


$nel = $words1[6][3][1][1] . " ";
$mezzo = $words1[6][3][0] . " ";
$del = "del ";
$cammin = $words1[6][3][1][0] . " ";
$di = "di ";  
$nostra = $words2["elemento2"] . " ";
$vita = $words1[2] . " ";
$mi = $words1[4] . " ";
$ritrovai = $words1[6][4] . " ";
$per = $words1[6][5] . " ";
$una = $words1[0] . " ";
$selva = $words1[6][3][1][2][0] . " ";
$oscura = $words1[6][0];
$virgola = ", ";
$che = $words2["elemento3"][2] . " ";
$la = $words1[6][3][1][2][1] . " ";
$diritta = $words1[7] . " ";
$via = $words1[6][3][1][2][2][0] . " ";
$era = $words1[6][1] . " ";
$smarrita = $words2["elemento3"][1] . " ";


$result = $nel . $mezzo . $del . $cammin . $di . $nostra . $vita . $mi . $ritrovai . $per . $una . $selva . $oscura . $virgola . $che . $la . $diritta . $via . $era . $smarrita;

echo $result;

?> 