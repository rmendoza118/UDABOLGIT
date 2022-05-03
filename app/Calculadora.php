<?php



namespace App;

/**
 * Model operací kalkulačky.
 *
 * @package App
 */
class Calculadora
{
    /**
     * Definice konstant pro operace.
     */
    const
        ADD = 1,
        SUBTRACT = 2,
        MULTIPLY = 3,
        DIVIDE = 4,
        SQR = 5,
        CUAD = 6;

    /**
     * Vrať pole dostupných operací, kde klíč je konstanta operace
     * a hodnota název operace.
     *
     * @return array
     */
    public function getOperations(): array
    {
        return [
// SUMA GRUPO ORURO -CRISTIAN VILLAROEL- FIDEL MARTINES- ERWIN CORRALES --SCRUM MASTER: JOSE PABON
            self::ADD => 'Suma',
            self::SUBTRACT => 'Resta',
            self::MULTIPLY => 'Multiplicacion',
            self::DIVIDE => 'Divicion',
            self::SQR => 'Raiz',
            self::CUAD => 'Elvado'
        ];
    }

    /**
     * Zavolej předanou operaci definovanou konstantou a vrať její výsledek.
     * Pokud daná operace neexistuje, vrať null.
     *
     * @param  int $operation
     * @param  int $a
     * @param  int $b
     * @return int|null
     */
    public function calculate(int $operation, int $a, int $b): ?int
    {
        // DESPLIEGUE RICHARD MENDOZA
        switch ($operation) {
            case self::ADD:
                return $this->add($a, $b);
            case self::SUBTRACT:
                return $this->subtract($a, $b);
            case self::MULTIPLY:
                return $this->multiply($a, $b);
            case self::DIVIDE:
                return $this->divide($a, $b);
            case self::SQR:
                return $this->raiz($a, $b);
            case self::CUAD:
                return $this->cuad($a, $b);
            default:
                return null;
        }
    }

    /**
     *
     *
     * @param  int $a
     * @param  int $b
     * @return int
     */
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }

    /**
     *
     *
     * @param  int $a
     * @param  int $b
     * @return int
     */
    public function subtract(int $a, int $b): int
    {
        return $a - $b;
    }

    /**
     *
     *
     * @param  int $a
     * @param  int $b
     * @return int
     */
    public function multiply(int $a, int $b): int
    {
        return $a * $b;
    }

    /**
     *
     *
     * @param  int $a
     * @param  int $b
     * @return int
     */
    public function divide(int $a, int $b): int
    {
        //  la operacion floor redondea
        return floor($a / $b);
    }

    public function raiz(int $a, int $b): int
    {
        //  number pow($base, $exp)
        return pow($a, (1/$b));

    }

    public function cuad(int $a, int $b): int
    {
        //  number pow($base, $exp)
        return pow($a, ($b));

    }
}
