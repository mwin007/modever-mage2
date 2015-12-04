<?php
namespace Magento\Catalog\Model\Indexer\Product\Flat;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Indexer\Product\Flat
 */
class Interceptor extends \Magento\Catalog\Model\Indexer\Product\Flat implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\Indexer\Product\Flat\Action\Row $productFlatIndexerRow, \Magento\Catalog\Model\Indexer\Product\Flat\Action\Rows $productFlatIndexerRows, \Magento\Catalog\Model\Indexer\Product\Flat\Action\Full $productFlatIndexerFull)
    {
        $this->___init();
        parent::__construct($productFlatIndexerRow, $productFlatIndexerRows, $productFlatIndexerFull);
    }

    /**
     * {@inheritdoc}
     */
    public function execute($ids)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        if (!$pluginInfo) {
            return parent::execute($ids);
        } else {
            return $this->___callPlugins('execute', func_get_args(), $pluginInfo);
        }
    }
}
