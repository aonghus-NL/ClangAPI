<?php
namespace Clang;

class Delivery {
    public $id; // string
    public $status; // string
    public $customer; // Customer
    public $mailingId; // long
    public $deliveryDate; // string
    public $firstOpenDate; // string
    public $lastOpenDate; // string
    public $firstClickDate; // string
    public $lastClickDate; // string
    public $opens; // ArrayOfOpen
    public $clicks; // ArrayOfClick
    public $bounce; // Bounce
    public $complaint; // Complaint
}
