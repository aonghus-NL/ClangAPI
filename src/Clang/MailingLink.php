<?php
namespace Clang;

class MailingLink {
  public $mailingId; // long
  public $id; // long
  public $url; // string
  public $description; // string
  public $track; // boolean
  public $source; // boolean
  public $tags; // ArrayOfTag
  public $google_source; // string
  public $google_medium; // string
  public $google_term; // string
  public $google_content; // string
  public $google_campaign; // string
  public $sitestat_campaign; // string
  public $sitestat_source; // string
  public $sitestat_mchannel; // string
  public $sitestat_linkname; // string
  public $sitestat_fee; // string
}