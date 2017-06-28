<?php

/**
 * Created by PhpStorm.
 * User: Portatil
 * Date: 26/06/2017
 * Time: 2:00
 */
class humanSettle extends baseSettle
{

    /* ARMAS */
    private $nivelArmeria; //nivel de las armas disponibles
    private $nivelCaballería; //nivel de centro reclutamiento de caballeria
    private $nivelReclutamiento; //nivel centro reclutamiento de soldados base

    private $maxArmeria; //máximo nivel que alcanzará el edificio
    private $maxCaballeria;
    private $maxReclutamiento;

    /* RECURSOS */
    private $nivelCarpinteria; //produce madera
    private $nivelMineria; //produce metal
    private $nivelGanaderia; //produce comida

    private $maxCarpinteria;
    private $maxMineria;
    private $maxGanaderia;

    function __construct()
    {
        $this->nivelCentro=1;

        //niveles iniciales de los edificios armamentísticos
        $this->nivelArmeria=0;
        $this->nivelCaballería=0;
        $this->nivelReclutamiento=0;

        //niveles iniciales de los edificios de recursos
        $this->nivelCarpinteria=1;
        $this->nivelMineria=1;
        $this->nivelGanaderia=1;

        //niveles máximos de los edificios básicos
        $this->maxArmeria=3;
        $this->maxCaballeria=3;
        $this->maxReclutamiento=3;
        $this->maxCarpinteria=3;
        $this->maxMineria=3;
        $this->maxGanaderia=3;

    }


    //subirá el nivel del centro del asentamiento y devolverá true si es correcto o false si no lo es
    function subeNivelCentro()
    {
        //precomprobamos que no estamos al máximo nivel
        if($this->nivelCentro < 10)
        {
            //de ser asi subimos el nivel del centro
            $this->nivelCentro++;

            //aumentamos los niveles máximos posibles de cada edificio
            $this->aumentarMaximos();

            //comprobamos gracias al switch qué cosas podemos desbloquear y qué ocurre al subir de nivel
            switch($this->nivelCentro)
            {
                case 2:
                    //desbloqueo de cosas
                    break;
                case 3:
                    //desbloqueo de cosas
                    break;
                case 4:
                    //desbloqueo de cosas
                    break;
                case 5:
                    //desbloqueo de cosas
                    break;
                case 6:
                    //desbloqueo de cosas
                    break;
                case 7:
                    //desbloqueo de cosas
                    break;
                case 8:
                    //desbloqueo de cosas
                    break;
                case 9:
                    //desbloqueo de cosas
                    break;
                case 10:
                    //última vez que debería entrar aquí
                    break;
                default:
                    echo "Error al subir de nivel el centro del asentamiento.";
                    return false;
            }
            return true;
        } else {
            //asentamiento al máximo nivel
            return false;
        }

    }

    //mismo sistema que el anterior
    function subeNivelArmeria()
    {
        //precomprobamos que no estamos al máximo nivel
        if($this->nivelArmeria < $this->maxArmeria)
        {
            //de ser asi subimos el nivel del centro
            $this->nivelArmeria++;

            //comprobamos gracias al switch qué cosas podemos desbloquear y qué ocurre al subir de nivel
            switch($this->nivelArmeria)
            {
                case 2:
                    //desbloqueo de cosas
                    break;
                case 3:
                    //desbloqueo de cosas
                    break;
                case 4:
                    //desbloqueo de cosas
                    break;
                case 5:
                    //desbloqueo de cosas
                    break;
                case 6:
                    //desbloqueo de cosas
                    break;
                case 7:
                    //desbloqueo de cosas
                    break;
                case 8:
                    //desbloqueo de cosas
                    break;
                case 9:
                    //desbloqueo de cosas
                    break;
                case 10:
                    //última vez que debería entrar aquí
                    break;
                default:
                    echo "Error al subir de nivel la armería.";
                    return false;
            }
            return true;
        } else {
            //asentamiento al máximo nivel
            return false;
        }

    }

    //funcion que me aumenta el máximo nivel de cada edificio disponible en 3 puntos
    function aumentarMaximos()
    {
        $this->maxArmeria= $this->maxArmeria + 3;
        $this->maxCaballeria=$this->maxCaballeria + 3;
        $this->maxReclutamiento=$this->maxReclutamiento + 3;
        $this->maxCarpinteria=$this->maxCarpinteria + 3;
        $this->maxMineria=$this->maxMineria + 3;
        $this->maxGanaderia=$this->maxGanaderia + 3;
    }

}