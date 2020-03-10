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
    return $this->prezzo * $_sconti;
  }
}
class CD extends Bookshop {
  public $isbn;
  public $titolo;
  public $nomeAutore;
  public $tracce;
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
    return $this->prezzo * $_sconti;
  }
}
// esempio di Libro
$ilPiccoloPrincipe = new Libri('ISBN001', 'Il Piccolo Principe');
$ilPiccoloPrincipe->pagine=130;
$ilPiccoloPrincipe->nomeAutore= 'Antoine de Saint-Exupery';
$ilPiccoloPrincipe->genere= 'Narrativa';
$ilPiccoloPrincipe->prezzo= 10.00;
$ilPiccoloPrincipe->scaffale='1A';
echo $ilPiccoloPrincipe->getPosition();
echo $ilPiccoloPrincipe->calcPrice(5);

var_dump($ilPiccoloPrincipe);
// esempio di CD
$NordSudOvestEst = new CD('ISBN002', 'Nord Sud Ovest Est');
$NordSudOvestEst->nomeAutore= 883;
$NordSudOvestEst->genere= 'POP';
$NordSudOvestEst->prezzo= 20.00;
$NordSudOvestEst->scaffale='2A';
echo $NordSudOvestEst->getPosition();
echo $NordSudOvestEst->calcPrice(10);

var_dump($NordSudOvestEst);

 ?>
