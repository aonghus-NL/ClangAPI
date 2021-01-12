<?php
namespace Clang;

class Sms {
  public int $id; // long
  public int $campaignId; // long
  public string $name; // string
  public string $fromName; // string
  public string $plainText; // string
  public bool $enableUnicodeSupport; // boolean
  public int $maxSmsMessages; // long
  public string $createdBy; // string
  public string $createdAt; // string
  public string $modifiedBy; // string
  public string $modifiedAt; // string

  /**
   * @var SmsBlockContainer[]
   */
  public array $textBlocks; // ArrayOfSmsBlockContainer
}
