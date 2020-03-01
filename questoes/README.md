
# PHP + SQL SERVER
## Questão 1

### ER

<img src="https://github.com/ieleny/api_polivalencia/blob/master/base_dados/ER/er_api.PNG">

### DDL
<pre>
    CREATE DATABASE polivalencia

    CREATE TABLE funcionario
    (
        id_funcionario INT NOT NULL IDENTITY PRIMARY KEY,
        nome_funcionario VARCHAR(45) NOT NULL,
        data_funcionario DATETIME2 NULL,
        cidade_funcionario VARCHAR(45) NOT NULL,
        telefone_funcionario VARCHAR(14) NOT NULL,
        cpf_funcionario VARCHAR(15) NOT NULL
    );

    CREATE TABLE tipo_posto
    (
        id_tipo_posto INT NOT NULL IDENTITY PRIMARY KEY,
        nome_tipo_posto VARCHAR(45) NOT NULL
    );

    CREATE TABLE posto_trabalho
    (
        id_posto_trabalho INT NOT NULL IDENTITY PRIMARY KEY,
        id_tipo_posto_trabalho INT NOT NULL,
        nome_posto_trabalho VARCHAR(45) NOT NULL,
        pais_posto_trabalho VARCHAR(45) NOT NULL,
        tipo_posto_id_tipo_posto INT NOT NULL
            CONSTRAINT  fk_posto_trabalho_tipo_id_tipo_posto     FOREIGN KEY  (tipo_posto_id_tipo_posto)   REFERENCES  tipo_posto(id_tipo_posto)
    );

    CREATE TABLE funcionario_has_posto_trabalho
    (
        funcionario_id_funcionario INT NOT NULL,
        posto_trabalho_id_posto_trabalho INT NOT NULL,
        data_habilitacao_funcionario_has_posto_trabalho DATETIME2,
        data_validade_funcionario_has_posto_trabalho DATETIME2,
        CONSTRAINT  fk_funcionario_has_posto_trabalho_id_funcionario			  FOREIGN KEY  (funcionario_id_funcionario)         REFERENCES  funcionario(id_funcionario),
        CONSTRAINT  fk_funcionario_has_posto_posto_trabalho_id_posto_trabalho     FOREIGN KEY  (posto_trabalho_id_posto_trabalho)   REFERENCES  posto_trabalho(id_posto_trabalho)
    );
</pre>

## Questão 2
<pre>
    SELECT * FROM dbo.funcionario AS funcionario
        INNER JOIN dbo.funcionario_has_posto_trabalho AS has_posto_trabalho ON funcionario.id_funcionario   =  has_posto_trabalho.funcionario_id_funcionario
        INNER JOIN dbo.posto_trabalho                 AS posto_trabalho     ON has_posto_trabalho.posto_trabalho_id_posto_trabalho  =  posto_trabalho.id_posto_trabalho
    WHERE       
        has_posto_trabalho.data_habilitacao_funcionario_has_posto_trabalho >= DATEADD(month, +1, GETDATE()) AND posto_trabalho.nome_posto_trabalho LIKE '%SÃO PAULO%';

</pre>

# SQL
## Questão 1
<pre>

    INSERT INTO [dbo].[Marca]
           ([Id]
           ,[Nome]
           ,[Pais]
           ,[Fornecedor]
     VALUES
           (1 , 'Bastremp','Brazil','AMAZON')
GO

INSERT INTO [dbo].[Produtos]
           ([Id]
           ,[Nome]
           ,[Peso]
           ,[IdMarca])
     VALUES
           (1,'Geladeira',10000,1)
GO

INSERT INTO [dbo].[Marca]
           ([Id]
           ,[Nome]
           ,[Pais]
           ,[Fornecedor]
     VALUES
           (2 , 'Valfenda','Brazil','AMAZON')
GO

INSERT INTO [dbo].[Produtos]
           ([Id]
           ,[Nome]
           ,[Peso]
           ,[IdMarca])
     VALUES
           (1,'Parafuso',0.1,2)
GO

</pre>

## Questão 2
<pre>

    SELECT 
        produto.id,
        produto.nome
    FROM dbo.Marca AS marca
        INNER JOIN  dbo.Produtos AS produtos ON marca.id = produtos.IdMarca
    WHERE 
        marca.Nome like '%Valfenda%'


</pre>

# NOSQL
## Questão 1
Um banco NoSql, é uma tecnologia que não faz relações entre tabelas e com alto desempenho. Por isso que as "tabelas" se chamam Collections que são em formato em JSON. Por ser nesse formato são utilizados principalmente em projetos de BI(Business Intelingence). Exemplo: MogoDB


# API - LINK
https://github.com/ieleny/api_polivalencia

# PHP e Orientado a Objetos
## Questão 1

### O que é Modificadore de acesso?
São responsaveis por garantir niveis de acesso para as classe, objetos e metodos. Informando quais poderão ser utilizadas dando mais segurança a alterações de desenvolvedores futuros. Existem 3 tipos de modificadoes de acesso são eles publico, privado e protegido.

### Publico
São classes, objetos e metodos, podem ser acessada por qualquer classe. 

### Privado 
São classes, objetos e metodos, podem ser acessada de sua propria classe.

### Protected
São classes, objetos e metodos, podem ser acessadas por classes que possue alguma hereditariedade. 



