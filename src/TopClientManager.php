<?php
namespace Orzcc\TopClient;

use Orzcc\TopClient\Factories\TopClientFactory;
use GrahamCampbell\Manager\AbstractManager;
use Illuminate\Contracts\Config\Repository;

class TopClientManager extends AbstractManager
{
    protected $factory;
    
    public function __construct(Repository $config, TopClientFactory $factory)
    {
        parent::__construct($config);
        $this->factory = $factory;
    }
    

    /**
     * Create the connection instance.
     *
     * @param array $config
     *
     * @throws \InvalidArgumentException
     *
     * @return object
     */
    protected function createConnection(array $config): object
    {
        return $this->factory->make($config);
    }
  
    /**
     * Get the configuration name.
     *
     * @return string
     */
    protected function getConfigName(): string
    {
        return 'taobaotop';
    }
   
    public function getFactory()
    {
        return $this->factory;
    }
}