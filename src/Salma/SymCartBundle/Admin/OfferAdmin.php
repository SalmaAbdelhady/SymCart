<?php

namespace Salma\SymCartBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class OfferAdmin extends Admin {

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('discount')
                ->add('startDate')
                ->add('endDate')
                ->add('status')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->add('product', 'sonata_type_model_list', array('label' => 'Product', 'required' => true), array(
                    'compound' => true,
                    'by_reference' => true,
                    'inline' => 'table',
                ))
                ->add('discount')
                ->add('startDate')
                ->add('endDate')
                ->add('status')
                ->add('_action', 'actions', array(
                    'actions' => array(
                        'show' => array(),
                        'edit' => array(),
                        'delete' => array(),
                    )
                ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('product', 'sonata_type_model_list', array('label' => 'Product', 'required' => true), array(
                    'compound' => true,
                    'by_reference' => true,
                    'inline' => 'table',
                ))
                ->add('discount', null, array('label' => 'Price after discount', 'required' => true))
                ->add('startDate')
                ->add('endDate')
                ->add('status', 'choice', array('choices' => array('invisible' => 'Invisible', 'visible' => 'Visible')))

        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper) {
        $showMapper
                ->add('discount')
                ->add('startDate')
                ->add('endDate')
                ->add('status')
        ;
    }

}
