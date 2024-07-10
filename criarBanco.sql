CREATE DATABASE FolhaDePagamento;

USE FolhaDePagamento;

CREATE TABLE Usuario (
    idUsuario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    papel ENUM('Professor', 'Coordenador', 'Secretario') NOT NULL
);

CREATE TABLE Coordenador (
    idCoordenador INT AUTO_INCREMENT PRIMARY KEY,
    idUsuario INT NOT NULL,
    departamento VARCHAR(100) NOT NULL,
    FOREIGN KEY (idUsuario) REFERENCES Usuario(idUsuario)
);

CREATE TABLE Professor (
    idProfessor INT AUTO_INCREMENT PRIMARY KEY,
    idUsuario INT NOT NULL,
    departamento VARCHAR(100) NOT NULL,
    FOREIGN KEY (idUsuario) REFERENCES Usuario(idUsuario)
);

CREATE TABLE DetalhesSalario (
    idProfessor INT NOT NULL,
    salarioBase DECIMAL(10, 2) NOT NULL,
    beneficios DECIMAL(10, 2) NOT NULL,
    descontos DECIMAL(10, 2) NOT NULL,
    salarioLiquido DECIMAL(10, 2) AS (salarioBase + beneficios - descontos) STORED,
    PRIMARY KEY (idProfessor),
    FOREIGN KEY (idProfessor) REFERENCES Professor(idProfessor)
);

CREATE TABLE FolhaPagamento (
    idFolhaPagamento INT AUTO_INCREMENT PRIMARY KEY,
    mes INT NOT NULL,
    ano INT NOT NULL
);

CREATE TABLE Holerite (
    idHolerite INT AUTO_INCREMENT PRIMARY KEY,
    idProfessor INT NOT NULL,
    idFolhaPagamento INT NOT NULL,
    mes INT NOT NULL,
    ano INT NOT NULL,
    salarioBase DECIMAL(10, 2) NOT NULL,
    beneficios DECIMAL(10, 2) NOT NULL,
    descontos DECIMAL(10, 2) NOT NULL,
    salarioLiquido DECIMAL(10, 2) NOT NULL,
    detalhesSalario INT NOT NULL,
    FOREIGN KEY (idProfessor) REFERENCES Professor(idProfessor),
    FOREIGN KEY (idFolhaPagamento) REFERENCES FolhaPagamento(idFolhaPagamento),
    FOREIGN KEY (detalhesSalario) REFERENCES DetalhesSalario(idProfessor)
);

CREATE TABLE RelatorioPagamento (
    idRelatorio INT AUTO_INCREMENT PRIMARY KEY,
    mes INT NOT NULL,
    ano INT NOT NULL,
    departamento VARCHAR(100) NOT NULL
);

CREATE TABLE RelatorioPagamento_Holerite (
    idRelatorio INT NOT NULL,
    idHolerite INT NOT NULL,
    PRIMARY KEY (idRelatorio, idHolerite),
    FOREIGN KEY (idRelatorio) REFERENCES RelatorioPagamento(idRelatorio),
    FOREIGN KEY (idHolerite) REFERENCES Holerite(idHolerite)
);

CREATE INDEX idx_departamento_coordenador ON Coordenador(departamento);
CREATE INDEX idx_departamento_professor ON Professor(departamento);
CREATE INDEX idx_mes_ano_holerite ON Holerite(mes, ano);
CREATE INDEX idx_mes_ano_relatoriopagamento ON RelatorioPagamento(mes, ano);
