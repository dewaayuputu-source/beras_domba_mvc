<?php
// Model Produk: mencoba membaca katalog dari MySQL.
// Jika database belum diimpor atau belum terhubung, website memakai data contoh.

class Product extends Model
{
    public function all(): array
    {
        try {
            $sql = 'SELECT name, description, image_url, badge, category, tag_one, tag_two,
                           price, price_text, price_note, button_text
                    FROM products
                    WHERE is_active = 1
                    ORDER BY sort_order ASC, id ASC';
            $statement = $this->db()->query($sql);
            $rows = $statement->fetchAll();

            if (!empty($rows)) {
                return $rows;
            }
        } catch (Throwable $error) {
            // Database belum aktif atau tabel belum tersedia: lanjut memakai data contoh.
        }

        return $this->defaultProducts();
    }

    private function defaultProducts(): array
    {
        return [
            [
                'name' => 'Beras Domba 2,5 kg',
                'description' => 'Beras pandan wangi pilihan, pulen, alami, dan memiliki aroma harum saat dimasak.',
                'image_url' => 'https://images.unsplash.com/photo-1586201375761-83865001e31c?auto=format&fit=crop&w=850&q=85',
                'badge' => 'Favorit Keluarga', 'category' => 'rumah', 'tag_one' => 'Pulen harum', 'tag_two' => 'Tanpa pengawet',
                'price' => 44000, 'price_text' => 'Rp 44.000', 'price_note' => 'Harga pada desain referensi', 'button_text' => 'Pesan',
            ],
            [
                'name' => 'Beras Domba 3 kg',
                'description' => 'Beras premium dengan tekstur ekstra pulen dan butiran utuh untuk hidangan keluarga harian.',
                'image_url' => 'https://images.unsplash.com/photo-1536304993881-ff6e9eefa2a6?auto=format&fit=crop&w=850&q=85',
                'badge' => 'Best Seller', 'category' => 'rumah', 'tag_one' => 'Butiran pilihan', 'tag_two' => 'Segar',
                'price' => 45000, 'price_text' => 'Rp 45.000', 'price_note' => 'Harga pada desain referensi', 'button_text' => 'Pesan',
            ],
            [
                'name' => 'Beras Domba 5 kg',
                'description' => 'Beras pilihan untuk persediaan keluarga dengan proses pengolahan yang memperhatikan kebersihan.',
                'image_url' => 'https://images.unsplash.com/photo-1516684732162-798a0062be99?auto=format&fit=crop&w=850&q=85',
                'badge' => 'Pilihan Khusus', 'category' => 'rumah', 'tag_one' => 'Kemasan keluarga', 'tag_two' => 'Mutu terjaga',
                'price' => 70500, 'price_text' => 'Rp 70.500', 'price_note' => 'Harga pada desain referensi', 'button_text' => 'Pesan',
            ],
            [
                'name' => 'Beras Domba 10 kg',
                'description' => 'Kemasan praktis untuk keluarga besar, warung makan, dan kebutuhan konsumsi rutin.',
                'image_url' => 'https://images.unsplash.com/photo-1574323347407-f5e1ad6d020b?auto=format&fit=crop&w=850&q=85',
                'badge' => 'Kemasan Besar', 'category' => 'usaha', 'tag_one' => 'Kemasan hemat', 'tag_two' => 'Untuk usaha',
                'price' => 0, 'price_text' => 'Hubungi Kami', 'price_note' => 'Konfirmasi harga terbaru', 'button_text' => 'Tanya Harga',
            ],
            [
                'name' => 'Beras Domba 25 kg',
                'description' => 'Kemasan karung untuk restoran, hotel, katering, dan kebutuhan pasokan usaha kuliner.',
                'image_url' => 'https://images.unsplash.com/photo-1501436513145-30f24e19fcc4?auto=format&fit=crop&w=850&q=85',
                'badge' => 'Kemitraan B2B', 'category' => 'usaha', 'tag_one' => 'Pasokan usaha', 'tag_two' => 'Jadwal distribusi',
                'price' => 0, 'price_text' => 'Hubungi Kami', 'price_note' => 'Penawaran sesuai kebutuhan', 'button_text' => 'Tanya Harga',
            ],
            [
                'name' => 'Paket Kemitraan Usaha',
                'description' => 'Konsultasikan kebutuhan beras, ukuran kemasan, jadwal pengiriman, dan penawaran pasokan rutin.',
                'image_url' => 'https://images.unsplash.com/photo-1592997571659-0b21ff64313b?auto=format&fit=crop&w=850&q=85',
                'badge' => 'Paket Kemitraan', 'category' => 'usaha', 'tag_one' => 'Restoran', 'tag_two' => 'Hotel & katering',
                'price' => 0, 'price_text' => 'Penawaran Khusus', 'price_note' => 'Untuk mitra usaha', 'button_text' => 'Hubungi',
            ],
        ];
    }
}
