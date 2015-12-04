<?php
namespace Magento\Catalog\Model\ResourceModel\Category\Proxy;

/**
 * Interceptor class for @see \Magento\Catalog\Model\ResourceModel\Category\Proxy
 */
class Interceptor extends \Magento\Catalog\Model\ResourceModel\Category\Proxy implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Catalog\\Model\\ResourceModel\\Category', $shared = true)
    {
        $this->___init();
        parent::__construct($objectManager, $instanceName, $shared);
    }

    /**
     * {@inheritdoc}
     */
    public function changeParent(\Magento\Catalog\Model\Category $category, \Magento\Catalog\Model\Category $newParent, $afterCategoryId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'changeParent');
        if (!$pluginInfo) {
            return parent::changeParent($category, $newParent, $afterCategoryId);
        } else {
            return $this->___callPlugins('changeParent', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function delete($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        if (!$pluginInfo) {
            return parent::delete($object);
        } else {
            return $this->___callPlugins('delete', func_get_args(), $pluginInfo);
        }
    }
}
