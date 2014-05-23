<?php

namespace Salma\SymCartBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class SectionAdmin extends Admin {

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
                ->add('description')
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
       
    
      $image=$this->getSubject();

        // use $fileFieldOptions so we can add other options to the field
        $fileFieldOptions = array('required' => true);
        if ($image && ($webPath = $image->getUploadRootDir())) 
                {
            // get the container so the full path to the image can be set
            $container = $this->getConfigurationPool()->getContainer();
            $fullPath = $container->get('request')->getBasePath().'/'.$webPath.'/'.$image->getFileName();

            // add a 'help' option containing the preview's img tag
          $fileFieldOptions['help'] = '<img  width="140" height="140" src="'.$fullPath.'" class="thumbnail" />';
        }

        $formMapper
                ->add('name')
                ->add('description')
                ->add('image', 'file', $fileFieldOptions)
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper) {
        $showMapper
                ->add('name')
                ->add('description')
                ->add('image')
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
