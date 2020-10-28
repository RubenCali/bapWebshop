<?php


class Product
{

    private $title;
    private $image_url_1;
    private $image_url_2;
    private $price;
    private $description;
    private $code;

    public function __construct($code, $title, $image_url_1, $image_url_2, $price, $description)
    {

        $this->code = $code;
        $this->title = $title;
        $this->image_url_1 = $image_url_1;
        $this->image_url_2 = $image_url_2;
        $this->price = $price;
        $this->description = $description;

    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }
    

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
    public function getImage_url_1()
    {
        return $this->image_url_1;
    }
    public function getImage_url_2()
    {
        return $this->image_url_2;
    }
    public function getPrice()
    {
        return $this->price;
    }
 


}