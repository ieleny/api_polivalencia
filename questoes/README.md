
# Questão 1

## ER


## DDL

# Questão 2
SELECT * FROM dbo.funcionario AS funcionario
        INNER JOIN dbo.funcionario_has_posto_trabalho AS has_posto_trabalho ON funcionario.id_funcionario            =  has_posto_trabalho.funcionario_id_funcionario
        INNER JOIN dbo.posto_trabalho                 AS posto_trabalho     ON has_posto_trabalho.posto_trabalho_id_posto_trabalho  =  posto_trabalho.id_posto_trabalho
WHERE   
    has_posto_trabalho.data_habilitacao_funcionario_has_posto_trabalho >= DATEADD(month, +1, GETDATE()) AND posto_trabalho.nome_posto_trabalho LIKE '%SÃO PAULO%';

