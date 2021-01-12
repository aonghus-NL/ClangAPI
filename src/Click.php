<?php
namespace Clang;

class Click {
  public MailingLink $link; // MailingLink
  public int $id; // long
  public int $customerId; // long
  public int $mailingId; // long
  public string $clickedAt; // string
  public BrowserInformation $browserInformation; // BrowserInformation
}
