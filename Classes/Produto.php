<?php
    class Produtos
    {
        public $numero;
        public $nome;
        public $preco;


        public function MostrarAtributos()
        {
            echo "<br>Numero: " . $this->numero . " | Produto: " . $this->nome . " | Preço: " . $this->preco;
        }
        public function CalcularAumento($porcentagem)
        {
            $this->preco = $this->preco + ($this->preco * ($porcentagem/100));
        }
    }

    $p1 = new Produtos;
    $p1->numero = 1;
    $p1->nome = "Batata";
    $p1->preco = 10.99;
    $p1->MostrarAtributos();
    $p1->CalcularAumento(10);
    $p1->MostrarAtributos();

    echo "<br>";

    $p2 = new Produtos;
    $p2->numero = 2;
    $p2->nome = "Pão";
    $p2->preco = 10;
    $p2->MostrarAtributos();
    $p2->CalcularAumento(50);
    $p2->MostrarAtributos();
?>