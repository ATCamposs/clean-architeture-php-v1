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

