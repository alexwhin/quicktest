<?php

    namespace App;

    /**
     * Quick Test
     */
    class Quick extends \App\Upper
    {

        /**
         * Constructor
         * @param string $pullIn
         */
        function __construct($pullIn)
        {

            /* Set Heading */
            $this->heading = $pullIn;
        }
    }
