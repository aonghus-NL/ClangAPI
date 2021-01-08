<?php
namespace Clang;

class Sms {
  public $id; // long
  public $campaignId; // long
  public $name; // string
  public $fromName; // string
  public $plainText; // string
  public $enableUnicodeSupport; // boolean
  public $maxSmsMessages; // long
  public $createdBy; // string
  public $createdAt; // string
  public $modifiedBy; // string
  public $modifiedAt; // string
  public $textBlocks; // ArrayOfSmsBlockContainer
}