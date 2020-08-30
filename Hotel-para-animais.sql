/* 
UFLA        Universidade Federal de Lavras
DCC         Departamento de Ciência da Computação
Disciplina  GCC214 - INTrodução a Sistemas de Banco de Dados
Professor   Denilson Alves Pereira
Nomes       Geremias Cipriano Costa da Silva
            Júlia de Carvlho Teixeira
*/


-- Tabela Acomodação

CREATE TABLE Acomodação (
    idAcomodação        INT      NOT NULL,
    capacidade          INT(4)   NOT NULL,
    valor               DECIMAL  NOT NULL,
    disponivel          TINYINT  NOT NULL
);

-- Tabela Dono

CREATE TABLE Dono (
    CPF              CHAR(11)      NOT NULL,
    nome             VARCHAR(100)  NOT NULL,
    telefone         CHAR(11)      NOT NULL,
    email            VARCHAR(80)   NOT NULL,
    data_nascimento  DATE          NOT NULL,
    rua              VARCHAR(50)   NOT NULL,
    numero           INT(10)       NOT NULL,
    bairro           VARCHAR(80)   NOT NULL,
    complemento      VARCHAR(20)   NOT NULL,
    cidade           VARCHAR(50)   NOT NULL,
    estado           VARCHAR(45)   NOT NULL,
    cep              VARCHAR(8)    NOT NULL,
    senha            VARCHAR(15)   NOT NULL
);

-- Tabela Animal

CREATE TABLE Animal (
    idAnimal       INT(11)      NOT NULL,
    nomeAnimal    VARCHAR(45)   NOT NULL,
    anoNascimento DATE          NULL,
    observacoes   VARCHAR(150)  NULL,
    especie       VARCHAR(50)   NOT NULL,
    raca          VARCHAR(50)   NOT NULL,
    CpfDono       INT(11)       NOT NULL
);

-- Tabela Funcionário

CREATE TABLE Funcionário (
    CPF               CHAR(11)         NOT NULL,
    nome              VARCHAR(100)     NOT NULL,
    telefone          CHAR(11)         NULL,
    email             VARCHAR(80)      NOT NULL,
    data_nascimento   DATE             NULL,
    rua               VARCHAR(50)      NOT NULL,
    numero            INT(10)          NULL,
    bairro            VARCHAR(80)      NOT NULL,
    complemento       VARCHAR(20)      NULL,
    cidade            VARCHAR(50)      NOT NULL,
    estado            VARCHAR(45)      NOT NULL,
    cep               VARCHAR(8)       NULL,
    senha             VARCHAR(15)      NOT NULL
);


-- Tabela Reserva

CREATE TABLE Reserva (
    idReserva         INT      NOT NULL,
    dataEntrada       DATE     NOT NULL,
    dataSaida         DATE     NULL,
    ValorTotal        DECIMAL  NULL,
    CpfFuncionário    INT(11)  NOT NULL,
    CpfDono           INT(11)  NOT NULL,
    idAcomodação      INT      NOT NULL
);

-- Tabela ServicoExtra

CREATE TABLE ServicoExtra (
    idServicoExtra    INT             NOT NULL,
    descricao         VARCHAR(150)    NULL,
    valor             DECIMAL         NOT NULL
);

-- Tabela Reserva_has_ServicoExtra

CREATE TABLE Reserva_has_ServicoExtra (
    Reserva_idReserva             INT          NOT NULL,
    ServicoExtra_idServicoExtra   INT          NOT NULL,
    Observacoes                   VARCHAR(150) NULL,
    quantidade                    INT          NOT NULL,
    dataSolicitacao               DATE         NOT NULL
);

-- Índices de tabela Acomodacao
--
ALTER TABLE Acomodação
  ADD PRIMARY KEY (idAcomodação);

-- Índices de tabela Dono
--
ALTER TABLE Dono
  ADD PRIMARY KEY (CPF);

-- Índices de tabela Animal
--
ALTER TABLE Animal
  ADD PRIMARY KEY (idAnimal);

-- Índices de tabela Funcionario
--
ALTER TABLE Funcionário
  ADD PRIMARY KEY (CPF);

-- Índices de tabela Reserva
--
ALTER TABLE Reserva
  ADD PRIMARY KEY (idReserva),
  ADD KEY CpfFuncionário (CpfFuncionário),
  ADD KEY CpfDono (CpfDono),
  ADD KEY idAcomodação (idAcomodação);

-- Índices de tabela ServicoExtra
--
ALTER TABLE ServicoExtra
  ADD PRIMARY KEY (idServicoExtra);

-- AUTO_INCREMENT de tabela Acomodacao
--
ALTER TABLE Acomodação
  MODIFY idAcomodação int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela Animal
--
ALTER TABLE Animal
  MODIFY idAnimal int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela Reserva
--
ALTER TABLE Reserva
  MODIFY idReserva int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela ServicoExtra
--
ALTER TABLE ServicoExtra
  MODIFY idServicoExtra int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

-- Restrições de tabela Reserva_has_ServicoExtra
--
/*
ALTER TABLE Reserva_has_ServicoExtra
  ADD CONSTRAINT fk_Reserva_has_ServicoExtra_Reserva1 FOREIGN KEY (Reserva_idReserva)
      REFERENCES Reserva (idReserva)
      ON DELETE CASCADE,
  ADD CONSTRAINT fk_Reserva_has_ServicoExtra_ServicoExtra1 FOREIGN KEY (ServicoExtra_idServicoExtra)
      REFERENCES ServicoExtra (idServicoExtra)
      ON DELETE CASCADE;
*/

commit;
