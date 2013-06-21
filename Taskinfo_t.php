<?php
namespace witclass;
/** @Entity @table(name="Taskinfo_t") */
class Taskinfo_t 
{

	/** 
	 * @Id @Column(type="integer") 
	 * @GeneratedValue(strategy="AUTO")
	 */
	private $taskinfo_id;

	/** @Column(type="integer",length=50) */
	private $point; 

	/** @Column(type="string",length=50) */
	private $comment; 


	/**
	 * @ManyToOne (targetEntity="Task_t", inversedBy="Taskinfo_t") 
	 * @JoinColumn (name="task_id", referencedColumnName="task_id")
	 */
	private $task_id; 

	/**
	 * @ManyToOne (targetEntity="User_t", inversedBy="Taskinfo_t") 
	 * @JoinColumn (name="user_id", referencedColumnName="user_id")
	 */
	private $user_id; 

	//public function get_Taskinfo_t_taskinfo_id()
	//{
	//	return $this->taskinfo_id;
	//}

	//public function get_Taskinfo_t_task_id()
	//{
	//	return $this->task_id;
	//}

	//public function set_Taskinfo_t_task_id($task_id)
	//{
	//	$this->task_id=$task_id;
	//}

	//public function get_Taskinfo_t_user_id($user_id)
	//{
	//	return $this->user_id;
	//}
	//public function set_Taskinfo_t_user_id($user_id)
	//{
	//	$this->user_id=$user_id;
	//}

	//public function get_Taskinfo_t_point()
	//{
	//	return $this->point;
	//}

	//public function set_Taskinfo_t_point($point)
	//{
	//	$this->point=$point;
	//}
	//public function set_Taskinfo_t_task_id(Task_t $task_id)
	//{
	//	if($this->task_id!==$task_id)
	//	{
	//		$this->task_id=$task_id;
	//		$task_id->set_Task_t_task_temp($this);
	//	}
	//}


}
