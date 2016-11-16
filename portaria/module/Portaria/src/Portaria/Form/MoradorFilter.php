<?php

namespace Portaria\Form;

use Zend\InputFilter\InputFilter;
use Zend\Filter\StringTrim;
use Zend\Filter\StripTags;
use Zend\Validator\NotEmpty;
use Zend\Validator\StringLength;
use Zend\InputFilter\Input;

class MoradorFilter extends InputFilter
{
		
    public function __construct()
    {    	   	
    	
		$nome = new Input('nome');
		$nome->setRequired(true)
			->getFilterChain()
				->attach(new StringTrim())
				->attach(new StripTags());
		
		$nome->getValidatorChain()->attach(new NotEmpty());
		$nome->getValidatorChain()->attach(new StringLength(array('min'=>'5','max'=>'100')));
		$this->add($nome);
		
		$celular = new Input('celular');
		$celular->setRequired(false)
		->getFilterChain()
		->attach(new StringTrim())
		->attach(new StripTags());
		$this->add($celular);
		
		$datanascto = new Input('datanascto');
		$datanascto->setRequired(false)
		->getFilterChain()
		->attach(new StringTrim())
		->attach(new StripTags());
		$this->add($datanascto);
	}

}