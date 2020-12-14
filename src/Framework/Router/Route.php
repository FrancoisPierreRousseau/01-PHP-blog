<?php
namespace Framework\Router;

/**
 * Class Route
 * Represente les route matché
 */

class Route{

    /**
     * @var string
     */
    private $name;
    /**
     * @var callable
     */
    private $callback;
    /**
     * @var array
     */
    private $parameters;

    public function __construct(string $name, callable $callback, array $parameters)
    {
        $this->name = $name;
        $this->callback = $callback;
        $this->parameters = $parameters;
    }

    /**
     * @return string
     */
    public function getName(): string{
        return $this->name;
    }

    /**
     * @return callable
     */
    public function getCallback():callable
    {
        return $this->callback;
    }

    /**
     * Liste des paramétres de requetes
     * @return string[]
     */
    public function getParams(): array
    {
        return $this->parameters;
    }
}