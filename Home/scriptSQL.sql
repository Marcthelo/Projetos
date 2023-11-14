CREATE TABLE `Usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '+55',
  `genero` enum('Masculino','Feminino','Outro') COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `cidade` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
use formulario;

select * from usuarios;