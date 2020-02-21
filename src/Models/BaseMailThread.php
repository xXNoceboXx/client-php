<?php
/*
 * Pipedrive
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace Pipedrive\Models;

use JsonSerializable;
use Pipedrive\Utils\DateTimeHelper;

/**
 * @todo Write general description for this model
 */
class BaseMailThread implements JsonSerializable
{
    /**
     * ID of the mail thread
     * @var integer|null $id public property
     */
    public $id;

    /**
     * The connection account ID
     * @maps account_id
     * @var string|null $accountId public property
     */
    public $accountId;

    /**
     * ID of the user whom mail message will be assigned to
     * @maps user_id
     * @var integer|null $userId public property
     */
    public $userId;

    /**
     * The subject
     * @var string|null $subject public property
     */
    public $subject;

    /**
     * A snippet
     * @var string|null $snippet public property
     */
    public $snippet;

    /**
     * Whether the mail thread is read
     * @maps read_flag
     * @var int|null $readFlag public property
     */
    public $readFlag;

    /**
     * Mail tracking status
     * @maps mail_tracking_status
     * @var string|null $mailTrackingStatus public property
     */
    public $mailTrackingStatus;

    /**
     * Whether the mail thread has an attachment
     * @maps has_attachments_flag
     * @var int|null $hasAttachmentsFlag public property
     */
    public $hasAttachmentsFlag;

    /**
     * Whether the mail thread has inline attachments
     * @maps has_inline_attachments_flag
     * @var int|null $hasInlineAttachmentsFlag public property
     */
    public $hasInlineAttachmentsFlag;

    /**
     * Whether the mail thread has real attachments (which are not inline)
     * @maps has_real_attachments_flag
     * @var int|null $hasRealAttachmentsFlag public property
     */
    public $hasRealAttachmentsFlag;

    /**
     * Whether the mail thread is deleted
     * @maps deleted_flag
     * @var int|null $deletedFlag public property
     */
    public $deletedFlag;

    /**
     * Whether the mail thread is synced
     * @maps synced_flag
     * @var int|null $syncedFlag public property
     */
    public $syncedFlag;

    /**
     * Whether one of the parties of the mail thread is Bcc
     * @maps smart_bcc_flag
     * @var int|null $smartBccFlag public property
     */
    public $smartBccFlag;

    /**
     * Whether the link tracking of the mail thread is enabled
     * @maps mail_link_tracking_enabled_flag
     * @var int|null $mailLinkTrackingEnabledFlag public property
     */
    public $mailLinkTrackingEnabledFlag;

    /**
     * We strongly advise you to avoid the use of this property. We will soon deprecate this property
     * @maps write_flag
     * @var bool|null $writeFlag public property
     */
    public $writeFlag;

    /**
     * Parties of the mail thread
     * @var \Pipedrive\Models\Parties|null $parties public property
     */
    public $parties;

    /**
     * Parties of the drafted mail thread
     * @maps drafts_parties
     * @var array|null $draftsParties public property
     */
    public $draftsParties;

    /**
     * Folders in which messages from thread are being stored
     * @var array|null $folders public property
     */
    public $folders;

    /**
     * Version
     * @var double|null $version public property
     */
    public $version;

    /**
     * A snippet from a draft
     * @maps snippet_draft
     * @var string|null $snippetDraft public property
     */
    public $snippetDraft;

    /**
     * A snippet from a message sent
     * @maps snippet_sent
     * @var string|null $snippetSent public property
     */
    public $snippetSent;

    /**
     * An amount of messages
     * @maps message_count
     * @var integer|null $messageCount public property
     */
    public $messageCount;

    /**
     * Whether the mail thread has any drafts
     * @maps has_draft_flag
     * @var int|null $hasDraftFlag public property
     */
    public $hasDraftFlag;

    /**
     * Whether the mail thread has messages sent
     * @maps has_sent_flag
     * @var int|null $hasSentFlag public property
     */
    public $hasSentFlag;

    /**
     * @todo Write general description for this property
     * @maps archived_flag
     * @var int|null $archivedFlag public property
     */
    public $archivedFlag;

    /**
     * Whether the mail thread is shared
     * @maps shared_flag
     * @var int|null $sharedFlag public property
     */
    public $sharedFlag;

    /**
     * Whether the mail thread has been deleted externally
     * @maps external_deleted_flag
     * @var int|null $externalDeletedFlag public property
     */
    public $externalDeletedFlag;

    /**
     * Whether the mail thread was initialized by others
     * @maps first_message_to_me_flag
     * @var int|null $firstMessageToMeFlag public property
     */
    public $firstMessageToMeFlag;

    /**
     * Last message timestamp
     * @maps last_message_timestamp
     * @factory \Pipedrive\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $lastMessageTimestamp public property
     */
    public $lastMessageTimestamp;

