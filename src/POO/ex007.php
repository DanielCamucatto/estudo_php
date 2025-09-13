<?php
// Crie um método public function setNome($novoNome) dentro da sua classe. Este método deve:

// Receber um parâmetro $novoNome.

// Adicionar uma simples verificação: se o $novoNome não estiver vazio, ele deve atribuir o valor à propriedade privada $this->nome.

class estudante {
    private $nome; 
    public $matricula;
    public $notas = [];

    public function __construct($nome, $matricula)
    {
        $this->nome = $nome;
        $this->matricula = $matricula;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($novoNome){
        if($novoNome !== null){
            $this->nome = $novoNome;
        }
    }

    public function adicionarNota($nota){
        $this->notas[] = $nota;
    }

    public function calcularMedia(){
        if(count($this->notas) === 0){
            return 0;
        }

        $soma = 0;
        foreach($this->notas as $nota){
            $soma +=$nota;
        }

        $media = $soma / count($this->notas);
        return $media;
    }

}

$estudante1 = new estudante("Elias", "9999999");
$estudante1->setNome("Rodolfo");
echo "O novo nome do Estudante é {$estudante1->getNome()}";
