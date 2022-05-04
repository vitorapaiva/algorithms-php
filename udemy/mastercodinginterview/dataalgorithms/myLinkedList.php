<?php




class LinkedList
{
    private $head;
    private $tail;
    private int $length;

    public function __construct(mixed $value)
    {
        $this->head = new stdClass();
        $this->head->value = $value;
        $this->head->next = null;
        $this->tail = $this->head;
        $this->length = 1;
    }

    public function append(mixed $value): void
    {
        $next = &$this->head->next;
        while($next!==null) {
            $next = &$next->next;
        }
        $next = new class{};
        $next->value = $value;
        $next->next = null;
        $this->tail = $next;
        $this->length++;
    }


}

$myLinkedList = new LinkedList(10);
$myLinkedList->append(5);
$myLinkedList->append(16);
print_r($myLinkedList);