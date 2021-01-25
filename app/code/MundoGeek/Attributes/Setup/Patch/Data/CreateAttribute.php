<?php

declare(strict_types=1);

namespace MundoGeek\Attributes\Setup\Patch\Data;

use Magento\Catalog\Model\Product;
use Magento\Catalog\Model\Product\Type;
use Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchRevertableInterface;
use Magento\Swatches\Model\Plugin\EavAttribute;

/**
 * Class CreateAttribute
 *
 * @property  eavAttribute
 * @package Clofem\Attributes\Setup\Patch\Data
 */

class CreateAttribute implements DataPatchInterface, PatchRevertableInterface
{
    const ATTRIBUTE_CODE = 'product_type';
    const ATTRIBUTE_ITEM = 'clofem_item';
    /**
     * @var ModuleDataSetupInterface
     */
    private ModuleDataSetupInterface $moduleDataSetup;
    /**
     * @var EavSetupFactory
     */
    private EavSetupFactory $eavSetupFactory;
    /**
     * Constructor
     *
     * @param ModuleDataSetupInterface $moduleDataSetup
     * @param EavSetupFactory $eavSetupFactory
     */
    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        EavSetupFactory $eavSetupFactory
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->eavSetupFactory = $eavSetupFactory;
    }
    /**
      * @inheritDoc
      */
    public static function getDependencies(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getAliases(): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function apply(): void
    {
        $this->moduleDataSetup->getConnection()->startSetup();
        $eavSetup = $this->eavSetupFactory->create(['setup' => $this->moduleDataSetup]);
        $productTypes = [
            Type::TYPE_SIMPLE
        ];
        $productTypes = join(',', $productTypes);
        $eavSetup->addAttribute(
            Product::ENTITY,
            'Dye',
            [
                'type' => 'text',
                'label' => 'Dye',
                'input' => 'select',
                'source' => '',
                'frontend' => '',
                'required' => false,
                'backend' => '',
                'sort_order' => '82',
                'global' => ScopedAttributeInterface::SCOPE_WEBSITE,
                'default' => null,
                'visible' => true,
                'user_defined' => true,
                'searchable' => false,
                'filterable' => false,
                'comparable' => false,
                'visible_on_front' => true,
                'unique' => false,
                'apply_to' => $productTypes,
                'group' => 'General',
                'used_in_product_listing' => false,
                'is_used_in_grid' => true,
                'is_visible_in_grid' => false,
                'is_filterable_in_grid' => false,
                'attribute_code'  => 'dye',
                'option' => [
                    'value' => [
                        'option_1' => ['Acrylic'],
                        'option_2' => ['Enamel'],
                        'option_3' => ['Epoxy'],
                        'option_4' => ['Polyurethane'],
                        'option_5' => ['Varnish'],
                        'option_6' => ['Oil'],
                        'option_7' => ['Fabric']
                    ]
                ]
            ]
        );

        $eavSetup->addAttribute(
            Product::ENTITY,
            'material',
            [
                'type' => 'text',
                'label' => 'Material',
                'input' => 'select',
                'source' => '',
                'frontend' => '',
                'required' => false,
                'backend' => '',
                'sort_order' => '83',
                'global' => ScopedAttributeInterface::SCOPE_WEBSITE,
                'default' => null,
                'visible' => true,
                'user_defined' => true,
                'searchable' => false,
                'filterable' => false,
                'comparable' => false,
                'visible_on_front' => true,
                'unique' => false,
                'apply_to' => $productTypes,
                'group' => 'General',
                'used_in_product_listing' => false,
                'is_used_in_grid' => true,
                'is_visible_in_grid' => false,
                'is_filterable_in_grid' => false,
                'attribute_code'  => 'material',
                'option' => [
                    'value' => [
                        'option_1' => ['Plaster'],
                        'option_2' => ['Synthetic resin'],
                        'option_3' => ['Plastic'],
                        'option_4' => ['Rubber'],
                        'option_5' => ['Cotton'],
                        'option_6' => ['Wood']
                    ]
                ]
            ]
        );

        $this->moduleDataSetup->getConnection()->endSetup();
    }

    public function revert()
    {
        $this->moduleDataSetup->getConnection()->startSetup();
        $eavSetup = $this->eavSetupFactory->create(['setup' => $this->moduleDataSetup]);
        $eavSetup->removeAttribute(Product::ENTITY, self::ATTRIBUTE_CODE);
        $this->moduleDataSetup->getConnection()->endSetup();
    }
}
