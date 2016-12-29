<?php

    /**
     * Quick Test Case
     */
    class QuickTest extends \PHPUnit_Framework_TestCase
    {

        public function testQuick ()
        {

            $test = new \App\Quick('fromTest');
            $this->assertEquals($test->heading, 'fromTest');
        }
    }
