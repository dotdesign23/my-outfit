<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\RecommendationModel;

class Product extends BaseController
{
    protected $productModel;
    protected $recommendationModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->recommendationModel = new RecommendationModel();
    }

    public function index(): string
    {
        $products_top = $this->productModel->orderBy('review', 'DESC')->findAll(4);
        $products_newest = $this->productModel->orderBy('created_at', 'DESC')->findAll(3);

        return view('home', [
            'page_name' => 'home',
            'products_top' => $products_top,
            'products_newest' => $products_newest,
        ]);
    }

    public function recommendation(): string
    {
        $recommendations = $this->recommendationModel->getProduct()->findAll();

        return view('recommendation', [
            'page_name' => 'recommendation',
            'recommendations' => $recommendations,
        ]);
    }

    public function collection(): string
    {
        $search = $this->request->getGet('search');
        
        if($search){
            $products_top = $this->productModel->like('name', $search)->orLike('color', $search)->orderBy('review', 'DESC')->findAll(8);
            $products_newest = $this->productModel->like('name', $search)->orLike('color', $search)->orderBy('created_at', 'DESC')->findAll(8);
        } else {
            $products_top = $this->productModel->orderBy('review', 'DESC')->findAll(8);
            $products_newest = $this->productModel->orderBy('created_at', 'DESC')->findAll(8);
        }

        return view('collection', [
            'page_name' => 'collection',
            'products_top' => $products_top,
            'products_newest' => $products_newest,
        ]);
    }
}