    /**
     * The time when the mail thread has had the first message received or created
     * @maps first_message_timestamp
     * @factory \Pipedrive\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $firstMessageTimestamp public property
     */
    public $firstMessageTimestamp;

    /**
     * The last time when the mail thread has had a message sent
     * @maps last_message_sent_timestamp
     * @factory \Pipedrive\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $lastMessageSentTimestamp public property
     */
    public $lastMessageSentTimestamp;

    /**
     * The last time when the mail thread has had a message received
     * @maps last_message_received_timestamp
     * @factory \Pipedrive\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $lastMessageReceivedTimestamp public property
     */
    public $lastMessageReceivedTimestamp;

    /**
     * The time when the mail thread was inserted to database
     * @maps add_time
     * @factory \Pipedrive\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $addTime public property
     */
    public $addTime;

    /**
     * The time when the mail thread was updated in database received
     * @maps update_time
     * @factory \Pipedrive\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $updateTime public property
     */
    public $updateTime;

    /**
     * ID of the deal
     * @maps deal_id
     * @var integer|null $dealId public property
     */
    public $dealId;

    /**
     * Status of the deal
     * @maps deal_status
     * @var string|null $dealStatus public property
     */
    public $dealStatus;

    /**
     * Whether all the mail thread messages have been sent
     * @maps all_messages_sent_flag
     * @var int|null $allMessagesSentFlag public property
     */
    public $allMessagesSentFlag;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer   $id                           Initialization value for $this->id
     * @param string    $accountId                    Initialization value for $this->accountId
     * @param integer   $userId                       Initialization value for $this->userId
     * @param string    $subject                      Initialization value for $this->subject
     * @param string    $snippet                      Initialization value for $this->snippet
     * @param int       $readFlag                     Initialization value for $this->readFlag
     * @param string    $mailTrackingStatus           Initialization value for $this->mailTrackingStatus
     * @param int       $hasAttachmentsFlag           Initialization value for $this->hasAttachmentsFlag
     * @param int       $hasInlineAttachmentsFlag     Initialization value for $this->hasInlineAttachmentsFlag
     * @param int       $hasRealAttachmentsFlag       Initialization value for $this->hasRealAttachmentsFlag
     * @param int       $deletedFlag                  Initialization value for $this->deletedFlag
     * @param int       $syncedFlag                   Initialization value for $this->syncedFlag
     * @param int       $smartBccFlag                 Initialization value for $this->smartBccFlag
     * @param int       $mailLinkTrackingEnabledFlag  Initialization value for $this->mailLinkTrackingEnabledFlag
     * @param bool      $writeFlag                    Initialization value for $this->writeFlag
     * @param Parties   $parties                      Initialization value for $this->parties
     * @param array     $draftsParties                Initialization value for $this->draftsParties
     * @param array     $folders                      Initialization value for $this->folders
     * @param double    $version                      Initialization value for $this->version
     * @param string    $snippetDraft                 Initialization value for $this->snippetDraft
     * @param string    $snippetSent                  Initialization value for $this->snippetSent
     * @param integer   $messageCount                 Initialization value for $this->messageCount
     * @param int       $hasDraftFlag                 Initialization value for $this->hasDraftFlag
     * @param int       $hasSentFlag                  Initialization value for $this->hasSentFlag
     * @param int       $archivedFlag                 Initialization value for $this->archivedFlag
     * @param int       $sharedFlag                   Initialization value for $this->sharedFlag
     * @param int       $externalDeletedFlag          Initialization value for $this->externalDeletedFlag
     * @param int       $firstMessageToMeFlag         Initialization value for $this->firstMessageToMeFlag
     * @param \DateTime $lastMessageTimestamp         Initialization value for $this->lastMessageTimestamp
     * @param \DateTime $firstMessageTimestamp        Initialization value for $this->firstMessageTimestamp
     * @param \DateTime $lastMessageSentTimestamp     Initialization value for $this->lastMessageSentTimestamp
     * @param \DateTime $lastMessageReceivedTimestamp Initialization value for $this->lastMessageReceivedTimestamp
     * @param \DateTime $addTime                      Initialization value for $this->addTime
     * @param \DateTime $updateTime                   Initialization value for $this->updateTime
     * @param integer   $dealId                       Initialization value for $this->dealId
     * @param string    $dealStatus                   Initialization value for $this->dealStatus
     * @param int       $allMessagesSentFlag          Initialization value for $this->allMessagesSentFlag
     */
    public function __construct()
    {
        if (37 == func_num_args()) {
            $this->id                           = func_get_arg(0);
            $this->accountId                    = func_get_arg(1);
            $this->userId                       = func_get_arg(2);
            $this->subject                      = func_get_arg(3);
            $this->snippet                      = func_get_arg(4);
            $this->readFlag                     = func_get_arg(5);
            $this->mailTrackingStatus           = func_get_arg(6);
            $this->hasAttachmentsFlag           = func_get_arg(7);
            $this->hasInlineAttachmentsFlag     = func_get_arg(8);
            $this->hasRealAttachmentsFlag       = func_get_arg(9);
            $this->deletedFlag                  = func_get_arg(10);
            $this->syncedFlag                   = func_get_arg(11);
            $this->smartBccFlag                 = func_get_arg(12);
            $this->mailLinkTrackingEnabledFlag  = func_get_arg(13);
            $this->writeFlag                    = func_get_arg(14);
            $this->parties                      = func_get_arg(15);
            $this->draftsParties                = func_get_arg(16);
            $this->folders                      = func_get_arg(17);
            $this->version                      = func_get_arg(18);
            $this->snippetDraft                 = func_get_arg(19);
            $this->snippetSent                  = func_get_arg(20);
            $this->messageCount                 = func_get_arg(21);
            $this->hasDraftFlag                 = func_get_arg(22);
            $this->hasSentFlag                  = func_get_arg(23);
            $this->archivedFlag                 = func_get_arg(24);
            $this->sharedFlag                   = func_get_arg(25);
            $this->externalDeletedFlag          = func_get_arg(26);
            $this->firstMessageToMeFlag         = func_get_arg(27);
            $this->lastMessageTimestamp         = func_get_arg(28);
            $this->firstMessageTimestamp        = func_get_arg(29);
            $this->lastMessageSentTimestamp     = func_get_arg(30);
            $this->lastMessageReceivedTimestamp = func_get_arg(31);
            $this->addTime                      = func_get_arg(32);
            $this->updateTime                   = func_get_arg(33);
            $this->dealId                       = func_get_arg(34);
            $this->dealStatus                   = func_get_arg(35);
            $this->allMessagesSentFlag          = func_get_arg(36);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']                              = $this->id;
        $json['account_id']                      = $this->accountId;
        $json['user_id']                         = $this->userId;
        $json['subject']                         = $this->subject;
        $json['snippet']                         = $this->snippet;
        $json['read_flag']                       = $this->readFlag;
        $json['mail_tracking_status']            = $this->mailTrackingStatus;
        $json['has_attachments_flag']            = $this->hasAttachmentsFlag;
        $json['has_inline_attachments_flag']     = $this->hasInlineAttachmentsFlag;
        $json['has_real_attachments_flag']       = $this->hasRealAttachmentsFlag;
        $json['deleted_flag']                    = $this->deletedFlag;
        $json['synced_flag']                     = $this->syncedFlag;
        $json['smart_bcc_flag']                  = $this->smartBccFlag;
        $json['mail_link_tracking_enabled_flag'] = $this->mailLinkTrackingEnabledFlag;
        $json['write_flag']                      = $this->writeFlag;
        $json['parties']                         = $this->parties;
        $json['drafts_parties']                  = $this->draftsParties;
        $json['folders']                         = $this->folders;
        $json['version']                         = $this->version;
        $json['snippet_draft']                   = $this->snippetDraft;
        $json['snippet_sent']                    = $this->snippetSent;
        $json['message_count']                   = $this->messageCount;
        $json['has_draft_flag']                  = $this->hasDraftFlag;
        $json['has_sent_flag']                   = $this->hasSentFlag;
        $json['archived_flag']                   = $this->archivedFlag;
        $json['shared_flag']                     = $this->sharedFlag;
        $json['external_deleted_flag']           = $this->externalDeletedFlag;
        $json['first_message_to_me_flag']        = $this->firstMessageToMeFlag;
        $json['last_message_timestamp']          = isset($this->lastMessageTimestamp) ?
            DateTimeHelper::toRfc3339DateTime($this->lastMessageTimestamp) : null;
        $json['first_message_timestamp']         = isset($this->firstMessageTimestamp) ?
            DateTimeHelper::toRfc3339DateTime($this->firstMessageTimestamp) : null;
        $json['last_message_sent_timestamp']     = isset($this->lastMessageSentTimestamp) ?
            DateTimeHelper::toRfc3339DateTime($this->lastMessageSentTimestamp) : null;
        $json['last_message_received_timestamp'] = isset($this->lastMessageReceivedTimestamp) ?
            DateTimeHelper::toRfc3339DateTime($this->lastMessageReceivedTimestamp) : null;
        $json['add_time']                        = isset($this->addTime) ?
            DateTimeHelper::toRfc3339DateTime($this->addTime) : null;
        $json['update_time']                     = isset($this->updateTime) ?
            DateTimeHelper::toRfc3339DateTime($this->updateTime) : null;
        $json['deal_id']                         = $this->dealId;
        $json['deal_status']                     = $this->dealStatus;
        $json['all_messages_sent_flag']          = $this->allMessagesSentFlag;

        return $json;
    }
}
