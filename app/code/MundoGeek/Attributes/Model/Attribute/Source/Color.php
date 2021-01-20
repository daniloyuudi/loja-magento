<?php


namespace MundoGeek\Attributes\Model\Attribute\Source;

class Color extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
    /**
     * Get all options
     * @return array
     */
    public function getAllOptions()
    {
        if (!$this->_options) {
            $this->_options = [
                ['label' => __('Amarelo'), 'value' => 'amarelo'],
                ['label' => __('Azul'), 'value' => 'azul'],
                ['label' => __('Branco'), 'value' => 'branco'],
                ['label' => __('Preto'), 'value' => 'preto'],
                ['label' => __('Rosa'), 'value' => 'rosa'],
                ['label' => __('Vermelho'), 'value' => 'vermelho'],
                ['label' => __('Flores'), 'value' => 'flores'],
            ];
        }
        return $this->_options;
    }
}