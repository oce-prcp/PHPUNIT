<?php
declare(strict_types=1);

require_once("Guitare.php");

use PHPUnit\Framework\TestCase;

final class GuitareTest extends TestCase {

    private Guitare $guitare;

    /**
     * @before
     * We create a guitar via its constructor
     */
    public function setUp(): void {
        $this->guitare = new Guitare();
    }

    /**
     * @test
     * We test method gratte()
     */
    public function testGratte(): void {
        $this->assertTrue($this->guitare->gratte());
    }

    /**
     * @test
     * We test method tendre()
     */
    public function testTendre(): void {
        $this->assertTrue($this->guitare->tendre());
    }

    /**
     * @test
     * We test method utiliserArche()
     */
    public function testUtiliserArche(): void {
        $this->assertFalse($this->guitare->utiliserArche());
    }

    /**
     * @test
     * We test method joue()
     */
    public function testJoue(): void {
       $this->assertTrue($this->guitare->joue());
    }
}

?>