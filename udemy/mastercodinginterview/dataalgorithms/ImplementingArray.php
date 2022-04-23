<?php

class ImplementingArray
{
    private int $length = 0;
    private array $data;

    public function get($index): mixed
    {
        return $this->data[$index];
    }

    public function push($item): int
    {
        $this->data[$this->length] = $item;
        $this->length++;
        return $this->length;
    }

    public function pop(): mixed {
        $lastItem = $this->data[$this->length-1];
        unset($this->data[$this->length-1]);
        $this->length--;
        return $lastItem;
    }

    public function delete($index):mixed {
        $item = $this->data[$index];
        $this->shiftItems($index);
        return $item;
    }

    private function shiftItems($index): void
    {
        for($i=$index; $i<$this->length-1; $i++) {
            $this->data[$i] = $this->data[$i+1];
        }
        unset($this->data[$this->length-1]);
        $this->length--;
    }
}

$array = new ImplementingArray();
$array->push('hi');
$array->push('you');
$array->push('!');
$item = $array->delete(2);
print_r($item);
print_r($array);