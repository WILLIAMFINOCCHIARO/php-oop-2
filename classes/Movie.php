<?php

class Movie
{
    private $titolo;
    private $genere;
    private $attori;
    private $regista;
    private $durata;
    private $anno;
    private $prezzo;


    public function __construct($_titolo, $_genere, $_attori, $_regista, $_durata, $_anno, $_prezzo)
    {
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->attori = $_attori;
        $this->regista = $_regista;
        $this->durata = $_durata;
        $this->anno = $_anno;
        $this->prezzo = $_prezzo;
    }

    function getTitolo()
    {
        return $this->titolo;
    }

    function getGenere()
    {
        return $this->genere;
    }

    function getAttori()
    {
        return $this->attori;
    }

    function getRegista()
    {
        return $this->regista;
    }

    function getDurata()
    {
        return $this->durata;
    }

    function getAnno()
    {
        return $this->anno;
    }

    function getPrezzo()
    {
        if ($this->genere == "Commedia") {
            $prezzoScontato = $this->prezzo - $this->prezzo * 0.5;
            return $prezzoScontato;
        }
        return $this->prezzo;
    }
}