<?php
declare(strict_types=1);

require_once("Flute.php");

use PHPUnit\Framework\TestCase;

final class FluteTest extends TestCase {

    /**
     * @var Flute
     * We declare the flute
     */
    private Flute $flute;

    /**
     * @before
     * We create a flute from it's contructor from the class Flute
     */
    public function setUp(): void {
        $this->f1 = new Flute();
    }

    /**
     * @test
     * We test the method souffle()
     */
    public function testSouffle(): void {
        $this->assertTrue($this->f1->souffle());
    }

    /**
     * @test
     * We test the method joue()
     */
    public function testJoue(): void {
        $this->assertTrue($this->f1->joue());
    }
}
?>