<?php
namespace po;
/** @Entity @table(name="po") */
class MyPo
{

    /** @Column(type="integer") */
    /** @GeneratedValue(strategy="AUTO") */
    private $id;
    /** @Column(type="string",length=50) */
    private $name; // type defaults to string


    public function getMyPoId()
    {
	    return $this->id;
    }
    public function getMyPoName()
    {
	    return $this->Name;
    }

    public function setMyPoName($name)
    {
	    $this->name=$name;
    }
}
