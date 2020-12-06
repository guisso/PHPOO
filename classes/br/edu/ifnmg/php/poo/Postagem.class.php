<?php

namespace br\edu\ifnmg\php\poo;

/**
 * Publicação no blog.
 *
 * @author Luis Guisso <luis dot guisso at ifnmg dot edu dot br>
 * @version 0.0.1, 04/12/2020
 */
class Postagem {

    /**
     * Identidade (chave primária) da postagem.
     * @var type int
     */
    public $id;

    /**
     * Data e hora da postagem.
     * @var type Date
     */
    public $dataHora;

    /**
     * Título da postagem.
     * TODO Limitação de comprimento do título deve ser feita por método setter.
     * @var type String
     */
    public $titulo;

    /**
     * Conteúdo da postagem.
     * TODO Limitação de comprimento do conteúdo deve ser feita por método setter.
     * @var type String
     */
    public $conteudo;

    /**
     * Total de aprovações da postagem
     * @var type int
     */
    public $positivo;

    /**
     * Total de reprovações da postagem
     * @var type int
     */
    public $negativo;

    /**
     * Estado da postagem.
     * @var type bool
     */
    public $ativa;

    /**
     * Constrói a representação textual do objeto com base em seu estado corrente.
     * @return string Representação textual do objeto.
     */
    public function __toString() {
        try {
            $total = $this->positivo + $this->negativo;
            return '[' . $this->id . '] '
                    . ' <i>' . $this->dataHora->format('d/m/Y H:m:s') . '</i> '
                    . ' <b>' . $this->titulo . '</b> '
                    . $this->conteudo
                    . ' <i class="far fa-thumbs-up"></i> '
                    . " {$this->positivo}/{$total} "
                    . ' <i class="far fa-thumbs-down"></i> '
                    . " {$this->negativo}/{$total} "
                    . ($this->ativa //
                    ? ' <i class="fas fa-toggle-on"></i> '  //
                    : ' <i class="fas fa-toggle-off"></i> ');
        } catch (Exception $exception) {
            return '';
        }
    }

}
