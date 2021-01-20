<?php


namespace Clofem\Attributes\Model\Attribute\Backend;

class DataPatchAttribute extends \Magento\Eav\Model\Entity\Attribute\Backend\AbstractBackend
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
        if ( ($object->getAttributeSetId() == 10) && ($value == 'branco')) {
            throw new \Magento\Framework\Exception\LocalizedException(
                __('Bottom can not be white.')
            );
        }
        return true;
    }
}