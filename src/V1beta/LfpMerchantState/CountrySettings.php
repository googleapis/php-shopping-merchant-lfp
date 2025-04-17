<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/lfp/v1beta/lfpmerchantstate.proto

namespace Google\Shopping\Merchant\Lfp\V1beta\LfpMerchantState;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Country-specific settings for the merchant.
 *
 * Generated from protobuf message <code>google.shopping.merchant.lfp.v1beta.LfpMerchantState.CountrySettings</code>
 */
class CountrySettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The [CLDR territory
     * code](https://github.com/unicode-org/cldr/blob/latest/common/main/en.xml)
     * for the country for which these settings are defined.
     *
     * Generated from protobuf field <code>string region_code = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $region_code = '';
    /**
     * True if this merchant has enabled free local listings in MC.
     *
     * Generated from protobuf field <code>bool free_local_listings_enabled = 2;</code>
     */
    protected $free_local_listings_enabled = false;
    /**
     * True if this merchant has enabled local inventory ads in MC.
     *
     * Generated from protobuf field <code>bool local_inventory_ads_enabled = 3;</code>
     */
    protected $local_inventory_ads_enabled = false;
    /**
     * Output only. The verification state of this merchant's inventory check.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.lfp.v1beta.LfpMerchantState.CountrySettings.VerificationState inventory_verification_state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $inventory_verification_state = 0;
    /**
     * Output only. The product page type selected by this merchant.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.lfp.v1beta.LfpMerchantState.CountrySettings.ProductPageType product_page_type = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $product_page_type = 0;
    /**
     * Output only. The verification state of this merchant's instock serving
     * feature.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.lfp.v1beta.LfpMerchantState.CountrySettings.VerificationState instock_serving_verification_state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $instock_serving_verification_state = 0;
    /**
     * Output only. The verification state of this merchant's pickup serving
     * feature.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.lfp.v1beta.LfpMerchantState.CountrySettings.VerificationState pickup_serving_verification_state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $pickup_serving_verification_state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $region_code
     *           Required. The [CLDR territory
     *           code](https://github.com/unicode-org/cldr/blob/latest/common/main/en.xml)
     *           for the country for which these settings are defined.
     *     @type bool $free_local_listings_enabled
     *           True if this merchant has enabled free local listings in MC.
     *     @type bool $local_inventory_ads_enabled
     *           True if this merchant has enabled local inventory ads in MC.
     *     @type int $inventory_verification_state
     *           Output only. The verification state of this merchant's inventory check.
     *     @type int $product_page_type
     *           Output only. The product page type selected by this merchant.
     *     @type int $instock_serving_verification_state
     *           Output only. The verification state of this merchant's instock serving
     *           feature.
     *     @type int $pickup_serving_verification_state
     *           Output only. The verification state of this merchant's pickup serving
     *           feature.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Lfp\V1Beta\Lfpmerchantstate::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The [CLDR territory
     * code](https://github.com/unicode-org/cldr/blob/latest/common/main/en.xml)
     * for the country for which these settings are defined.
     *
     * Generated from protobuf field <code>string region_code = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRegionCode()
    {
        return $this->region_code;
    }

    /**
     * Required. The [CLDR territory
     * code](https://github.com/unicode-org/cldr/blob/latest/common/main/en.xml)
     * for the country for which these settings are defined.
     *
     * Generated from protobuf field <code>string region_code = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRegionCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->region_code = $var;

        return $this;
    }

    /**
     * True if this merchant has enabled free local listings in MC.
     *
     * Generated from protobuf field <code>bool free_local_listings_enabled = 2;</code>
     * @return bool
     */
    public function getFreeLocalListingsEnabled()
    {
        return $this->free_local_listings_enabled;
    }

    /**
     * True if this merchant has enabled free local listings in MC.
     *
     * Generated from protobuf field <code>bool free_local_listings_enabled = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setFreeLocalListingsEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->free_local_listings_enabled = $var;

        return $this;
    }

    /**
     * True if this merchant has enabled local inventory ads in MC.
     *
     * Generated from protobuf field <code>bool local_inventory_ads_enabled = 3;</code>
     * @return bool
     */
    public function getLocalInventoryAdsEnabled()
    {
        return $this->local_inventory_ads_enabled;
    }

    /**
     * True if this merchant has enabled local inventory ads in MC.
     *
     * Generated from protobuf field <code>bool local_inventory_ads_enabled = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setLocalInventoryAdsEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->local_inventory_ads_enabled = $var;

        return $this;
    }

    /**
     * Output only. The verification state of this merchant's inventory check.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.lfp.v1beta.LfpMerchantState.CountrySettings.VerificationState inventory_verification_state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getInventoryVerificationState()
    {
        return $this->inventory_verification_state;
    }

    /**
     * Output only. The verification state of this merchant's inventory check.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.lfp.v1beta.LfpMerchantState.CountrySettings.VerificationState inventory_verification_state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setInventoryVerificationState($var)
    {
        GPBUtil::checkEnum($var, \Google\Shopping\Merchant\Lfp\V1beta\LfpMerchantState\CountrySettings\VerificationState::class);
        $this->inventory_verification_state = $var;

        return $this;
    }

    /**
     * Output only. The product page type selected by this merchant.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.lfp.v1beta.LfpMerchantState.CountrySettings.ProductPageType product_page_type = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getProductPageType()
    {
        return $this->product_page_type;
    }

    /**
     * Output only. The product page type selected by this merchant.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.lfp.v1beta.LfpMerchantState.CountrySettings.ProductPageType product_page_type = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setProductPageType($var)
    {
        GPBUtil::checkEnum($var, \Google\Shopping\Merchant\Lfp\V1beta\LfpMerchantState\CountrySettings\ProductPageType::class);
        $this->product_page_type = $var;

        return $this;
    }

    /**
     * Output only. The verification state of this merchant's instock serving
     * feature.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.lfp.v1beta.LfpMerchantState.CountrySettings.VerificationState instock_serving_verification_state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getInstockServingVerificationState()
    {
        return $this->instock_serving_verification_state;
    }

    /**
     * Output only. The verification state of this merchant's instock serving
     * feature.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.lfp.v1beta.LfpMerchantState.CountrySettings.VerificationState instock_serving_verification_state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setInstockServingVerificationState($var)
    {
        GPBUtil::checkEnum($var, \Google\Shopping\Merchant\Lfp\V1beta\LfpMerchantState\CountrySettings\VerificationState::class);
        $this->instock_serving_verification_state = $var;

        return $this;
    }

    /**
     * Output only. The verification state of this merchant's pickup serving
     * feature.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.lfp.v1beta.LfpMerchantState.CountrySettings.VerificationState pickup_serving_verification_state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getPickupServingVerificationState()
    {
        return $this->pickup_serving_verification_state;
    }

    /**
     * Output only. The verification state of this merchant's pickup serving
     * feature.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.lfp.v1beta.LfpMerchantState.CountrySettings.VerificationState pickup_serving_verification_state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setPickupServingVerificationState($var)
    {
        GPBUtil::checkEnum($var, \Google\Shopping\Merchant\Lfp\V1beta\LfpMerchantState\CountrySettings\VerificationState::class);
        $this->pickup_serving_verification_state = $var;

        return $this;
    }

}


