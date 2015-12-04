<?php
namespace Magento\Catalog\Model\Indexer\Category\Flat;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Indexer\Category\Flat
 */
class Interceptor extends \Magento\Catalog\Model\Indexer\Category\Flat implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\Indexer\Category\Flat\Action\FullFactory $fullActionFactory, \Magento\Catalog\Model\Indexer\Category\Flat\Action\RowsFactory $rowsActionFactory, \Magento\Framework\Indexer\IndexerRegistry $indexerRegistry)
    {
        $this->___init();
        parent::__construct($fullActionFactory, $rowsActionFactory, $indexerRegistry);
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
