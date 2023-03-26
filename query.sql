CREATE TABLE `juego`.`equipos` (
  `idEquipo` INT NOT NULL,
  `nombreEquipo` VARCHAR(45) NOT NULL,
  `puntajeEquipo` VARCHAR(45) NOT NULL,
  `tablaEquipo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idEquipo`));


INSERT INTO `juego`.`equipos` (`idEquipo`, `nombreEquipo`, `puntajeEquipo`, `tablaEquipo`) VALUES ('1', 'Barca', '34', '');