<?php

namespace Stade;

use DateTime;
use PHPUnit\Framework\TestCase;
use App\Class\Humain;


class StadeTest extends TestCase
{
    public function testConstructeur()
    {
        $stade01 = new Stade("stade", "Paris", 5);
        $this->assertEquals("stade", $stade01->getNom());
        $this->assertEquals("Paris", $stade01->getVille());
        $this->assertEquals(5, $stade01->getCapacite());
    }


    public function testDonneTexte()
    {
        $stade01 = new Stade("stade", "Paris", 5);
        $this->assertEquals("stade Paris 5", $stade01->donneTexte());
    }
}
