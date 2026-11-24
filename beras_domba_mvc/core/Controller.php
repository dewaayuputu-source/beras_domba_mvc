<?php
// Controller dasar untuk memanggil file tampilan (view).

class Controller
{
    protected function view(string $view, array $data = []): void
    {
        extract($data, EXTR_SKIP);
        $viewFile = dirname(__DIR__) . '/views/' . $view . '.php';

        if (!is_file($viewFile)) {
            http_response_code(404);
            exit('Halaman tidak ditemukan.');
        }

        require $viewFile;
    }
}
