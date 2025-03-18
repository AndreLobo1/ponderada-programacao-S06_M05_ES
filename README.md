# Atividade ponderada: Elaboração de aplicação integrada a um banco de dados
Este repositório contém a atividade ponderada da semana 6 do módulo 5 do curso de engenharia de software do Inteli (Instituto de Tecnologia e Liderança). A atividade, intitulada "Elaboração de aplicação integrada a um banco de dados", tem como objetivo desenvolver uma aplicação que permita a criação e listagem de registros em um banco de dados. Além disso, para ampliar as funcionalidades, incluímos a opção de remoção de registros.

O arquivo principal é o [`SamplePage.php`](https://github.com/AndreLobo1/ponderada-programacao-S06_M05_ES/blob/main/SamplePage.php), localizado na raiz do repositório. Nele, está contido o código da página em questão.  

Para visualizar a aplicação em funcionamento, você pode acessar este [vídeo](https://www.loom.com/share/06de9584d121476bbf9bb512533b9d23?sid=e3fad0b4-f504-44a9-a025-a3d10c6973a4).  

O vídeo apresenta a criação e exclusão de registros, além de demonstrar a instância EC2 e o RDS no console da AWS. Também é exibida a verificação das operações via terminal, onde consultamos diretamente as tabelas do banco de dados.  

A aplicação utiliza uma tabela chamada `alunos`, que contém os seguintes campos:  

<div align="center">

| Campo                 | Tipo de dado       |  
|----------------------|------------------|  
| `id`                | INT AUTO_INCREMENT |  
| `aluno`             | VARCHAR(100)       |  
| `profissional`      | VARCHAR(100)       |  
| `tecnologia_assistiva` | BOOLEAN           |  
| `data_nascimento`   | DATE               |  
| `matricula`         | VARCHAR(20) UNIQUE |  

</div>  

Dessa forma, a tabela possui um total de 6 campos com 4 tipos diferentes de dados (`INT`, `VARCHAR`, `BOOLEAN` e `DATE`), superando os requisitos da atividade, que exigiam 4 campos e 3 tipos de dados diferentes.
