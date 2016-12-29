<?php

    /**
     * Quick Test Case.
     */
    class QuickTest extends \PHPUnit_Framework_TestCase
    {
        public function testQuick()
        {
            $app = new \App\Quick('fromTest');
            $this->assertEquals($app->heading, 'fromTest');
        }
    }
