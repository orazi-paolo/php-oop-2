<?php
// Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
// L'e-commerce vende prodotti per animali.
// I prodotti sono categorizzati, le categorie sono Cani o Gatti.
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).

// Creo una classe madre

class Product
{
    // creo le variabili d'istanza generali per ogni prodotto
    public $title;
    public $image;
    public $price;
    public $icon;
    public $type;

    // creo un costruttore per la classe
    public function __construct($title, $image, $price, $icon, $type)
    {
        $this->title = $title;
        $this->image = $image;
        $this->price = $price;
        $this->icon = $icon;
        $this->type = $type;
    }
}