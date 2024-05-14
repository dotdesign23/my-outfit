<?php

namespace App\Models;

use CodeIgniter\Model;

class RecommendationModel extends Model
{
    protected $table = 'recommendation';

    public function getProduct() {
        return $this->join("product", "recommendation.product_id = product.id");
    }
}
