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
}
$ilPiccoloPrincipe = new Libri('ISBN001', 'Il Piccolo Principe');
$ilPiccoloPrincipe->scaffale=25;
echo $ilPiccoloPrincipe->getPosition();

var_dump($ilPiccoloPrincipe);

 ?>
