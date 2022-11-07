<?php


namespace App\classes;


class Product
{
    private $name;
    private $price;
    private $stock;
    private $description;
    private $imageName;
    private $directory;
    private $file;
    private $link;
    private $sql;
    private $queryResult;
    private $row;
    private $data = [];
    private $i;
    private $imgUrl;


    public function __construct($data = null, $file = null)
    {
        if($data)
        {
            $this->name         =   $data['name'];
            $this->price        =   $data['price'];
            $this->stock        =   $data['stock'];
            $this->description  =   $data['description'];
        }

        if($file)
        {
            $this->file         =   $file;
        }
    }

    protected function getImageUrl()
    {
        $this->imageName = $this->file['image']['name'];
        $this->directory = 'assets/img/'.$this->imageName;
        move_uploaded_file($this->file['image']['tmp_name'],$this->directory);
        return $this->directory;
    }
    public function save()
    {
        $this->link = mysqli_connect('localhost', 'root', '', 'bitm-php-product-crud');
        if($this->link)
        {
            $this->imgUrl = $this->getImageUrl();
            $this->sql = "INSERT INTO products (name, price, stock, description, image) VALUES ('$this->name', '$this->price','$this->stock', '$this->description', '$this->imgUrl')";
            if(mysqli_query($this->link, $this->sql))
            {
                return 'Product uploaded successfully!';
            }
            else
            {
                die('Query problems...'.mysqli_error($this->link));
            }
        }
    }

    public function getAllProductInfo()
    {
        $this->link = mysqli_connect('localhost', 'root', '', 'bitm-php-product-crud');
        if($this->link)
        {
            $this->sql = "SELECT * FROM products";
            if(mysqli_query($this->link, $this->sql))
            {
                $this->queryResult = mysqli_query($this->link, $this->sql);
                $this->i = 0;
                while($this->row = mysqli_fetch_assoc($this->queryResult))
                {
                    $this->data[$this->i]['id']         =   $this->row['id'];
                    $this->data[$this->i]['name']       =   $this->row['name'];
                    $this->data[$this->i]['price']      =   $this->row['price'];
                    $this->data[$this->i]['stock']      =   $this->row['stock'];
                    $this->data[$this->i]['image']      =   $this->row['image'];
                    $this->i++;
                }
                return $this->data;
            }
            else
            {
                die('Query problems...'.mysqli_error($this->link));
            }
        }
    }

    public function getProductInfoById($id)
    {

    }

    public function updateProductInfo()
    {

    }

    public function deleteProductInfo($id)
    {

    }

}