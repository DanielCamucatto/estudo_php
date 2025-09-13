<?php
//     Seu Desafio: A Classe CarrinhoDeCompras
// Crie uma classe chamada CarrinhoDeCompras que vai simular um carrinho online.

// Essa classe deve ter:

// Uma propriedade pública chamada $itens, que deve ser um array vazio por padrão.

// Um método público chamado adicionarItem que recebe dois parâmetros: $nomeDoProduto e $preco.

// Dentro do método adicionarItem, você deve criar uma variável local chamada $item que seja um array associativo com as chaves "nome" e "preco".

// Depois de criar esse array local, adicione-o à propriedade $itens do objeto, usando o this.

// Crie um método público chamado total que percorra o array $itens e retorne a soma de todos os preços.

// Depois de criar a classe, siga estes passos para testar:

// Crie um novo objeto CarrinhoDeCompras.

// Adicione alguns produtos usando o método adicionarItem().

// Chame o método total() e exiba o resultado na tela.

// Como você faria essa classe e a chamaria para testar?

    class CarrinhoDeCompras{
        public $itens = []; 

        public function adicionarItems($nomeDoProduto, $preco){
            $item = [
                'nome'=> $nomeDoProduto,
                'preco'=> $preco
            ];
    
            $this->itens[] = $item;

        }

        public function total(){ 
            $somaTotal = 0;

            foreach( $this->itens as $item){
                $somaTotal += $item['preco'];
            }

            echo "O valor total da sua compra é de " . $somaTotal . " reais";
        }

    }

    $carrinho1 = new CarrinhoDeCompras(); 
    $carrinho1->adicionarItems('xbox360', 1500); 
    $carrinho1->adicionarItems('controle', 450); 
    $carrinho1->adicionarItems('jogo', 350); 

    $carrinho1->total();
?>