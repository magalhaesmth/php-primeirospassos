<?php

class Conta
{
    private $titular;
    private $nomeTitular;
    private int $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        if(self::$numeroDeContas > 1){
            echo "Há mais de uma conta ativa" .PHP_EOL;
        }
    }

    public function saca(float $valorSacar): void
    {
        if ($valorSacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSacar;
    }

    public function deposita(float $valorDepositar): void
    {
        if ($valorDepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorDepositar;
    }

    public function transfere(float $valorTransferir, Conta $contaDestino): void
    {
        if ($valorTransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saca($valorTransferir);
        $contaDestino->deposita($valorTransferir);
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}
