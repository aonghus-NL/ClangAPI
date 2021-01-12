<?php
namespace Clang;

class CampaignObjectStatistics {
  public int $campaignId; // long
  public int $campaignObjectId; // long

  /**
   * @var CampaignObjectStatisticsOption[]
   */
  public array $options; // ArrayOfCampaignObjectStatisticsOption
}
