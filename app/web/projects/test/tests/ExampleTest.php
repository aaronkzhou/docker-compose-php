<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel 5');
    }
    public function testPushAndPop(){
        $stack=array();
        $this->assertEquals(0,count($stack));
        $stack[]=1;
        $this->assertEquals(1,count($stack));
        $this->assertEquals(1,array_pop($stack));
        $this->assertEquals(0,array_shift($stack));
    }
    public function testEmpty(){
        $stack=array();
        $this->assertEmpty($stack);
        return $stack;
    }
    /**
     * @depends testEmpty
     */
    public function testPush(array $stack){
        $stack[]=1;
        $this->assertEquals(1,$stack[0]);
        $this->assertNotEmpty($stack);
        return $stack;
    }
    /**
     * @depends testPush
     */
    public function testPop(array $stack){
        $this->assertEquals(1,array_pop($stack));
    }
    public function testOne(){
        $this->assertTrue(true);
        
    }
    /*****
     * @depends testOne
     */
    public function testTwo(){

    }
    public function testProducerFirst(){
        $this->assertTrue(true);
        return 'first';
    }
    public function testProducerSecond(){
        $this->assertTrue(true);
        return 'second';
    }
    /**
     * @depends testProducerFirst
     * @depends testProducerSecond
     */
    public function testConsumer(){
        $this->assertEquals(
            array('first', 'second'),
            func_get_args()
        );
    }
    /**
     * @dataProvider additionProvider
     */
    public function testAddfunction($a,$b,$expected){
        $this->assertEquals($expected,$a+$b);
    }
    public function additionProvider(){
        return array(
          //[1,1,2],[0,0,0]
          'name1'=>[1,1,2],
          'name2'=>[0,0,0]
        );
    }
    public function testSomething()
    {
        // Optional: Test anything here, if you want.
        $this->assertTrue(TRUE, 'This should already work.');

        // Stop here and mark this test as incomplete.
        // $this->markTestIncomplete(
        //   'This test has not been implemented yet.'
        // );
    }
    public function testCalculate(){
        $this->assertEquals(2,1+1);
    }






































}
