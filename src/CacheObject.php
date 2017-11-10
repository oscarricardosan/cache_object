<?php

namespace Oscarricardosan\CacheObject;


class CacheObject
{
    protected $cache= [];


    public function __construct(array $dataInCache= [])
    {
        $this->initializeCache($dataInCache);
    }

    /**
     * @param string $nameCache
     * @return $this
     */
    public function initializeCache($defaultData= [])
    {
        $this->cache= $defaultData;
        return $this;
    }

    /**
     * @param string $key
     * @return bool
     */
    public function exists($key)
    {
        return array_key_exists($key, $this->cache);
    }

    /**
     * @param string $key
     * @param null|mixed $defaultValue
     * @return mixed
     */
    public function get($key, $defaultValue= null)
    {
        if($this->exists($key))
            return $this->cache[$key];
        return $defaultValue;
    }

    /**
     * @param string $key
     * @param null|mixed $value
     * @return $this
     */
    public function set($key, $value= null)
    {
        $this->cache[$key]= $value;
        return $this;
    }


}
