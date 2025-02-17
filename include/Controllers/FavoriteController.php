<?php

namespace App\Controllers;

use App\Helpers\View;
use App\Models\FavoriteModel;

class FavoriteController {
    public function index() {
        session_start();
        if (!isset($_SESSION['login'])) {
            header('Location: /connect');
            exit();
        }
        $data = ['title' => 'Panier'];
        $favoriteModel = new FavoriteModel();
        $data['favorites'] = $favoriteModel->getFavoritesByUser($_SESSION['login']);

        View::render('panier', $data);
    }

}
