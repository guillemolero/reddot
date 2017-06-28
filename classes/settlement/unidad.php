<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of unidad
 *
 * @author Antonio
 */

class unidad {
    private $vida;                  //Vida
    private $escudo;                //Escudo
    private $fuerza;                //Poder de ataque fisico
    private $ataque_magico;         //Poder de ataque magico
    private $defensa_fisica;        //Defensa fisica
    private $defensa_magica;        //Defensa magica
    private $destreza;              //Velocidad de ataque fisico
    private $concentracion;         //Velocidad de ataque magico
    private $velocidad;             //Velocidad de movimiento
    
    public function __construct($vida, $escudo, $fuerza, $ataque_magico, $defensa_fisica, $defensa_magica, $destreza, $concentracion, $velocidad) {
        $this->vida = $vida;
        $this->escudo = $escudo;
        $this->fuerza = $fuerza;
        $this->ataque_magico = $ataque_magico;
        $this->defensa_fisica = $defensa_fisica;
        $this->defensa_magica = $defensa_magica;
        $this->destreza = $destreza;
        $this->concentracion = $concentracion;
        $this->velocidad = $velocidad;
    }
}
