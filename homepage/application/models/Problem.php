<?php

class Application_Model_Problem
{
    protected $_id;
    protected $_description;
    protected $_created;
    protected $_code;
    protected $_uri;
    protected $_content;
    protected $_name;
    protected $_difficulty;
    protected $_cuteness;

    public function __construct(array $options = null)
    {
        if (is_array($options)) {
            $this->setOptions($options);
        }
    }
 
    public function __set($name, $value)
    {
        $method = 'set' . $name;
        if (('mapper' == $name) || !method_exists($this, $method)) {
            throw new Exception('Invalid guestbook property');
        }
        $this->$method($value);
    }
 
    public function __get($name)
    {
        $method = 'get' . $name;
        if (('mapper' == $name) || !method_exists($this, $method)) {
            throw new Exception('Invalid guestbook property');
        }
        return $this->$method();
    }
 
    public function setOptions(array $options)
    {
        $methods = get_class_methods($this);
        foreach ($options as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (in_array($method, $methods)) {
                $this->$method($value);
            }
        }
        return $this;
    }

    public function setId($id)
    {
        $this->_id = $id;
        return $this;
    }
    public function getId()
    {
        return $this->_id;
    }

    public function setDescription($description)
    {
        $this->_description = $description;
        return $this;
    }
    public function getDescription()
    {
        return $this->_description;
    }

    public function setCreated($created)
    {
        $this->_created = $created;
        return $this;
    }
    public function getCreated()
    {
        return $this->_created;
    }


    public function setCode($code)
    {
        $this->_code = $code;
        return $this;
    }
    public function getCode()
    {
        return $this->_code;
    }


    public function setUri($uri)
    {
        $this->_uri = $uri;
        return $this;
    }
    public function getUri()
    {
        return $this->_uri;
    }


    public function setContent($content)
    {
        $this->_content = $content;
        return $this;
    }
    public function getContent()
    {
        return $this->_content;
    }


    public function setName($name)
    {
        $this->_name = $name;
        return $this;
    }
    public function getName()
    {
        return $this->_name;
    }

    public function setDifficulty($difficulty)
    {
        $this->_difficulty = $difficulty;
        return $this;
    }
    public function getDifficulty()
    {
        return $this->_difficulty;
    }

    public function setCuteness($cuteness)
    {
        $this->_cuteness = $cuteness;
        return $this;
    }
    public function getCuteness()
    {
        return $this->_cuteness;
    }



}

