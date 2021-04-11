<?php
        namespace Tests;

        use PHPUnit\Framework\TestCase;
        use App\Associado;

        class buscaAssociado extends TestCase
        {
            public function selecaassociado()
            {
                $id = new ID();
                $this->assertTrue($id->selecaassociado(1));
            }
        }