DROP DATABASE IF EXISTS fullstackeletro;
CREATE DATABASE IF NOT EXISTS fullstackeletro;

CREATE TABLE fullstackeletro;

CREATE TABLE fullstackeletro.people(
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	names VARCHAR(80) NOT NULL,
  phones VARCHAR(20) NOT NULL,
  posts VARCHAR(200)
);

CREATE TABLE fullstackeletro.bancos(
	codigo VARCHAR(3) NOT NULL,
	nome VARCHAR(20) NOT NULL,
    PRIMARY KEY(codigo)
);

CREATE TABLE fullstackeletro.conta_corrente(
	banco VARCHAR(3) NOT NULL,
    pessoa VARCHAR(12) NOT NULL,
    numero VARCHAR(20) NOT NULL,
    FOREIGN KEY (banco) REFERENCES bancos(codigo),
    FOREIGN KEY (pessoa) REFERENCES pessoas(cpf),
    PRIMARY KEY(numero)
);

create table fullstackeletro.usuarios(
  idusuario INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(80) NOT NULL,
  mensagem VARCHAR(200),
  email VARCHAR(80) NOT NULL UNIQUE,
  senha CHAR(32) NOT NULL
)comment = 'Para o usuário na loja FullStackEletro.';

create table fullstackeletro.produtos (
	idprodutos INT NOT NULL PRIMARY KEY auto_increment,
    nomeimagem VARCHAR(45) NOT NULL,
    descricao VARCHAR(150) NOT NULL,
    preco DECIMAL(8,2) NOT NULL,
    precofinal DECIMAL(8,2) NOT NULL,
    imagem VARCHAR(255) NOT NULL
    ) comment = 'Produtos anúnciados na loja FullStackEletro.';
    
