<?php
namespace Magento\Theme\Model\Design\Backend\Image;

/**
 * Interceptor class for @see \Magento\Theme\Model\Design\Backend\Image
 */
class Interceptor extends \Magento\Theme\Model\Design\Backend\Image implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\App\Config\ScopeConfigInterface $config, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList, \Magento\MediaStorage\Model\File\UploaderFactory $uploaderFactory, \Magento\Config\Model\Config\Backend\File\RequestData\RequestDataInterface $requestData, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\UrlInterface $urlBuilder, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [], ?\Magento\MediaStorage\Helper\File\Storage\Database $databaseHelper = null, ?\Magento\Framework\Filesystem\Io\File $ioFile = null, ?\Magento\Framework\Filesystem\Directory\ReadFactory $tmpDirectory = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $config, $cacheTypeList, $uploaderFactory, $requestData, $filesystem, $urlBuilder, $resource, $resourceCollection, $data, $databaseHelper, $ioFile, $tmpDirectory);
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        if (!$pluginInfo) {
            return parent::afterSave();
        } else {
            return $this->___callPlugins('afterSave', func_get_args(), $pluginInfo);
        }
    }
}
