<?php

declare(strict_types=1);


namespace BristolPhpTraining\BadCode\Random;


class Arrays
{


    public function getArray1(): array
    {
        return [
            new Foo() => new Bar(),
            null => '7',
        ];
    }


    public function getArray2(): array
    {
        return [
            'dave' => 37,
            'tom' => 33,
            'dave' => 38,
        ];
    }




    public function getExtraArray1(): array
    {
        $array = $this->getArray1();
        $array[new Bar()] = 'bar';
        return $array;
    }


}
