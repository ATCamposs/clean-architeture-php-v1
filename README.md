Uma entidade, precisa de uma identidade.
Exemplo: não deveriamos precisar validar nossos dados baseado em um dominio externo, como um banco de dados auto incremental para gerar id. Essa validação deveria estar na própria entidade.


**Objetos de valor**
 - Objetos de valor não são entidades.
 - Objetos de valor não precisam de identificadores únicos.
 - Objetos de Valor são considerados iguais, se todos os seus atributos tiverem valor igual.
 - https://martinfowler.com/bliki/ValueObject.html


**Módulos**

Os modulos no PHP são iguais aos "packages" dos java ou ao namespace do C#.

Por isso usamos namespaces para separar as aplicações por módulos.


**Screaming Architeture**

Seguindo este principio a arquitetura fica mais simples e é mais fácil entender o projeto, facilitando a entrada de novas pessoas no projeto(por exemplo)

https://blog.cleancoder.com/uncle-bob/2011/09/30/Screaming-Architecture.html


**Arquitetura Hexagonal**
 - Quando temos arquitetura em camadas, só podemos ter dependência de fora para dentro.
 - Também pode ser chamada de "arquitetura ports e adapters".


https://miro.medium.com/max/700/1*dayDz6OTNc2qSS3QhppATA.png


**Arquitetura Limpa**
 - Entidades/value objects/ factorys(dados que representam o domínio) tem as regras de negócio.
 - Casos de uso, regras que nossa aplicação executa.
 - Os casos de uso precisam conhecer as entidades.
 - Os controllers são a fronteira entre nossos casos de uso e a camada mais externa da aplicação.(a web/interface do usuário/banco de dados).


https://blog.cleancoder.com/uncle-bob/images/2012-08-13-the-clean-architecture/CleanArchitecture.jpg


**Arquitetura DDD**
 - A interface irá conversar com a aplicação.
 - A aplicação irá conversar com o dominio.
 - O dominio pode conhecer algumas classes da infraestrutura.


http://3.bp.blogspot.com/_4YU41vAO9bk/S8jcreErkVI/AAAAAAAAAYU/PcA6jFxmFQE/s1600/dddlayered.png


**_Assim, o nosso domínio (camada mais interna) é independente de qualquer detalhe exterior. Nossa aplicação depende apenas do nosso domínio, e não conhece detalhes de infraestrutura. A camada de infraestrutura apoia as camadas mais interiores._**


Ao desenvolver um sistema complexo, o domínio deve ser o foco. Por isso, ele é a camada central dos padrões de arquitetura.

Web, frameworks e mecanismos de persistência (como bancos de dados) são meros detalhes. São ferramentas para executar suas regras de negócio.

Executar a sua aplicação pela CLI deve ser tão fácil quanto através de uma API. O mesmo vale para uma interface Web.

O conceito de modelarmos a nossa aplicação pensando primeiramente no domínio é chamado de Domain Driven Design, ou design orientado a domínio.


**Classes de serviço**

_As nossas regras de negócio devem ficar nas entidades e Objetos de valor, mas nem sempre isso faz sentido. Quando precisarmos executar alguma ação que não faça parte de nenhuma entidade nem de um objeto de valor, podemos utilizar um Service._ **Como por exemplo os "cifradores" de senha**

Os termos Use Case, Application Service e Command Handler são basicamente sinônimos e servem para fornecer pontos de entrada na sua aplicação, de forma independente dos mecanismos de entrega (Web, CLI, etc).

_A classe "matricular aluno" é um use case_