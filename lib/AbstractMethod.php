<?php

namespace Heidelpay\PhpPaymentApi;

use Heidelpay\PhpPaymentApi\Exceptions\JsonParserException;
use Heidelpay\PhpPaymentApi\ParameterGroups\AccountParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\AddressParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\BasketParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\ConfigParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\ContactParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\CriterionParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\CustomerParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\FrontendParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\IdentificationParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\NameParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\PaymentParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\PresentationParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\RequestParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\SecurityParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\TransactionParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\UserParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\RiskInformationParameterGroup;

/**
 * Abstract request/response class
 *
 * @license Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 * @copyright Copyright © 2016-present heidelpay GmbH. All rights reserved.
 *
 * @link  http://dev.heidelpay.com/heidelpay-php-payment-api/
 *
 * @author  Jens Richter
 *
 * @package heidelpay\php-payment-api
 */
abstract class AbstractMethod implements MethodInterface
{
    /** @var AccountParameterGroup */
    protected $account;

    /** @var AddressParameterGroup */
    protected $address;

    /** @var CustomerParameterGroup */
    protected $customer;

    /** @var BasketParameterGroup */
    protected $basket;

    /** @var ConfigParameterGroup */
    protected $config;

    /** @var ContactParameterGroup */
    protected $contact;

    /** @var CriterionParameterGroup */
    protected $criterion;

    /** @var FrontendParameterGroup */
    protected $frontend;

    /** @var IdentificationParameterGroup */
    protected $identification;

    /** @var NameParameterGroup */
    protected $name;

    /** @var PaymentParameterGroup */
    protected $payment;

    /** @var PresentationParameterGroup */
    protected $presentation;

    /** @var RequestParameterGroup */
    protected $request;

    /** @var RiskInformationParameterGroup */
    protected $riskinformation;

    /** @var SecurityParameterGroup */
    protected $security;

    /** @var TransactionParameterGroup */
    protected $transaction;

    /** @var UserParameterGroup */
    protected $user;

    //<editor-fold desc="Getters/Setters">

    /**
     * Account getter
     *
     * @return AccountParameterGroup
     */
    public function getAccount()
    {
        if ($this->account === null) {
            return $this->account = new AccountParameterGroup();
        }

        return $this->account;
    }

    /**
     * Address getter
     *
     * @return AddressParameterGroup
     */
    public function getAddress()
    {
        if ($this->address === null) {
            return $this->address = new AddressParameterGroup();
        }

        return $this->address;
    }

    /**
     * Basket getter
     *
     * @return BasketParameterGroup
     */
    public function getBasket()
    {
        if ($this->basket === null) {
            return $this->basket = new BasketParameterGroup();
        }

        return $this->basket;
    }

    /**
     * Config getter
     *
     * @return ConfigParameterGroup
     */
    public function getConfig()
    {
        if ($this->config === null) {
            return $this->config = new ConfigParameterGroup();
        }

        return $this->config;
    }

    /**
     * Contact getter
     *
     * @return ContactParameterGroup
     */
    public function getContact()
    {
        if ($this->contact === null) {
            return $this->contact = new ContactParameterGroup();
        }

        return $this->contact;
    }

    /**
     * Criterion getter
     *
     * @return CriterionParameterGroup
     */
    public function getCriterion()
    {
        if ($this->criterion === null) {
            return $this->criterion = new CriterionParameterGroup();
        }

        return $this->criterion;
    }

    /**
     * Frondend getter
     *
     * @return FrontendParameterGroup
     */
    public function getFrontend()
    {
        if ($this->frontend === null) {
            return $this->frontend = new FrontendParameterGroup();
        }

        return $this->frontend;
    }

    /**
     * Identification getter
     *
     * @return IdentificationParameterGroup
     */
    public function getIdentification()
    {
        if ($this->identification === null) {
            return $this->identification = new IdentificationParameterGroup();
        }

        return $this->identification;
    }

    /**
     * Name getter
     *
     * @return NameParameterGroup
     */
    public function getName()
    {
        if ($this->name === null) {
            return $this->name = new NameParameterGroup();
        }

        return $this->name;
    }

    /**
     * Payment getter
     *
     * @return PaymentParameterGroup
     */
    public function getPayment()
    {
        if ($this->payment === null) {
            return $this->payment = new PaymentParameterGroup();
        }

        return $this->payment;
    }

