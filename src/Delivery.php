<?php
namespace Clang;

class Delivery {
    public string $id; // string
    public string $status; // string
    public Customer $customer; // Customer
    public int $mailingId; // long
    public string $deliveryDate; // string
    public string $firstOpenDate; // string
    public string $lastOpenDate; // string
    public string $firstClickDate; // string
    public string $lastClickDate; // string

    /**
     * @var Open[]
     */
    public array $opens; // ArrayOfOpen

    /**
     * @var Click[]
     */
    public array $clicks; // ArrayOfClick
    public Bounce $bounce; // Bounce
    public Complaint $complaint; // Complaint
}
