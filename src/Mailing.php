<?php
namespace Clang;

class Mailing {
  public string $plannedFor; // string
  public int $uniqueClicks; // long
  public int $uniqueOpens; // long
  public int $received; // long
  public int $campaignId; // long
  public string $campaignName; // string
  public int $id; // long
  public string $contentName; // string
  public string $sourceType; // string
  public string $sourceName; // string
  public int $customers; // long
  public int $throttle; // long
  public string $status; // string

  /**
   * @var MailingLink[]
   */
  public array $links; // ArrayOfMailingLink

  public string $type; // string
  public string $description; // string
  public string $startedAt; // string
  public string $endedAt; // string
  public int $bounces; // long
  public int $opens; // long
  public int $clicks; // long
  public int $complaints; // long
}
