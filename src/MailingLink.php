<?php
namespace Clang;

class MailingLink {

  /**
   * @var int
   */
  public $mailingId;

  /**
   * @var int
   */
  public $id;

  /**
   * @var string
   */
  public $url;

  /**
   * @var string
   */
  public $description;

  /**
   * @var bool
   */
  public $track;

  /**
   * @var bool
   */
  public $source;

  /**
   * @var Tag[]
   */
  public $tags;

  /**
   * @var string
   */
  public $google_source;

  /**
   * @var string
   */
  public $google_medium;

  /**
   * @var string
   */
  public $google_term;

  /**
   * @var string
   */
  public $google_content;

  /**
   * @var string
   */
  public $google_campaign;

  /**
   * @var string
   */
  public $sitestat_campaign;

  /**
   * @var string
   */
  public $sitestat_source;

  /**
   * @var string
   */
  public $sitestat_mchannel;

  /**
   * @var string
   */
  public $sitestat_linkname;

  /**
   * @var string
   */
  public $sitestat_fee;

}
