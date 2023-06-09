<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DettagliController extends Controller
{
    public function dettagli ($id){

        $inserzioni = [
            ['id' => '1', 'titolo' => 'Il piu grande confronto tra iPad di sempre', 'descrizione' => 'Con l ulteriore ampliamento della line-up di iPad è necessario fare un pò di chiarezza e capire quali sono le principali differenze fra...', 'img' => '/media/ipad.jpg'],
            ['id' => '2', 'titolo' => 'Regali Tech per il Natale 2022', 'descrizione' => 'Il Natale è ormai sempre più vicino, è tempo di scegliere accuratamente i regali ed io sono qui per aiutarvi, dandovi alcune idee...', 'img' => '/media/regali-tech.jpg'],
            ['id' => '3', 'titolo' => 'Presentazione del primo robot di sigillatura brevettato', 'descrizione' => 'Alla fiera Vitrum presentiamo il nostro robot VEGA di sigillatura automatica per vetri strutturali e sagomati', 'img' => '/media/robot.jpg'],
        ];

        foreach ($inserzioni as $inserzione) {
            //se dell'array ció che vedi in chiave id é UGUALE all'id che ti sto passando (parametro reale del parametro formale $id)
            if($inserzione['id'] == $id){
                return view('dettagli', compact('inserzione'));
            }
        }


    }
}
