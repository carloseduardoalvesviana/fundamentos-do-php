<?php 

/**
 * A Programação Orientada a Objetos (POO) é um paradigma de programação que organiza o código em torno de objetos, que são instâncias de classes. 
 * Cada objeto pode conter atributos (propriedades ou dados) e métodos (funções que operam sobre os dados). 
 * A POO é amplamente utilizada para criar código mais modular, reutilizável, e fácil de manter.
 */

# Classe e Objeto
# Atributos de uma classe são variáveis que armazenam o estado de um objeto. No exemplo abaixo, `marca` e `modelo` são atributos da classe `Carro`.
# Metódos sao funcoes dentro de uma classe que realizam acoes sobre os atributos e executam alguma lógica.
class Carro
{
    public $marca;
    public $modelo;

    public function ligar()
    {
        return "O carro está ligado.";
    }
}

$meuCarro = new Carro();
$meuCarro->marca = "Toyota";
$meuCarro->modelo = "Passeio";

echo $meuCarro->ligar();

/**
 * Modificadores de acesso
 * Os modificadores de acesso determinam a visibilidade de atributos é métodos
 * Public: podem ser acessados de qualquer lugar.
 * Protected: podem ser acessados somente pela classe ou por classes derivadas (extends).
 * Private: podem ser acessados somente pela classe.
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

$eduardo = new Pessoa();
$eduardo->setNome("carlos eduardo");
$eduardo->email = "eduardostrink@gmail.com";
echo $eduardo->getNome();
echo $eduardo->email;

/**
 * Construtores e destrutores
 * O construtor é um método especial chamado automaticamente quando uma nova instância de uma classe é criada. 
 * O destrutor é executado quando o objeto é destruído.
 */
class Usuario
{
    public $nome;

    // Construtor
    public function __construct(string $nome)
    {
        $this->nome = $nome;
        echo "O usuario " . $this->nome . " foi criado \n";
    }

    // Destrutor
    public function __destruct()
    {
        echo "Removendo o usuario " . $this->nome . " da memoria \n";
    }
}

$usuario = new Usuario("eduardo");

/**
 * Heranca
 * A herança permite que uma classe (subclasse) herde os atributos e métodos de outra classe (classe pai). 
 * Isso promove a reutilização de código
 */
class Animal
{
    public function fazerSom(): string
    {
        return "Algum Som";
    }
}

class Cachorro extends Animal
{
    public function fazerSom(): string
    {
        return "Uau uau \n";
    }
}

$meuCachorro = new Cachorro();
echo $meuCachorro->fazerSom();

/**
 * Polimorfismo
 * O polimorfismo permite que um método possa ser utilizado de diferentes formas, dependendo da classe que o implementa. 
 * No exemplo anterior, o método `fazerSom()` é polimórfico porque ele pode produzir diferentes resultados dependendo da classe que o chama.
 */
class Gato extends Animal
{
    public function fazerSom(): string
    {
        return "Miau miau";
    }
}
$gato = new Gato();

function somDoAnimal(Animal $animal)
{
    echo $animal->fazerSom();
}
somDoAnimal($gato);

/**
 * Encapsulamento
 * O encapsulamento é a prática de restringir o acesso direto aos atributos de um objeto e fornecê-lo apenas por meio de métodos específicos (getters e setters). 
 * Isso melhora a segurança e flexibilidade do código
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
 * Uma interface define um conjunto de métodos que uma classe deve implementar, sem fornecer a implementação desses métodos. 
 * Ela serve como um contrato para garantir que diferentes classes tenham uma estrutura comum.
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
var_dump($retangulo->calcularArea());

/**
 * Abstracao
 * A **abstração** permite que você crie classes abstratas que não podem ser instanciadas diretamente. 
 * Elas servem como modelos para outras classes que devem implementar os métodos abstratos.
 */
abstract class Transporte
{
    abstract public function mover();
}

class Onibus extends Transporte
{
    public function mover()
    {
        return "Onibus se movendo";
    }
}
$onibus = new Onibus();
var_dump($onibus->mover());

/**
 * Traits
 * Os traits** são um mecanismo para reutilização de código em múltiplas classes. 
 * Eles permitem compartilhar métodos comuns entre diferentes classes sem usar herança.
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
    use PrecoTrait;
}

$feijao = new Produto2();
var_dump($feijao->aplicarDesconto(4.89, 10));