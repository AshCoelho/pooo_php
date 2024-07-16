<?php
class Parque {
    public $comida;
    public $brinquedo;
    public function lugar() {
        echo "Fui no Parque de Diversão e comi $this->comida e brinquei no $this->brinquedo";
    }
}

$Parquinho = new Parque();
$Parquinho->comida = "cachorro-quente";
$Parquinho->brinquedo = "carrinho de bate-bate";
$Parquinho->lugar();

?>