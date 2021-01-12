<?php
namespace Clang;

class Sms {

  /**
   * @var int
   */
  public $id;

  /**
   * @var int
   */
  public $campaignId;

  /**
   * @var string
   */
  public $name;

  /**
   * @var string
   */
  public $fromName;

  /**
   * @var string
   */
  public $plainText;

  /**
   * @var bool
   */
  public $enableUnicodeSupport;

  /**
   * @var int
   */
  public $maxSmsMessages;

  /**
   * @var string
   */
  public $createdBy;

  /**
   * @var string
   */
  public $createdAt;

  /**
   * @var string
   */
  public $modifiedBy;

  /**
   * @var string
   */
  public $modifiedAt;

  /**
   * @var SmsBlockContainer[]
   */
  public $textBlocks;

}
