-- MySQL Script generated by MySQL Workbench
-- Thu Apr 25 14:39:07 2024
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mkm
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `mkm`;
-- -----------------------------------------------------
-- Schema mkm
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mkm` DEFAULT CHARACTER SET utf8 ;
USE `mkm` ;

-- -----------------------------------------------------
-- Table `mkm`.`usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mkm`.`usuario` ;

CREATE TABLE IF NOT EXISTS `mkm`.`usuario` (
  `idUsu` INT NOT NULL AUTO_INCREMENT,
  `nomeUsu` VARCHAR(150) NOT NULL,
  `cpfUsu` VARCHAR(14) NULL,
  `sobrenomeUsu` VARCHAR(150) NOT NULL,
  `telefoneUsu` VARCHAR(20) NULL,
  `emailUsu` VARCHAR(150) NULL,
  `senhaUsu` VARCHAR(50) NULL,
  `perfilUsu` VARCHAR(15) NULL DEFAULT 'Cliente' COMMENT 'Administrador\nFuncionário\nCliente',
  `situacaoUsu` VARCHAR(15) NULL DEFAULT 'Ativo' COMMENT 'Ativo\nInativo',
  `cepUsu` CHAR(9) NULL,
  `ruaUsu` VARCHAR(45) NULL,
  `numeroUsu` VARCHAR(45) NULL,
  `complementoUsu` VARCHAR(45) NULL,
  `bairroUsu` VARCHAR(45) NULL,
  `cidadeUsu` VARCHAR(45) NULL,
  `ufUsu` VARCHAR(20) NULL,
  PRIMARY KEY (`idUsu`))
ENGINE = InnoDB;

-- Insere o administrador do sistema

INSERT INTO `usuario` (`idUsu`, `nomeUsu`, `sobrenomeUsu`, `cpfUsu`, `telefoneUsu`, `emailUsu`, `senhaUsu`, `perfilUsu`, `situacaoUsu`, `cepUsu`, `ruaUsu`, `numeroUsu`, `complementoUsu`, `bairroUsu`, `cidadeUsu`, `ufUsu`) VALUES
(13, 'Admistrador', 'Do Sistema', NULL, '61998875481', 'adm@gmail.com', '202cb962ac59075b964b07152d234b70', 'Administrador', 'Ativo', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `usuario` (`idUsu`, `nomeUsu`, `sobrenomeUsu`, `cpfUsu`, `telefoneUsu`, `emailUsu`, `senhaUsu`, `perfilUsu`, `situacaoUsu`, `cepUsu`, `ruaUsu`, `numeroUsu`, `complementoUsu`, `bairroUsu`, `cidadeUsu`, `ufUsu`) VALUES
(13, 'Maria', 'Dias', NULL, '61999888778', 'maria@gmail.com', '202cb962ac59075b964b07152d234b70', 'Cliente', 'Ativo', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- -----------------------------------------------------
-- Table `mkm`.`pedido`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mkm`.`pedido` ;

