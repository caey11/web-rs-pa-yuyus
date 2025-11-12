CREATE DATABASE IF NOT EXISTS healthy_love;
USE healthy_love;

CREATE TABLE IF NOT EXISTS dokter (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100),
  spesialis VARCHAR(100),
  no_hp VARCHAR(20)
);

CREATE TABLE IF NOT EXISTS pasien (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100),
  umur INT,
  alamat TEXT,
  no_hp VARCHAR(20)
);

CREATE TABLE IF NOT EXISTS penyakit (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100),
  gejala TEXT,
  pengobatan TEXT
);

CREATE TABLE IF NOT EXISTS rawat_jalan (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_pasien INT,
  id_dokter INT,
  tanggal DATE,
  keluhan TEXT
);

CREATE TABLE IF NOT EXISTS rawat_inap (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_pasien INT,
  id_dokter INT,
  kamar VARCHAR(20),
  tanggal_masuk DATE,
  tanggal_keluar DATE,
  keterangan TEXT
);
