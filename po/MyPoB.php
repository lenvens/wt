<?php
namespace po;
/** @Entity @table(name="MyPoB") */
class MyPoB
{

	/** 
	 * @Id @Column(type="integer") 
	 * @GeneratedValue(strategy="AUTO")
	 */
	private $id;
	/** @Column(type="string",length=50) */
	private $nick; // type defaults to string

	/**
	 * @OneToOne (targetEntity="MyPoA", mappedBy="MyPoB") 
	 * @JoinColumn (name="bidu", referencedColumnName="id")
	 */
	private $bid; 


	/** @Column(type="string",length=50) */
	public function getMyPoBId()
	{
		return $this->id;
	}
	public function getMyPoBName()
	{
		return $this->nick;
	}

	public function setMyPoBNick($nick)
	{
		$this->nick=$nick;
	}

	public function getMyPoAbid()
	{
		return $this->bid;
	}

	public function setMyPoAbid(MyPoA $bid)
	{
		if($this->bid!==$bid)
		{
			$this->bid=$bid;
			$bid->setMyPoBxxx($this);
		}
	}


}
