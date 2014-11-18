<?php

namespace Salma\SymCartBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;

class OrdersAdmin extends Admin {

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('orderNum')

        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->add('orderNum')
                ->add('createdAt')
                ->add('status')
                ->add('total')
                ->add('_action', 'actions', array(
                    'actions' => array(
                        'show' => array(),
                        'edit' => array(),
                    )
                ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper) {
        // $query = $this->modelManager->getEntityManager('orderProducts');

        $formMapper
                ->with('User')
                ->add('user_id', 'sonata_type_model_list', array('label' => 'User Name', 'required' => true))
                ->end()
                ->with('Products')
                ->add('join_id', 'sonata_type_collection', array('label' => 'Products', 'required' => true), array(
                    'edit' => 'inline',
                    'inline' => 'table',
                    'sortable' => 'position',
                ))
                ->end()
                ->add('orderNum')
                ->add('createdAt')
                ->add('status', 'choice', array('choices' => array('Pending' => 'Pending', 'Shipped' => 'Shipped')))
                ->add('total')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper) {
        $showMapper
                ->add('orderNum')
                ->add('createdAt')
                ->add('status')
                ->add('total')
        ;
    }

   
}
