<?php
namespace Magento\Framework\View\Layout\Proxy;

/**
 * Interceptor class for @see \Magento\Framework\View\Layout\Proxy
 */
class Interceptor extends \Magento\Framework\View\Layout\Proxy implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Framework\\View\\Layout', $shared = true)
    {
        $this->___init();
        parent::__construct($objectManager, $instanceName, $shared);
    }

    /**
     * {@inheritdoc}
     */
    public function generateXml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'generateXml');
        if (!$pluginInfo) {
            return parent::generateXml();
        } else {
            return $this->___callPlugins('generateXml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOutput()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOutput');
        if (!$pluginInfo) {
            return parent::getOutput();
        } else {
            return $this->___callPlugins('getOutput', func_get_args(), $pluginInfo);
        }
    }
}
