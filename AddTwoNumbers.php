<?php

class ListNode
{
    public $val = 0;

    public $next = null;

    public function __construct($val)
    {
        $this->val = $val;
    }
}

class AddTwoNumbers
{

    /**
     * @param ListNode $l1 
     * @param ListNode $l2
     * @return ListNode
     */
    public function solution(ListNode $l1, ListNode $l2)
    {
        if (!$l1) {
            return $l2;
        }

        if (!$l2) {
            return $l2;
        }

        $res = new ListNode(0);
        $cur = $res;
        $carry = 0;
        while ($l1 && $l2) {
            $tmp = $l1->val + $l2->val + $carry;
            if ($tmp >= 10) {
                $carry = 1;
                $tmp %= 10;
            } else {
                $carry = 0;
            }
            $cur->next = new ListNode($tmp);

            $cur = $cur->next;
            $l1 = $l1->next;
            $l2 = $l2->next;
        }

        while ($l1) {
            $tmp = $l1->val + $carry;
            if ($tmp >= 10) {
                $carry = 1;
                $tmp %= 10;
            } else {
                $carry = 0;
            }
            $cur->next = new ListNode($tmp);

            $cur = $cur->next;
            $l1 = $l1->next;
        }

        while ($l2) {
            $tmp = $l2->val + $carry;
            if ($tmp >= 10) {
                $carry = 1;
                $tmp %= 10;
            } else {
                $carry = 0;
            }
            $cur->next = new ListNode($tmp);

            $cur = $cur->next;
            $l2 = $l2->next;
        }

        if ($carry) {
            $cur->next = new ListNode($carry);
        }

        return $res->next;
    }
}