<?php
namespace Clang;

/**
 * ClangAPI class
 *
 *
 *
 * @author    {author}
 * @copyright {copyright}
 * @package   {package}
 */
class ClangAPI extends \SoapClient {

  private static $classmap = array(
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
                                   );

  public function __construct($wsdl = "https://api.myclang.com/app/api/soap/public/wsdl/index.php", $options = array()) {
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
   * @return list(integer $code, ArrayOfOption $msg)
   */
  public function campaign_getAllExecutable($uuid) {
    return $this->__soapCall('campaign_getAllExecutable', array($uuid),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $campaignId
   * @param ArrayOfOption $options
   * @return list(integer $code, ArrayOfOption $msg)
   */
  public function campaign_execute($uuid, $campaignId, $options) {
    return $this->__soapCall('campaign_execute', array($uuid, $campaignId, $options),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $campaignId
   * @param ArrayOfOption $options
   * @return list(integer $code, boolean $msg)
   */
  public function campaign_executeAsync($uuid, $campaignId, $options) {
    return $this->__soapCall('campaign_executeAsync', array($uuid, $campaignId, $options),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $campaignId
   * @return list(integer $code, long $msg)
   */
  public function campaign_getMembers($uuid, $campaignId) {
    return $this->__soapCall('campaign_getMembers', array($uuid, $campaignId),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $campaignId
   * @param long $customerId
   * @return list(integer $code, boolean $msg)
   */
  public function campaign_hasMember($uuid, $campaignId, $customerId) {
    return $this->__soapCall('campaign_hasMember', array($uuid, $campaignId, $customerId),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $campaignId
   * @param long $customerId
   * @return list(integer $code, boolean $msg)
   */
  public function campaign_addMember($uuid, $campaignId, $customerId) {
    return $this->__soapCall('campaign_addMember', array($uuid, $campaignId, $customerId),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $campaignId
   * @param long $customerId
   * @return list(integer $code, boolean $msg)
   */
  public function campaign_removeMember($uuid, $campaignId, $customerId) {
    return $this->__soapCall('campaign_removeMember', array($uuid, $campaignId, $customerId),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(integer $code, ArrayOfMethodOptions $msg)
   */
  public function sms_listOptions($uuid) {
    return $this->__soapCall('sms_listOptions', array($uuid),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(integer $code, Sms $msg)
   */
  public function sms_create($uuid) {
    return $this->__soapCall('sms_create', array($uuid),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $smsId
   * @return list(integer $code, boolean $msg)
   */
  public function sms_delete($uuid, $smsId) {
    return $this->__soapCall('sms_delete', array($uuid, $smsId),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $smsId
   * @param long $customerId
   * @param ArrayOfOption $manualOptions
   * @param ArrayOfOption $options
   * @return list(integer $code, boolean $msg)
   */
  public function sms_sendToCustomer($uuid, $smsId, $customerId, $manualOptions, $options) {
    return $this->__soapCall('sms_sendToCustomer', array($uuid, $smsId, $customerId, $manualOptions, $options),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $smsId
   * @param ArrayOfInt $customerIds
   * @param ArrayOfOption $manualOptions
   * @param ArrayOfOption $options
   * @return list(integer $code, boolean $msg)
   */
  public function sms_sendToCustomers($uuid, $smsId, $customerIds, $manualOptions, $options) {
    return $this->__soapCall('sms_sendToCustomers', array($uuid, $smsId, $customerIds, $manualOptions, $options),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(integer $code, ArrayOfSms $msg)
   */
  public function sms_getAll($uuid) {
    return $this->__soapCall('sms_getAll', array($uuid),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $smsId
   * @return list(integer $code, Sms $msg)
   */
  public function sms_getById($uuid, $smsId) {
    return $this->__soapCall('sms_getById', array($uuid, $smsId),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Sms $sms
   * @return list(integer $code, Sms $msg)
   */
  public function sms_insert($uuid, Sms $sms) {
    return $this->__soapCall('sms_insert', array($uuid, $sms),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Sms $sms
   * @return list(integer $code, ArrayOfSms $msg)
   */
  public function sms_getByObject($uuid, Sms $sms) {
    return $this->__soapCall('sms_getByObject', array($uuid, $sms),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $smsId
   * @param long $profileId
   * @return list(integer $code, boolean $msg)
   */
  public function sms_sendToProfile($uuid, $smsId, $profileId) {
    return $this->__soapCall('sms_sendToProfile', array($uuid, $smsId, $profileId),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $broadcastId
   * @return list(integer $code, boolean $msg)
   */
  public function sms_hasChanged($uuid, $broadcastId) {
    return $this->__soapCall('sms_hasChanged', array($uuid, $broadcastId),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Sms $sms
   * @return list(integer $code, Sms $msg)
   */
  public function sms_update($uuid, Sms $sms) {
    return $this->__soapCall('sms_update', array($uuid, $sms),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Sms $sms
   * @return list(integer $code, Sms $msg)
   */
  public function sms_upsert($uuid, Sms $sms) {
    return $this->__soapCall('sms_upsert', array($uuid, $sms),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $smsId
   * @param long $groupId
   * @param ArrayOfOption $options
   * @return list(integer $code, boolean $msg)
   */
  public function sms_sendToGroup($uuid, $smsId, $groupId, $options) {
    return $this->__soapCall('sms_sendToGroup', array($uuid, $smsId, $groupId, $options),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $resourceId
   * @param long $index
   * @return list(integer $code, Delivery $msg)
   */
  public function deliverySet_getDelivery($uuid, $resourceId, $index) {
    return $this->__soapCall('deliverySet_getDelivery', array($uuid, $resourceId, $index),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $resourceId
   * @param long $offset
   * @param long $size
   * @return list(integer $code, ArrayOfDelivery $msg)
   */
  public function deliverySet_getDeliveries($uuid, $resourceId, $offset, $size) {
    return $this->__soapCall('deliverySet_getDeliveries', array($uuid, $resourceId, $offset, $size),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param string $campaignObjectId
   * @return list(integer $code, CampaignObjectStatistics $msg)
   */
  public function campaignObjectStatistics_getByCampaignObjectId($uuid, $campaignObjectId) {
    return $this->__soapCall('campaignObjectStatistics_getByCampaignObjectId', array($uuid, $campaignObjectId),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $campaignId
   * @return list(integer $code, CampaignStatistics $msg)
   */
  public function campaignStatistics_getByCampaignId($uuid, $campaignId) {
    return $this->__soapCall('campaignStatistics_getByCampaignId', array($uuid, $campaignId),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $campaignId
   * @return list(integer $code, long $msg)
   */
  public function campaignStatistics_getCustomerSet($uuid, $campaignId) {
    return $this->__soapCall('campaignStatistics_getCustomerSet', array($uuid, $campaignId),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param ArrayOfCustomer $customers
   * @param ArrayOfString $uniqueCustomerFields
   * @param ArrayOfString $uniqueOptionFields
   * @return list(integer $code, ArrayOfCustomer $msg)
   */
  public function customer_insertBulkUnique($uuid, $customers, $uniqueCustomerFields, $uniqueOptionFields) {
    return $this->__soapCall('customer_insertBulkUnique', array($uuid, $customers, $uniqueCustomerFields, $uniqueOptionFields),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(integer $code, Customer $msg)
   */
  public function customer_create($uuid) {
    return $this->__soapCall('customer_create', array($uuid),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Customer $customer
   * @return list(integer $code, Customer $msg)
   */
  public function customer_insert($uuid, Customer $customer) {
    return $this->__soapCall('customer_insert', array($uuid, $customer),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Customer $customer
   * @return list(integer $code, Customer $msg)
   */
  public function customer_update($uuid, Customer $customer) {
    return $this->__soapCall('customer_update', array($uuid, $customer),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Customer $customer
   * @param ArrayOfString $uniqueCustomerFields
   * @param ArrayOfString $uniqueOptionFields
   * @return list(integer $code, Customer $msg)
   */
  public function customer_insertUnique($uuid, Customer $customer, $uniqueCustomerFields, $uniqueOptionFields) {
    return $this->__soapCall('customer_insertUnique', array($uuid, $customer, $uniqueCustomerFields, $uniqueOptionFields),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $customerId
   * @return list(integer $code, Customer $msg)
   */
  public function customer_getById($uuid, $customerId) {
    return $this->__soapCall('customer_getById', array($uuid, $customerId),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param string $accountId
   * @param string $network
   * @return list(integer $code, Customer $msg)
   */
  public function customer_getByAccountId($uuid, $accountId, $network) {
    return $this->__soapCall('customer_getByAccountId', array($uuid, $accountId, $network),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $customerId
   * @return list(integer $code, ArrayOfGroup $msg)
   */
  public function customer_getGroups($uuid, $customerId) {
    return $this->__soapCall('customer_getGroups', array($uuid, $customerId),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(integer $code, long $msg)
   */
  public function customer_getAll($uuid) {
    return $this->__soapCall('customer_getAll', array($uuid),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Customer $customer
   * @return list(integer $code, long $msg)
   */
  public function customer_getByObject($uuid, Customer $customer) {
    return $this->__soapCall('customer_getByObject', array($uuid, $customer),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param string $emailAddress
   * @return list(integer $code, ArrayOfCustomer $msg)
   */
  public function customer_getByEmailAddress($uuid, $emailAddress) {
    return $this->__soapCall('customer_getByEmailAddress', array($uuid, $emailAddress),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param string $mobilePhone
   * @return list(integer $code, ArrayOfCustomer $msg)
   */
  public function customer_getByMobilePhone($uuid, $mobilePhone) {
    return $this->__soapCall('customer_getByMobilePhone', array($uuid, $mobilePhone),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param string $externalId
   * @return list(integer $code, ArrayOfCustomer $msg)
   */
  public function customer_getByExternalId($uuid, $externalId) {
    return $this->__soapCall('customer_getByExternalId', array($uuid, $externalId),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param string $userName
   * @param string $password
   * @return list(integer $code, ArrayOfCustomer $msg)
   */
  public function customer_getByUserNameAndPassword($uuid, $userName, $password) {
    return $this->__soapCall('customer_getByUserNameAndPassword', array($uuid, $userName, $password),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Customer $customer
   * @return list(integer $code, boolean $msg)
   */
  public function customer_delete($uuid, Customer $customer) {
    return $this->__soapCall('customer_delete', array($uuid, $customer),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(integer $code, long $msg)
   */
  public function customer_getTotalNumberOfCustomers($uuid) {
    return $this->__soapCall('customer_getTotalNumberOfCustomers', array($uuid),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Customer $customer
   * @return list(integer $code, Customer $msg)
   */
  public function customer_upsert($uuid, Customer $customer) {
    return $this->__soapCall('customer_upsert', array($uuid, $customer),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $resourceId
   * @return list(integer $code, Resource $msg)
   */
  public function resource_getById($uuid, $resourceId) {
    return $this->__soapCall('resource_getById', array($uuid, $resourceId),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $resourceId
   * @return list(integer $code, boolean $msg)
   */
  public function resource_free($uuid, $resourceId) {
    return $this->__soapCall('resource_free', array($uuid, $resourceId),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Mailing $mailing
   * @return list(integer $code, long $msg)
   */
  public function mailing_getComplaintSet($uuid, Mailing $mailing) {
    return $this->__soapCall('mailing_getComplaintSet', array($uuid, $mailing),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Mailing $mailing
   * @return list(integer $code, long $msg)
   */
  public function mailing_getDeliverySet($uuid, Mailing $mailing) {
    return $this->__soapCall('mailing_getDeliverySet', array($uuid, $mailing),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param string $campaignObjectId
   * @return list(integer $code, long $msg)
   */
  public function mailing_getByCampaignObjectId($uuid, $campaignObjectId) {
    return $this->__soapCall('mailing_getByCampaignObjectId', array($uuid, $campaignObjectId),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param string $fromDate
   * @param string $toDate
   * @return list(integer $code, long $msg)
   */
  public function mailing_getByDate($uuid, $fromDate, $toDate) {
    return $this->__soapCall('mailing_getByDate', array($uuid, $fromDate, $toDate),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(integer $code, long $msg)
   */
  public function mailing_getAll($uuid) {
    return $this->__soapCall('mailing_getAll', array($uuid),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $mailingId
   * @return list(integer $code, Mailing $msg)
   */
  public function mailing_getById($uuid, $mailingId) {
    return $this->__soapCall('mailing_getById', array($uuid, $mailingId),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(integer $code, long $msg)
   */
  public function mailing_getQuickmails($uuid) {
    return $this->__soapCall('mailing_getQuickmails', array($uuid),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param string $fromDate
   * @param string $toDate
   * @return list(integer $code, long $msg)
   */
  public function mailing_getQuickmailsByDate($uuid, $fromDate, $toDate) {
    return $this->__soapCall('mailing_getQuickmailsByDate', array($uuid, $fromDate, $toDate),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Mailing $mailing
   * @return list(integer $code, long $msg)
   */
  public function mailing_getOpenSet($uuid, Mailing $mailing) {
    return $this->__soapCall('mailing_getOpenSet', array($uuid, $mailing),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Mailing $mailing
   * @return list(integer $code, long $msg)
   */
  public function mailing_getBounceSet($uuid, Mailing $mailing) {
    return $this->__soapCall('mailing_getBounceSet', array($uuid, $mailing),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $resourceId
   * @param long $index
   * @return list(integer $code, Bounce $msg)
   */
  public function bounceSet_getBounce($uuid, $resourceId, $index) {
    return $this->__soapCall('bounceSet_getBounce', array($uuid, $resourceId, $index),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $resourceId
   * @param long $offset
   * @param long $size
   * @return list(integer $code, ArrayOfBounce $msg)
   */
  public function bounceSet_getBounces($uuid, $resourceId, $offset, $size) {
    return $this->__soapCall('bounceSet_getBounces', array($uuid, $resourceId, $offset, $size),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $resourceId
   * @param long $offset
   * @param long $size
   * @return list(integer $code, ArrayOfInt $msg)
   */
  public function bounceSet_getBounceIds($uuid, $resourceId, $offset, $size) {
    return $this->__soapCall('bounceSet_getBounceIds', array($uuid, $resourceId, $offset, $size),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(integer $code, MagentoCategory $msg)
   */
  public function magentoCategory_create($uuid) {
    return $this->__soapCall('magentoCategory_create', array($uuid),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param MagentoCategory $category
   * @return list(integer $code, MagentoCategory $msg)
   */
  public function magentoCategory_upsert($uuid, MagentoCategory $category) {
    return $this->__soapCall('magentoCategory_upsert', array($uuid, $category),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param string $campaignObjectStatisiticsOptionId
   * @return list(integer $code, long $msg)
   */
  public function campaignObjectStatisticsOption_getCustomerSet($uuid, $campaignObjectStatisiticsOptionId) {
    return $this->__soapCall('campaignObjectStatisticsOption_getCustomerSet', array($uuid, $campaignObjectStatisiticsOptionId),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param MailingLink $mailingLink
   * @return list(integer $code, long $msg)
   */
  public function mailingLink_getClickSet($uuid, MailingLink $mailingLink) {
    return $this->__soapCall('mailingLink_getClickSet', array($uuid, $mailingLink),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param MagentoOrder $order
   * @return list(integer $code, boolean $msg)
   */
  public function magentoOrder_update($uuid, MagentoOrder $order) {
    return $this->__soapCall('magentoOrder_update', array($uuid, $order),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(integer $code, MagentoOrder $msg)
   */
  public function magentoOrder_create($uuid) {
    return $this->__soapCall('magentoOrder_create', array($uuid),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param MagentoOrder $order
   * @return list(integer $code, MagentoOrder $msg)
   */
  public function magentoOrder_insert($uuid, MagentoOrder $order) {
    return $this->__soapCall('magentoOrder_insert', array($uuid, $order),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param ArrayOfMagentoOrder $orders
   * @return list(integer $code, ArrayOfMagentoOrder $msg)
   */
  public function magentoOrder_insertBulk($uuid, $orders) {
    return $this->__soapCall('magentoOrder_insertBulk', array($uuid, $orders),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(integer $code, MagentoAbandonedOrder $msg)
   */
  public function magentoAbandonedOrder_create($uuid) {
    return $this->__soapCall('magentoAbandonedOrder_create', array($uuid),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param MagentoAbandonedOrder $order
   * @return list(integer $code, MagentoAbandonedOrder $msg)
   */
  public function magentoAbandonedOrder_insert($uuid, MagentoAbandonedOrder $order) {
    return $this->__soapCall('magentoAbandonedOrder_insert', array($uuid, $order),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param ArrayOfOption $keywords
   * @param string $id
   * @return list(integer $code, boolean $msg)
   */
  public function conversionTracking_track($uuid, $keywords, $id) {
    return $this->__soapCall('conversionTracking_track', array($uuid, $keywords, $id),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $resourceId
   * @param long $index
   * @return list(integer $code, Click $msg)
   */
  public function clickSet_getClick($uuid, $resourceId, $index) {
    return $this->__soapCall('clickSet_getClick', array($uuid, $resourceId, $index),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $resourceId
   * @param long $offset
   * @param long $size
   * @return list(integer $code, ArrayOfClick $msg)
   */
  public function clickSet_getClicks($uuid, $resourceId, $offset, $size) {
    return $this->__soapCall('clickSet_getClicks', array($uuid, $resourceId, $offset, $size),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $resourceId
   * @param long $offset
   * @param long $size
   * @return list(integer $code, ArrayOfInt $msg)
   */
  public function clickSet_getClickIds($uuid, $resourceId, $offset, $size) {
    return $this->__soapCall('clickSet_getClickIds', array($uuid, $resourceId, $offset, $size),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param MagentoEmail $email
   * @param string $campaignName
   * @return list(integer $code, long $msg)
   */
  public function magentoEmail_insert($uuid, MagentoEmail $email, $campaignName) {
    return $this->__soapCall('magentoEmail_insert', array($uuid, $email, $campaignName),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Group $group
   * @param ArrayOfCustomer $customers
   * @return list(integer $code, boolean $msg)
   */
  public function group_addMembersInBulk($uuid, Group $group, $customers) {
    return $this->__soapCall('group_addMembersInBulk', array($uuid, $group, $customers),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $groupId
   * @param long $customerId
   * @param boolean $includeSubGroups
   * @return list(integer $code, GroupMembership $msg)
   */
  public function group_hasMember($uuid, $groupId, $customerId, $includeSubGroups) {
    return $this->__soapCall('group_hasMember', array($uuid, $groupId, $customerId, $includeSubGroups),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $groupId
   * @return list(integer $code, Group $msg)
   */
  public function group_getById($uuid, $groupId) {
    return $this->__soapCall('group_getById', array($uuid, $groupId),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $groupId
   * @return list(integer $code, boolean $msg)
   */
  public function group_delete($uuid, $groupId) {
    return $this->__soapCall('group_delete', array($uuid, $groupId),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $groupId
   * @param boolean $recursive
   * @return list(integer $code, long $msg)
   */
  public function group_getMembers($uuid, $groupId, $recursive) {
    return $this->__soapCall('group_getMembers', array($uuid, $groupId, $recursive),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Group $group
   * @return list(integer $code, Group $msg)
   */
  public function group_update($uuid, Group $group) {
    return $this->__soapCall('group_update', array($uuid, $group),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Group $group
   * @param long $newParentId
   * @return list(integer $code, Group $msg)
   */
  public function group_move($uuid, Group $group, $newParentId) {
    return $this->__soapCall('group_move', array($uuid, $group, $newParentId),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Group $group
   * @return list(integer $code, Group $msg)
   */
  public function group_getParent($uuid, Group $group) {
    return $this->__soapCall('group_getParent', array($uuid, $group),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(integer $code, Group $msg)
   */
  public function group_create($uuid) {
    return $this->__soapCall('group_create', array($uuid),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Group $group
   * @return list(integer $code, Group $msg)
   */
  public function group_insert($uuid, Group $group) {
    return $this->__soapCall('group_insert', array($uuid, $group),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Group $group
   * @return list(integer $code, Group $msg)
   */
  public function group_upsert($uuid, Group $group) {
    return $this->__soapCall('group_upsert', array($uuid, $group),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Group $group
   * @return list(integer $code, ArrayOfGroup $msg)
   */
  public function group_getByObject($uuid, Group $group) {
    return $this->__soapCall('group_getByObject', array($uuid, $group),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(integer $code, ArrayOfGroup $msg)
   */
  public function group_getAll($uuid) {
    return $this->__soapCall('group_getAll', array($uuid),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Group $group
   * @return list(integer $code, ArrayOfGroup $msg)
   */
  public function group_getChildren($uuid, Group $group) {
    return $this->__soapCall('group_getChildren', array($uuid, $group),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Group $group
   * @param Customer $customer
   * @return list(integer $code, boolean $msg)
   */
  public function group_addMember($uuid, Group $group, Customer $customer) {
    return $this->__soapCall('group_addMember', array($uuid, $group, $customer),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Group $group
   * @param Customer $customer
   * @return list(integer $code, boolean $msg)
   */
  public function group_removeMember($uuid, Group $group, Customer $customer) {
    return $this->__soapCall('group_removeMember', array($uuid, $group, $customer),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(integer $code, boolean $msg)
   */
  public function group_calculate($uuid) {
    return $this->__soapCall('group_calculate', array($uuid),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $resourceId
   * @param long $index
   * @return list(integer $code, Mailing $msg)
   */
  public function mailingSet_getMailing($uuid, $resourceId, $index) {
    return $this->__soapCall('mailingSet_getMailing', array($uuid, $resourceId, $index),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $resourceId
   * @param long $offset
   * @param long $size
   * @return list(integer $code, ArrayOfMailing $msg)
   */
  public function mailingSet_getMailings($uuid, $resourceId, $offset, $size) {
    return $this->__soapCall('mailingSet_getMailings', array($uuid, $resourceId, $offset, $size),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $resourceId
   * @param long $offset
   * @param long $size
   * @return list(integer $code, ArrayOfInt $msg)
   */
  public function mailingSet_getMailingIds($uuid, $resourceId, $offset, $size) {
    return $this->__soapCall('mailingSet_getMailingIds', array($uuid, $resourceId, $offset, $size),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $clickId
   * @return list(integer $code, Click $msg)
   */
  public function click_getById($uuid, $clickId) {
    return $this->__soapCall('click_getById', array($uuid, $clickId),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $resourceId
   * @param long $index
   * @return list(integer $code, Customer $msg)
   */
  public function customerSet_getCustomer($uuid, $resourceId, $index) {
    return $this->__soapCall('customerSet_getCustomer', array($uuid, $resourceId, $index),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $resourceId
   * @param long $offset
   * @param long $size
   * @return list(integer $code, ArrayOfCustomer $msg)
   */
  public function customerSet_getCustomers($uuid, $resourceId, $offset, $size) {
    return $this->__soapCall('customerSet_getCustomers', array($uuid, $resourceId, $offset, $size),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $resourceId
   * @param long $offset
   * @param long $size
   * @return list(integer $code, ArrayOfInt $msg)
   */
  public function customerSet_getCustomerIds($uuid, $resourceId, $offset, $size) {
    return $this->__soapCall('customerSet_getCustomerIds', array($uuid, $resourceId, $offset, $size),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param MagentoShipment $shipment
   * @return list(integer $code, MagentoShipment $msg)
   */
  public function magentoShipment_insert($uuid, MagentoShipment $shipment) {
    return $this->__soapCall('magentoShipment_insert', array($uuid, $shipment),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(integer $code, MagentoShipment $msg)
   */
  public function magentoShipment_create($uuid) {
    return $this->__soapCall('magentoShipment_create', array($uuid),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param MagentoCreditMemo $creditmemo
   * @return list(integer $code, MagentoCreditMemo $msg)
   */
  public function magentoCreditMemo_insert($uuid, MagentoCreditMemo $creditmemo) {
    return $this->__soapCall('magentoCreditMemo_insert', array($uuid, $creditmemo),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $resourceId
   * @param long $index
   * @return list(integer $code, Open $msg)
   */
  public function openSet_getOpen($uuid, $resourceId, $index) {
    return $this->__soapCall('openSet_getOpen', array($uuid, $resourceId, $index),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $resourceId
   * @param long $offset
   * @param long $size
   * @return list(integer $code, ArrayOfOpen $msg)
   */
  public function openSet_getOpens($uuid, $resourceId, $offset, $size) {
    return $this->__soapCall('openSet_getOpens', array($uuid, $resourceId, $offset, $size),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $resourceId
   * @param long $offset
   * @param long $size
   * @return list(integer $code, ArrayOfInt $msg)
   */
  public function openSet_getOpenIds($uuid, $resourceId, $offset, $size) {
    return $this->__soapCall('openSet_getOpenIds', array($uuid, $resourceId, $offset, $size),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Email $email
   * @return list(integer $code, Email $msg)
   */
  public function email_insert($uuid, Email $email) {
    return $this->__soapCall('email_insert', array($uuid, $email),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Email $email
   * @return list(integer $code, Email $msg)
   */
  public function email_update($uuid, Email $email) {
    return $this->__soapCall('email_update', array($uuid, $email),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Email $email
   * @return list(integer $code, Email $msg)
   */
  public function email_upsert($uuid, Email $email) {
    return $this->__soapCall('email_upsert', array($uuid, $email),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $emailId
   * @return list(integer $code, Email $msg)
   */
  public function email_getById($uuid, $emailId) {
    return $this->__soapCall('email_getById', array($uuid, $emailId),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(integer $code, ArrayOfMethodOptions $msg)
   */
  public function email_listOptions($uuid) {
    return $this->__soapCall('email_listOptions', array($uuid),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $emailId
   * @param long $groupId
   * @param ArrayOfOption $manualOptions
   * @param ArrayOfOption $options
   * @return list(integer $code, boolean $msg)
   */
  public function email_sendToGroup($uuid, $emailId, $groupId, $manualOptions, $options) {
    return $this->__soapCall('email_sendToGroup', array($uuid, $emailId, $groupId, $manualOptions, $options),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $emailId
   * @param long $profileId
   * @param ArrayOfOption $manualOptions
   * @param ArrayOfOption $options
   * @return list(integer $code, boolean $msg)
   */
  public function email_sendToProfile($uuid, $emailId, $profileId, $manualOptions, $options) {
    return $this->__soapCall('email_sendToProfile', array($uuid, $emailId, $profileId, $manualOptions, $options),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $emailId
   * @param long $customerId
   * @param ArrayOfOption $manualOptions
   * @param ArrayOfOption $options
   * @return list(integer $code, boolean $msg)
   */
  public function email_sendToCustomer($uuid, $emailId, $customerId, $manualOptions, $options) {
    return $this->__soapCall('email_sendToCustomer', array($uuid, $emailId, $customerId, $manualOptions, $options),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $emailId
   * @param ArrayOfInt $customerIds
   * @param ArrayOfOption $manualOptions
   * @param ArrayOfOption $options
   * @return list(integer $code, boolean $msg)
   */
  public function email_sendToCustomers($uuid, $emailId, $customerIds, $manualOptions, $options) {
    return $this->__soapCall('email_sendToCustomers', array($uuid, $emailId, $customerIds, $manualOptions, $options),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Email $email
   * @return list(integer $code, ArrayOfEmail $msg)
   */
  public function email_getByObject($uuid, Email $email) {
    return $this->__soapCall('email_getByObject', array($uuid, $email),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $emailId
   * @return list(integer $code, boolean $msg)
   */
  public function email_delete($uuid, $emailId) {
    return $this->__soapCall('email_delete', array($uuid, $emailId),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(integer $code, ArrayOfEmail $msg)
   */
  public function email_getAll($uuid) {
    return $this->__soapCall('email_getAll', array($uuid),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $broadcastId
   * @return list(integer $code, boolean $msg)
   */
  public function email_hasChanged($uuid, $broadcastId) {
    return $this->__soapCall('email_hasChanged', array($uuid, $broadcastId),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(integer $code, Email $msg)
   */
  public function email_create($uuid) {
    return $this->__soapCall('email_create', array($uuid),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $resourceId
   * @param long $index
   * @return list(integer $code, Complaint $msg)
   */
  public function complaintSet_getComplaint($uuid, $resourceId, $index) {
    return $this->__soapCall('complaintSet_getComplaint', array($uuid, $resourceId, $index),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $resourceId
   * @param long $offset
   * @param long $size
   * @return list(integer $code, ArrayOfComplaint $msg)
   */
  public function complaintSet_getComplaints($uuid, $resourceId, $offset, $size) {
    return $this->__soapCall('complaintSet_getComplaints', array($uuid, $resourceId, $offset, $size),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $resourceId
   * @param long $offset
   * @param long $size
   * @return list(integer $code, ArrayOfInt $msg)
   */
  public function complaintSet_getComplaintIds($uuid, $resourceId, $offset, $size) {
    return $this->__soapCall('complaintSet_getComplaintIds', array($uuid, $resourceId, $offset, $size),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $customerId
   * @param string $accountId
   * @param string $network
   * @return list(integer $code, boolean $msg)
   */
  public function account_addToCustomer($uuid, $customerId, $accountId, $network) {
    return $this->__soapCall('account_addToCustomer', array($uuid, $customerId, $accountId, $network),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $customerId
   * @param string $accountId
   * @param string $network
   * @return list(integer $code, boolean $msg)
   */
  public function account_deleteFromCustomer($uuid, $customerId, $accountId, $network) {
    return $this->__soapCall('account_deleteFromCustomer', array($uuid, $customerId, $accountId, $network),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $bounceId
   * @return list(integer $code, Bounce $msg)
   */
  public function bounce_getById($uuid, $bounceId) {
    return $this->__soapCall('bounce_getById', array($uuid, $bounceId),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param MagentoProduct $product
   * @param boolean $abandoned
   * @return list(integer $code, MagentoProduct $msg)
   */
  public function magentoProduct_upsert($uuid, MagentoProduct $product, $abandoned) {
    return $this->__soapCall('magentoProduct_upsert', array($uuid, $product, $abandoned),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(integer $code, MagentoProduct $msg)
   */
  public function magentoProduct_create($uuid) {
    return $this->__soapCall('magentoProduct_create', array($uuid),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param ArrayOfCustomer $customers
   * @param long $websiteId
   * @param string $websiteName
   * @return list(integer $code, ArrayOfCustomer $msg)
   */
  public function magento_customerInsertBulkUnique($uuid, $customers, $websiteId, $websiteName) {
    return $this->__soapCall('magento_customerInsertBulkUnique', array($uuid, $customers, $websiteId, $websiteName),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param Customer $customer
   * @param long $websiteId
   * @return list(integer $code, Customer $msg)
   */
  public function magento_customerInsertUnique($uuid, Customer $customer, $websiteId) {
    return $this->__soapCall('magento_customerInsertUnique', array($uuid, $customer, $websiteId),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @return list(integer $code, ArrayOfOption $msg)
   */
  public function magento_getCampaigns($uuid) {
    return $this->__soapCall('magento_getCampaigns', array($uuid),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param string $lang
   * @return list(integer $code, ArrayOfOption $msg)
   */
  public function magento_getAvailableCustomerFields($uuid, $lang) {
    return $this->__soapCall('magento_getAvailableCustomerFields', array($uuid, $lang),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param string $wsdl
   * @param string $username
   * @param string $password
   * @return list(integer $code, boolean $msg)
   */
  public function magento_testConnection($uuid, $wsdl, $username, $password) {
    return $this->__soapCall('magento_testConnection', array($uuid, $wsdl, $username, $password),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param ArrayOfInt $customerIds
   * @return list(integer $code, long $msg)
   */
  public function magento_executeAbandonedCart($uuid, $customerIds) {
    return $this->__soapCall('magento_executeAbandonedCart', array($uuid, $customerIds),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

  /**
   *
   *
   * @param string $uuid
   * @param long $openId
   * @return list(integer $code, Open $msg)
   */
  public function open_getById($uuid, $openId) {
    return $this->__soapCall('open_getById', array($uuid, $openId),       array(
            'uri' => 'https://login.myclang.com/app/api/soap/public/index.php?version=1.22',
            'soapaction' => ''
           )
      );
  }

}

?>
