<?php
namespace po;
/** @Entity @table(name="MyPoA") */
class MyPoA
{

	/** 
	 * @Id @Column(type="integer") 
	 * @GeneratedValue(strategy="AUTO") 
	 */
	private $id;
	/** @Column(type="string",length=50) */
	private $name; 

	/** @Column(type="string",length=50) */
	private $password; 



	public function getMyPoAId()
	{
		return $this->id;
	}
	public function getMyPoAName()
	{
		return $this->name;
	}

	public function setMyPoAName($name)
	{
		$this->name=$name;
	}

	public function getMyPoAPassword()
	{
		return $this->password;
	}

	public function setMyPoAPassword($password)
	{
		$this->password=$password;
	}

	public function getMyPoBtest()
	{
		return $this->test;
	}

	public function setMyPoBxxx(MyPoB $test)
	{
		if($this->test!=$test)
		{
			$this->test=$test;
			$test->setMyPoAbid($this);
		}
	}



}
