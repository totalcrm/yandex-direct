<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppAdBuilderAdAdd extends AdBuilderAdAddBase
{

//    Can be omit.
//    protected $TrackingUrl = null;

    /**
     * Creates a new instance of MobileAppAdBuilderAdAdd.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets TrackingUrl.
     *
     * @return string|null
     */
    public function getTrackingUrl()
    {
        return isset($this->TrackingUrl) ? $this->TrackingUrl : null;
    }

    /**
     * Sets TrackingUrl.
     *
     * @param string|null $value
     * @return self
     */
    public function setTrackingUrl($value = null)
    {
        $this->TrackingUrl = $value;

        return $this;
    }


}

