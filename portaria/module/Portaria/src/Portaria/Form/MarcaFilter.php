<?php

namespace Portaria\Form;

use Zend\InputFilter\InputFilter;
use Zend\Filter\StringTrim;
use Zend\Filter\StripTags;
use Zend\Validator\NotEmpty;
use Zend\Validator\StringLength;
use Zend\InputFilter\Input;


class MarcaFilter extends InputFilter
{
	public function __construct()
	{
		$descricao = new Input('descricao');
		$descricao->setRequired(true)
			->getFilterChain()
				->attach(new StringTrim())
				->attach(new StripTags());
		
		$descricao->getValidatorChain()->attach(new NotEmpty());
		$descricao->getValidatorChain()->attach(new StringLength(array('min'=>'2','max'=>'45')));
		$this->add($descricao);			
	}
}