    /**
     * Presentation getter
     *
     * @return PresentationParameterGroup
     */
    public function getPresentation()
    {
        if ($this->presentation === null) {
            return $this->presentation = new PresentationParameterGroup();
        }

        return $this->presentation;
    }

    /**
     * Request getter
     *
     * @return RequestParameterGroup
     */
    public function getRequest()
    {
        if ($this->request === null) {
            return $this->request = new RequestParameterGroup();
        }

        return $this->request;
    }

    /**
     * RiskInformation getter
     *
     * @return RiskInformationParameterGroup
     */
    public function getRiskInformation()
    {
        if ($this->riskinformation === null) {
            return $this->riskinformation = new RiskInformationParameterGroup();
        }

        return $this->riskinformation;
    }

    /**
     * Security getter
     *
     * @return SecurityParameterGroup
     */
    public function getSecurity()
    {
        if ($this->security === null) {
            return $this->security = new SecurityParameterGroup();
        }

        return $this->security;
    }

    /**
     * Transaction getter
     *
     * @return TransactionParameterGroup
     */
    public function getTransaction()
    {
        if ($this->transaction === null) {
            return $this->transaction = new TransactionParameterGroup();
        }

        return $this->transaction;
    }

    /**
     * User getter
     *
     * @return UserParameterGroup
     */
    public function getUser()
    {
        if ($this->user === null) {
            return $this->user = new UserParameterGroup();
        }

        return $this->user;
    }

    /**
     * @return CustomerParameterGroup
     */
    public function getCustomer()
    {
        if ($this->customer === null) {
            return $this->customer = new CustomerParameterGroup();
        }

        return $this->customer;
    }

    //</editor-fold>

    /**
     * @inheritdoc
     */
    public function toJson($options = 0)
    {
        return json_encode($this->jsonSerialize(), $options);
    }

    /**
     * @inheritdoc
     */
    public function toArray($doSort = false)
    {
        $result = [];
        $request = get_object_vars($this);

        if ($doSort) {
            ksort($request);
        }

        foreach ($request as $parameterGroup => $parameterValues) {
            if ($parameterValues === null) {
                continue;
            }

            $paramValues = get_object_vars($parameterValues);
            if ($doSort) {
                ksort($paramValues);
            }

            foreach ($paramValues as $parameterLastName => $parameterValue) {
                if ($parameterValue === null) {
                    continue;
                }

                $result[strtoupper($parameterGroup . '.' . $parameterLastName)] = $parameterValue;
            }
        }
        return $result;
    }

    /**
     * @inheritdoc
     */
    public function jsonSerialize()
    {
        $return = [];
        foreach (get_object_vars($this) as $field => $value) {
            $return[$field] = $value;
        }

        return $return;
    }

    /**
     * @inheritdoc
     */
    public static function fromJson($json)
    {
        $instance = new static();
        $instance->mapFromJson($json);

        return $instance;
    }

    /**
     * @inheritdoc
     */
    public static function fromPost(array $post)
    {
        $instance = new static();
        $instance->mapFromPost($post);

        return $instance;
    }

    /**
     * Maps a JSON string into single ParameterGroup instances.
     *
     * @param string $json
     *
     * @throws JsonParserException
     */
    protected function mapFromJson($json)
    {
        $mapClass = json_decode($json);

        if ($mapClass === null) {
            throw new JsonParserException(
                'Error during JSON parsing! Last JSON error message: ' . json_last_error_msg(),
                json_last_error()
            );
        }

        foreach ($mapClass as $parameterGroupName => $parameterGroupObject) {
            $parameterGroupGetterFunc = 'get' . ucfirst($parameterGroupName);
            if (!empty($parameterGroupObject) && is_callable([$this, $parameterGroupGetterFunc])) {
                foreach ($parameterGroupObject as $property => $value) {
                    $this->{$parameterGroupGetterFunc}()->set($property, $value);
                }
            }
        }
    }

    /**
     * Maps a POST array into single ParameterGroup instances.
     *
     * @param array $post
     */
    protected function mapFromPost(array $post)
    {
        if (empty($post)) {
            return;
        }

        foreach ($post as $paramGroupKey => $value) {
            $values = explode('_', strtolower($paramGroupKey), 2);
            if (count($values) < 2) {
                continue;
            }

            list($paramGroupName, $paramGroupProp) = $values;

            $parameterGroupGetterFunc = 'get' . ucfirst($paramGroupName);
            if ($paramGroupProp !== null && is_callable([$this, $parameterGroupGetterFunc])) {
                $this->{$parameterGroupGetterFunc}()->set($paramGroupProp, $value);
            }
        }
    }
}
