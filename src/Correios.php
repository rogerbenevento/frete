<?php
namespace App;

class Correios
{
    const CEP_ORIGEM = '07402830';

    public function calcularFrete($itens, $cep_destino)
    {
        var_dump($this->cubagem($itens)); exit;
        $frete = correio(self::CEP_ORIGEM, $cep_destino, $this->comprimento, $this->altura, $this->largura, $this->peso);
        self::atualizarSessao($frete, $cep_destino);
        return $frete;
    }

    private function cubagem(Array $itens)
    {
        $comprimento = $largura = $altura = $peso = $cubagem = 0;
        foreach ($itens as $item) {

            $cubagem += (($item->getAltura() / 10) * 
                         ($item->getComprimento() / 10) *
                         ($item->getLargura() / 10) *
                         ($item->getPeso()));

            $peso += ($item->getPeso() * $item->getQuantidade());
        }

        var_dump($cubagem); var_dump($peso); exit;

        $cubagem_raiz_cubica = round( pow( $cubagem,(1/3) ) );

        // var_dump($cubagem_raiz_cubica); exit;

        if ($cubagem_raiz_cubica < 16) {
            $this->comprimento = floatval(16);
        } else $this->comprimento = floatval($cubagem_raiz_cubica);

        if ($cubagem_raiz_cubica < 11) {
            $this->largura = floatval(11);
        } else $this->largura = floatval($cubagem_raiz_cubica);

        $this->altura = round($cubagem_raiz_cubica / ($this->comprimento * $this->largura), 3);
        $this->peso = $peso;
    }
}