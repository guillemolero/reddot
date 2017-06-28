<?php

/**
 * Created by PhpStorm.
 * User: Portatil
 * Date: 28/06/2017
 * Time: 3:58
 */
class player
{

    public $user; //string que almacenará el nombre de usuario
    private $mail; //string que almacenará el mail
    private $pass; //string que almacenará la contraseña, encriptada en md5
    private $race; //string que almacenará la raza
    private $settle; //objeto que almacena los datos de su asentamiento
    private $army = array(); //array que almacenará los ejercitos(objetos) que posee el usuario

    //cuando se crea el objeto jugador recibiremos el usuario, el mail y la pass
    function __construct($user, $mail, $pass)
    {
        $this->user = $user;
        $this->mail = $mail;
        $this->pass = $pass;
    }

    //reestablece la raza siempre y cuando no sea la misma
    function setRace($race)
    {
        //si la raza no es la misma que la que ya tiene el usuario la modificará y retornará true
        if($this->race != $race)
        {
            $this->race = $race;
            return true; //utilizaré el return true en el caso de que sea correcto, para enviar mensajes de satisfacción
        }
        else
        {
            return false;
        }
    }

    //devuelve la raza del usuario
    function getRace()
    {
        return $this->race;
    }

    //establece el asentamiento, de momento tengo estipulado tener solo 1, aunque puede ser un array también
    function setSettle($settle)
    {
        //le asignamos el asentamiento una vez lo hayamos creado ejecutando la funcion a posteriori de la creación del ejercito
        $this->settle = $settle;
    }

    //borra el asentamiento del usuario
    function remSettle()
    {
        unset($this->settle);
    }

    //devuelve el asentamiento actual del usuario
    function getSettle()
    {
        return $this->settle;
    }

    //funcion para añadir un ejercito a la lista de ejércitos del usuario
    function addArmy($army)
    {
        array_push($this->army, $army);
    }

    //función para borrar el ejército que deseamos
    function remArmy($army)
    {
        for($i=0; $i<count($this->army);$i++)
        {
            if($this->army[$i] == $army) //si el elemento del array es el mismo que el objeto que queremos borrar entra
            {
                unset($this->army[$i]); //quitamos el ejercito que deseamos del array
                $aux = array_values($this->army); //guardamos el array reordenado en una variable auxiliar
                $this->army = $aux; //asignamos el array ya reordenado a la variable del objeto
                return true; //devolvemos true para indicar que se ha borrado con éxito
            }
        }
        return false; //devolvemos false para indicar que no ha sido posible borrar el ejército
    }

    //función que devuelve el array de ejércitos del usuario
    function getArmy()
    {
        return $this->army;
    }

}