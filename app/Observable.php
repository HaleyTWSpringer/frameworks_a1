<?php
interface Observable
{
    public function attach(Observer $obs);

    public function detach(Observer $obs);

    public function notify();
}