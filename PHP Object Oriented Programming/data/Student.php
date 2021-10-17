<?php

class Student{
    public string $id;
    public string $name;
    public int $value;   
    private string $sample;

    public function sample(string $sample):void
    {
        $this->sample = $sample;
    }

    public function __clone()
    {
        unset($this->sample);   
    }

    public function __toString(): string
    {
        return "Student id: $this->id , name : $this->name,value : $this->value";
    }

    public function __invoke(...$arguments): void
    {
        $join = join(",",$arguments);

        echo "Invoke student with arguments $join". PHP_EOL;
    }
     public function __debugInfo()
    {
        return [
            "name" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "sample" => $this->sample,
            "author" => "Cahyo",
            "version" => "1.0.0",
        ];
    }

}