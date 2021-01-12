<?php
namespace Clang;

class MailingLink {
  public int $mailingId; // long
  public int $id; // long
  public string $url; // string
  public string $description; // string
  public bool $track; // boolean
  public bool $source; // boolean

  /**
   * @var Tag[]
   */
  public array $tags; // ArrayOfTag

  public string $google_source; // string
  public string $google_medium; // string
  public string $google_term; // string
  public string $google_content; // string
  public string $google_campaign; // string
  public string $sitestat_campaign; // string
  public string $sitestat_source; // string
  public string $sitestat_mchannel; // string
  public string $sitestat_linkname; // string
  public string $sitestat_fee; // string
}
