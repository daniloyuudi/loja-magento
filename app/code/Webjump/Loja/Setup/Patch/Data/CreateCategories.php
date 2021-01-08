<?php
/**
 * @author      Webjump Core Team <dev@webjump.com.br>
 * @copyright   2020 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 * @link        http://www.webjump.com.br
 */

declare(strict_types=1);

namespace Webjump\Loja\Setup\Patch\Data;

use Magento\Catalog\Helper\DefaultCategory;
use Magento\Catalog\Model\CategoryFactory;
use Magento\Catalog\Model\CategoryRepository;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Store\Model\StoreManager;

/**
 * Class CreateCategories
 *
 * @package Webjump\CategoriesAndSubcategories\Setup\Patch\Data
 */
class CreateCategories implements DataPatchInterface
{

    /**
     * @var ModuleDataSetupInterface
     */
    private $setup;

    /** @var CategoryFactory */
    private $categoryFactory;

    /** @var DefaultCategory */
    private $defaultCategoryHelper;

    /** @var CategoryRepository */
    private $categoryRepository;


    /**
     * CreateAllCategories constructor.
     *
     * @param ModuleDataSetupInterface $setup
     * @param CategoryFactory $categoryFactory
     * @param DefaultCategory $defaultCategoryHelper
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(
        ModuleDataSetupInterface $setup,
        CategoryFactory $categoryFactory,
        DefaultCategory $defaultCategoryHelper,
        CategoryRepository $categoryRepository
    ){
        $this->setup = $setup;
        $this->categoryFactory = $categoryFactory;
        $this->defaultCategoryHelper = $defaultCategoryHelper;
        $this->categoryRepository = $categoryRepository;
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
     * @inheritDoc
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     */
    public function apply(): void
    {
        $this->setup->startSetup();
        $this->createCategories($this->categoryBlusas());
        $this->createCategories($this->categoryCamisetas());
        $this->createCategories($this->categoryVestidos());
        $this->createCategories($this->categoryCanecas());
        $this->createCategories($this->categoryBonecos());
        $this->createCategories($this->categoryAlmofadas());
        $this->createCategories($this->categoryCarros());
        $this->createCategories($this->categoryFunkos());
        $this->createCategories($this->categoryQuadros());
        //$this->createCategories($this->subcategoriesOfDrCuidado());
        $this->setup->endSetup();
    }

    /**
     * Method for create all categories and subcategories
     *
     * @param array $categories
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     */
    private function createCategories(array $categories): void
    {
        foreach ($categories as $item) {
            $category = $this->categoryFactory->create();
            $category
                ->setData($item)
                ->setAttributeSetId($category->getDefaultAttributeSetId());
            $this->categoryRepository->save($category);
        }
    }

    /**
     * Method for create category Blusas
     * @return array
     */
    private function categoryBlusas(): array
    {
        $parentId = $this->defaultCategoryHelper->getId();
        $parentCategory = $this->categoryFactory->create();
        $parentCategory = $parentCategory->load($parentId);
        $categories = [];

        $categories[] = [
            'name' => 'Blusas',
            'url_key' => 'blusas',
            'is_active' => true,
            'is_anchor' => true,
            'include_in_menu' => true,
            'display_mode' => 'PRODUCTS_AND_PAGE',
            'parent_id' => $parentCategory->getId()
        ];

        return $categories;
    }

        /**
     * Method for create category Camisetas
     * @return array
     */
    private function categoryCamisetas(): array
    {
        $parentId = $this->defaultCategoryHelper->getId();
        $parentCategory = $this->categoryFactory->create();
        $parentCategory = $parentCategory->load($parentId);
        $categories = [];

        $categories[] = [
            'name' => 'Camisetas',
            'url_key' => 'camisetas',
            'is_active' => true,
            'is_anchor' => true,
            'include_in_menu' => true,
            'display_mode' => 'PRODUCTS_AND_PAGE',
            'parent_id' => $parentCategory->getId()
        ];

        return $categories;
    }

    /**
     * Method for create category Vestidos
     * @return array
     */
    private function categoryVestidos(): array
    {
        $parentId = $this->defaultCategoryHelper->getId();
        $parentCategory = $this->categoryFactory->create();
        $parentCategory = $parentCategory->load($parentId);
        $categories = [];

        $categories[] = [
            'name' => 'Vestidos',
            'url_key' => 'vestidos',
            'is_active' => true,
            'is_anchor' => true,
            'include_in_menu' => true,
            'display_mode' => 'PRODUCTS_AND_PAGE',
            'parent_id' => $parentCategory->getId()
        ];

        return $categories;
    }

