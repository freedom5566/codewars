<?php
class Person
{
    /**
     * This is a constant, and by convention should be SPECIES.
     *
     * @var string
     */
    const species = 'Homo Sapiens';
    
    /**
     * The name of this Person.
     *
     * @var string
     */
    public $name;
    
    /**
     * The age of this Person.
     *
     * @var int
     */
    public $age;
    
    /**
     * The occupation of this Person.
     *
     * @var string
     */
    public $occupation;
    
    /**
     * Construct a new Person instance.
     *
     * @param string $name
     * @param int $age
     * @param string $occupation
     */
    public function __construct(string $name, int $age, string $occupation)
    {
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
    }
    
    /**
     * Introduce a Person.
     *
     * @return string
     */
    public function introduce(): string
    {
        return 'Hello, my name is ' . $this->name;
    }
    
    /**
     * Describe this person's occupation.
     * Personally, I'd have named it `occupation()` or `describeJob()`.
     *
     * @return string
     */
    public function describe_job(): string
    {
        return 'I am currently working as a(n) ' . $this->occupation;
    }
    
    /**
     * Greet a species.
     * Personally, I would name this `greet(string $species)`.
     *
     * @param string $species
     * @return string
     */
    public function greet_extraterrestrials(string $species): string
    {
        return "Welcome to Planet Earth {$species}!";
    }
}