-- Database website Beras Domba
-- Import file ini melalui phpMyAdmin (menu Import).

CREATE DATABASE IF NOT EXISTS beras_domba
  CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE beras_domba;

CREATE TABLE IF NOT EXISTS products (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(120) NOT NULL,
  description TEXT NOT NULL,
  image_url VARCHAR(600) NOT NULL,
  badge VARCHAR(80) NOT NULL,
  category ENUM('rumah', 'usaha') NOT NULL DEFAULT 'rumah',
  tag_one VARCHAR(80) NOT NULL DEFAULT '',
  tag_two VARCHAR(80) NOT NULL DEFAULT '',
  price DECIMAL(12,2) NULL,
  price_text VARCHAR(80) NOT NULL,
  price_note VARCHAR(120) NOT NULL DEFAULT '',
  button_text VARCHAR(40) NOT NULL DEFAULT 'Pesan',
  is_active TINYINT(1) NOT NULL DEFAULT 1,
  sort_order INT NOT NULL DEFAULT 0,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

INSERT INTO products
(name, description, image_url, badge, category, tag_one, tag_two, price, price_text, price_note, button_text, sort_order)
VALUES
('Beras Domba 2,5 kg', 'Beras pandan wangi pilihan, pulen, alami, dan memiliki aroma harum saat dimasak.', 'https://images.unsplash.com/photo-1586201375761-83865001e31c?auto=format&fit=crop&w=850&q=85', 'Favorit Keluarga', 'rumah', 'Pulen harum', 'Tanpa pengawet', 44000, 'Rp 44.000', 'Harga pada desain referensi', 'Pesan', 1),
('Beras Domba 3 kg', 'Beras premium dengan tekstur ekstra pulen dan butiran utuh untuk hidangan keluarga harian.', 'https://images.unsplash.com/photo-1536304993881-ff6e9eefa2a6?auto=format&fit=crop&w=850&q=85', 'Best Seller', 'rumah', 'Butiran pilihan', 'Segar', 45000, 'Rp 45.000', 'Harga pada desain referensi', 'Pesan', 2),
('Beras Domba 5 kg', 'Beras pilihan untuk persediaan keluarga dengan proses pengolahan yang memperhatikan kebersihan.', 'https://images.unsplash.com/photo-1516684732162-798a0062be99?auto=format&fit=crop&w=850&q=85', 'Pilihan Khusus', 'rumah', 'Kemasan keluarga', 'Mutu terjaga', 70500, 'Rp 70.500', 'Harga pada desain referensi', 'Pesan', 3),
('Beras Domba 10 kg', 'Kemasan praktis untuk keluarga besar, warung makan, dan kebutuhan konsumsi rutin.', 'https://images.unsplash.com/photo-1574323347407-f5e1ad6d020b?auto=format&fit=crop&w=850&q=85', 'Kemasan Besar', 'usaha', 'Kemasan hemat', 'Untuk usaha', NULL, 'Hubungi Kami', 'Konfirmasi harga terbaru', 'Tanya Harga', 4),
('Beras Domba 25 kg', 'Kemasan karung untuk restoran, hotel, katering, dan kebutuhan pasokan usaha kuliner.', 'https://images.unsplash.com/photo-1501436513145-30f24e19fcc4?auto=format&fit=crop&w=850&q=85', 'Kemitraan B2B', 'usaha', 'Pasokan usaha', 'Jadwal distribusi', NULL, 'Hubungi Kami', 'Penawaran sesuai kebutuhan', 'Tanya Harga', 5),
('Paket Kemitraan Usaha', 'Konsultasikan kebutuhan beras, ukuran kemasan, jadwal pengiriman, dan penawaran pasokan rutin.', 'https://images.unsplash.com/photo-1592997571659-0b21ff64313b?auto=format&fit=crop&w=850&q=85', 'Paket Kemitraan', 'usaha', 'Restoran', 'Hotel & katering', NULL, 'Penawaran Khusus', 'Untuk mitra usaha', 'Hubungi', 6);
