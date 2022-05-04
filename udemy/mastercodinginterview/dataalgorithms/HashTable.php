<?php

class HashTable
{
    private array $data;
    private $size;

    public function __construct($size) {
        $this->data = [];
        $this->size = $size;
    }

    private function hash($key): int
    {
        $hash = 0;
        $keySize = strlen($key);
        for($i=0; $i<$keySize; $i++) {
            $hash += ($this->size*$i);
        }
        return intdiv($hash, $this->size);
    }

    public function set(string $key, mixed $value): void
    {
        $hash = $this->hash($key);
        $this->data[$hash][] = ["key" => $key, "value" => $value];
    }

    public function get(string $key): mixed {
        $hash = $this->hash($key);
        if(count($this->data[$hash])===1) {
            return $this->data[$hash][0]["value"];
        }
        foreach($this->data[$hash] as $item) {
            if($item["key"] === $key) {
                return $item["value"];
            }
        }
    }

    public function keys(): array
    {
        $keys = [];
        foreach($this->data as $itens) {
            foreach($itens as $item) {
                $keys[] = $item["key"];
            }
        }
        return $keys;
    }
}

$myHashTable = new HashTable(50);
$myHashTable->set('grapes', 10000);
$myHashTable->set('grapes2', 20000);
$myHashTable->set('grapes3', 30000);
echo $myHashTable->get('grapes')."\n";
echo($myHashTable->get('grapes2'))."\n";
echo($myHashTable->get('grapes3'))."\n";
print_r($myHashTable->keys());