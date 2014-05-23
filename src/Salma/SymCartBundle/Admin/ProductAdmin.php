<?php

namespace Salma\SymCartBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ProductAdmin extends Admin {

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('name')

        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->add('name')
                ->add('model')
                ->add('price')
                ->add('status')
                ->add('quantity')
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

        $image = $this->getSubject();

        // use $fileFieldOptions so we can add other options to the field
        $fileFieldOptions = array('required' => false);
        if ($image && ($webPath = $image->getUploadRootDir())) {
            // get the container so the full path to the image can be set
            $container = $this->getConfigurationPool()->getContainer();
            $fullPath = $container->get('request')->getBasePath() . '/' . $webPath . '/' . $image->getFileName();

            // add a 'help' option containing the preview's img tag
            $fileFieldOptions['help'] = '<img  width="140" height="140" src="' . $fullPath . '" class="thumbnail" />';
        }

        $formMapper
                ->add('section_id', 'sonata_type_model_list', array('label' => 'Section', 'required' => false), array(
                    
                    'by_reference' => true,
                    
                   
                ))
                ->add('name')
                ->add('model')
                ->add('image', 'file', $fileFieldOptions)
                ->add('price')
                ->add('features')
                ->add('specifications')
                ->add('status', 'choice', array('choices'=>array('invisible'=>'Invisible', 'visible'=>'Visible')))
                
                ->add('quantity')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper) {

        $image = $this->getSubject();

        // use $fileFieldOptions so we can add other options to the field

        if ($image && ($webPath = $image->getUploadRootDir())) {
            // get the container so the full path to the image can be set
            $container = $this->getConfigurationPool()->getContainer();
            $fullPath = $container->get('request')->getBasePath() . '/' . $webPath . '/' . $image->getFileName();

            // add a 'help' option containing the preview's img tag
            $fileFieldOptions['help'] = '<img  width="140" height="140" src="' . $fullPath . '" class="thumbnail" />';
        }
        $showMapper
                ->add('name')
                ->add('image', 'file', $fileFieldOptions)
                ->add('price')
                ->add('features')
                ->add('specifications')
                ->add('status')
                ->add('date')
                ->add('model')
                ->add('quantity')
        ;
    }

    public function prePersist($section) {
        $this->saveFile($section);
    }

    public function preUpdate($section) {
        $this->saveFile($section);
    }

    public function saveFile($section) {

        $section->upload();
    }

}
