<?php
namespace RAR\WebBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="rar_request")
 */
class Requests
{
    
		/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @ORM\Column(type="integer")
     */
     public $user_id;    
     
    /**
     * @ORM\Column(type="integer")
     */
     public $plan_id;    
 

    /**
     * @ORM\Column(type="integer")
     */
     public $request_type_id;
     
    /**
     * @ORM\Column(type="integer")
     */
     public $subscription_type_id;      
 
    /**
     * @ORM\Column(type="integer")
     */
     public $status; 


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user_id
     *
     * @param integer $userId
     * @return Request
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;
    
        return $this;
    }

    /**
     * Get user_id
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set plan_id
     *
     * @param integer $planId
     * @return Request
     */
    public function setPlanId($planId)
    {
        $this->plan_id = $planId;
    
        return $this;
    }

    /**
     * Get plan_id
     *
     * @return integer 
     */
    public function getPlanId()
    {
        return $this->plan_id;
    }

    /**
     * Set request_type_id
     *
     * @param integer $requestTypeId
     * @return Request
     */
    public function setRequestTypeId($requestTypeId)
    {
        $this->request_type_id = $requestTypeId;
    
        return $this;
    }

    /**
     * Get request_type_id
     *
     * @return integer 
     */
    public function getRequestTypeId()
    {
        return $this->request_type_id;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Requests
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set subscription_type_id
     *
     * @param integer $subscriptionTypeId
     * @return Requests
     */
    public function setSubscriptionTypeId($subscriptionTypeId)
    {
        $this->subscription_type_id = $subscriptionTypeId;
    
        return $this;
    }

    /**
     * Get subscription_type_id
     *
     * @return integer 
     */
    public function getSubscriptionTypeId()
    {
        return $this->subscription_type_id;
    }
}