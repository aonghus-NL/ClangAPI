<?php
namespace Clang;

class Mailing {
  public $plannedFor; // string
  public $uniqueClicks; // long
  public $uniqueOpens; // long
  public $received; // long
  public $campaignId; // long
  public $campaignName; // string
  public $id; // long
  public $contentName; // string
  public $sourceType; // string
  public $sourceName; // string
  public $customers; // long
  public $throttle; // long
  public $status; // string
  public $links; // ArrayOfMailingLink
  public $type; // string
  public $description; // string
  public $startedAt; // string
  public $endedAt; // string
  public $bounces; // long
  public $opens; // long
  public $clicks; // long
  public $complaints; // long
}