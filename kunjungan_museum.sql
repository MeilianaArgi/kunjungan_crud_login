
CREATE DATABASE IF NOT EXISTS museum_db;
USE museum_db;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(255)
);

INSERT INTO users (username, password) VALUES
('admin', MD5('admin123'));

CREATE TABLE IF NOT EXISTS kunjungan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    tanggal DATE,
    museum VARCHAR(100),
    kesan TEXT
);

INSERT INTO kunjungan (nama, tanggal, museum, kesan) VALUES
('Andi', '2024-03-15', 'Museum Nasional', 'Sangat menarik'),
('Siti', '2024-04-01', 'Museum Geologi', 'Bermanfaat'),
('Budi', '2024-04-10', 'Museum Kereta Api', 'Menyenangkan');
