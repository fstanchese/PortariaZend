<?php

namespace Portaria\Form;

use Zend\InputFilter\InputFilter;
use Zend\Filter\StringTrim;
use Zend\Filter\StripTags;
use Zend\Validator\NotEmpty;
use Zend\Validator\StringLength;
use Zend\InputFilter\Input;

class VeiculoFilter extends InputFilter
{
		
    public function __construct()
    {    	   	
    	
		$placa = new Input('placa');
		$placa->setRequired(true)
			->getFilterChain()
				->attach(new StringTrim())
				->attach(new StripTags());
		
		$placa->getValidatorChain()->attach(new NotEmpty());
		$placa->getValidatorChain()->attach(new StringLength(array('min'=>'8','max'=>'8')));
		$this->add($placa);		
	}
}