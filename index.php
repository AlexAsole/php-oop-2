<?php 

class Prodotto 
{
    protected $nome;
    protected $prezzo;
    protected $quantitàDisponibile;
}

class Elettronica extends Prodotto
{
    protected $tipo;
    protected $produttore;
    protected $modello;

    public function __construct(string $nome, float $prezzo, int $quantitàDisponibile, string $tipo, string $produttore, string $modello) 
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->quantitàDisponibile = $quantitàDisponibile;
        $this->tipo = $tipo;
        $this->produttore = $produttore;
        $this->modello = $modello;
    }
}

class Libro extends Prodotto
{
    protected $autore;
    protected $editore;
    protected $numeroPagine;
    protected $edizione;
    
    public function __construct(string $nome, float $prezzo, int $quantitàDisponibile, string $autore, string $editore, int $numeroPagine, int $edizione)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->quantitàDisponibile = $quantitàDisponibile;
        $this->autore = $autore;
        $this->editore = $editore;
        $this->numeroPagine = $numeroPagine;
        $this->edizione = $edizione;
    }
}

class Utente
{
    protected $nome;
    protected $cognome;
    protected $nickname;
    protected $carrello = [];

    public function __construct($nome, $cognome, $nickname)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->nickname = $nickname;
    }

    public function addProdotto(Prodotto $prodotto) 
    {
        $this->carrello[] = $prodotto;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCognome()
    {
        return $this->cognome;
    }

    public function getNick()
    {
        return $this->nickname;
    }
}

$alex = new Utente('Alex Giorgio', 'Asole', 'AAG');

$goodOmens = new Libro('Good Omens', 19.99, 200, 'Neil Gaiman', 'Mondadori', 320, 2);
$bravia = new Elettronica('Bravia', 499.99, 100, 'Televisore', 'Sony', 'XCM900');

