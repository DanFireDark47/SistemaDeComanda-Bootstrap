<?php
include_once('Css Controller.php');
class Produto{
    public $nome;
    public $preco;
    public $foto;
    public $categoria;
    public $ingredientes;
    public $ValorEntrada; //código no sistema para identificar o produto

    public function setNome($n){
        $this->nome = $n;
    }
    public function getNome(){
        return $this->nome;
    }

    public function setPreco($n){
        $this->preco = $n;
    }
    public function getPreco(){
        return $this->preco;
    }

    public function setFoto($n){
        $this->foto = $n;
    }
    public function getFoto(){
        return $this->foto;
    }

    public function setCategoria($n){
        $this->categoria = $n;
    }
    public function getCategoria(){
        return $this->categoria;
    }

    public function setIngredientes($n){
        $this->ingredientes = $n;
    }
    public function getIngredientes(){
        return $this->ingredientes;
    }
    
    public function getNomePreco(){
        return "<li class='list-group-item list-group-item-dark'>". $this->nome. ": " . $this->preco. "</li>";
    }
     public function setValorEntrada($n){
        $this->ValorEntrada = $n;
    }
    public function getValorEntrada(){
        return $this->ValorEntrada;
    }
}

class Comida extends Produto{
    function getComida(){
        return '<ul class="list-group list-group-flush"">
        <li class="list-group-item bg-info p-1">Nome: ' .$this->nome. '</li>
        <li class="list-group-item bg-info p-1"> Preço: ' .$this->preco. ' R$</li>
        <li class="list-group-item bg-info p-1"> Categoria: ' .$this->categoria. '
        <li class="list-group-item bg-info p-1"> Ingredientes: ' .$this->ingredientes .'</ul>';
    }
}

$OvosComBacon = new Comida();
$OvosComBacon->setNome("Ovos Com Bacon");
$OvosComBacon->setPreco(3.5);
$OvosComBacon->setFoto("https://s2.glbimg.com/-E_JA93V8MJ9XeCC4paCZGsvAiQ=/0x0:886x664/1000x0/smart/filters:strip_icc()/s.glbimg.com/po/rc/media/2012/06/13/15/39/35/624/egg1.jpg");
$OvosComBacon->setCategoria("Café da manhã");
$OvosComBacon->setIngredientes("Ovo, Bacon");
$OvosComBacon->setValorEntrada("OvosComBacon");

$MistoQuente = new Comida();
$MistoQuente->setNome("Misto Quente");
$MistoQuente->setPreco(5);
$MistoQuente->setFoto("https://2.bp.blogspot.com/-n0BRuB8rVnM/Wwv2pb63PcI/AAAAAAAAM_E/gYTFlGH39zg95nDYtdwPteKhFc8vocccgCLcBGAs/s1600/misto-quente-receita-1.jpeg");
$MistoQuente->setCategoria("Café da manhã");
$MistoQuente->setIngredientes("Pão de forma, Presunto, Mussarela");
$MistoQuente->setValorEntrada("MistoQuente");

$SanduicheNatural = new Comida();
$SanduicheNatural->setNome("Sanduíche Natural");
$SanduicheNatural->setPreco(7);
$SanduicheNatural->setFoto("https://img.cybercook.com.br/receitas/971/sanduiche-natural-de-frango-2-840x480.jpeg");
$SanduicheNatural->setCategoria("Café da manhã, Opções Naturais");
$SanduicheNatural->setIngredientes("Pão de forma, Alface, Tomate, Patê de Peito de Peru");
$SanduicheNatural->setValorEntrada("SanduicheNatural");

$BoloDeCenoura = new Comida();
$BoloDeCenoura->setNome("Bolo De Cenoura");
$BoloDeCenoura->setPreco(3.5);
$BoloDeCenoura->setFoto("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8ZmLi6PqJG2rv5Yxho0TL46Pygn3rJY9a0w&usqp=CAU");
$BoloDeCenoura->setCategoria("Café da manhã,Sobremesa");
$BoloDeCenoura->setIngredientes("Bolo De Cenoura");
$BoloDeCenoura->setValorEntrada("BoloDeCenoura");



class Bebida extends Produto{
    public $quantidade;

    public function setQuantidade($n){
        $this->quantidade = $n;
    }
    public function getQuantidade(){
        return $this->quantidade;
    }

    function getBebida(){
        return '<ul class="list-group list-group-flush"">
        <li class="list-group-item bg-info p-1">Nome: ' .$this->nome. '</li>
        <li class="list-group-item bg-info p-1">Quantidade: ' .$this->quantidade.'</li>
        <li class="list-group-item bg-info p-1"> Preço: ' .$this->preco. ' R$</li>
        <li class="list-group-item bg-info p-1"> Categoria: ' .$this->categoria. '
        <li class="list-group-item bg-info p-1"> Ingredientes: ' .$this->ingredientes .'</ul>';
        
    }

}

$cafe = new Bebida();
$cafe->setNome("Café");
$cafe->setPreco(1.5);
$cafe->setFoto("http://s2.glbimg.com/P6Nn4AXYPq-K1Xek4cCKyONYYyA=/e.glbimg.com/og/ed/f/original/2014/01/15/cafe.jpg");
$cafe->setCategoria("Café da manhã");
$cafe->setIngredientes("Café");
$cafe->setQuantidade("240ml");
$cafe->setValorEntrada("cafe");

$sucoDeLaranja = new Bebida();
$sucoDeLaranja->setNome("Suco de Laranja");
$sucoDeLaranja->setPreco(5);
$sucoDeLaranja->setFoto("https://www.receiteria.com.br/wp-content/uploads/receitas-de-suco-de-laranja.jpg");
$sucoDeLaranja->setCategoria("Café da manhã, Opções Naturais");
$sucoDeLaranja->setIngredientes("Laranja, Água, Açúcar");
$sucoDeLaranja->setQuantidade("1L");
$sucoDeLaranja->setValorEntrada("sucoDeLaranja");

$cocaCola = new Bebida();
$cocaCola->setNome("Coca Cola");
$cocaCola->setPreco(5);
$cocaCola->setFoto("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqXDa-yPLq0a_JdyhrJjGI-88whw_GhKJr5g&usqp=CAU");
$cocaCola->setCategoria("Bebidas Gaseificada");
$cocaCola->setIngredientes("Coca Cola");
$cocaCola->setQuantidade("350ml");
$cocaCola->setValorEntrada("cocaCola");

$chaDeCamomila = new Bebida();
$chaDeCamomila->setNome("Chá De Camomila");
$chaDeCamomila->setPreco(2);
$chaDeCamomila->setFoto("https://xtudoreceitas.com/wp-content/uploads/Cha-de-Camomila-os-Beneficios-para-Saude.jpg");
$chaDeCamomila->setCategoria("Opções Naturais");
$chaDeCamomila->setIngredientes("Chá De Camomila");
$chaDeCamomila->setQuantidade("240ml");
$chaDeCamomila->setValorEntrada("chaDeCamomila");


?>