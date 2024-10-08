<?php

namespace test;

use DateTime;
use PHPUnit\Framework\TestCase;
use App\Class\Humain;


class HumainTest extends TestCase
{
    public function testConstructeur()
    {
        $giroud = new Humain("Giroud", "Olivier", new DateTime("1986-09-30"));
        $this->assertEquals("Giroud", $giroud->getNom());
        $this->assertEquals("Olivier", $giroud->getPrenom());
        $this->assertEquals(new DateTime("1986-09-30"), $giroud->getDateNaissance());
    }


    public function testDonneTexte()
    {
        $giroud = new Humain("Giroud", "Olivier", new DateTime("1986-09-30"));
        $this->assertEquals("Giroud Olivier né le  30/09/1986", $giroud->donneTexte());
    }


    public function testSetters()
    {
        $giroud = new Humain("Giroud", "Olivier", new DateTime("1986-09-30"));
        $giroud->setNom("Super");
        $giroud->setPrenom("Juste");
        $giroud->setDateNaissance(new DateTime("0000-12-25"));
        $this->assertEquals("Super", $giroud->getNom());
        $this->assertEquals("Juste", $giroud->getPrenom());
        $this->assertEquals(new DateTime("0000-12-25"), $giroud->getDateNaissance());


    }
}
