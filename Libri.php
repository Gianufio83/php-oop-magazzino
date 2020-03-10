<?php
class Bookshop {
  public $genere;
}
class Libri extends Bookshop {
  public $isbn;
  public $titolo;
  public $nomeAutore;
  public $pagine;
  public $prezzo;
  public $scaffale;
  public function __construct($_isbn, $_titolo) {
    $this->isbn=$_isbn;
    $this->titolo=$_titolo;
  }
  public function getPosition() {
    if (empty($this->scaffale)) {
      die('Lo scaffale non è stato inserito');
    }
    return $this->scaffale;
  }
  public function calcPrice($_sconti) {
    if (empty($this->prezzo)) {
      die('Non hai inserito il prezzo');
    }
    return $this->prezzo * $_sconti / 100;
  }
}
class CD extends Bookshop {
  public $isbn;
  public $titolo;
  public $nomeAutore;
  public $tracce;
  public $prezzo;
  public $scaffale;
//   trait BuyTrace {
//     public $download;
//     public function maxPrice() {
//       return $download;
//     }
// }
  public function __construct($_isbn, $_titolo) {
    $this->isbn=$_isbn;
    $this->titolo=$_titolo;
  }
  public function getPosition() {
    if (empty($this->scaffale)) {
      die('Lo scaffale non è stato inserito');
    }
    return $this->scaffale;
  }
  public function calcPrice($_sconti) {
    if (empty($this->prezzo)) {
      die('Non hai inserito il prezzo');
    }
    return $this->prezzo * $_sconti ;
  }
}
class Guide extends Bookshop {
  // use BuyTrace;
  public $isbn;
  public $titolo;
  public $pagine;
  public $editore;
  public $prezzo;
  public $scaffale;
  public $formato;
  public function __construct($_isbn, $_titolo)
  {
    $this->isbn = $_isbn;
    $this->titolo = $_titolo;
  }
  public function getPosition()
  {
    if (empty($this->scaffale)) {
      die('Lo scaffale non è stato inserito');
    }
    return $this->scaffale;
  }
  public function calcPrice($_sconti) {
    if (empty($this->prezzo)) {
      die('Non hai inserito il prezzo');
    }
    return $this->prezzo * $_sconti ;
  }
}
// esempio di Libro
$ilPiccoloPrincipe = new Libri('ISBN001', 'Il Piccolo Principe');
$ilPiccoloPrincipe->pagine=130;
$ilPiccoloPrincipe->nomeAutore= 'Antoine de Saint-Exupery';
$ilPiccoloPrincipe->genere= 'Narrativa';
$ilPiccoloPrincipe->prezzo= 20.00;
$ilPiccoloPrincipe->scaffale='1A';
echo $ilPiccoloPrincipe->getPosition();
echo $ilPiccoloPrincipe->calcPrice(5);

var_dump($ilPiccoloPrincipe);
// esempio di CD
$NordSudOvestEst = new CD('ISBN002', 'Nord Sud Ovest Est');
$NordSudOvestEst->nomeAutore= 883;
$NordSudOvestEst->genere= 'POP';
$NordSudOvestEst->prezzo= 25.00;
$NordSudOvestEst->scaffale='2A';
// $NordSudOvestEst->maxPrice()= 3.00;
echo $NordSudOvestEst->getPosition();
echo $NordSudOvestEst->calcPrice(10);

var_dump($NordSudOvestEst);
// esempio guida turistica
$spagna = new Guide('956-789-1511-16', 'Spagna');
$spagna->editore = 'Lonely Planet';
$pspagna->pagine = 150;
$spagna->prezzo = 22.00;
$spagna->scaffale = '4C';
$spagna->formato = 'Pocket';
$spagna->genere = 'Guide Turistiche';
// $spagna->maxPrice()= 3.00;

echo $spagna->getPosition();
echo $spagna->calcPrice(10);

var_dump($spagna);
 ?>
