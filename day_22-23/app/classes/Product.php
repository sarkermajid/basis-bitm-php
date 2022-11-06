<?php


namespace App\classes;


class Product
{
    public $products = [];
    public $categoryProducts = [];

    public function __construct()
    {
        $this->products = [
            0=>[
                "id"=>1,
                "category_id"=>1,
                "name"=>'Sony Xperia x',
                "description"=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters',
                'price'=>55000,
                'image'=>'product1.jpg'
            ],
            1=>[
                "id"=>2,
                "category_id"=>1,
                "name"=>'Samsung Oven',
                "description"=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters',
                'price'=>35000,
                'image'=>'product2.jpg'
            ],
            2=>[
                "id"=>3,
                "category_id"=>1,
                "name"=>'iPhon X',
                "description"=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters',
                'price'=>95000,
                'image'=>'product3.jpg'
            ],
            3=>[
                "id"=>4,
                "category_id"=>2,
                "name"=>'T-shirt',
                "description"=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters',
                'price'=>1450,
                'image'=>'product4.jpg'
            ],
            4=>[
                "id"=>5,
                "category_id"=>2,
                "name"=>'Shirt',
                "description"=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters',
                'price'=>999,
                'image'=>'product5.jpg'
            ],
            5=>[
                "id"=>6,
                "category_id"=>3,
                "name"=>'Shari',
                "description"=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters',
                'price'=>3500,
                'image'=>'product6.jpg'
            ],
            6=>[
                "id"=>7,
                "category_id"=>3,
                "name"=>'three pis',
                "description"=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters',
                'price'=>'1800',
                'image'=>'product7.jpg'
            ],
            7=>[
                "id"=>8,
                "category_id"=>4,
                "name"=>'Kids t-shirt',
                "description"=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters',
                'price'=>450,
                'image'=>'product8.jpg'
            ],
            8=>[
                "id"=>9,
                "category_id"=>4,
                "name"=>'Kids Pant',
                "description"=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters',
                'price'=>780,
                'image'=>'product9.jpg'
            ],
            9=>[
                "id"=>10,
                "category_id"=>4,
                "name"=>'Kids Shirt',
                "description"=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters',
                'price'=>500,
                'image'=>'product10.jpg'
            ],
        ];
    }

    public function getAllProduct()
    {
        return $this->products;
    }

    public function getProductsByCategory($categoryId)
    {
        foreach ($this->products as $product)
        {
            if($product['category_id'] == $categoryId)
            {
                array_push($this->categoryProducts, $product);
            }
        }
        return $this->categoryProducts;
    }

    public function getProductById($productId)
    {
        foreach ($this->products as $product)
        {
            if($product['id'] == $productId)
            {
                return $product;
            }
        }
    }

}