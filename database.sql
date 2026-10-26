CREATE DATABASE IF NOT EXISTS hit_snooker_club
  CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE hit_snooker_club;

CREATE TABLE IF NOT EXISTS enquiries (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  full_name VARCHAR(100) NOT NULL,
  email VARCHAR(150) NOT NULL,
  phone VARCHAR(30) NULL,
  preferred_game ENUM('Snooker', 'Pool', 'Both') NOT NULL,
  message VARCHAR(1000) NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);
