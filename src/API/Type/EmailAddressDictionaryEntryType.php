<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing EmailAddressDictionaryEntryType
 *
 *
 * XSD Type: EmailAddressDictionaryEntryType
 *
 * @method EmailAddressDictionaryEntryType getKey()
 * @method EmailAddressDictionaryEntryType setKey(string $key)
 * @method EmailAddressDictionaryEntryType getName()
 * @method EmailAddressDictionaryEntryType setName(string $name)
 * @method EmailAddressDictionaryEntryType getRoutingType()
 * @method EmailAddressDictionaryEntryType setRoutingType(string $routingType)
 * @method EmailAddressDictionaryEntryType getMailboxType()
 * @method EmailAddressDictionaryEntryType setMailboxType(string $mailboxType)
 */
class EmailAddressDictionaryEntryType extends Type
{

    /**
     * @property string $key
     */
    protected $key = null;

    /**
     * @property string $name
     */
    protected $name = null;

    /**
     * @property string $routingType
     */
    protected $routingType = null;

    /**
     * @property string $mailboxType
     */
    protected $mailboxType = null;
}
