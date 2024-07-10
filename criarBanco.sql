PRAGMA foreign_keys = ON;

CREATE TABLE Usuario (
    idUsuario INTEGER PRIMARY KEY AUTOINCREMENT,
    nome TEXT NOT NULL,
    email TEXT NOT NULL UNIQUE,
    senha TEXT NOT NULL,
    papel TEXT CHECK(papel IN ('Professor', 'Coordenador', 'Secretario')) NOT NULL
);

CREATE TABLE Coordenador (
    idCoordenador INTEGER PRIMARY KEY AUTOINCREMENT,
    idUsuario INTEGER NOT NULL,
    departamento TEXT NOT NULL,
    FOREIGN KEY (idUsuario) REFERENCES Usuario(idUsuario)
);

CREATE TABLE Professor (
    idProfessor INTEGER PRIMARY KEY AUTOINCREMENT,
    idUsuario INTEGER NOT NULL,
    departamento TEXT NOT NULL,
    FOREIGN KEY (idUsuario) REFERENCES Usuario(idUsuario)
);

CREATE TABLE DetalhesSalario (
    idProfessor INTEGER NOT NULL,
    salarioBase REAL NOT NULL,
    beneficios REAL NOT NULL,
    descontos REAL NOT NULL,
    salarioLiquido REAL GENERATED ALWAYS AS (salarioBase + beneficios - descontos) VIRTUAL,
    PRIMARY KEY (idProfessor),
    FOREIGN KEY (idProfessor) REFERENCES Professor(idProfessor)
);

CREATE TABLE FolhaPagamento (
    idFolhaPagamento INTEGER PRIMARY KEY AUTOINCREMENT,
    mes INTEGER NOT NULL,
    ano INTEGER NOT NULL
);

-- Tabela Holerite
CREATE TABLE Holerite (
    idHolerite INTEGER PRIMARY KEY AUTOINCREMENT,
    idProfessor INTEGER NOT NULL,
    idFolhaPagamento INTEGER NOT NULL,
    mes INTEGER NOT NULL,
    ano INTEGER NOT NULL,
    salarioBase REAL NOT NULL,
    beneficios REAL NOT NULL,
    descontos REAL NOT NULL,
    salarioLiquido REAL NOT NULL,
    detalhesSalario INTEGER NOT NULL,
    FOREIGN KEY (idProfessor) REFERENCES Professor(idProfessor),
    FOREIGN KEY (idFolhaPagamento) REFERENCES FolhaPagamento(idFolhaPagamento),
    FOREIGN KEY (detalhesSalario) REFERENCES DetalhesSalario(idProfessor)
);

CREATE TABLE RelatorioPagamento (
    idRelatorio INTEGER PRIMARY KEY AUTOINCREMENT,
    mes INTEGER NOT NULL,
    ano INTEGER NOT NULL,
    departamento TEXT NOT NULL
);

CREATE TABLE RelatorioPagamento_Holerite (
    idRelatorio INTEGER NOT NULL,
    idHolerite INTEGER NOT NULL,
    PRIMARY KEY (idRelatorio, idHolerite),
    FOREIGN KEY (idRelatorio) REFERENCES RelatorioPagamento(idRelatorio),
    FOREIGN KEY (idHolerite) REFERENCES Holerite(idHolerite)
);

CREATE INDEX idx_departamento_coordenador ON Coordenador(departamento);
CREATE INDEX idx_departamento_professor ON Professor(departamento);
CREATE INDEX idx_mes_ano_holerite ON Holerite(mes, ano);
CREATE INDEX idx_mes_ano_relatoriopagamento ON RelatorioPagamento(mes, ano);
