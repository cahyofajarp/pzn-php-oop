<?php

namespace Data\One{

    class Conflict
    {
        function hello(?string $name)
        {
            echo "HAllO $name" .PHP_EOL;
        }
    }

    class Sample
    {

    }

    class Dummy
    {

    }
}

namespace Data\Two{
    class Conflict
    {

    }
}
