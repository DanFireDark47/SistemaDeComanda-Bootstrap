<?php
class css{


    public static function getClass($name){
        switch($name){
            case "Produto": //
                return 'class="bg-dark text-light card d-inline-block ms-2 border border-3 border-dark"';
            case "imagem":
                return 'class="card-img-top img-fluid" style="max-width: 100%; max-height:10rem;"';
    }}

    public function ConstructProdutoComida($produto){
        
        return '<div '.$this->getClass("Produto") .'>
        <img '. $this->getClass("imagem") .' src='. $produto->getFoto() . ' alt='. $produto->getNome() .'>
        
        </img>
        '.$produto->getComida() .'
        <input class="form-check-input mt-0 mx-auto d-block" style="width: 100%;" type="checkbox" name='.$produto->getValorEntrada() .' value='.$produto->getValorEntrada() .'></input>
        </div>';
    }

    public function ConstructProdutoBebida($produto){
        
        return '<div '.$this->getClass("Produto") .'>
        <img '. $this->getClass("imagem") .' src='. $produto->getFoto() . ' alt='. $produto->getNome() .'>
        
        </img>'
        .$produto->getBebida() .
        '
        <input class="form-check-input mt-0 mx-auto d-block" style="width: 100%;" type="checkbox" name='.$produto->getValorEntrada() .' value='.$produto->getValorEntrada() .'></input>
        </div>';
    }
}

$css = new css();


?>