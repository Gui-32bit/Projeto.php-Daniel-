-- Banco de dados para Projeto 1
CREATE DATABASE IF NOT EXISTS _projeto_1;
USE _projeto_1;

-- Tabela clientes (modelo mínimo compatível com o projeto existente)
CREATE TABLE IF NOT EXISTS clientes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  cliente VARCHAR(255) NOT NULL,
  cidade VARCHAR(100),
  estado VARCHAR(50)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Nova tabela: enderecos_entrega
CREATE TABLE IF NOT EXISTS enderecos_entrega (
  id INT AUTO_INCREMENT PRIMARY KEY,
  cliente_id INT NOT NULL,
  logradouro VARCHAR(255) NOT NULL,
  numero VARCHAR(50) NOT NULL,
  bairro VARCHAR(100) NOT NULL,
  cidade VARCHAR(100) NOT NULL,
  estado VARCHAR(50) NOT NULL,
  cep VARCHAR(20) NOT NULL,
  complemento VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (cliente_id) REFERENCES clientes(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
