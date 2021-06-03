
create database hernandezlu;
use hernandezlu;


CREATE TABLE `alumnos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Semestre` int(11) NOT NULL,
  `Promedio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `alumnos` (`ID`, `Nombre`, `Apellido`, `Semestre`, `Promedio`) VALUES
(1, 'Judit', 'Hernandez', 7, 70),
(3, 'Juan', 'Tobon', 7, 71),
(5, 'Daniel', 'Martinez', 9, 95),
(6, 'Carlos', 'Santana', 7, 85),
(7, 'Mariam', 'Galvan', 8, 60);


ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `alumnos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;


