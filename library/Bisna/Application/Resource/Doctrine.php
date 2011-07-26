<?php

namespace Bisna\Application\Resource;

use Bisna\Doctrine\Container as DoctrineContainer;

/**
 * Zend Application Resource Doctrine class
 *
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 */
class Doctrine extends \Zend_Application_Resource_ResourceAbstract
{
	protected $doctrineContainer;
	
    /**
     * Initializes Doctrine Resource.
     *
     * @return Bisna\Doctrine\Container
     */
    public function init()
    {
        return $this->getDoctrineContainer();
    }
    
    /**
     * Get Doctrine Container
     *
     * @return Bisna\Doctrine\Container
     */
    public function getDoctrineContainer()
    {
    	if (is_null($this->doctrineContainer)) {
    		$config = $this->getOptions();
        
	        // Starting Doctrine container
	        $this->doctrineContainer = new DoctrineContainer($config);
    	}
    	
    	return $this->doctrineContainer;
    }
}