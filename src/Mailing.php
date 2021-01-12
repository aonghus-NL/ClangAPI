<?php
namespace Clang;

class Mailing {

  /**
   * @var string
   */
  public $plannedFor;

  /**
   * @var int
   */
  public $uniqueClicks;

  /**
   * @var int
   */
  public $uniqueOpens;

  /**
   * @var int
   */
  public $received;

  /**
   * @var int
   */
  public $campaignId;

  /**
   * @var string
   */
  public $campaignName;

  /**
   * @var int
   */
  public $id;

  /**
   * @var string
   */
  public $contentName;

  /**
   * @var string
   */
  public $sourceType;

  /**
   * @var string
   */
  public $sourceName;

  /**
   * @var int
   */
  public $customers;

  /**
   * @var int
   */
  public $throttle;

  /**
   * @var string
   */
  public $status;

  /**
   * @var MailingLink[]
   */
  public $links;

  /**
   * @var string
   */
  public $type;

  /**
   * @var string
   */
  public $description;

  /**
   * @var string
   */
  public $startedAt;

  /**
   * @var string
   */
  public $endedAt;

  /**
   * @var int
   */
  public $bounces;

  /**
   * @var int
   */
  public $opens;

  /**
   * @var int
   */
  public $clicks;

  /**
   * @var int
   */
  public $complaints;

}
