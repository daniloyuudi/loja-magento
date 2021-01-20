<?php


namespace MundoGeek\Attributes\Model\Attribute\Backend;

class Color extends \Magento\Eav\Model\Entity\Attribute\Backend\AbstractBackend
{
    /**
     * Validate
     * @param \Magento\Catalog\Model\Product $object
     * @throws \Magento\Framework\Exception\LocalizedException
     * @return bool
     */
    public function validate($object)
    {
        $value = $object->getData($this->getAttribute()->getAttributeCode());
        if ( ($object->getAttributeSetId() == 11) && ($value == 'preto')) {
            throw new \Magento\Framework\Exception\LocalizedException(
                __('Blouse can not be black.')
            );
        }
        return true;
    }
}