create table fullstackeletro.pedidos (
  idpedidos INT NOT NULL auto_increment,
  nomecliente VARCHAR(45) NOT NULL,
  endereco VARCHAR(150),
  fonecliente INT NOT NULL,
  nomeproduto VARCHAR(150),
  valorunitario DECIMAL(8,2),
  quantidade INT,
  valortotal DECIMAL(8,2),
  PRIMARY KEY (idpedidos)
  ) comment = 'Produtos anunciados na loja FullStackEletro';


    SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
    START TRANSACTION;
    SET time_zone = "+00:00";

  
  INSERT INTO bancos(codigo, nome) VALUES('341','Itaú');
  INSERT INTO bancos(codigo, nome) VALUES('001','Banco do Brasil');
  INSERT INTO bancos(codigo, nome) VALUES('033','Santander');
  INSERT INTO bancos(codigo, nome) VALUES('237','Bradesco');

  INSERT INTO pessoas(cpf, nome) VALUES('86277635697','José da Silva');
  INSERT INTO pessoas(cpf, nome) VALUES('88208811874','Manoel da Silva');
  INSERT INTO pessoas(cpf, nome) VALUES('665167647743','Maria dos Santos');

  INSERT INTO conta_corrente(banco, pessoa, numero) VALUES('033','86277635697','98876788');
  INSERT INTO conta_corrente(banco, pessoa, numero) VALUES('237','86277635697','96645727');
  INSERT INTO conta_corrente(banco, pessoa, numero) VALUES('341','665167647743','9102947');
  INSERT INTO conta_corrente(banco, pessoa, numero) VALUES('001','88208811874','8120938');


  INSERT INTO bancos(codigo, nome) VALUES('442','Safra');

  INSERT INTO pessoas(cpf, nome) VALUES('12345678912','Manoela Silva');
  INSERT INTO pessoas(cpf, nome) VALUES('12345678977','Mario Santos');

  INSERT INTO `usuarios` (`idusuario`, `nome`, `mensagem`, `email`, `senha`) VALUES
  (1, 'Ana Tertuliano', 'Olá mundo!','ana.tertu.2019@gmail.com', 123456),
  (2, '', '', '', '')


  INSERT INTO produtos (idprodutos, nomeimagem, descricao, preco, precofinal, imagem) 

  VALUES
  (default, 'geladeira', 'geladeira frost free brastemp side inverse 540 litros', 6389.00, 5019.00, 'imagens/geladeira_brastemp.jpg'),
  (default, 'geladeira', 'geladeira frost free brastemp branca 375 litros', 2068.60, 1910.90, 'imagens/refrigerador_brastemp.png'),
  (default, 'geladeira', 'geladeira frost free consul prata 340 litros', 2199.90, 2069.00, 'imagens/refrigerador_consul.png'),
  (default, 'fogao', 'fogão 4 bocas consul inox com mesa de vidro', 1150.50, 1129.00, 'imagens/fogao_consul.jpg'),
  (default, 'fogao', 'fogão de piso 4 bocas atlas monaco com acendimento automático', 609.00, 519.70, 'imagens/fogao_monaco.jpeg'),
  (default, 'microondas', 'microondas consul 32 litros inox 220v', 580.00, 409.88, 'imagens/microndas_consul.png'),
  (default, 'microondas', 'microondas 25 litros espelhado philco 220', 508.70, 464.53, 'imagens/microondas_philco.png'),
  (default, 'microondas', 'forno de microondas electroluz 20l branco 110v', 459.90, 436.05, 'imagens/microondas_electroluz.jpeg'),
  (default, 'lavalouca', 'lava-louça electrolux inox com 10 serviços, 6 programas de lavagens', 3599.00, 2799.90, 'imagens/lava_loucas_electroux.jpg'),
  (default, 'lavalouca', 'lava-louças compacta 8 serviços branca 127v brastemp', 1970.50, 1730.61, 'imagens/lava_loucas_brastemp.jpg'),
  (default, 'lavaroupa', 'lavadadora de roupas brastemp 11kg com turbo performace branca', 1699.00, 1214.10, 'imagens/lavadora_brastemp.jpg'),
  (default, 'lavaroupa', 'lavadora philco inverter 12kg', 2399.90, 2179.90, 'imagens/lavadora_philco.jpeg');
  
  INSERT INTO pedidos (idpedidos, nomecliente, endereco, fonecliente, nomeproduto, valorunitario, quantidade, valortotal) 
  VALUES
  (default, 'Amanda Soares', 'Rua A, 45 - Itaquera', 1111111111, 'Geladeira Frost Free Brastemp Side Inverse 540 litros', 5019.00, 1, 5019.19),
  (default, 'Fátima Lima', 'Rua B, 155 - São Miguel', 1122222222, 'Fogão 4 Bocas Consul Inox com Mesa de Vidro', 1129.00, 2, 2258.00),
  (default, 'Maurício Rogério Souto', 'Rua C, 255 Ap15 - Santo Amaro', 1133333333, 'Microondas 25 litros Espelhado Philco 220', 464.53, 3, 1393.50),
  (default, 'Mônica Santos Soares', 'Rua D, 1 - Mooca', 1144444444, 'Lava-Louça Electrolux Inox com 10 serviços, 6 programas de lavagens', 2799.90, 1, 2799.90),
  (default, 'Félix Scherwicht', 'Rua E, 1000 - Anhangabaú', 1155555555, 'Lavadora Philco Inverter 12kg', 2179.90, 5, 10899.50),
  (default, 'Amanda Soares', 'Rua F, 45 - Itaquera', 1166666666, 'Geladeira Frost Free Brastemp Branca 375 litros', 1910.90, 1, 1910.90),
  (default, 'Fátima Lima', 'Rua G, 155 - São Miguel', 1177777777, 'Fogão de Piso 4 Bocas Atlas Monaco com Acendimento Automático', 519.70, 2, 1039.40),
  (default, 'Maurício Rogério Souto', 'Rua H, 255 Ap15 - Santo Amaro', 1188888888, 'Microondas 25 litros Espelhado Philco', 464.53, 3, 1393.59),
  (default, 'Laura Rodrigues', 'Rua I, 2 - Jundiaí', 1199999999, 'Geladeira Frost Free Brastemp Branca 375 litros', 1910.90, 1, 1910.90),
  (default, 'Lurdes Rodrigues', 'Rua J, 555 ap.106 - Pirituba', 1112345678, 'Lavadadora de Roupas Brastemp 11kg com Turbo Performace Branca', 1214.10, 10, 12141.00);
