<?php

namespace InstagramAPI\Response\Model;

use InstagramAPI\AutoPropertyMapper;
use InstagramAPI\Response\PropertyCollection;

/**
 * ReelMentions.
 *
 * @method float getHeight()
 * @method int getIsPinned()
 * @method float getRotation()
 * @method User getUser()
 * @method float getWidth()
 * @method float getX()
 * @method float getY()
 * @method bool isHeight()
 * @method bool isIsPinned()
 * @method bool isRotation()
 * @method bool isUser()
 * @method bool isWidth()
 * @method bool isX()
 * @method bool isY()
 * @method $this setHeight(float $value)
 * @method $this setIsPinned(int $value)
 * @method $this setRotation(float $value)
 * @method $this setUser(User $value)
 * @method $this setWidth(float $value)
 * @method $this setX(float $value)
 * @method $this setY(float $value)
 * @method $this unsetHeight()
 * @method $this unsetIsPinned()
 * @method $this unsetRotation()
 * @method $this unsetUser()
 * @method $this unsetWidth()
 * @method $this unsetX()
 * @method $this unsetY()
 */
class ReelMentions extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        PropertyCollection\Sticker::class,
        'user'      => 'User',
    ];
}