<?php

namespace Portaria\Form;

use Zend\InputFilter\InputFilter;
use Zend\Filter\StringTrim;
use Zend\Filter\StripTags;
use Zend\Validator\NotEmpty;
use Zend\Validator\StringLength;
use Zend\InputFilter\Input;

class UnidadeFilter extends InputFilter
{
		
    public function __construct()
    {    	   	
    	
		$descricao = new Input('descricao');
		$descricao->setRequired(true)
			->getFilterChain()
				->attach(new StringTrim())
				->attach(new StripTags());
		
		$descricao->getValidatorChain()->attach(new NotEmpty());
		$descricao->getValidatorChain()->attach(new StringLength(array('max'=>'45')));
		$this->add($descricao);	
		
		$bloco = new Input('bloco');
		$bloco->setRequired(false);
		$this->add($bloco);
		
	}

}