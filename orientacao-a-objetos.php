<?php

/**
 * A Programação Orientada a Objetos (POO) é um paradigma de programação que organiza o código em torno de objetos, que são instâncias de classes. 
 * Cada objeto pode conter atributos (propriedades ou dados) e métodos (funções que operam sobre os dados). 
 * A POO é amplamente utilizada para criar código mais modular, reutilizável, e fácil de manter.
 */

# Classe e Objeto
# Uma classe define um modelo ou blueprint para criar objetos.
# Atributos são variáveis que armazenam o estado do objeto.
# Métodos são funções que definem o comportamento do objeto.
class Aviao
{
    public $marca;
    public $modelo;

    public function voar()
    {
        return "O avião está voando.";
    }
}

$aviao = new Aviao(); // Criando um objeto da classe Aviao
$aviao->marca = "Boeing"; // Atribuindo valores aos atributos do objeto
$aviao->modelo = "787 Dreamliner";

echo $aviao->voar(); // Chamando um método do objeto

/**
 * Modificadores de Acesso
 * Os modificadores de acesso determinam a visibilidade de atributos e métodos:
 * - `public`: acessível de qualquer lugar.
 * - `protected`: acessível apenas pela própria classe e subclasses.
 * - `private`: acessível apenas pela própria classe.
 */
class Pessoa
{
    private string $nome;
    protected int $idade;
    public string $email;

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getNome(): string
    {
        return $this->nome;
    }
}

$eduardo = new Pessoa(); // Criando um objeto da classe Pessoa
$eduardo->setNome("jonh"); // Definindo um valor usando um método setter
$eduardo->email = "jonh@gmail.com"; // Acesso público permitido diretamente
echo $eduardo->getNome(); // Obtendo o nome usando o getter
echo $eduardo->email; // Exibindo o e-mail

/**
 * Construtores e Destrutores
 * O construtor é um método especial chamado automaticamente quando uma nova instância é criada.
 * O destrutor é chamado quando o objeto é destruído.
 */
class Usuario
{
    public $nome;

    // Construtor
    public function __construct(string $nome)
    {
        $this->nome = $nome;
        echo "O usuário " . $this->nome . " foi criado \n";
    }

    // Destrutor
    public function __destruct()
    {
        echo "Removendo o usuário " . $this->nome . " da memória \n";
    }
}

$usuario = new Usuario("jonh"); // Ao criar o objeto, o construtor é chamado automaticamente

/**
 * Herança
 * A herança permite que uma classe (subclasse) herde atributos e métodos de outra classe (classe pai).
 */
class Animal
{
    public function fazerSom(): string
    {
        return "Algum som";
    }
}

class Cachorro extends Animal
{
    public function fazerSom(): string
    {
        return "Uau uau \n";
    }
}

$meuCachorro = new Cachorro(); // Instância de Cachorro, que herda de Animal
echo $meuCachorro->fazerSom(); // O método fazerSom é sobrescrito na classe Cachorro

/**
 * Polimorfismo
 * O polimorfismo permite que um método tenha diferentes implementações dependendo da classe que o chama.
 */
class Gato extends Animal
{
    public function fazerSom(): string
    {
        return "Miau miau";
    }
}

$gato = new Gato(); // Instância da classe Gato

function somDoAnimal(Animal $animal)
{
    echo $animal->fazerSom();
}

somDoAnimal($gato); // Chama o método fazerSom() de Gato, mostrando o polimorfismo

/**
 * Encapsulamento
 * O encapsulamento restringe o acesso direto aos atributos de um objeto e proporciona segurança por meio de métodos acessores (getters e setters).
 */
class Produto
{
    private float $preco;

    public function setPreco(float $preco)
    {
        if($preco > 0) {
            $this->preco = $preco;
        }
    }

    public function getPreco(): float
    {
        return $this->preco;
    }
}

$arroz = new Produto();
$arroz->setPreco(4.89);
echo $arroz->getPreco();

/**
 * Interfaces
 * Uma interface define um contrato que uma classe deve implementar. As classes que implementam a interface devem definir todos os métodos da interface.
 */
interface Forma
{
    public function calcularArea();
}

class Retangulo implements Forma
{
    private $largura;
    private $altura;

    public function __construct($largura, $altura)
    {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function calcularArea()
    {
        return $this->largura * $this->altura;
    }
}

$retangulo = new Retangulo(300, 40);
var_dump($retangulo->calcularArea()); // Implementa o método calcularArea da interface Forma

/**
 * Abstração
 * A abstração permite criar classes abstratas que não podem ser instanciadas diretamente. Elas servem como um modelo para outras classes.
 */
abstract class Transporte
{
    abstract public function mover();
}

class Onibus extends Transporte
{
    public function mover()
    {
        return "Ônibus se movendo";
    }
}

$onibus = new Onibus();
var_dump($onibus->mover()); // Implementação do método mover na classe Onibus

/**
 * Traits
 * Traits permitem compartilhar métodos entre classes sem usar herança. Eles promovem a reutilização de código em múltiplas classes.
 */
trait PrecoTrait
{
    public function aplicarDesconto($preco, $percentual)
    {
        return $preco - ($preco * $percentual / 100);
    }
}

class Produto2
{
    use PrecoTrait; // Usa o trait PrecoTrait
}

$feijao = new Produto2();
var_dump($feijao->aplicarDesconto(4.89, 10)); // Aplica o desconto de 10% no preço
