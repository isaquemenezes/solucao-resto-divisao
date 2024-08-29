# Abordagem Para a Solução:
1. Experiência Prévia em plataformas de resoluções de problemas de programação
	A experiência prévia em platformas de desafios como beecrowd, foi fundamental para a solução do problema em si. Já eu já sabia, que fazem vários teste dentro do critério estabelecido[ A (1 <= A <= 10 ^ 100000) e B (1 <= B <= 10 ^ 9)],

2. Matemática e Programação é a dupla perfeita para se fazer testes, pois voce sempre tem a chance de testar, e corrigir, ou testar e tentar novamente.

3. Depois de várias tentativas, a plataforma deu-me alguns indicios que eu poderia está no caminho certo. Então neste ponto eui parei e olhei novamente para a questão, e organizei meus dados em tópicos: o que eu tenho ? Tenho o item 1[Entrada: 8,3]; item 2[Saída: 2 ]; item 3[A (1 <= A <= 10 ^ 100000) e B (1 <= B <= 10 ^ 9)]. O que eu quero ? [resto da divisão de A ÷ B].

4. Número Muito Grande em PHP: Aqui o problema principal foi o tratamento dado aos valores de entradas para A e B. Pois php nao suporta tipos números extremamentes altos como o proposto pelo desafio, então minha busca se intensificou neste sentido, como trabalhar com números altos em PHP. A resposta foi conversao de string. 
```
$resto = ($resto * 10 + (int)$A[$i]) % $B;
```   

5. Os Testes:
- 5.1 Os teste foram os mais complicados por conta da plataforma, que hora bugava e outra não aceitava a solução proposta. Nesse sentido foi tentativas e erros até enontrar uma solução aceitável:

6. O código:
<img src="preview01.png"/>   

# O Problema
<p>John, anteriormente, estava acertando todas as questões propostas por seu colega, o que o deixou muito zangado. Tal "colega" acreditava que John estava acertando facilmente as perguntas porque o primeiro número, no caso o A, não era tão grande. Então, ele pegou uma folha e a encheu inteirinha, com apenas um número, representando o A. Como ele achou que seria impossível descobrir tal resposta com esse número gigantesco, pediu para um de seus amigos escolher um segundo número, dessa vez sem exageros, para representar o B.</p>

<p>

Como John sabe muitas teorias matemáticas, esse desafio para ele não foi nada difícil e ele achou com toda precisão e certeza do mundo o resto da divisão de A ÷ B.</p>

<p>

Sua tarefa é informar o número que John encontrou calculando o resto da divisão de A ÷ B, já que você é a única pessoa que ele contou a resposta. </p>

<p>

Entrada <br>
A entrada contém dois inteiros A (1 <= A <= 10 ^ 100000) e B (1 <= B <= 10 ^ 9). </p>


<p>
Saída <br>
A saída contém um único inteiro que é o resto da divisão de A ÷ B.<br>
Exemplo de Entrada: 8,3<br>
Exemplo de Saída: 2 <br>
</p>

### Referencias
- [php manual types integer](https://www.php.net/manual/pt_BR/language.types.integer.php)
- [stackoverflow maior valor php](https://pt.stackoverflow.com/questions/183206/como-obter-o-maior-valor-num%C3%A9rico-suportado-pelo-php)
- [php manual types string](https://www.php.net/manual/pt_BR/language.types.string.php)
- [beecrowd](https://judge.beecrowd.com/pt/problems/view/3104)