<?php
namespace Clang;

use SoapClient;

/**
 * ClangAPI class
 *
 *
 *
 * @author    {author}
 * @copyright {copyright}
 * @package   {package}
 */
class ClangAPI extends SoapClient {

  /**
   * @var string[]
   */
  private static $classmap = [
    'Option' => '\Clang\Option',
    'MethodOptions' => '\Clang\MethodOptions',
    'SmsBlock' => '\Clang\SmsBlock',
    'SmsBlockContainer' => '\Clang\SmsBlockContainer',
    'Sms' => '\Clang\Sms',
    'Complaint' => '\Clang\Complaint',
    'Bounce' => '\Clang\Bounce',
    'Tag' => '\Clang\Tag',
    'MailingLink' => '\Clang\MailingLink',
    'Click' => '\Clang\Click',
    'BrowserInformation' => '\Clang\BrowserInformation',
    'Open' => '\Clang\Open',
    'CustomerOption' => '\Clang\CustomerOption',
    'Account' => '\Clang\Account',
    'Customer' => '\Clang\Customer',
    'Delivery' => '\Clang\Delivery',
    'CampaignObjectStatisticsOption' => '\Clang\CampaignObjectStatisticsOption',
    'CampaignObjectStatistics' => '\Clang\CampaignObjectStatistics',
    'CampaignStatistics' => '\Clang\CampaignStatistics',
    'Group' => '\Clang\Group',
    'Resource' => '\Clang\ClangResource',
    'Mailing' => '\Clang\Mailing',
    'MagentoCategory' => '\Clang\MagentoCategory',
    'MagentoProduct' => '\Clang\MagentoProduct',
    'MagentoOrder' => '\Clang\MagentoOrder',
    'MagentoAbandonedOrder' => '\Clang\MagentoAbandonedOrder',
    'EmailBlock' => '\Clang\EmailBlock',
    'EmailBlockContainer' => '\Clang\EmailBlockContainer',
    'MagentoEmail' => '\Clang\MagentoEmail',
    'GroupMembership' => '\Clang\GroupMembership',
    'MagentoShipment' => '\Clang\MagentoShipment',
    'MagentoCreditMemoItem' => '\Clang\MagentoCreditMemoItem',
    'MagentoCreditMemo' => '\Clang\MagentoCreditMemo',
    'Email' => '\Clang\Email',
  ];

