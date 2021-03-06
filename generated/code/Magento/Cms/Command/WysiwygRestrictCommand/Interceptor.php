<?php
namespace Magento\Cms\Command\WysiwygRestrictCommand;

/**
 * Interceptor class for @see \Magento\Cms\Command\WysiwygRestrictCommand
 */
class Interceptor extends \Magento\Cms\Command\WysiwygRestrictCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Config\ConfigResource\ConfigInterface $configWriter, \Magento\Framework\App\Cache\TypeListInterface $cache)
    {
        $this->___init();
        parent::__construct($configWriter, $cache);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        if (!$pluginInfo) {
            return parent::run($input, $output);
        } else {
            return $this->___callPlugins('run', func_get_args(), $pluginInfo);
        }
    }
}
