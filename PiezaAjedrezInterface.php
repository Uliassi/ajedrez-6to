<?php

interface PiezaDeAjedrez {

  public function movimientosPosibles();

  public function posicionarEn(string $celda);

}
