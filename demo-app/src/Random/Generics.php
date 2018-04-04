<?php

declare(strict_types=1);


namespace BristolPhpTraining\BadCode\Random;


class Generics
{


    /**
     * @return Foo[]
     */
    public function getFoosCorrect(): array
    {
        $foos = [];
        $foos[] = new Foo();
        return $foos;
    }



    /**
     * No warnings we've done things wrong
     *
     * @return iterable|Foo[]
     */
    public function getFoos1(): iterable
    {
        /** @var Bar[] $bars */
        $bars = [];
        $bars[] = new Bar();
        return $bars;
    }


    /**
     * @return Foo[]
     */
    public function getFoos2()
    {
        $bars = [];
        $bars[] = new Bar();
        return $bars;
    }


    /**
     * @return Foo[]
     */
    public function getFoos3(): array
    {
        $foos = [];
        $foos[] = new Foo();
        $foos[] = new Bar();
        return $foos;
    }

}
