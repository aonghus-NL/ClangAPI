<?php
namespace Clang;

class Delivery {
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $status;

    /**
     * @var Customer
     */
    public Customer $customer;

    /**
     * @var int
     */
    public $mailingId;

    /**
     * @var string
     */
    public $deliveryDate;

    /**
     * @var string
     */
    public $firstOpenDate;

    /**
     * @var string
     */
    public $lastOpenDate;

    /**
     * @var string
     */
    public $firstClickDate;

    /**
     * @var string
     */
    public $lastClickDate;


    /**
     * @var Open[]
     */
    public $opens;

    /**
     * @var Click[]
     */
    public $clicks;

    /**
     * @var Bounce
     */
    public $bounce;

    /**
     * @var Complaint
     */
    public $complaint;
}
