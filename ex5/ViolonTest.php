<?php
declare(strict_types=1);

require_once("Violon.php");

use PHPUnit\Framework\TestCase;

final class ViolonTest extends TestCase {
    private Violon $v1;

    /**
     * @before
     * We create a new Violon
     */
    public function setUp(): void {
        $this->v1 = new Violon();
    }

    /**
     * @test
     * We test the method gratte()
     */
    public function testGratte(): void {
        $this->assertTrue($this->v1->gratte());
    }

    /**
     * @test
     * We test the method tendre()
     */
    public function testTendre(): void {
        $this->assertTrue($this->v1->tendre());
    }

    /**
     * @test
     * We test the method utiliserArche()
     */
     */
    public function testUtiliserArche(): void {
        $this->assertTrue($this->v1->utiliserArche());
    }

    /**
     * @test
     * We test the method joue()
     */
    public function testJoue(): void {
        $this->assertTrue($this->v1->joue());
    }
}

?>
