<?php


namespace App\classes;


class Blog
{
    private $title;
    private $author;
    private $description;
    private $image;
    private $sql;
    private $database;
    private $dbConnect;
    private $queryResult;
    private $data = [];
    private $row;

    public function __construct($post = null)
    {
        if(isset($post['title']))
        {
            $this->title = $post['title'];
            $this->author = $post['author'];
            $this->description = $post['description'];
            $this->image = $post['image'];
        }
    }

    public function newBlog()
    {
        $this->sql = "INSERT INTO blogs (title,author,description,image) VALUES ('$this->title','$this->author','$this->description','$this->image')"; // query prepare.
        $this->database = new Database(); // db connect
        $this->dbConnect = $this->database->dbConnect();
        mysqli_query($this->dbConnect,$this->sql); // query execute.
        return 'blog save successfully';
    }

    public function getAllBlog()
    {
        $this->sql = "SELECT * FROM blogs";
        $this->database = new Database();
        $this->dbConnect = $this->database->dbConnect();
        $this->queryResult = mysqli_query($this->dbConnect, $this->sql);

        while($this->row = mysqli_fetch_assoc($this->queryResult))
        {
            array_push($this->data, $this->row);
        }

        return $this->data;
    }

}