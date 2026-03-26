CREATE TABLE costellazioni (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL
);

CREATE TABLE stelle (
    sao_code VARCHAR(20) PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    coordinate_celesti VARCHAR(100),
    id_costellazione INT,
    FOREIGN KEY (id_costellazione) REFERENCES costellazioni(id) ON DELETE SET NULL
);