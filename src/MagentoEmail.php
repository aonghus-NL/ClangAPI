<?php
namespace Clang;

class MagentoEmail {
  public string $folder; // string
  public string $class; // string
  public int $id; // long
  public string $type; // string
  public int $templateId; // long
  public string $name; // string
  public int $campaignId; // long
  public string $fromAddress; // string
  public string $fromName; // string
  public string $replyToAddress; // string
  public string $replyToName; // string
  public string $subject; // string
  public string $createdBy; // string
  public string $createdAt; // string
  public string $modifiedBy; // string
  public string $modifiedAt; // string
  public string $htmlContent; // string

  /**
   * @var EmailBlockContainer[]
   */
  public array $htmlBlocks; // ArrayOfEmailBlockContainer

  public string $textContent; // string
}
