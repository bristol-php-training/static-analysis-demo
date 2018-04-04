<?php

declare(strict_types=1);


namespace BristolPhpTraining\BadCode\Animal;


class AbstractAnimal
{

    public function __construct($name)
    {
        $this->name = $name;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
}
