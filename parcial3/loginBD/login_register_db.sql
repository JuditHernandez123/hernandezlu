
create database login_ju;
use login_ju;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;



INSERT INTO `usuarios` (`id`, `nombre_completo`, `correo`, `usuario`, `contrasena`) VALUES
(2, 'Daniel Martinez Mota', 'danmar@hotmail.com', 'Daniel', 'passw0rd'),
(5, 'Judit Hernandez Luna', 'juditlu@hotmail.com', 'Judit', 'contraseña'),
(6, 'Luis Lopez', 'Luis30@hotmail.com', 'Luis30', 'Luis123'),
(7, 'Jose Acevedo', 'jose123@gmail.com', 'Jose_A', 'passw0rd'),
(8, 'Alejandra Hernandez', 'ale_h15.@hotmail.com', 'Alejandra', 'e0469addd8d57a3623494096dabc19bebca1a038c9da696940'),
(9, 'Maria Anabel', 'maria123@hotmail.com', 'Maria', 'e0469addd8d57a3623494096dabc19bebca1a038c9da696940');


ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;


