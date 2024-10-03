<?php


namespace test;


use DateTime;
use PHPUnit\Framework\TestCase;
use App\Class\Arbitre;

class ArbitreTest extends TestCase
{
    public function testAll(): void
    {
        $unArbitre = new Arbitre ("Pitana","Nestor", new DateTime("1975-06-17"), "Argentin");
        $this->assertEquals("Argentin", $unArbitre->getNationnalite());


        $this->assertEquals("Arbitre : Pitana Nestor 17/06/1975", $unArbitre->donneTexte());
    }

}
