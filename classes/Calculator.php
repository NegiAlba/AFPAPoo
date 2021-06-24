<?php

class Calculator
{
    /**
     * First Number.
     *
     * @var int
     */
    private $num1;

    /**
     * Second number.
     *
     * @var int
     */
    private $num2;

    public function __construct($n1, $n2)
    {
        $this->setNum1($n1);
        $this->setNum2($n2);
    }

    /**
     * Get first Number.
     *
     * @return int
     */
    public function getNum1()
    {
        return $this->num1;
    }

    /**
     * Set first Number.
     *
     * @param int $num1 First Number
     *
     * @return self
     */
    public function setNum1(int $num1)
    {
        $this->num1 = $num1;

        return $this;
    }

    /**
     * Get second number.
     *
     * @return int
     */
    public function getNum2()
    {
        return $this->num2;
    }

    /**
     * Set second number.
     *
     * @param int $num2 Second number
     *
     * @return self
     */
    public function setNum2(int $num2)
    {
        $this->num2 = $num2;

        return $this;
    }

    public function add()
    {
        return $this->num1 + $this->num2;
    }

    public function multiply()
    {
        return $this->num1 * $this->num2;
    }

    public function substract()
    {
        return $this->num1 - $this->num2;
    }

    public function divide()
    {
        if (0 === $this->num2) {
            return 'Erreur : La division par 0 est impossible';
        }

        return $this->num1 / $this->num2;
    }

    public function euclidDivide()
    {
        if (0 === $this->num2) {
            return 'Erreur : La division euclidienne par 0 est impossible';
        }
        if ($this->num2 < 0) {
            echo 'ATTENTION : Le calcul a été effectué à partir de la valeur absolue du second nombre et le résultat est : ';
        }

        return $this->num1 % abs($this->num2);
    }
}
