<?php
namespace Clang;

class MagentoEmail {

  /**
   * @var string
   */
  public $folder;

  /**
   * @var string
   */
  public $class;

  /**
   * @var int
   */
  public $id;

  /**
   * @var string
   */
  public $type;

  /**
   * @var int
   */
  public $templateId;

  /**
   * @var string
   */
  public $name;

  /**
   * @var int
   */
  public $campaignId;

  /**
   * @var string
   */
  public $fromAddress;

  /**
   * @var string
   */
  public $fromName;

  /**
   * @var string
   */
  public $replyToAddress;

  /**
   * @var string
   */
  public $replyToName;

  /**
   * @var string
   */
  public $subject;

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
   * @var string
   */
  public $htmlContent;

  /**
   * @var EmailBlockContainer[]
   */
  public $htmlBlocks;

  /**
   * @var string
   */
  public $textContent;

}
