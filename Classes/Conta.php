<?php
class Conta
{
    //declaração dos atributos
    public $numero;
    public $titular;
    public $saldo;

    //declaração dos métodos
    public function Sacar($valorSaque)
    {
        $this->saldo = $this->saldo - $valorSaque;
    }
}
$c1 = new Conta;//instância de objeto
$c1->numero = 1;
$c1->titular = "Ana";
$c1->saldo = 100.12;
$c1->Sacar(10);

echo "Saldo: " . $c1->saldo;
$c2 = new Conta;//instância de objeto
$c2->numero = 2;
$c2->titular = "Bia";
$c2->saldo = 200.89;

echo "<pre>";
var_dump($c1);
var_dump($c2);
echo "</pre>";