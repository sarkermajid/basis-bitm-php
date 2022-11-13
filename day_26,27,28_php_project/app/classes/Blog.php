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
    private $directory;
    private $tempLocation;
    private $imageName;
    private $id;

    public function __construct($post = null, $files = null)
    {
        if(isset($post['title']))
        {
            $this->title            = $post['title'];
            $this->author           = $post['author'];
            $this->description      = $post['description'];

            if(isset($post['id']))
            {
                $this->id = $post['id'];
            }

            if($_FILES['image']['name'])
            {
                $this->imageName        = $files['image']['name'];
                $this->tempLocation     = $files['image']['tmp_name'];
                $this->directory        = 'assets/img/blog-images/';
            }
        }
    }

    private function getImageUrl()
    {
        move_uploaded_file($this->tempLocation, $this->directory.$this->imageName);
        return $this->directory.$this->imageName;
    }

    public function newBlog()
    {
        $this->image = $this->getImageUrl();
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

    public function getBlogById($id)
    {
        $this->sql = "SELECT * FROM blogs WHERE id = $id ";
        $this->database = new Database();
        $this->dbConnect = $this->database->dbConnect();
        $this->queryResult = mysqli_query($this->dbConnect, $this->sql);
        $this->data = mysqli_fetch_assoc($this->queryResult);

        return $this->data;
    }

    public function updateBlog()
    {
        if($this->imageName)
        {
            $this->image = $this->getImageUrl();
        }
        else
        {
            $this->blog = $this->getBlogById($this->id);
            $this->image = $this->blog['image'];
        }

        $this->sql = "UPDATE blogs SET title = '$this->title', author = '$this->author', description = '$this->description', image = '$this->image' WHERE id = '$this->id'";
        $this->database = new Database();
        $this->dbConnect = $this->database->dbConnect();
        $this->queryResult = mysqli_query($this->dbConnect, $this->sql);

        header('Location: action.php?page=manage-blog');
    }

    public function deleteBlogById($id)
    {
        $this->sql = "DELETE FROM  blogs WHERE id = '$id'";
        $this->database = new Database();
        $this->dbConnect = $this->database->dbConnect();
        mysqli_query($this->dbConnect, $this->sql);
        header('Location: action.php?page=manage-blog');
    }
}