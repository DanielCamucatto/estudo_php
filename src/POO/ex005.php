<?php 

// Crie uma classe chamada Agenda que vai simular uma lista de contatos.

// Essa classe deve ter:

// Uma propriedade pública chamada $contatos, que deve ser um array vazio por padrão.

// Um método público chamado adicionarContato que recebe dois parâmetros: $nome e $telefone.

// Dentro do método adicionarContato, crie uma variável local que seja um array associativo com as chaves "nome" e "telefone".

// Adicione este array local à propriedade $contatos do objeto.

// Um método público chamado buscarContato que recebe um único parâmetro: $nomeParaBuscar.

// O método buscarContato deve percorrer o array $contatos e, se encontrar um contato com o nome correspondente, deve retornar o telefone desse contato. Caso não encontre, deve retornar a string "Contato não encontrado.".

// Depois de criar a classe, siga estes passos para testar:

// Crie um novo objeto Agenda.

// Adicione alguns contatos usando o método adicionarContato().

// Chame o método buscarContato() para procurar por um nome que existe e exiba o resultado na tela.

// Chame o método buscarContato() novamente, mas para um nome que não existe, e exiba a mensagem de erro.

class Agenda {
    public $contatos = [];

    public function adicionarContatos($nome, $telefone){
        $adicionaContato = [
            "nome"=> $nome,
            "telefone"=> $telefone
        ];

        $this->contatos[] = $adicionaContato;
    }

    public function buscarContato($nomeParaBuscar){
        foreach($this->contatos as $contato){
            if($nomeParaBuscar === $contato["nome"] ){
                return "O telefone do seu contato é " . $contato["telefone"];
            }
        }

        return 'contato não foi encontrado';
    }
}

$listaDeContatos = new Agenda();
$listaDeContatos->adicionarContatos("Daniel", "999999-99999");
$listaDeContatos->adicionarContatos('Solange', "8888-8888");
$listaDeContatos->adicionarContatos('Beto', "7777-7777"); 

echo $listaDeContatos->buscarContato("Daniel"); 
echo $listaDeContatos->buscarContato('Solange');
echo $listaDeContatos->buscarContato("Luci"); 