CREATE TABLE IF NOT EXISTS `mkm`.`pedido` (
  `idPed` INT NOT NULL AUTO_INCREMENT,
  `dataHoraPed` DATETIME NULL,
  `valorTotalPed` DECIMAL(13,2) NULL DEFAULT 0,
  `situacaoPed` VARCHAR(15) NULL DEFAULT 'Aberto' COMMENT 'Aberto\nFinalizado\nCancelado',
  `formapagamentoPed` VARCHAR(45) NULL DEFAULT 'Não informado' COMMENT 'Pix\nCartão de Crédito \nCartão de Débito\nBoleto Bancário',
  `FK_usuario_idUsu` INT NOT NULL,
  PRIMARY KEY (`idPed`),
  INDEX `fk_pedido_usuario_idx` (`FK_usuario_idUsu` ASC)  ,
  CONSTRAINT `fk_pedido_usuario`
    FOREIGN KEY (`FK_usuario_idUsu`)
    REFERENCES `mkm`.`usuario` (`idUsu`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mkm`.`fornecedor`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mkm`.`fornecedor` ;

CREATE TABLE IF NOT EXISTS `mkm`.`fornecedor` (
  `idFor` INT NOT NULL AUTO_INCREMENT,
  `nomeFor` VARCHAR(150) NOT NULL,
  `emailFor` VARCHAR(150) NULL,
  `telefoneFor` VARCHAR(45) NULL,
  PRIMARY KEY (`idFor`))
ENGINE = InnoDB;
-- Insere o administrador do sistema
INSERT INTO `fornecedor` (`idFor`, `nomeFor`, `emailFor`, `telefoneFor`) VALUES (01, 'Shein', 'shein@gmail.com', '(74) 98578-1408');
INSERT INTO `fornecedor` (`idFor`, `nomeFor`, `emailFor`, `telefoneFor`) VALUES (02, 'Marisa', 'marisa@gmail.com', '(11) 99548-9998');

-- -----------------------------------------------------
-- Table `mkm`.`produto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mkm`.`produto` ;

CREATE TABLE IF NOT EXISTS `mkm`.`produto` (
  `idPro` INT NOT NULL AUTO_INCREMENT,
  `nomePro` VARCHAR(80) NOT NULL,
  `valorCompraPro` DECIMAL(13,2) NULL DEFAULT 0,
  `valorVendaPro` DECIMAL(13,2) NULL DEFAULT 0,
  `qtdEstoquePro` FLOAT(10,3) NULL DEFAULT 0,
  `imagemPro` VARCHAR(100) NULL,
  `qtdEstoqueMinimoPro` FLOAT(10,3) NULL DEFAULT 0,
  `codigoPro` VARCHAR(50) NULL,
  `fornecedor_idFor` INT NOT NULL,
  PRIMARY KEY (`idPro`),
  INDEX `fk_produto_fornecedor1_idx` (`fornecedor_idFor` ASC)  ,
  CONSTRAINT `fk_produto_fornecedor1`
    FOREIGN KEY (`fornecedor_idFor`)
    REFERENCES `mkm`.`fornecedor` (`idFor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

INSERT INTO `produto` (`idPro`, `nomePro`, `valorCompraPro`, `valorVendaPro`, `qtdEstoquePro`, `imagemPro`, `qtdEstoqueMinimoPro`, `codigoPro`, `fornecedor_idFor`) VALUES (NULL, 'Blusa Canelada', '19.90', '39.99', '200', 'Blusa', '50', NULL, '12');
INSERT INTO `produto` (`idPro`, `nomePro`, `valorCompraPro`, `valorVendaPro`, `qtdEstoquePro`, `imagemPro`, `qtdEstoqueMinimoPro`, `codigoPro`, `fornecedor_idFor`) VALUES (NULL, 'Vestido Azul', '40.00', '99.99', '300', 'Vestido', '50', NULL, '12');
INSERT INTO `produto` (`idPro`, `nomePro`, `valorCompraPro`, `valorVendaPro`, `qtdEstoquePro`, `imagemPro`, `qtdEstoqueMinimoPro`, `codigoPro`, `fornecedor_idFor`) VALUES (NULL, 'Calça Cargo', '70.00', '189.99', '500', 'Calça', '85', NULL, '12');
-- -----------------------------------------------------
-- Table `mkm`.`itemProduto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mkm`.`itemProduto` ;

CREATE TABLE IF NOT EXISTS `mkm`.`itemProduto` (
  `pedido_idPed` INT NOT NULL,
  `produto_idPro` INT NOT NULL,
  `qtdItemPro` FLOAT(10,3) NULL DEFAULT 0,
  `valorUnitarioPro` DECIMAL(13,2) NULL DEFAULT 0,
  PRIMARY KEY (`pedido_idPed`, `produto_idPro`),
  INDEX `fk_pedido_has_produto_produto1_idx` (`produto_idPro` ASC)  ,
  INDEX `fk_pedido_has_produto_pedido1_idx` (`pedido_idPed` ASC)  ,
  CONSTRAINT `fk_pedido_has_produto_pedido1`
    FOREIGN KEY (`pedido_idPed`)
    REFERENCES `mkm`.`pedido` (`idPed`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedido_has_produto_produto1`
    FOREIGN KEY (`produto_idPro`)
    REFERENCES `mkm`.`produto` (`idPro`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;