    /**
     * Method for create category Canecas
     * @return array
     */
    private function categoryCanecas(): array
    {
        $parentId = $this->defaultCategoryHelper->getId();
        $parentCategory = $this->categoryFactory->create();
        $parentCategory = $parentCategory->load($parentId);
        $categories = [];

        $categories[] = [
            'name' => 'Canecas',
            'url_key' => 'canecas',
            'is_active' => true,
            'is_anchor' => true,
            'include_in_menu' => true,
            'display_mode' => 'PRODUCTS_AND_PAGE',
            'parent_id' => $parentCategory->getId()
        ];

        return $categories;
    }

    /**
     * Method for create category Bonecos
     * @return array
     */
    private function categoryBonecos(): array
    {
        $parentId = $this->defaultCategoryHelper->getId();
        $parentCategory = $this->categoryFactory->create();
        $parentCategory = $parentCategory->load($parentId);
        $categories = [];

        $categories[] = [
            'name' => 'Bonecos',
            'url_key' => 'bonecos',
            'is_active' => true,
            'is_anchor' => true,
            'include_in_menu' => true,
            'display_mode' => 'PRODUCTS_AND_PAGE',
            'parent_id' => $parentCategory->getId()
        ];

        return $categories;
    }

    /**
     * Method for create category Almofadas
     * @return array
     */
    private function categoryAlmofadas(): array
    {
        $parentId = $this->defaultCategoryHelper->getId();
        $parentCategory = $this->categoryFactory->create();
        $parentCategory = $parentCategory->load($parentId);
        $categories = [];

        $categories[] = [
            'name' => 'Almofadas',
            'url_key' => 'almofadas',
            'is_active' => true,
            'is_anchor' => true,
            'include_in_menu' => true,
            'display_mode' => 'PRODUCTS_AND_PAGE',
            'parent_id' => $parentCategory->getId()
        ];

        return $categories;
    }

    /**
     * Method for create category Carros
     * @return array
     */
    private function categoryCarros(): array
    {
        $parentId = $this->defaultCategoryHelper->getId();
        $parentCategory = $this->categoryFactory->create();
        $parentCategory = $parentCategory->load($parentId);
        $categories = [];

        $categories[] = [
            'name' => 'Carros',
            'url_key' => 'carros',
            'is_active' => true,
            'is_anchor' => true,
            'include_in_menu' => true,
            'display_mode' => 'PRODUCTS_AND_PAGE',
            'parent_id' => $parentCategory->getId()
        ];

        return $categories;
    }

    /**
     * Method for create category Almofadas
     * @return array
     */
    private function categoryFunkos(): array
    {
        $parentId = $this->defaultCategoryHelper->getId();
        $parentCategory = $this->categoryFactory->create();
        $parentCategory = $parentCategory->load($parentId);
        $categories = [];

        $categories[] = [
            'name' => 'Funkos',
            'url_key' => 'funkos',
            'is_active' => true,
            'is_anchor' => true,
            'include_in_menu' => true,
            'display_mode' => 'PRODUCTS_AND_PAGE',
            'parent_id' => $parentCategory->getId()
        ];

        return $categories;
    }

    /**
     * Method for create category Almofadas
     * @return array
     */
    private function categoryQuadros(): array
    {
        $parentId = $this->defaultCategoryHelper->getId();
        $parentCategory = $this->categoryFactory->create();
        $parentCategory = $parentCategory->load($parentId);
        $categories = [];

        $categories[] = [
            'name' => 'Quadros',
            'url_key' => 'quadros',
            'is_active' => true,
            'is_anchor' => true,
            'include_in_menu' => true,
            'display_mode' => 'PRODUCTS_AND_PAGE',
            'parent_id' => $parentCategory->getId()
        ];

        return $categories;
    }


    /**
     * Method for create subcategorie Dr. Cuidado
     *
     * @return array
     */
    private function subcategoriesOfDrCuidado(): array
    {
        $category = $this->categoryFactory->create();
        $parentCategory = $category->loadByAttribute('url_key', 'saude');
        $categories = [];

        $categories[] = [
            'name' => 'Dr. Cuidado',
            'url_key' => 'drcuidado',
            'active' => true,
            'is_anchor' => true,
            'include_in_menu' => true,
            'display_mode' => 'PRODUCTS_AND_PAGE',
            'is_active' => true,
            'parent_id' => $parentCategory->getId()
        ];

        return $categories;
    }
}
