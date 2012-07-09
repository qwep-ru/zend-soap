<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Soap
 * @subpackage WSDL
 */

namespace Zend\Soap\Wsdl\ComplexTypeStrategy;

/**
 * Zend_Soap_Wsdl_Strategy_AnyType
 *
 * @category   Zend
 * @package    Zend_Soap
 * @subpackage WSDL
 */
class AnyType implements ComplexTypeStrategyInterface
{
    /**
     * Not needed in this strategy.
     *
     * @param \Zend\Soap\Wsdl $context
     */
    public function setContext(\Zend\Soap\Wsdl $context)
    {

    }

    /**
     * Returns xsd:anyType regardless of the input.
     *
     * @param string $type
     * @return string
     */
    public function addComplexType($type)
    {
        return 'xsd:anyType';
    }
}
