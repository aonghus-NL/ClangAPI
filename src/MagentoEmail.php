<?php
namespace Clang;

class MagentoEmail {
  public $folder; // string
  public $class; // string
  public $id; // long
  public $type; // string
  public $templateId; // long
  public $name; // string
  public $campaignId; // long
  public $fromAddress; // string
  public $fromName; // string
  public $replyToAddress; // string
  public $replyToName; // string
  public $subject; // string
  public $createdBy; // string
  public $createdAt; // string
  public $modifiedBy; // string
  public $modifiedAt; // string
  public $htmlContent; // string
  public $htmlBlocks; // ArrayOfEmailBlockContainer
  public $textContent; // string
}
