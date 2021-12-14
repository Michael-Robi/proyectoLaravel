DROP PROCEDURE IF EXISTS `RegistrarNota`;
DELIMITER $$
--
-- Procedimientos
--
CREATE PROCEDURE `RegistrarNota` (
  IN `primerperiodo` DECIMAL(9,2), IN `segundoperiodo` DECIMAL(9,2),
  IN `tercerperiodo` DECIMAL(9,2),
  IN `Estudiante_codigo` VARCHAR(10), IN `Materia_idasignatura` VARCHAR(10))

BEGIN

  DECLARE definitiva decimal(9,2);
  DECLARE estado varchar(66);

  SET definitiva = ROUND((primerperiodo + segundoperiodo + tercerperiodo)/3, 1);

  IF (definitiva>=4.8 AND definitiva<=5) THEN
  SET estado='Excelente';
  END IF;
  IF (definitiva>=3.6 AND definitiva<=4.7) THEN
  SET estado='Aprobado';
  END IF;
  IF (definitiva>=3.0 AND definitiva<=3.5) THEN
  SET estado='Sobresaliente';
  END IF;
  IF (definitiva>=0 AND definitiva<3) THEN
  SET estado='Reprobado';
  END IF;

  INSERT INTO notas VALUES (NULL, primerperiodo, segundoperiodo, tercerperiodo, definitiva, estado, Estudiante_codigo, Materia_idasignatura, NOW(), NOW());
END$$

DELIMITER ;

-- --------------------------------------------------------
