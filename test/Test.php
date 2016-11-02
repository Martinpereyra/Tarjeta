<?php
namespace Poli\Tarjeta;
use PHPUnit\Framework\TestCase;
class TestTarjeta extends TestCase {
  public function testTarjetapremio() {
    $tarjeta = new Sube;
    $tarjeta->recargar(272);
    $this->assertEquals($tarjeta->saldo(), 320, "Cuando cargo 272 deberia tener finalmente 320");
#  $this->assertEquals(1, 1, "Cuando cargo 272 deberia tener finalmente 320");
  }
    public function testTarjetanormal() {
    $tarjeta = new Sube;
    $tarjeta->recargar(27);
    $this->assertEquals($tarjeta->saldo(), 27, "Cuando cargo 27 deberia tener finalmente 27");

  }
  }
?>

