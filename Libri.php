<?php
class Libri {
  public $isbn;
  public $titolo;
  public $nomeAutore;
  public $pagine;
  public $genere;
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
$ilPiccoloPrincipe = new Libri('ISBN001', 'Il Piccolo Principe');
$ilPiccoloPrincipe->pagine=130;
$ilPiccoloPrincipe->nomeAutore= 'Antoine de Saint-Exupery';
$ilPiccoloPrincipe->genere= 'Narrativa';
$ilPiccoloPrincipe->prezzo= 10.00;
$ilPiccoloPrincipe->scaffale=25;
echo $ilPiccoloPrincipe->getPosition();
echo $ilPiccoloPrincipe->calcPrice(5);

var_dump($ilPiccoloPrincipe);

 ?>
