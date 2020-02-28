CREATE DATABASE polivalencia

USE polivalencia

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
    tipo_posto_id_tipo_posto INT NOT NULL
        CONSTRAINT  fk_posto_trabalho_tipo_id_tipo_posto     FOREIGN KEY  (tipo_posto_id_tipo_posto)   REFERENCES  tipo_posto(id_tipo_posto)
);

CREATE TABLE funcionario_has_posto_trabalho
(
    funcionario_id_funcionario INT NOT NULL,
    posto_trabalho_id_posto_trabalho INT NOT NULL,
    data_habilitacao_funcionario_has_posto_trabalho DATETIME2,
    CONSTRAINT  fk_funcionario_has_posto_trabalho_id_functionario			  FOREIGN KEY  (funcionario_id_funcionario)         REFERENCES  funcionario(id_funcionario),
    CONSTRAINT  fk_funcionario_has_posto_posto_trabalho_id_posto_trabalho     FOREIGN KEY  (posto_trabalho_id_posto_trabalho)   REFERENCES  posto_trabalho(id_posto_trabalho)
);