<?php
namespace witclass;
/** @Entity @table(name="Task_t") */
class Task_t 
{

	/** 
	 * @Id @Column(type="integer") 
	 * @GeneratedValue(strategy="AUTO")
	 * OneToMany (targetEntity="Taskinfo_t", mappedBy="Task_t") 
	 * OneToMany (targetEntity="Taskinfo_t", mappedBy="Task_t") 
	 */
	private $task_id;

	/** @Column(type="string",length=50) */
	private $title; 

	/** @Column(type="string",length=50) */
	private $contents; 

	/** @Column(type="string",length=50) */
	private $category; 

	/** @Column(type="integer",length=50) */
	private $sign; 

	/** @Column(type="integer",length=50) */
	private $cost; 

	/** @Column(type="integer",length=50) */
	private $server_charge; 

	/**
	 * @ManyToOne (targetEntity="User_t", inversedBy="Task_t") 
	 * @JoinColumn (name="user_id", referencedColumnName="user_id")
	 */
	private $user_id; 


	//public function get_Task_t_task_id()
	//{
	//	return $this->task_id;
	//}
	//public function get_Task_t_title()
	//{
	//	return $this->title;
	//}

	//public function set_Task_t_title($title)
	//{
	//	$this->title=$title;
	//}

	//public function get_Task_t_contents($contents)
	//{
	//	return $this->contents;
	//}
	//public function set_Task_t_contents($contents)
	//{
	//	$this->contents=$contents;
	//}

	//public function get_Task_t_categroy()
	//{
	//	return $this->category;
	//}

	//public function set_Task_t_categroy($category)
	//{
	//	$this->category=$category;
	//}
	//public function set_Task_t_user_id(User_t $user_id)
	//{
	//	if($this->user_id!==$user_id)
	//	{
	//		$this->user_id=$user_id;
	//		$user_id->set_User_t_task_temp($this);
	//	}
	//}

	//public function set_Task_t_task_temp(Taskinfo_t $task_temp)
	//{
	//	if($this->task_temp!==$task_temp)
	//	{
	//		$this->task_temp=$task_temp;
	//		$task_temp->set_Taskinfo_t_task_id($this);
	//	}
	//}

}
