<?php
// creo un esempio di trait
// lo dichiaro
trait Description
{

    private string $description;


    // creo una funzione per settarlo
    public function setDescription(string $description)
    {
        $this->description = $description;;
    }
    // creo una funzione per leggerlo/stamparlo
    public function getDescription()
    {
        return $this->description;
    }
}