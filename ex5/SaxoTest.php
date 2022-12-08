<?php
declare(strict_types=1);

require_once("Saxo.php");

use PHPUnit\Framework\TestCase;

final class SaxoTest extends TestCase {

    private Saxo $saxo;

    /**
     * @before
     * We create a newSaxo
     */
    
    public function setUp(): void {
        $this->saxo = new Saxo();
    }

    /**
     * @test
     * We test the method souffle()
     */
    public function testSouffle(): void {
        $this->assertTrue($this->saxo->souffle());
    }

    /**
     * @test
     * We test the method joue()
     */
    public function testJoue(): void {
        $this->assertTrue($this->saxo->joue());
    }
}

?>