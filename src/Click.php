<?php
namespace Clang;

class Click {

  /**
   * @var MailingLink
   */
  public MailingLink $link; // MailingLink

  /**
   * @var int
   */
  public $id;

  /**
   * @var int
   */
  public $customerId;

  /**
   * @var int
   */
  public $mailingId;

  /**
   * @var string
   */
  public $clickedAt;

  /**
   * @var BrowserInformation
   */
  public $browserInformation;
}