  public function __construct(string $wsdl = "https://api.myclang.com/app/api/soap/public/wsdl/index.php", array $options = []) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    parent::__construct($wsdl, $options);
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(int $code, Option[] $msg)
   */
  public function campaign_getAllExecutable(string $uuid): array {
    return $this->__soapCall('campaign_getAllExecutable' [$uuid], [
      'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
      'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $campaignId
   * @param Option[] $options
   * @return list(int $code, Option[] $msg)
   */
  public function campaign_execute(string $uuid, $campaignId, array $options): array {
    return $this->__soapCall('campaign_execute', [$uuid, $campaignId, $options], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $campaignId
   * @param Option[] $options
   * @return list(int $code, boolean $msg)
   */
  public function campaign_executeAsync(string $uuid, $campaignId, array $options): array {
    return $this->__soapCall('campaign_executeAsync', [$uuid, $campaignId, $options], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $campaignId
   * @return list(int $code, int $msg)
   */
  public function campaign_getMembers(string $uuid, $campaignId): array {
    return $this->__soapCall('campaign_getMembers', [$uuid, $campaignId], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $campaignId
   * @param int $customerId
   * @return list(int $code, boolean $msg)
   */
  public function campaign_hasMember(string $uuid, $campaignId, $customerId): array {
    return $this->__soapCall('campaign_hasMember', [$uuid, $campaignId, $customerId], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $campaignId
   * @param int $customerId
   * @return list(int $code, boolean $msg)
   */
  public function campaign_addMember(string $uuid, $campaignId, $customerId): array {
    return $this->__soapCall('campaign_addMember', [$uuid, $campaignId, $customerId], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $campaignId
   * @param int $customerId
   * @return list(int $code, boolean $msg)
   */
  public function campaign_removeMember(string $uuid, $campaignId, $customerId): array {
    return $this->__soapCall('campaign_removeMember', [$uuid, $campaignId, $customerId], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(int $code, MethodOptions[] $msg)
   */
  public function sms_listOptions(string $uuid): array {
    return $this->__soapCall('sms_listOptions', [$uuid], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(int $code, Sms $msg)
   */
  public function sms_create(string $uuid): array {
    return $this->__soapCall('sms_create', [$uuid], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $smsId
   * @return list(int $code, boolean $msg)
   */
  public function sms_delete(string $uuid, $smsId): array {
    return $this->__soapCall('sms_delete', [$uuid, $smsId], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $smsId
   * @param int $customerId
   * @param Option[] $manualOptions
   * @param Option[] $options
   * @return list(int $code, boolean $msg)
   */
  public function sms_sendToCustomer(string $uuid, $smsId, $customerId, array $manualOptions, array $options): array {
    return $this->__soapCall('sms_sendToCustomer', [$uuid, $smsId, $customerId, $manualOptions, $options], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $smsId
   * @param int[] $customerIds
   * @param Option[] $manualOptions
   * @param Option[] $options
   * @return list(int $code, boolean $msg)
   */
  public function sms_sendToCustomers(string $uuid, $smsId, array $customerIds, array $manualOptions, array $options): array {
    return $this->__soapCall('sms_sendToCustomers', [$uuid, $smsId, $customerIds, $manualOptions, $options], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(int $code, Sms[] $msg)
   */
  public function sms_getAll(string $uuid): array {
    return $this->__soapCall('sms_getAll', [$uuid], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $smsId
   * @return list(int $code, Sms $msg)
   */
  public function sms_getById(string $uuid, $smsId): array {
    return $this->__soapCall('sms_getById', [$uuid, $smsId], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Sms $sms
   * @return list(int $code, Sms $msg)
   */
  public function sms_insert(string $uuid, Sms $sms): array {
    return $this->__soapCall('sms_insert', [$uuid, $sms], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Sms $sms
   * @return list(int $code, Sms[] $msg)
   */
  public function sms_getByObject(string $uuid, Sms $sms): array {
    return $this->__soapCall('sms_getByObject', [$uuid, $sms], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $smsId
   * @param int $profileId
   * @return list(int $code, boolean $msg)
   */
  public function sms_sendToProfile(string $uuid, $smsId, $profileId): array {
    return $this->__soapCall('sms_sendToProfile', [$uuid, $smsId, $profileId], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $broadcastId
   * @return list(int $code, boolean $msg)
   */
  public function sms_hasChanged(string $uuid, $broadcastId): array {
    return $this->__soapCall('sms_hasChanged', [$uuid, $broadcastId], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Sms $sms
   * @return list(int $code, Sms $msg)
   */
  public function sms_update(string $uuid, Sms $sms): array {
    return $this->__soapCall('sms_update', [$uuid, $sms], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Sms $sms
   * @return list(int $code, Sms $msg)
   */
  public function sms_upsert(string $uuid, Sms $sms): array {
    return $this->__soapCall('sms_upsert', [$uuid, $sms], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $smsId
   * @param int $groupId
   * @param Option[] $options
   * @return list(int $code, boolean $msg)
   */
  public function sms_sendToGroup(string $uuid, $smsId, $groupId, array $options): array {
    return $this->__soapCall('sms_sendToGroup', [$uuid, $smsId, $groupId, $options], [
          'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
          'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $resourceId
   * @param int $index
   * @return list(int $code, Delivery $msg)
   */
  public function deliverySet_getDelivery(string $uuid, $resourceId, $index): array {
    return $this->__soapCall('deliverySet_getDelivery', [$uuid, $resourceId, $index], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $resourceId
   * @param int $offset
   * @param int $size
   * @return list(int $code, Delivery[] $msg)
   */
  public function deliverySet_getDeliveries(string $uuid, $resourceId, $offset, $size): array {
    return $this->__soapCall('deliverySet_getDeliveries', [$uuid, $resourceId, $offset, $size], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param string $campaignObjectId
   * @return list(int $code, CampaignObjectStatistics $msg)
   */
  public function campaignObjectStatistics_getByCampaignObjectId(string $uuid, $campaignObjectId): array {
    return $this->__soapCall('campaignObjectStatistics_getByCampaignObjectId', [$uuid, $campaignObjectId], [
          'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
          'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $campaignId
   * @return list(int $code, CampaignStatistics $msg)
   */
  public function campaignStatistics_getByCampaignId(string $uuid, $campaignId): array {
    return $this->__soapCall('campaignStatistics_getByCampaignId', [$uuid, $campaignId], [
          'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
          'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $campaignId
   * @return list(int $code, int $msg)
   */
  public function campaignStatistics_getCustomerSet(string $uuid, $campaignId): array {
    return $this->__soapCall('campaignStatistics_getCustomerSet', [$uuid, $campaignId], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Customer[] $customers
   * @param string[] $uniqueCustomerFields
   * @param string[] $uniqueOptionFields
   * @return list(int $code, Customer[] $msg)
   */
  public function customer_insertBulkUnique(string $uuid, array $customers, array $uniqueCustomerFields, array $uniqueOptionFields): array {
    return $this->__soapCall('customer_insertBulkUnique', [$uuid, $customers, $uniqueCustomerFields, $uniqueOptionFields], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(int $code, Customer $msg)
   */
  public function customer_create(string $uuid): array {
    return $this->__soapCall('customer_create', [$uuid], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Customer $customer
   * @return list(int $code, Customer $msg)
   */
  public function customer_insert(string $uuid, Customer $customer): array {
    return $this->__soapCall('customer_insert', [$uuid, $customer], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Customer $customer
   * @return list(int $code, Customer $msg)
   */
  public function customer_update(string $uuid, Customer $customer): array {
    return $this->__soapCall('customer_update', [$uuid, $customer], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Customer $customer
   * @param string[] $uniqueCustomerFields
   * @param string[] $uniqueOptionFields
   * @return list(int $code, Customer $msg)
   */
  public function customer_insertUnique(string $uuid, Customer $customer, array $uniqueCustomerFields, array $uniqueOptionFields): array {
    return $this->__soapCall('customer_insertUnique', [$uuid, $customer, $uniqueCustomerFields, $uniqueOptionFields], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $customerId
   * @return list(int $code, Customer $msg)
   */
  public function customer_getById(string $uuid, $customerId): array {
    return $this->__soapCall('customer_getById', [$uuid, $customerId], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param string $accountId
   * @param string $network
   * @return list(int $code, Customer $msg)
   */
  public function customer_getByAccountId(string $uuid, $accountId, $network): array {
    return $this->__soapCall('customer_getByAccountId', [$uuid, $accountId, $network], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $customerId
   * @return list(int $code, Group[] $msg)
   */
  public function customer_getGroups(string $uuid, $customerId): array {
    return $this->__soapCall('customer_getGroups', [$uuid, $customerId], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(int $code, int $msg)
   */
  public function customer_getAll(string $uuid): array {
    return $this->__soapCall('customer_getAll', [$uuid], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Customer $customer
   * @return list(int $code, int $msg)
   */
  public function customer_getByObject(string $uuid, Customer $customer): array {
    return $this->__soapCall('customer_getByObject', [$uuid, $customer], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param string $emailAddress
   * @return list(int $code, Customer[] $msg)
   */
  public function customer_getByEmailAddress(string $uuid, $emailAddress): array {
    return $this->__soapCall('customer_getByEmailAddress', [$uuid, $emailAddress], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param string $mobilePhone
   * @return list(int $code, Customer[] $msg)
   */
  public function customer_getByMobilePhone(string $uuid, $mobilePhone): array {
    return $this->__soapCall('customer_getByMobilePhone', [$uuid, $mobilePhone], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param string $externalId
   * @return list(int $code, Customer[] $msg)
   */
  public function customer_getByExternalId(string $uuid, $externalId): array {
    return $this->__soapCall('customer_getByExternalId', [$uuid, $externalId], [
          'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
          'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param string $userName
   * @param string $password
   * @return list(int $code, Customer[] $msg)
   */
  public function customer_getByUserNameAndPassword(string $uuid, $userName, $password): array {
    return $this->__soapCall('customer_getByUserNameAndPassword', [$uuid, $userName, $password], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Customer $customer
   * @return list(int $code, boolean $msg)
   */
  public function customer_delete(string $uuid, Customer $customer): array {
    return $this->__soapCall('customer_delete', [$uuid, $customer], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(int $code, int $msg)
   */
  public function customer_getTotalNumberOfCustomers(string $uuid): array {
    return $this->__soapCall('customer_getTotalNumberOfCustomers', [$uuid], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Customer $customer
   * @return list(int $code, Customer $msg)
   */
  public function customer_upsert(string $uuid, Customer $customer): array {
    return $this->__soapCall('customer_upsert', [$uuid, $customer], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $resourceId
   * @return list(int $code, Resource $msg)
   */
  public function resource_getById(string $uuid, $resourceId): array {
    return $this->__soapCall('resource_getById', [$uuid, $resourceId], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $resourceId
   * @return list(int $code, boolean $msg)
   */
  public function resource_free(string $uuid, $resourceId): array {
    return $this->__soapCall('resource_free', [$uuid, $resourceId], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Mailing $mailing
   * @return list(int $code, int $msg)
   */
  public function mailing_getComplaintSet(string $uuid, Mailing $mailing): array {
    return $this->__soapCall('mailing_getComplaintSet', [$uuid, $mailing], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Mailing $mailing
   * @return list(int $code, int $msg)
   */
  public function mailing_getDeliverySet(string $uuid, Mailing $mailing): array {
    return $this->__soapCall('mailing_getDeliverySet', [$uuid, $mailing], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param string $campaignObjectId
   * @return list(int $code, int $msg)
   */
  public function mailing_getByCampaignObjectId(string $uuid, $campaignObjectId): array {
    return $this->__soapCall('mailing_getByCampaignObjectId', [$uuid, $campaignObjectId], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param string $fromDate
   * @param string $toDate
   * @return list(int $code, int $msg)
   */
  public function mailing_getByDate(string $uuid, string $fromDate, string $toDate): array {
    return $this->__soapCall('mailing_getByDate', [$uuid, $fromDate, $toDate], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(int $code, int $msg)
   */
  public function mailing_getAll(string $uuid): array {
    return $this->__soapCall('mailing_getAll', [$uuid], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $mailingId
   * @return list(int $code, Mailing $msg)
   */
  public function mailing_getById(string $uuid, $mailingId): array {
    return $this->__soapCall('mailing_getById', [$uuid, $mailingId], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(int $code, int $msg)
   */
  public function mailing_getQuickmails(string $uuid): array {
    return $this->__soapCall('mailing_getQuickmails', [$uuid], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param string $fromDate
   * @param string $toDate
   * @return list(int $code, int $msg)
   */
  public function mailing_getQuickmailsByDate(string $uuid, string $fromDate, string $toDate): array {
    return $this->__soapCall('mailing_getQuickmailsByDate', [$uuid, $fromDate, $toDate], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Mailing $mailing
   * @return list(int $code, int $msg)
   */
  public function mailing_getOpenSet(string $uuid, Mailing $mailing): array {
    return $this->__soapCall('mailing_getOpenSet', [$uuid, $mailing], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Mailing $mailing
   * @return list(int $code, int $msg)
   */
  public function mailing_getBounceSet(string $uuid, Mailing $mailing): array {
    return $this->__soapCall('mailing_getBounceSet', [$uuid, $mailing], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $resourceId
   * @param int $index
   * @return list(int $code, Bounce $msg)
   */
  public function bounceSet_getBounce(string $uuid, $resourceId, $index): array {
    return $this->__soapCall('bounceSet_getBounce', [$uuid, $resourceId, $index], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $resourceId
   * @param int $offset
   * @param int $size
   * @return list(int $code, Bounce[] $msg)
   */
  public function bounceSet_getBounces(string $uuid, $resourceId, $offset, $size): array {
    return $this->__soapCall('bounceSet_getBounces', [$uuid, $resourceId, $offset, $size], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $resourceId
   * @param int $offset
   * @param int $size
   * @return list(int $code, int[] $msg)
   */
  public function bounceSet_getBounceIds(string $uuid, $resourceId, $offset, $size): array {
    return $this->__soapCall('bounceSet_getBounceIds', [$uuid, $resourceId, $offset, $size], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(int $code, MagentoCategory $msg)
   */
  public function magentoCategory_create(string $uuid): array {
    return $this->__soapCall('magentoCategory_create', [$uuid], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param MagentoCategory $category
   * @return list(int $code, MagentoCategory $msg)
   */
  public function magentoCategory_upsert(string $uuid, MagentoCategory $category): array {
    return $this->__soapCall('magentoCategory_upsert', [$uuid, $category], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param string $campaignObjectStatisiticsOptionId
   * @return list(int $code, int $msg)
   */
  public function campaignObjectStatisticsOption_getCustomerSet(string $uuid, $campaignObjectStatisiticsOptionId): array {
    return $this->__soapCall('campaignObjectStatisticsOption_getCustomerSet', [$uuid, $campaignObjectStatisiticsOptionId], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param MailingLink $mailingLink
   * @return list(int $code, int $msg)
   */
  public function mailingLink_getClickSet(string $uuid, MailingLink $mailingLink): array {
    return $this->__soapCall('mailingLink_getClickSet', [$uuid, $mailingLink], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param MagentoOrder $order
   * @return list(int $code, boolean $msg)
   */
  public function magentoOrder_update(string $uuid, MagentoOrder $order): array {
    return $this->__soapCall('magentoOrder_update', [$uuid, $order], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(int $code, MagentoOrder $msg)
   */
  public function magentoOrder_create(string $uuid): array {
    return $this->__soapCall('magentoOrder_create', [$uuid], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param MagentoOrder $order
   * @return list(int $code, MagentoOrder $msg)
   */
  public function magentoOrder_insert(string $uuid, MagentoOrder $order): array {
    return $this->__soapCall('magentoOrder_insert', [$uuid, $order], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param MagentoOrder[] $orders
   * @return list(int $code, MagentoOrder[] $msg)
   */
  public function magentoOrder_insertBulk(string $uuid, array $orders): array {
    return $this->__soapCall('magentoOrder_insertBulk', [$uuid, $orders], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(int $code, MagentoAbandonedOrder $msg)
   */
  public function magentoAbandonedOrder_create(string $uuid): array {
    return $this->__soapCall('magentoAbandonedOrder_create', [$uuid], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param MagentoAbandonedOrder $order
   * @return list(int $code, MagentoAbandonedOrder $msg)
   */
  public function magentoAbandonedOrder_insert(string $uuid, MagentoAbandonedOrder $order): array {
    return $this->__soapCall('magentoAbandonedOrder_insert', [$uuid, $order], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Option[] $keywords
   * @param string $id
   * @return list(int $code, boolean $msg)
   */
  public function conversionTracking_track(string $uuid, array $keywords, string $id): array {
    return $this->__soapCall('conversionTracking_track', [$uuid, $keywords, $id], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $resourceId
   * @param int $index
   * @return list(int $code, Click $msg)
   */
  public function clickSet_getClick(string $uuid, $resourceId, $index): array {
    return $this->__soapCall('clickSet_getClick', [$uuid, $resourceId, $index], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $resourceId
   * @param int $offset
   * @param int $size
   * @return list(int $code, Click[] $msg)
   */
  public function clickSet_getClicks(string $uuid, $resourceId, $offset, $size): array {
    return $this->__soapCall('clickSet_getClicks', [$uuid, $resourceId, $offset, $size], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $resourceId
   * @param int $offset
   * @param int $size
   * @return list(int $code, int[] $msg)
   */
  public function clickSet_getClickIds(string $uuid, $resourceId, $offset, $size): array {
    return $this->__soapCall('clickSet_getClickIds', [$uuid, $resourceId, $offset, $size], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param MagentoEmail $email
   * @param string $campaignName
   * @return list(int $code, int $msg)
   */
  public function magentoEmail_insert(string $uuid, MagentoEmail $email, $campaignName): array {
    return $this->__soapCall('magentoEmail_insert', [$uuid, $email, $campaignName], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Group $group
   * @param Customer[] $customers
   * @return list(int $code, boolean $msg)
   */
  public function group_addMembersInBulk(string $uuid, Group $group, array $customers): array {
    return $this->__soapCall('group_addMembersInBulk', [$uuid, $group, $customers], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $groupId
   * @param int $customerId
   * @param bool $includeSubGroups
   * @return list(int $code, GroupMembership $msg)
   */
  public function group_hasMember(string $uuid, $groupId, $customerId, $includeSubGroups): array {
    return $this->__soapCall('group_hasMember', [$uuid, $groupId, $customerId, $includeSubGroups], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $groupId
   * @return list(int $code, Group $msg)
   */
  public function group_getById(string $uuid, $groupId): array {
    return $this->__soapCall('group_getById', [$uuid, $groupId], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $groupId
   * @return list(int $code, boolean $msg)
   */
  public function group_delete(string $uuid, $groupId): array {
    return $this->__soapCall('group_delete', [$uuid, $groupId], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $groupId
   * @param bool $recursive
   * @return list(int $code, int $msg)
   */
  public function group_getMembers(string $uuid, $groupId, $recursive): array {
    return $this->__soapCall('group_getMembers', [$uuid, $groupId, $recursive], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Group $group
   * @return list(int $code, Group $msg)
   */
  public function group_update(string $uuid, Group $group): array {
    return $this->__soapCall('group_update', [$uuid, $group], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Group $group
   * @param int $newParentId
   * @return list(int $code, Group $msg)
   */
  public function group_move(string $uuid, Group $group, $newParentId): array {
    return $this->__soapCall('group_move', [$uuid, $group, $newParentId], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Group $group
   * @return list(int $code, Group $msg)
   */
  public function group_getParent(string $uuid, Group $group): array {
    return $this->__soapCall('group_getParent', [$uuid, $group], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(int $code, Group $msg)
   */
  public function group_create(string $uuid): array {
    return $this->__soapCall('group_create', [$uuid], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Group $group
   * @return list(int $code, Group $msg)
   */
  public function group_insert(string $uuid, Group $group): array {
    return $this->__soapCall('group_insert', [$uuid, $group], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Group $group
   * @return list(int $code, Group $msg)
   */
  public function group_upsert(string $uuid, Group $group): array {
    return $this->__soapCall('group_upsert', [$uuid, $group], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Group $group
   * @return list(int $code, Group[] $msg)
   */
  public function group_getByObject(string $uuid, Group $group): array {
    return $this->__soapCall('group_getByObject', [$uuid, $group], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(int $code, Group[] $msg)
   */
  public function group_getAll(string $uuid): array {
    return $this->__soapCall('group_getAll', [$uuid], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Group $group
   * @return list(int $code, Group[] $msg)
   */
  public function group_getChildren(string $uuid, Group $group): array {
    return $this->__soapCall('group_getChildren', [$uuid, $group], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Group $group
   * @param Customer $customer
   * @return list(int $code, boolean $msg)
   */
  public function group_addMember(string $uuid, Group $group, Customer $customer): array {
    return $this->__soapCall('group_addMember', [$uuid, $group, $customer], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Group $group
   * @param Customer $customer
   * @return list(int $code, boolean $msg)
   */
  public function group_removeMember(string $uuid, Group $group, Customer $customer): array {
    return $this->__soapCall('group_removeMember', [$uuid, $group, $customer], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(int $code, boolean $msg)
   */
  public function group_calculate(string $uuid): array {
    return $this->__soapCall('group_calculate', [$uuid], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $resourceId
   * @param int $index
   * @return list(int $code, Mailing $msg)
   */
  public function mailingSet_getMailing(string $uuid, $resourceId, $index): array {
    return $this->__soapCall('mailingSet_getMailing', [$uuid, $resourceId, $index], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $resourceId
   * @param int $offset
   * @param int $size
   * @return list(int $code, Mailing[] $msg)
   */
  public function mailingSet_getMailings(string $uuid, $resourceId, $offset, $size): array {
    return $this->__soapCall('mailingSet_getMailings', [$uuid, $resourceId, $offset, $size], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $resourceId
   * @param int $offset
   * @param int $size
   * @return list(int $code, int[] $msg)
   */
  public function mailingSet_getMailingIds(string $uuid, $resourceId, $offset, $size): array {
    return $this->__soapCall('mailingSet_getMailingIds', [$uuid, $resourceId, $offset, $size], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $clickId
   * @return list(int $code, Click $msg)
   */
  public function click_getById(string $uuid, int $clickId): array {
    return $this->__soapCall('click_getById', [$uuid, $clickId], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $resourceId
   * @param int $index
   * @return list(int $code, Customer $msg)
   */
  public function customerSet_getCustomer(string $uuid, $resourceId, $index): array {
    return $this->__soapCall('customerSet_getCustomer', [$uuid, $resourceId, $index], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $resourceId
   * @param int $offset
   * @param int $size
   * @return list(int $code, Customer[] $msg)
   */
  public function customerSet_getCustomers(string $uuid, $resourceId, $offset, $size): array {
    return $this->__soapCall('customerSet_getCustomers', [$uuid, $resourceId, $offset, $size], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $resourceId
   * @param int $offset
   * @param int $size
   * @return list(int $code, int[] $msg)
   */
  public function customerSet_getCustomerIds(string $uuid, $resourceId, $offset, $size): array {
    return $this->__soapCall('customerSet_getCustomerIds', [$uuid, $resourceId, $offset, $size], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param MagentoShipment $shipment
   * @return list(int $code, MagentoShipment $msg)
   */
  public function magentoShipment_insert(string $uuid, MagentoShipment $shipment): array {
    return $this->__soapCall('magentoShipment_insert', [$uuid, $shipment], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(int $code, MagentoShipment $msg)
   */
  public function magentoShipment_create(string $uuid): array {
    return $this->__soapCall('magentoShipment_create', [$uuid], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param MagentoCreditMemo $creditmemo
   * @return list(int $code, MagentoCreditMemo $msg)
   */
  public function magentoCreditMemo_insert(string $uuid, MagentoCreditMemo $creditmemo): array {
    return $this->__soapCall('magentoCreditMemo_insert', [$uuid, $creditmemo], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $resourceId
   * @param int $index
   * @return list(int $code, Open $msg)
   */
  public function openSet_getOpen(string $uuid, $resourceId, $index): array {
    return $this->__soapCall('openSet_getOpen', [$uuid, $resourceId, $index], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $resourceId
   * @param int $offset
   * @param int $size
   * @return list(int $code, Open[] $msg)
   */
  public function openSet_getOpens(string $uuid, $resourceId, $offset, $size): array {
    return $this->__soapCall('openSet_getOpens', [$uuid, $resourceId, $offset, $size], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $resourceId
   * @param int $offset
   * @param int $size
   * @return list(int $code, int[] $msg)
   */
  public function openSet_getOpenIds(string $uuid, $resourceId, $offset, $size): array {
    return $this->__soapCall('openSet_getOpenIds', [$uuid, $resourceId, $offset, $size], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Email $email
   * @return list(int $code, Email $msg)
   */
  public function email_insert(string $uuid, Email $email): array {
    return $this->__soapCall('email_insert', [$uuid, $email], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Email $email
   * @return list(int $code, Email $msg)
   */
  public function email_update(string $uuid, Email $email): array {
    return $this->__soapCall('email_update', [$uuid, $email], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Email $email
   * @return list(int $code, Email $msg)
   */
  public function email_upsert(string $uuid, Email $email): array {
    return $this->__soapCall('email_upsert', [$uuid, $email], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $emailId
   * @return list(int $code, Email $msg)
   */
  public function email_getById(string $uuid, $emailId): array {
    return $this->__soapCall('email_getById', [$uuid, $emailId], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(int $code, MethodOptions[] $msg)
   */
  public function email_listOptions(string $uuid): array {
    return $this->__soapCall('email_listOptions', [$uuid], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $emailId
   * @param int $groupId
   * @param Option[] $manualOptions
   * @param Option[] $options
   * @return list(int $code, boolean $msg)
   */
  public function email_sendToGroup(string $uuid, $emailId, $groupId, array $manualOptions, array $options): array {
    return $this->__soapCall('email_sendToGroup', [$uuid, $emailId, $groupId, $manualOptions, $options], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $emailId
   * @param int $profileId
   * @param Option[] $manualOptions
   * @param Option[] $options
   * @return list(int $code, boolean $msg)
   */
  public function email_sendToProfile(string $uuid, $emailId, $profileId, array $manualOptions, array $options): array {
    return $this->__soapCall('email_sendToProfile', [$uuid, $emailId, $profileId, $manualOptions, $options], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $emailId
   * @param int $customerId
   * @param Option[] $manualOptions
   * @param Option[] $options
   * @return list(int $code, boolean $msg)
   */
  public function email_sendToCustomer(string $uuid, $emailId, $customerId, array $manualOptions, array $options): array {
    return $this->__soapCall('email_sendToCustomer', [$uuid, $emailId, $customerId, $manualOptions, $options], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $emailId
   * @param int[] $customerIds
   * @param Option[] $manualOptions
   * @param Option[] $options
   * @return list(int $code, boolean $msg)
   */
  public function email_sendToCustomers(string $uuid, $emailId, array $customerIds, array $manualOptions, array $options): array {
    return $this->__soapCall('email_sendToCustomers', [$uuid, $emailId, $customerIds, $manualOptions, $options], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Email $email
   * @return list(int $code, Email[] $msg)
   */
  public function email_getByObject(string $uuid, Email $email): array {
    return $this->__soapCall('email_getByObject', [$uuid, $email], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $emailId
   * @return list(int $code, boolean $msg)
   */
  public function email_delete(string $uuid, $emailId): array {
    return $this->__soapCall('email_delete', [$uuid, $emailId], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(int $code, Email[] $msg)
   */
  public function email_getAll(string $uuid): array {
    return $this->__soapCall('email_getAll', [$uuid], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $broadcastId
   * @return list(int $code, boolean $msg)
   */
  public function email_hasChanged(string $uuid, $broadcastId): array {
    return $this->__soapCall('email_hasChanged', [$uuid, $broadcastId], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(int $code, Email $msg)
   */
  public function email_create(string $uuid): array {
    return $this->__soapCall('email_create', [$uuid], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $resourceId
   * @param int $index
   * @return list(int $code, Complaint $msg)
   */
  public function complaintSet_getComplaint(string $uuid, $resourceId, $index): array {
    return $this->__soapCall('complaintSet_getComplaint', [$uuid, $resourceId, $index], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $resourceId
   * @param int $offset
   * @param int $size
   * @return list(int $code, Complaint[] $msg)
   */
  public function complaintSet_getComplaints(string $uuid, $resourceId, $offset, $size): array {
    return $this->__soapCall('complaintSet_getComplaints', [$uuid, $resourceId, $offset, $size], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $resourceId
   * @param int $offset
   * @param int $size
   * @return list(int $code, int[] $msg)
   */
  public function complaintSet_getComplaintIds(string $uuid, $resourceId, $offset, $size): array {
    return $this->__soapCall('complaintSet_getComplaintIds', [$uuid, $resourceId, $offset, $size], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $customerId
   * @param string $accountId
   * @param string $network
   * @return list(int $code, boolean $msg)
   */
  public function account_addToCustomer(string $uuid, $customerId, $accountId, $network): array {
    return $this->__soapCall('account_addToCustomer', [$uuid, $customerId, $accountId, $network], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $customerId
   * @param string $accountId
   * @param string $network
   * @return list(int $code, boolean $msg)
   */
  public function account_deleteFromCustomer(string $uuid, $customerId, $accountId, $network): array {
    return $this->__soapCall('account_deleteFromCustomer', [$uuid, $customerId, $accountId, $network], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $bounceId
   * @return list(int $code, Bounce $msg)
   */
  public function bounce_getById(string $uuid, $bounceId): array {
    return $this->__soapCall('bounce_getById', [$uuid, $bounceId], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param MagentoProduct $product
   * @param bool $abandoned
   * @return list(int $code, MagentoProduct $msg)
   */
  public function magentoProduct_upsert(string $uuid, MagentoProduct $product, $abandoned): array {
    return $this->__soapCall('magentoProduct_upsert', [$uuid, $product, $abandoned], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(int $code, MagentoProduct $msg)
   */
  public function magentoProduct_create(string $uuid): array {
    return $this->__soapCall('magentoProduct_create', [$uuid], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Customer[] $customers
   * @param int $websiteId
   * @param string $websiteName
   * @return list(int $code, Customer[] $msg)
   */
  public function magento_customerInsertBulkUnique(string $uuid, array $customers, $websiteId, $websiteName): array {
    return $this->__soapCall('magento_customerInsertBulkUnique', [$uuid, $customers, $websiteId, $websiteName], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Customer $customer
   * @param int $websiteId
   * @return list(int $code, Customer $msg)
   */
  public function magento_customerInsertUnique(string $uuid, Customer $customer, $websiteId): array {
    return $this->__soapCall('magento_customerInsertUnique', [$uuid, $customer, $websiteId], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(int $code, Option[] $msg)
   */
  public function magento_getCampaigns(string $uuid): array {
    return $this->__soapCall('magento_getCampaigns', [$uuid], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param string $lang
   * @return list(int $code, Option[] $msg)
   */
  public function magento_getAvailableCustomerFields(string $uuid, string $lang): array {
    return $this->__soapCall('magento_getAvailableCustomerFields', [$uuid, $lang], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param string $wsdl
   * @param string $username
   * @param string $password
   * @return list(int $code, boolean $msg)
   */
  public function magento_testConnection(string $uuid, string $wsdl, $username, $password): array {
    return $this->__soapCall('magento_testConnection', [$uuid, $wsdl, $username, $password], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int[] $customerIds
   * @return list(int $code, int $msg)
   */
  public function magento_executeAbandonedCart(string $uuid, array $customerIds): array {
    return $this->__soapCall('magento_executeAbandonedCart', [$uuid, $customerIds], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

  /**
   *
   *
   * @param string $uuid
   * @param int $openId
   * @return list(int $code, Open $msg)
   */
  public function open_getById(string $uuid, $openId): array {
    return $this->__soapCall('open_getById', [$uuid, $openId], [
        'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
        'soapaction' => ''
      ]
    );
  }

}
